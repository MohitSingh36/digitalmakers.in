<?php
// echo "<pre>";
//     print_r($header_parent);
//     exit;
  $top_bar = $header_parent["top_bar"];
  $header = $header_parent["header"];
?>
<div>


  <section data-aos="fade-down" id="topbar" class="container-fluid border-bottom border-white-50 d-none d-md-block">
      <div class="container">
          <div class="flex-middle-between gap-2">
              <div class="flex-middle gap-3 py-2">
                  <?php foreach($top_bar["socials"] as $item): if($item["link"] == "") {continue;} ?>
                      <a href="<?=$item["link"] ?>" class="text-warning hover-text-white"><i class="fa-brands fa-<?=$item["icon"] ?>"></i></a>
                  <?php endforeach; ?>
              </div>
              <div class="rightSide flex-middle">
                  <a href="<?=$top_bar["location"]["link"] ?>" class="flex-middle py-2 gap-2 pe-3 border-end border-white-50 vertical-middle text-white text-decoration-none">
                      <i class="<?=$top_bar["location"]["icon"] ?> fa-sm text-warning"></i>
                      <span><?=$top_bar["location"]["text"] ?></span>
                  </a>
                  <a href="<?=$top_bar["mail"]["link"] ?>" class="flex-middle py-2 gap-2 ps-3 vertical-middle text-white text-decoration-none">
                      <i class="<?=$top_bar["mail"]["icon"] ?> fa-sm text-warning"></i>
                      <span><?=$top_bar["mail"]["text"] ?></span>
                  </a>
              </div>
          </div>
      </div>
  </section>
</div>
<div class="overflow-hiddens">
  <nav class="navbar py-2 py-lg-3" data-bs-theme="dark">
  <style>
      /* header [data-aos] {
        overflow: hidden;
      } */
      .navbar {
        --bs-nav-link-color: var(--bs-white);
        --bs-nav-link-font-weight: 600;
        --bs-navbar-toggler-font-size: 1.65rem;
        
      }
      .offcanvas, .offcanvas-lg, .offcanvas-md, .offcanvas-sm, .offcanvas-xl, .offcanvas-xxl {
        --bs-offcanvas-bg: var(--color-thirdly);
        --bs-offcanvas-width: 300px;
      }
      [data-bs-theme=dark] .navbar-toggler-icon {
        --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23FFB400' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }
      .navbar .nav-link {
        text-shadow: 0 0 3px var(--color-thirdly);
      }
      .navbar .nav-link:hover, 
      .navbar .nav-link.active {
          color: var(--bs-warning);
      }
      .nav-link:focus, .nav-link:hover {
        color: var(--bs-warning);
      }
      .offcanvas .nav-link {
        padding: 0;
      }
      @media (max-width: 576px) {
        #topLogo {
          width: 140px !important;
        }
      }
  </style>
    <div data-aos="fade-down" class="container">
      <a id="topLogo" class="navbar-brand" href="<?=$header["logo_link"] ?>" style="width: 170px;">
          <img src="<?=$header["logo"] ?>" alt="" class="w-100">
      </a>
      <button class="navbar-toggler d-lg-none p-0 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="list-unstyled flex-middle gap-4 gap-xl-5 d-none d-lg-flex">
          <?php foreach($header["links"] as $item): if($item["link"] == "") {continue;} ?>
              <li class="nav-item">
                  <a href="<?=$item["link"] ?>" class="nav-link text-capitalize <?=$body["page_nav_title"] == $item["text"] ? "active" : "" ?>"><?=$item["text"] ?></a>
              </li>
          <?php endforeach; ?>
      </ul>
      <a href="<?=$header["btn"]["link"] ?>" class="btn-theme d-none d-lg-flex"><?=$header["btn"]["text"] ?></a>
    </div>
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header px-4 py-3 border-bottom border-white-50">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
          <a class="navbar-brand d-block" href="<?=$header["logo_link"] ?>" style="width: 130px;">
              <img src="<?=$header["logo"] ?>" alt="" class="w-100">
          </a>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body px-4 py-3">
        <ul class="navbar-nav justify-content-end flex-column gap-3 flex-grow-1" style="font-size: 1.1rem;">
          <?php foreach($header["links"] as $item): if($item["link"] == "") {continue;} ?>
              <li class="nav-item">
                  <a href="<?=$item["link"] ?>" class="nav-link flex-middle-between gap-2 text-capitalize <?=$body["page_nav_title"] == $item["text"] ? "active" : "" ?> <?=$body["page_nav_title"] == $item["text"] ? 'aria-current="page"' : "" ?>">
                    <span><?=$item["text"] ?></span>
                    <span><i class="fa-solid fa-arrow-right fa-sm"></i></span>
                  </a>
              </li>
          <?php endforeach; ?>
          <a href="<?=$header["btn"]["link"] ?>" class="btn-theme mt-3"><?=$header["btn"]["text"] ?></a>
        </ul>
      </div>
    </div>
  </nav>

</div>