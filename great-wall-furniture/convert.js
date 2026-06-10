const fs = require('fs');
const path = require('path');

const dir = 'c:/Users/yanly/.gemini/antigravity/scratch/great-wall-furniture';
const files = fs.readdirSync(dir).filter(f => f.endsWith('.html'));

files.forEach(file => {
    let content = fs.readFileSync(path.join(dir, file), 'utf8');
    
    // Replace asset paths
    content = content.replace(/(href|src)="((images|css|js|assets)\/[^"]+)"/g, '$1="<?php echo get_template_directory_uri(); ?>/$2"');
    
    // Replace html links
    content = content.replace(/href="([^"]+)\.html([^"]*)"/g, (match, p1, p2) => {
        if (p1 === 'index') {
            return `href="<?php echo home_url('/'); ?>"`;
        }
        return `href="<?php echo home_url('/' . '${p1}' . '/'); ?>${p2}"`;
    });

    let newName = file === 'index.html' ? 'index.php' : `page-${file.replace('.html', '.php')}`;
    
    if (file !== 'index.html') {
        const title = file.replace('.html', '').split('-').map(w => w.charAt(0).toUpperCase() + w.slice(1)).join(' ');
        content = `<?php /* Template Name: ${title} */ ?>\n` + content;
    }

    fs.writeFileSync(path.join(dir, newName), content);
    fs.unlinkSync(path.join(dir, file));
    console.log(`Converted ${file} to ${newName}`);
});
