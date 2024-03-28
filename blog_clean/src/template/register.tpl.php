<?php include 'partials/header.inc.php'?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Remplissez le formulaire pour procéder à l'inscription</p>
                        <div class="my-5">
                        
                            <?php isset($message) && display_flash_message(); ?>
                            <form id="login" method="POST" action="?page=register">
                                <div class="form-floating">
                                    <input class="form-control" id="mail" type="text" name="firstName" placeholder="Enter your email..." data-sb-validations="required,firstName" />
                                    <label for="firstName">Prénom</label>
                                    <div class="invalid-feedback" data-sb-feedback="firstName:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="firstName:firstName">Email is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="lastName" type="text" name="lastName" placeholder="Enter your email..." data-sb-validations="required,lastName" />
                                    <label for="lastName">Nom</label>
                                    <div class="invalid-feedback" data-sb-feedback="lastName:required">A name is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="lastName:lastName">LastName is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="number" name="phone" placeholder="Entrez votre n° de téléphone..." data-sb-validations="required,phone" />
                                    <label for="phone">N° de téléphone</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A name is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="phone:phone">Email is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="mail" type="email" name="email" placeholder="Enter your email..." data-sb-validations="required,mail" />
                                    <label for="mail">Adresse Email (login)</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="pass" type="password" name="password" placeholder="Mot de passe..." data-sb-validations="required" />
                                    <label for="pass">Mot de passe</label>
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
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php include 'partials/footer.inc.php'?>