$dir = "c:\Users\yanly\.gemini\antigravity\scratch\great-wall-furniture"

# Fix functions.php for routing
$functionsPath = Join-Path $dir "functions.php"
$functionsContent = Get-Content $functionsPath -Raw
if ($functionsContent -notmatch "template_redirect") {
    $routingCode = @"

// Custom routing for static pages
add_action('template_redirect', function() {
    `$uri = trim(parse_url(`$_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    // Remove wordpress subdirectory if installed in a subfolder
    `$uri = preg_replace('/^.*?wp-content/', 'wp-content', `$uri); 
    // Actually simpler: just match the end of the URI
    `$pages = ['contact', 'products', 'portfolio', 'checkout', 'product-detail'];
    foreach (`$pages as `$p) {
        if (preg_match("/\b`$p\/?`$/", `$uri)) {
            `$template = locate_template("page-`$p.php");
            if (`$template) {
                include(`$template);
                exit;
            }
        }
    }
});
"@
    $functionsContent = str_replace("?>", "", $functionsContent) # Remove trailing ?>
    $functionsContent += $routingCode
    Set-Content -Path $functionsPath -Value $functionsContent -Encoding UTF8
}

# Fix Encoding in all files
$filesToFix = Get-ChildItem -Path $dir -Recurse -Include *.php, *.js
foreach ($file in $filesToFix) {
    $content = Get-Content $file.FullName -Raw

    $original = $content
    $content = $content.Replace("âš¡", "⚡")
    $content = $content.Replace("â…", "★")
    $content = $content.Replace("â†", "☆")
    $content = $content.Replace("âœ“", "✓")
    $content = $content.Replace("â˜…", "★")
    $content = $content.Replace("â˜†", "☆")
    $content = $content.Replace("â¯", "🛋️")
    $content = $content.Replace("ðŸ¢", "🏢")
    $content = $content.Replace("ðŸ›‹ï¸", "🛋️")
    $content = $content.Replace("â€¢", "•")
    $content = $content.Replace("â€", "”")
    $content = $content.Replace("â€œ", "“")
    $content = $content.Replace("â€™", "’")

    if ($original -ne $content) {
        Set-Content -Path $file.FullName -Value $content -Encoding UTF8
        Write-Host "Fixed encoding in $($file.Name)"
    }
}

# Also fix app.js links
$appJsPath = Join-Path $dir "js\app.js"
if (Test-Path $appJsPath) {
    $appJsContent = Get-Content $appJsPath -Raw
    # replace checkout.html with /checkout/
    $appJsContent = [regex]::Replace($appJsContent, 'checkout\.html', '/checkout/')
    Set-Content -Path $appJsPath -Value $appJsContent -Encoding UTF8
}

Write-Host "Done."
