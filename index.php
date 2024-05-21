<?php

function feedback404()
{
  header("HTTP/1.0 404 Not Found");
  echo "<!doctype html>";
  echo "<html class='no-js' lang='en'>";
  echo "<head>";
  echo "<meta charset='utf-8'>";
  echo "<title>404 Not Found</title>";
  echo "</head>";
  echo "<body>";
  echo "<h1><strong>Not Found</strong></h1>";
  echo "<p>The requested URL was not found on this server.</p>";
  echo "</body>";
  echo "</html>";
  exit(); 
}
if (isset($_GET['link'])) {
    $filename = "merk.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['link']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="<?= $BRANDS;?>">
    <meta name="description" content="Situs togel online terercaya hanya di <?= $BRANDS?>. Karena kami itu memberikan layanan cotumer service yang terbaik.">
    <meta name="og:description" content="Situs togel online terercaya hanya di <?= $BRANDS?>. Karena kami itu memberikan layanan cotumer service yang terbaik.">
    <meta name="keywords" content="<?= $BRANDS?> | Situs togel terpercaya di indonesia.">
    <title><?= $BRANDS;?> 🉐 Situs Togel Online Terpercaya Di Indonesia</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Mantan Seo">
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/1llsion/imgAmp/main/logo-header.jpeg" type="image/x-icon">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Mantan Seo"
}
</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="<?= $BRANDS;?> 🉐 Situs Togel Online Terpercaya Di Indonesia">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page-title="<?= $BRANDS;?>" data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-f6b4"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="https://rebrand.ly/mantanseo" style="padding: 14px 68px;">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="https://rebrand.ly/mantanseo" style="padding: 14px 65px 14px 68px;">Daftar</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="https://rebrand.ly/mantanseo">Daftar</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <h3 class="u-text u-text-custom-color-1 u-text-1"><?= $BRANDS;?></h3>
      </div></header>
    <section class="skrollable skrollable-between u-align-left u-clearfix u-image u-section-1" id="carousel_8403" src="" data-image-width="1980" data-image-height="1322">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-expanded-height-lg u-image u-image-1" src="images/banner-bali.jpeg" data-image-width="1024" data-image-height="1024">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-palette-2-base u-text-1"><?= $BRANDS;?></h2>
        <p class="u-align-left-md u-align-left-sm u-align-left-xs u-large-text u-text u-text-body-alt-color u-text-variant u-text-2">Situs slot gacor no rungkad hanya di <?= $BRANDS;?>. Kami banyaak memberikan promosi dan claim member untuk mendapatkan saldo tambahan dari kami agar mendapatkan jackpot paling besar. Dan kami juga sering memberikan bocoran untuk semua pemain.<br>
        </p>
        <div class="custom-expanded data-layout-selected u-align-left u-clearfix u-layout-custom-sm u-layout-custom-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-25-lg u-size-25-md u-size-25-xl u-size-30-sm u-size-60-xs u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <a href="https://rebrand.ly/mantanseo" class="u-active-white u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-white u-radius-5 u-btn-2">Login </a>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30-sm u-size-35-lg u-size-35-md u-size-35-xl u-size-60-xs u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <a href="https://rebrand.ly/mantanseo" class="u-border-2 u-border-palette-2-base u-btn u-btn-round u-button-style u-palette-2-base u-radius-5 u-btn-3">Daftar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-0fb6"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">@ Powered by Mantan Seo</p>
      </div></footer>
</body></html>