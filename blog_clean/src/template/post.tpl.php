
<?php require 'partials/header.inc.php'?>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2 class="fs-1"><?=$post["title"]?></h2>
                        <p><?=$post["content"]?><p>
                    </div>
                </div>
            </div>
        </article>
        <h3 class="display-2 container">Commentaires</h3>
        <?php if(isset($comments)){
            forEach($comments as $comment){ ?>
                <article class="container rounded bg-light p-3 my-5 text-black" id="comments">
                    <h4 class="lead text-info fs-1">
                        <?= $comment['firstName'];?>
                        <?= $comment['lastName'];?>
                    </h4>
                    <i>A écrit</i>
                    <p class="lead text-italic">
                        "<?= $comment['content'];?>"
                    </p>
                    <i class="italic font-size-small"><?= $comment['createdAt'];?></i>
                </article>
            <?php
            }
        } else { ?>
            <p>Pas de commentaires ! <br> <a href="">soyez le premier à en écrire un!</a></p>
        <?php }
        if (isset($_SESSION['user'])){ ?>
            <article class="container">
                <h2 class="display-6">Ajouter un commentaire</h2>
                <form action="?page=post&slug=<?=$_GET['slug']?>" method="POST" id="contactForm">
                    <textarea  class="form-control" name="newComment" id="newComment" cols="30" rows="10"></textarea>
                    <input class="form-control btn btn-info"  type="submit" value="Envoyer">
                </form>
            </article>
            <?php
        } 
        
        include 'partials/footer.inc.php';
