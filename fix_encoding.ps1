$dir = "c:\Users\yanly\.gemini\antigravity\scratch\great-wall-furniture"
$utf8 = New-Object System.Text.UTF8Encoding($false)

$files = Get-ChildItem -Path $dir -Recurse -Include *.php, *.js
foreach ($file in $files) {
    $content = [System.IO.File]::ReadAllText($file.FullName, $utf8)
    $original = $content
    $content = $content.Replace('ðŸ”¥', '🔥')
    $content = $content.Replace('âš¡', '⚡')
    $content = $content.Replace('â˜…', '★')
    $content = $content.Replace('â˜†', '☆')
    $content = $content.Replace('âœ“', '✓')
    $content = $content.Replace('ðŸ ¢', '🏢')
    $content = $content.Replace('ðŸ›‹ï¸ ', '🛋️')
    $content = $content.Replace('â€¢', '•')
    $content = $content.Replace('â€', '”')
    $content = $content.Replace('â€œ', '“')
    $content = $content.Replace('â€™', '’')
    
    if ($content -cne $original) {
        [System.IO.File]::WriteAllText($file.FullName, $content, $utf8)
        Write-Host "Fixed encoding in $($file.Name)"
    }
}
Write-Host "Done"
