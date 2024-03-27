<?php include 'partials/header.inc.php'?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2 class="display-4 text-primary">Profil de <?= $user['firstName']?></h2>
                        <div class="my-5">
                        <p class="text-danger">Prénom : <span class="mark"><?= $user['firstName']?></mark></p>
                        <p class="text-danger">Nom : <span class="mark"><?= $user['lastName']?></mark></p>
                        <p class="text-danger">N° de téléphone : <span class="mark"><?= $user['phone']?></mark></p>
                        <p class="text-danger">Adresse email : <span class="mark"><?= $_SESSION['user']['email']?></mark></p>
                        <div class="monitor">
                            <p>password : <?= $_SESSION['user']['password']?></p>
                        </div>
                            
                            <form id="login" method="POST" action="#">
                                <div class="form-floating">
                                    <input class="form-control" id="mail" type="text" name="firstName" placeholder="Enter your email..." data-sb-validations="required,firstName" value="<?=$_SESSION['user']['firstName']?>"/>
                                    <label for="firstName">Prénom</label>
                                    <div class="invalid-feedback" data-sb-feedback="firstName:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="firstName:firstName">Email is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="lastName" type="text" name="lastName" placeholder="Enter your email..." data-sb-validations="required,lastName" value="<?=$_SESSION['user']['lastName']?>"/>
                                    <label for="lastName">Nom</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel" name="phone" placeholder="Entrez votre n° de téléphone..." data-sb-validations="required,phone" value="<?=$_SESSION['user']['phone']?>"/>
                                    <label for="phone">N° de téléphone</label>
                                </div>
                                <br />
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit Button-->
                                <button class="btn btn-danger text-uppercase d-block mx-auto" id="submitButton" type="submit">Modifier les informations de profil</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php include 'partials/footer.inc.php'?>