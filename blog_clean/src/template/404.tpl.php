<?php require "template/partials/header.inc.php";?>
<style>
    header{background : none;}
    
    #not-found video{
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        width: 100dvw;
        z-index: 0;
    }
    #not-found article{
        position: fixed;
        left: 10rem;
        bottom: 3rem;
        z-index : 2;
        color: white;
        background: rgba(0,0,0,.4);
        backdrop-filter : blur(15px);
        border-radius: 10px;
        border: solid white 1px;
        padding: 1rem;
        text-align: center;
    }
    #not-found article a{color: royalblue; text-decoration: none;}
</style>
<section id="not-found">
    <video src="public/front/assets/video/404.mp4" muted autoplay loop></video>
    <article>
        <h1>404 - Page not found</h1>
        <p>Vidéo de <a href="https://pixabay.com/fr/users/u_zys3fy54t3-36732626/?utm_source=link-attribution&utm_medium=referral&utm_campaign=video&utm_content=164386">u_zys3fy54t3</a> sur <a href="https://pixabay.com/fr//?utm_source=link-attribution&utm_medium=referral&utm_campaign=video&utm_content=164386">Pixabay</a></p>
    </article>
</section>