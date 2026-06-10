$dir = "c:\Users\yanly\.gemini\antigravity\scratch\great-wall-furniture"
$files = Get-ChildItem -Path $dir -Filter "*.html"

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw

    # Replace asset paths
    $content = [regex]::Replace($content, '(href|src)="((images|css|js|assets)/[^"]+)"', '$1="<?php echo get_template_directory_uri(); ?>/$2"')

    # Replace html links
    $content = [regex]::Replace($content, 'href="([^"]+)\.html([^"]*)"', {
        param($match)
        $p1 = $match.Groups[1].Value
        $p2 = $match.Groups[2].Value
        if ($p1 -eq 'index') {
            return 'href="<?php echo home_url(''/''); ?>"'
        }
        return 'href="<?php echo home_url(''/' + $p1 + '/''); ?>' + $p2 + '"'
    })

    if ($file.Name -eq "index.html") {
        $newName = "index.php"
    } else {
        $newName = "page-" + $file.Name.Replace(".html", ".php")
        $title = $file.Name.Replace(".html", "").Replace("-", " ")
        $content = "<?php /* Template Name: $title */ ?>`n" + $content
    }

    $newPath = Join-Path $dir $newName
    Set-Content -Path $newPath -Value $content -Encoding UTF8
    Remove-Item $file.FullName
    Write-Host "Converted $($file.Name) to $newName"
}
