<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?=$head['title'] ?></title>
<meta name="author" content="DigitalMakers.in">
<meta name="description" content="<?=$head['description'] ?>">
<meta name="keywords" content="<?=$head['keywords'] ?>">

<?php if(!isset($custom_canonical) || $custom_canonical != true): ?>
  <link rel="canonical" href="<?=base_url(uri_string()); ?>">
<?php endif; ?>

<!-- Open Graph / Facebook -->
<meta property="og:locale" content="en_US" />
<meta property="og:locale:alternate" content="hi_IN" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?= base_url('public/favicon-192x192.png') ?>" />
<meta property="og:url" content="<?=base_url(uri_string()); ?>" />
<meta property="og:title" content="<?=$head['title'] ?>" />
<meta property="og:site_name" content="Digital Makers" />
<meta property="og:description" content="<?=$head['description'] ?>" />

<!-- Twitter -->
<meta name="twitter:image" content="<?= base_url('public/favicon-192x192.png') ?>" />
<meta name="twitter:site" content="@DigitalMakersIndia" />
<meta name="twitter:title" content="<?=$head['title'] ?>" />
<meta name="twitter:description" content="<?=$head['description'] ?>" />
<meta name="twitter:image" content="<?= base_url('public/favicon-192x192.png') ?>" />

<!-- Robots -->
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />

<!-- Schema.org for Google -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Digital Makers",
  "url": "<?= base_url(uri_string()) ?>",
  "author": {
    "@type": "Organization",
    "name": "DigitalMakers.in"
  },
  "description": "<?=$head['description'] ?>",
  "image": "<?= base_url('public/favicon-192x192.png') ?>"
}
</script>

<!-- Favicons -->
<link rel="icon" href="<?= base_url('public/favicon.ico') ?>" type="image/x-icon">
<meta name="msapplication-TileColor" content="#0d6efd">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

<!-- Google Tag Manager -->
<?php if(!getenv('SITE_TYPE') == 'local'): ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-G0M5HS3SNX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-G0M5HS3SNX');
  </script>
<?php endif; ?>

<?=$this->include("components/bootstrap-css-min") ?>
<?=$this->include("components/utils") ?> 

<style id="head">
    * {
        box-sizing: border-box;
        scroll-behavior: smooth;
        font-family: "Open Sans", sans-serif;
        transition: var(--transition);
        -webkit-font-smoothing: subpixel-antialiased; 
    }
    ::selection {
        background: var(--selection-bg);
        color: var(--selection-color);
    }
    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
      margin-top: 0;
      margin-bottom: 0.9rem;
      font-weight: 600;
      line-height: 1.2;
    }
    p {
      margin-bottom: 0.9rem;
    }
    .link-white {
      color: var(--bs-white);
      text-decoration: none;
    }
    .link-white:hover {
      color: var(--bs-warning);
    }
    .link-warning {
      color: var(--bs-warning) !important;
      text-decoration: none;
    }
    .link-warning:hover {
      color: var(--bs-white) !important;
    }
    .text-styled {
      color: var(--bs-warning);
    }
    /* [data-aos] {
      overflow: hidden;
    } */
    @media (min-width: 1400px) {
       .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
           max-width: 1220px;
       }
     }
    @media (max-width: 576px) {
      html {
        font-size: 15px !important;
      }
    }
</style>
