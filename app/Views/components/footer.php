<style>
    footer .socialBtn:hover {
        scale: 0.90;
        background: var(--bs-white) !important;
        color: var(--color-thirdly);
    }
</style>
<footer>
    <div class="bg-thirdly">
        <div class="border-bottom border-white-50">
            <div class="py-5 container-lg">
                <div class="row row-gap-5 justify-content-between py-4">
                    <div class="col-md-6 col-lg-4">
                        <a class="d-block mb-4" href="#" style="width: 170px;">
                            <img src="<?=$footer["about"]["logo"] ?>" alt="" class="w-100">
                        </a>
                        <p class="mb-4 text-white"><?=$footer["about"]["text"] ?></p>
                        <div class="flex-middle gap-2 gap-md-3">
                            <?php foreach($footer["about"]["socials"] as $item): if($item == "") {continue;} ?>
                                <a href="<?=$item["link"] ?>" target="_blank" class="text-decoration-none">
                                    <button class="box border-0 socialBtn bg-warning text-thirdly" style="font-size: 1.1rem; --size: 2.7rem;"><i class="fa-brands fa-<?=$item["icon"] ?>"></i></button>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2 ps-lg-4">
                        <h2 class="mb-4 mb-lg-5 text-warning h6"><?=$footer["links"]["title"] ?></h2>
                        <ul class="list-unstyled mb-0 flex-column gap-1 gap-md-2">
                            <?php foreach($footer["links"]["links"] as $item): if($item == "") {continue;} ?>
                            <li><a href="<?=$item["link"] ?>" class="link-white"><?=$item["text"] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">
                        <h2 class="mb-4 mb-lg-5 text-warning h6"><?=$footer["map"]["title"] ?></h2>
                        <div class="w-100 rounded-0" style="height: 11rem">
                            <iframe src="<?=$footer["map"]["embed_url"] ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ps-lg-3">
                        <h2 class="mb-4 mb-lg-5 text-warning h6"><?=$footer["contacts"]["title"] ?></h2>
                        <ul class="list-unstyled flex-column gap-3 mb-0">
                            <li>
                                <div class="d-flex gap-2 gap-md-3">
                                    <div style="min-width: 1.3rem;"><i class="fa-solid fa-envelope fs-5 text-warning"></i></div>
                                    <div class="text-white">
                                        <h3 class="mb-2 fw-400" style="font-size: 1.05rem"><?=$footer["contacts"]["mail_text"] ?></h3>
                                        <a href="mailto:<?=$footer["contacts"]["mail_address"] ?>" class="link-white fw-700"><?=$footer["contacts"]["mail_address"] ?></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex gap-2 gap-md-3">
                                    <div style="min-width: 1.3rem;"><i class="fa-solid fa-location-dot fs-5 text-warning"></i></div>
                                    <div class="text-white">
                                        <h3 class="mb-2 fw-400" style="font-size: 1.05rem"><?=$footer["contacts"]["location_text"] ?></h3>
                                        <a href="<?=$footer["contacts"]["location_url"] ?>" class="link-white fw-700"><?=$footer["contacts"]["location"] ?></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex gap-2 gap-md-3">
                                    <div style="min-width: 1.3rem;"><i class="fa-solid fa-phone text-warning"></i></div>
                                    <div class="text-white">
                                        <h3 class="mb-2 fw-400" style="font-size: 1.05rem"><?=$footer["contacts"]["mobile_text"] ?></h3>
                                        <a href="tel:<?=$footer["contacts"]["mobile"] ?>" class="link-white fw-700"><?=$footer["contacts"]["mobile"] ?></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <div class="flex-middle-between flex-wrap overflow-hidden justify-content-center justify-content-sm-between text-center text-lg-start gap-2">
                <div>
                    <a href="<?=base_url() ?>" class="link-white"><?=$footer["bottom"] ?></a>
                </div>
                <div class="" style="--fa-animation-duration: 1.1s;">
                    <a href="https://www.digitalmakers.in/" class="link-white">Made With <i class="fa-solid fa-heart fa-beat px-1 text-danger"></i> By DigitalMakers.in</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?=base_url() ?>public/js/aos.js"></script>
<?=$this->include("components/bootstrap-js-min") ?>
<script>
    AOS.init({
        // disable: true,
        startEvent: 'DOMContentLoaded', 
        offset: 0, 
        throttleDelay: 300, 
        duration: 500, // values from 0 to 3000, with step 50ms
        easing: 'ease',
        // delay: 200,
    });
</script>