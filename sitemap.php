<?php
header("Content-Type: application/xml; charset=utf-8");

$site_url = "https://lindomarcosta.adv.br";

// Lista de páginas
$pages = [
    "/",
    "/sobre",
    "/areas",
    "/contato"
];

// Data de última modificação (sempre hoje)
$lastmod = date("Y-m-d");

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $page): ?>
  <url>
    <loc><?= $site_url . $page ?></loc>
    <lastmod><?= $lastmod ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority><?= $page === "/" ? "1.0" : "0.8" ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
