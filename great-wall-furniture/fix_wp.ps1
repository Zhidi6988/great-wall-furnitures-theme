$dir = "c:\Users\yanly\.gemini\antigravity\scratch\great-wall-furniture"

$headInjection = "<script>window.themeUrl = '<?php echo get_template_directory_uri(); ?>';</script>`n<?php wp_head(); ?>`n</head>"
$footerInjection = "<?php wp_footer(); ?>`n</body>"

# Fix all php files to have wp_head and wp_footer
$phpFiles = Get-ChildItem -Path $dir -Filter "*.php"
foreach ($file in $phpFiles) {
    if ($file.Name -ne "functions.php") {
        $content = Get-Content $file.FullName -Raw
        
        if ($content -match "</head>" -and $content -notmatch "wp_head") {
            $content = $content -replace "</head>", $headInjection
        }
        if ($content -match "</body>" -and $content -notmatch "wp_footer") {
            $content = $content -replace "</body>", $footerInjection
        }
        Set-Content -Path $file.FullName -Value $content -Encoding UTF8
    }
}

# Fix app.js
$appJsPath = Join-Path $dir "js\app.js"
if (Test-Path $appJsPath) {
    $appJsContent = Get-Content $appJsPath -Raw

    # 1. Fix src="images/..." inside backtick template literals
    $appJsContent = [regex]::Replace($appJsContent, 'src="images/', 'src="${window.themeUrl}/images/')
    
    # 2. Fix standard string literals like "images/..." or 'images/...'
    $appJsContent = [regex]::Replace($appJsContent, '(["''])images/', 'window.themeUrl + $1/images/')

    Set-Content -Path $appJsPath -Value $appJsContent -Encoding UTF8
}

Write-Host "Fixes applied."
