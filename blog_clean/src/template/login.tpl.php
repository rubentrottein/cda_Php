<?php include 'partials/header.inc.php'?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Veuillez entrer votre identifiant(email) ainsi que votre mot de passe.</p>
                        <div class="my-5">
                            <?php if (isset($status))
                                echo "<p class='alert alert-warning'>Utilisateur inconnu, veuillez recommencer</p>";
                            ?>
                            <form id="login" method="POST" action="#">
                                <div class="form-floating">
                                    <input class="form-control" id="mail" type="email" name="email" placeholder="Enter your email..." data-sb-validations="required,mail" />
                                    <label for="mail">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="pass" type="password" name="password" placeholder="Mot de passe..." data-sb-validations="required" />
                                    <label for="pass">Password</label>
                                    <div class="invalid-feedback" data-sb-feedback="password:required">A name is required.</div>
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
                                <div class="d-flex justify-content-around">
                                    <!-- Submit Button-->
                                    <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                                    <a href="?page=register" class="text-info">S'inscrire</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php include 'partials/footer.inc.php'?>