<?php 
 // userLogin("georgio.gold@gmail.com");
 
 //require "/sql/user.sql.php";
?>
<style>
    #offcanvasWithBothOptions{
        background: url("/public/front/assets/img/1703963842960182.png")fixed;
        background-size:cover;
    }
    .offcanvas-body form{
        backdrop-filter: blur(15px);
        border-radius : 10px;
    }
</style>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header bg-dark text-light">
    <h5 class="offcanvas-title display-6" id="offcanvasWithBothOptionsLabel">Connectez-vous!</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-white">
    <form action="#" method="POST" class="p-3">
        <label for="email">Login (email)
            <input type="text" id="email" name="email" value="georgio.gold@gmail.com">
        </label>
        <label for="password">Mot de passe
            <input type="password" id="password" name="password" value="$2y$10$kamdVKH5V17CUm37npcir.QhaC20CBdm0MRvwYvHxAhpp/sEQX.t.">
        </label>
        <input type="submit" value="Se connecter" class="btn btn-primary my-5 mx-auto">
    </form>
  </div>
</div>