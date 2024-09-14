<style>
    @media (max-width: 768px) {
        :root {
            #pageTitle {
                font-size: 2.1rem !important;
            }
        }
    }
</style>
<header id="pageTopHeader" class="parallax" style="--image: url(<?=$body["page_heading"]["background_image"] ?>); --mask: #184341a8;">
    <?=$this->include("components/header") ?>
    <div id="page_heading" class="container py-5 my-4">
        <div class="row justify-content-center py-2 py-md-4 my-3">
            <div class="col-12 text-white text-center pb-5">
                <h2 id="pageTitle" data-aos="fade-up" class="text-center mb-2 mb-lg-3 h1 fw-800 text-white" style="font-size: 2.5rem;"><?=$body["page_heading"]["title"] ?></h2>
                <div data-aos="fade" class="flex-middle-center gap-2">
                    <span><?=$body["page_heading"]["from"] ?></span>
                    <span class="material-symbols-sharp text-warning">arrow_forward_ios</span>
                    <span><?=$body["page_heading"]["to"] ?></span>
                </div>
            </div>
        </div>
    </div>
</header>