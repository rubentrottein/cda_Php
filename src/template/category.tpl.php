<?php 
    require "partials/header.inc.php";
    require 'partials/sidebar.inc.php';
?>

    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            <h2><?= $categoryName;?></h2>
            <!-- Post preview-->
            <?php foreach ($posts as $post) { ?>
                <div class="post-preview">
                    <img class="w-100" src=<?= "public/front/assets/img/".$post['image']?> alt=<?= $post["title"]?> />
                    <a href="?page=post&slug=<?=$post['postSlug'];?>">
                        <h3 class="post-title"><?= $post['title'] ?></h3>
                        <h4 class="post-subtitle"><?= $post['content']?> ...</h4>
                        <?= $post['name'] ?>
                    </a>
                    <p class="post-meta">
                        Par
                        <a href="00"><?= $post['firstName'],$post['lastName'] ?></a>
                        <br>
                        <i>dernière modification :  <?= $post['updatedAt'] ?></i>
                        <?php
                            if( $post['nbComments'] > 0) {
                                echo "<br>". $post['nbComments'] . " " . pluralize('commentaire', $post['nbComments']); 
                            }
                        ?>
                    </p>
                </div>
                
                <!-- Divider-->
                <hr class="my-4" />
            <?php } ?>
                <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Articles précédents →</a></div>
        </div>
    </div>
<?php include 'partials/footer.inc.php'?>