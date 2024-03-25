<?php include 'partials/header.inc.php'?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <?php foreach ($posts as $post) { ?>
                            <div class="post-preview">
                                <img class="w-100" src=<?= "public/front/assets/img/".$post['image']?> alt=<?= $post["title"]?> />
                                <a href="?page=post">
                                    <h2 class="post-title"><?= $post['title'] ?></h2>
                                    <h3 class="post-subtitle"><?= $post['content']?> ...</h3>
                                    <?= $post['name'] ?>
                                </a>
                                <p class="post-meta">
                                    Par
                                    <a href="#!"><?= $post['firstName'],$post['lastName'] ?></a>
                                    <br>
                                    dernière modification :  <?= $post['updatedAt'] ?>
                                    <?php
                                        if( $post['nbComments'] > 0) {
                                            echo "<br>". $post['nbComments'] . " commentaire(s)"; 
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
        </div>
<?php include 'partials/footer.inc.php'?>