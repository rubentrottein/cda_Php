<?
    $layoutImage="";
    include "template/partials/header.inc.php"
?>
<style>
    header{background : transparent;}
    video{
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        height: 80dvh;
        z-index: -1;
    }
</style>
<main>
    <h1>404 - Page not found</h1>
    <video src="public/front/assets/video/404.mp4" muted autoplay></video>
    <p>Vidéo de <a href="https://pixabay.com/fr/users/u_zys3fy54t3-36732626/?utm_source=link-attribution&utm_medium=referral&utm_campaign=video&utm_content=164386">u_zys3fy54t3</a> sur <a href="https://pixabay.com/fr//?utm_source=link-attribution&utm_medium=referral&utm_campaign=video&utm_content=164386">Pixabay</a></p>
</main>
<?include "template/partials/footer.inc.php"?>