<style id="commonCSS">
    :root {
        --color-thirdly: #184341;
        --color-fourthly: #e9e9e9;
        --transition: 300ms ease;
        --scrollbar-track-bg: transparent;
        --scrollbar-track-bg-hover: #18434110;
        --scrollbar-track-border-radius: 0;
        --scrollbar-track-box-shadow: inset 0 0 3px rgba(0,0,0,0.3);
        --scrollbar-thumb-border-radius: 0;
        --scrollbar-thumb-bg: #FFB40040;
        --scrollbar-thumb-bg-hover: var(--bs-warning);
        --selection-bg: var(--bs-primary);
        --selection-color: var(--bs-white);
        --bs-yellow: #FFB400;
        --bs-warning: #ffb400;
        --bs-warning-rgb: 255,180,0;
        --section-title-fs: 2.5rem;
    }
    /* ======= utils ======= */
    .section-title {
        font-size: var(--section-title-fs);
        color: var(--color-thirdly);
        font-weight: 800;
        max-width: 100%;
    }
    .section-title.centered {
        margin-left: auto;
        margin-right: auto;
        width: 400px;
        max-width: 100%;
    }
    .section-subtitle {
        color: var(--bs-warning);
        font-size: 1rem;
        font-weight: 600;
        text-transform: uppercase;
    }
    .section-heading-centerd {
        margin-left: auto;
        margin-right: auto;
        width: 700px;
        max-width: 100%;
        text-align: center;
    }
    ::-webkit-scrollbar {
        width: 0.4rem;
        height: 0.4rem;
    }
    ::-webkit-scrollbar-track {
        background: var(--scrollbar-track-bg);
        border-radius: var(--scrollbar-track-border-radius);
        box-shadow: var(--scrollbar-track-box-shadow);
    }
    ::-webkit-scrollbar-track:hover {
        background: var(--scrollbar-track-bg-hover);
    }
    ::-webkit-scrollbar-thumb {
        background: var(--scrollbar-thumb-bg);
        border-radius: var(--scrollbar-thumb-border-radius);
        box-shadow: var(--scrollbar-thumb-box-shadow);
    }
    ::-webkit-scrollbar-thumb:hover {
        background: var(--scrollbar-thumb-bg-hover);
    }
    ::-webkit-scrollbbar-corner {
        display: none;
        background: var(--scrollbar-corner-bg);
    }
    .scrollbar-hover-show::-webkit-scrollbar {
        transition: var(--scrollbar-transition);
        visibility: hidden;
    }
    .scrollbar-hover-show:hover::-webkit-scrollbar {
        visibility: unset;
    }
    .material-icons, 
    .material-symbols-outlined, 
    .material-symbols-sharp {
        font-size: unset;
    }
    .scrollbar-width-none {
        scrollbar-width: none;
    }
    .w-fit-content {
        width: fit-content !important;
    }
    .w-300 {
        width: 400px;
    }
    .flex-column {
        display: flex;
        flex-direction: column !important;
    }
    input:focus {
        outline: none;
    }
    a,button,.cursor-pointer,.click {
        user-select: none;
    }
    img {
        object-fit: cover;
    }
    /* Hide the up and down caret */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .transition {
        transition: 150ms ease;
    }
    .transition-none {
        transition: none !important;
    }
    .touch-hide {
        -webkit-tap-highlight-color: transparent; /* For iOS Safari */
        -webkit-touch-callout: none; /* Disable long press menu for links */
    }
    .resize-none {
        resize: none !important;
    }
    .bg-attachment-unset {
        background-attachment: unset !important;
    }
    .bg-thirdly {
        background-color: var(--color-thirdly);
    }
    .bg-fourthly {
        background-color: var(--color-fourthly);
    }
    .box {
        --size: 3.2rem;
        max-width: var(--size);
        max-height: var(--size);
        min-width: var(--size);
        min-height: var(--size);
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        border-radius: 50%;
    }
    .rectangle {
        --size: 136px;
        max-width: var(--size);
        min-width: var(--size);
        height: fit-content;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .a-btn {
        display: block;
        width: fit-content;
    }
    .cursor-pointer {
        cursor: pointer;
    }
    .text-truncate {
        --lines: 2;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: var(--lines);
        -webkit-box-orient: vertical;
    }
    .text-start {
        text-align: start;
    }
    .text-center {
        text-align: center;
    }
    .text-end {
        text-align: end;
    }
    .text-justify {
        text-align: justify;
    }
    .text-uppercase {
        text-transform: uppercase;
    }
    .text-nowrap {
        text-wrap: nowrap;
    }
    .text-ellipsis {
        text-overflow: ellipsis;
    }
    .text-thirdly {
        color: var(--color-thirdly);
    }
    .text-warning-hover:hover {
        color: var(--bs-warning);
    }
    .text-stroke-1 {
        -webkit-text-stroke: 1px;
        text-shadow: 
        1px 1px 0,
        -1px 1px 0,
    }
    .rounded-circle {
        border-radius: 50%;
    }
    .folder, .folder-content {
        overflow: hidden;
    }
    .folder-caret {
        transition: 200ms;
    }
    .folder-content {
        transition: 200ms;
    }
    .folder.active .folder-caret {
        rotate: 180deg;
    }
    .flipX {
        transform: scaleX(-1);
    }
    .position-relative {
        position: relative !important;
    }
    .position-absolute {
        position: absolute !important;
    }
    .position-fixed {
        position: fixed!important;
    }
    .top-0 {
      top: 0 !important;
    }
    .end-0 {
        right: 0 !important;
    }
    .btn-theme {
        border: none;
        transition: var(--transition);
        border-radius: 0;
        padding: 0.8rem 2.5rem;
        font-weight: 600 !important;
        text-decoration: none;
        display: flex;
        background-color: var(--bs-warning);
        color: var(--color-thirdly);
        text-align: center;
        justify-content: center;
    }
    .btn-theme:hover {
        background-color: var(--bs-white);
        color: var(--color-thirdly);
    }
    .btn-theme.hover-thirdly:hover {
        background-color: var(--color-thirdly);
        color: var(--bs-white);
    }
    .btn-theme-2 {
        background-color: var(--color-thirdly);
        color: var(--bs-white);
    }
    .btn-theme-2:hover {
        background-color: var(--bs-warning);
        color: var(--color-thirdly);
    }
    .btn-theme-outline {
        border: 1px solid var(--bs-warning);
        color: var(--color-thirdly);
        background: none;
    }
    .btn-blog {
        font-size: 1.1rem;
        border-radius: 10px !important;
    }
    .close-btn-popup {
        position: absolute;
        top: -2rem;
        right: 0;
        /* background-color: var(--bs-white); */
        color: var(--bs-white);
    }
    .cursor-close {
        cursor: var(--cursor-close), auto;
    }
    .cursor-pointer {
        cursor: pointer;
    }
    .cursor-grab {
        cursor: grab;
    }
    .cursor-grab:active {
        cursor: grabbing;
    }
    /* .form-select, 
    .form-control {
        border: none;
        border-radius: 0;
        padding: 0.8rem .75rem;
        background-color: var(--color-fourthly);
    }
    .form-select:focus, 
    .form-control:focus {
        background-color: var(--color-fourthly);
        box-shadow: none !important;
    }
    textarea.form-control {
        resize: vertical;
    }
    .form-check-input,  */
    select, option {
        cursor: pointer;
    }
    .form-check-label {
        cursor: pointer !important;
    }
    .backdrop-mask {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: var(--backdrop-mask-bg);
        translate: 0 100%;
        backdrop-filter: var(--backdrop-mask-backdrop-filter);
    }
    .max-w-100 {
        max-width: 100%;
    }
    .border-0 {
        border: none !important;
    }
    .border-white-50 {
        border-color: #FFFFFF21 !important;
    }
    .shadow-none {
        box-shadow: none !important;
    }
    .user-select-none {
        user-select: none !important;
    }
    .scroll-progress {
        --scroll-progress: 0%;
        --scroll-progress-bar-height: 2px;
        width: 100%;
        height: 0px;
        background: var(--scroll-progress-bg);
        position: absolute;
        top: 0;
        z-index: inherit;
        transition: 500ms ease;
    }
    .scroll-progress::before {
        content: "";
        position: absolute;
        width: var(--scroll-progress);
        height: var(--scroll-progress-bar-height);
        background: var(--scroll-progress-bar-bg);
    }
    .parallax {
        --image: url("<?=base_url() ?>"public/images/thumbnail.webp);
        --mask: rgba(0,0,0,0.4);
        background: linear-gradient(var(--mask), var(--mask)), var(--image) no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }
    .flex-middle {
        display: flex;
        align-items: center;
    }
    .flex-center {
        display: flex;
        justify-content: center;
    }
    .flex-between {
        display: flex;
        justify-content: space-between;
    }
    .flex-center-between {
        display: flex;
        align-items: center;
        justify-content: space-between;    
    }
    .flex-end-between {
        display: flex;
        align-items: end;
        justify-content: space-between;    
    }
    .flex-middle-center {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .flex-middle-between {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .flex-middle-end {
        display: flex;
        align-items: center;
        justify-content: end;
    }
    .flex-column-between {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .flex-column-middle-center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .flex-column-middle-between {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
    }
    .flex-column-end-center {
        display: flex;
        flex-direction: column;
        align-items: end;
        justify-content: center;
    }
    .flex-column-end-between {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: space-between;    
    }
    .flex-top {
        display: flex;
        align-items: center;
    }
    /* .flex-justify-center {
        display: flex;
        align-items: center;
    } */
    .fw-100 {
        font-weight: 100 !important;
    }
    .fw-200 {
        font-weight: 200 !important;
    }
    .fw-300 {
        font-weight: 300 !important;
    }
    .fw-400 {
        font-weight: 400 !important;
    }
    .fw-500 {
        font-weight: 500 !important;
    }
    .fw-600 {
        font-weight: 600 !important;
    }
    .fw-700 {
        font-weight: 700 !important;
    }
    .fw-800 {
        font-weight: 800 !important;
    }
    .fw-900 {
        font-weight: 900 !important;
    }
    .opacity-0 {
        opacity: 0;
        transition: opacity 200ms ease-in-out;
    }
    .opacity-1 {
        opacity: 1;
    }
    .hover-underline:hover {
        text-decoration: underline;
    }
    .hover-text-white:hover {
        color: var(--bs-white) !important;
    }
    .submit-btn.submitting {
        pointer-events: none;
    }
    .submit-btn .submit-btn-loader {
        display: none;
    }
    .submit-btn.submitting .submit-btn-loader {
        display: block;
    }
    .submit-btn.submitting .submit-btn-icon {
        display: none;
    }
    .vertical-middle {
        vertical-align: middle;
    }
    .likeBtn .like {
        display: block;
    }
    .likeBtn .liked {
        display: none;
    }
    .likeBtn.liked .like {
        display: none;
    }
    .likeBtn.liked .liked {
        display: block;
        animation: liked 700ms ease;
    }
    .fs-14px {
        font-size: 14px;
    }
    .fs-1\.05rem {
        font-size: 1.05rem;
    }
    .focus {
        --count: 2;
        animation: focus 600ms ease var(--count);
    }
    .moving-text {
        animation: moving-text 40s linear infinite;
    }
    .moving {
        --moving-animation: moving 4s linear infinite;
        animation: var(--moving-animation);
    }
    .moving-x {
        --moving-animation: moving-x 2s linear infinite;
        animation: var(--moving-animation);
    }
    .fw-loader {
        line-height: 1;
        animation: fw-loader 1s linear infinite;
    }
    @keyframes fw-loader {
        0% {rotate: 0deg;}
        100% {rotate: 360deg;}
    }
    @keyframes moving {
        0% {
            translate: -5px -5px;
        }
        25% {
            translate: 5px -5px;
        }
        50% {
            translate: 5px 5px;
        }
        75% {
            translate: -5px 5px;
        }
        100% {
            translate: -5px -5px;
        }
    }
    @keyframes moving-x {
        0% {
            translate: -5px 0;
        }
        50% {
            translate: 5px 0;
        }
        100% {
            translate: -5px 0;
        }
    }
    @keyframes moving-text {
        0% { 
            transform: translateX(0%); 
        } 
        100% { 
            transform: translateX(-100%); 
        } 
    }
    @keyframes slideFromTop {
        0% {
            translate: 0 -120%;
        }
        100% {
            translate: 0 0%;
        }
    }
    @keyframes liked {
        0% {
            scale: 0.5;
        } 40% {
            /* scale: 1.2; */
            translate: -1px 0px; 
        } 45% {
            /* scale: 1.2; */
            translate: -2px 0; 
            /* rotate: 20deg; */
        } 50% {
            scale: 1.4;
            translate: 0;
            /* rotate: 0deg; */
        } 55% {
            /* scale: 1.2; */
            translate: 2px 0px;
            /* rotate: -20deg; */
        } 60% {
            /* scale: 1.2; */
            translate: 1px 0px;
        } 100% {
            scale: 1;
            translate: 0;
        }
    }
    @keyframes pulse {
        0%, 100% {
            scale: 1;
        }
        50% {
            scale: 1.2;
        }
    }
    @keyframes like {
        0% {
            rotate: -10deg;
        }
        80% {
            rotate: 10deg;
        }
        100% {
            rotate: 0;
        }
    }
    @keyframes dislike {
        0% {
            rotate: 10deg;
        }
        80% {
            rotate: -10deg;
            translate: 0 2px;
        }
        100% {
            rotate: 0;
            translate: 0;
        }
    }
    @keyframes focus {
        0%, 100% {
            scale: 1;
        }
        50% {
            scale: 1.07;
        }
    }
    @media (max-width: 768px) {
        :root {
            --section-title-fs: 2.1rem;
        }
        .section-title {
            width: 100% !important;
        }
    }
    @media (max-width: 576px) {
        .height-auto-sm {
            height: auto !important;
        }
        .max-w-100-sm {
            max-width: 100% !important;
        }
    }
    @media (max-width: 480px) {
        .d-flex-xs {
            display: flex !important;
        }
        .d-none-xs {
            display: none !important;
        }
        .flex-wrap-xs {
            flex-wrap: wrap;
        }
        .w-100-xs {
            width: 100% !important;
        }
    }
    @media (max-width: 360px) {
        .flex-wrap-xxs {
            flex-wrap: wrap;
        }
    }
    /* ======= utils ======= */
</style>
<script id="commonJS">
    function toggleClass(element, className) {
        if (!(element instanceof HTMLElement)) {
            element = document.querySelector(element);
        }
        element.classList.toggle(className);
    }

    function convertToCountSystem(number) {
        const abbreviations = ['K', 'M', 'B', 'T'];
        const abbreviationsCount = abbreviations.length;

        for (let index = abbreviationsCount - 1; index >= 0; index--) {
            const base = Math.pow(1000, index + 1);
            if (number >= base) {
                return (number / base).toFixed(1) + abbreviations[index];
            }
        }
        return number;
    }

    function setCookie(cookieName, cookieValue, daysToExpire) {
        const date = new Date();
        date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
    }
    
    function removeCookie(cookieName) {
        document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
    }

    function share(platform, title, body="", extra="", url="",) {
        const facebook = 'https://www.facebook.com/sharer/sharer.php?u=';
        const instagram = 'instagram://share?text=';
        const telegram = 'https://t.me/share/url?url=';
        const twitter = 'https://twitter.com/intent/tweet?text=';
        const whatsapp = 'https://api.whatsapp.com/send?text=';
        const snapchat = 'snapchat://share?url=';
        const quora = 'https://www.quora.com/';

        body = replaceBr(body);
        extra = replaceBr(extra);
        url = replaceBr(url);
        
        switch(platform) {
            case "facebook":
                let facebookShareUrl = facebook + encodeURIComponent(url)+"&quote="+encodeURIComponent(extra);
                window.open(facebookShareUrl, '_blank');
                break;
            case "instagram":
                let instagramShareUrl = instagram + encodeURIComponent(title+body+extra+url);
                window.location.href = instagramShareUrl;
                break;
            case "telegram":
                let telegramShareUrl = telegram + encodeURIComponent(url) + "&text=" + encodeURIComponent("\n"+title+body+extra);
                console.log(telegramShareUrl);
                window.open(telegramShareUrl, '_blank');
                break;
            case "twitter":
                let twitterShareUrl = twitter + encodeURIComponent(title+body+extra+url);
                window.open(twitterShareUrl, '_blank')
                break;
            case "whatsapp":
                let whatsappShareUrl = whatsapp + encodeURIComponent(title+body+extra+url);
                window.open(whatsappShareUrl, '_blank');
                break;
            case "snapchat":
                let snapchatShareUrl = snapchat + encodeURIComponent(title+body+extra+url);
                window.location.href = snapchatShareUrl;
                break;
            case "mail":
                let mailShareUrl = "mailto:?subject=" + encodeURIComponent(title) + "&body=" + encodeURIComponent(body+extra+url);
                window.location.href = mailShareUrl;
                break;
            case "quora":
                let quoraShareUrl = quora + 'ask?question=' + encodeURIComponent(title) + '&ch=10&share= ';
                window.open(quoraShareUrl, '_blank');
            default:
                console.log("Unable To SHARE");;
        }
    }

    function shareByWebApi(title, body="", extra="", url="", readMoreUrl="") {
        title = replaceBr(title);
        body = replaceBr(body);
        extra = replaceBr(extra);
        url = replaceBr(url);
        readMoreUrl = replaceBr(readMoreUrl);
        url = url.includes("http") ? url : "https://"+url;
        readMoreUrl = readMoreUrl.includes("http") ? readMoreUrl : "https://"+readMoreUrl;

        let content = `${title+body}`;
        const isReadMoreNeeded = content.length > 1410;
        content = isReadMoreNeeded ? content.substring(0,1410)+".....\nRead Completely - "+readMoreUrl+"\n\n" : content;
        
        // console.log(
        //     {
        //         title: title,
        //         text: content+extra,
        //         url: url
        //     },
        //     isReadMoreNeeded,
        //     url,
        //     readMoreUrl
        // );
        // alert("isReadMoreNeeded: ", isReadMoreNeeded);

        if (navigator.share) {
            navigator.share({
                title: title,
                text: content+extra,
                url: url
            })
            .then(() => console.log('Content shared successfully!'))
            .catch(error => console.error('Error in sharing:', error));
        } else {
            alert('Web Share API is not supported in your browser.');
        }
    }


    function validate(input) {
        
        const name = input.name;
        const conditions = {
            "mobile": /^.{4,18}$/,
            "address": /^.{13,}$/,
            "email": /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
        }
        if(conditions[name]) {
            if(conditions[name].test(input.value)) {
                input.classList.remove("is-invalid")
            } else {
                input.classList.add("is-invalid")
            }
        }
    }
    
    function replaceBr(str) {
        return str.replace(/<br\/>/g, "\n");
    }

    async function hideShow(hideElem, showElem, duration=100) {
        if (!(hideElem instanceof HTMLElement)) {
            hideElem = document.querySelector(hideElem);
        }
        if (!(showElem instanceof HTMLElement)) {
            showElem = document.querySelector(showElem);
        }

        hideElem.style.transition = duration+"ms ease";
        showElem.style.transition = duration+"ms ease";

        hideElem.style.opacity = 0;
        showElem.style.opacity = 0;
        
        await new Promise(resolve => setTimeout(resolve, duration)); 
        hideElem.classList.add("d-none");
        showElem.classList.remove("d-none");
        await new Promise(resolve => setTimeout(resolve, duration)); 
        showElem.style.opacity = 1;
    }
</script>