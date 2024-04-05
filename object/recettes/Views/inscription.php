    <h2>Inscription</h2>
    <form action="?url=register" method="POST">
        <label for="nom">Nom</label>
        <input type="text" name="prenom" value="Testant">
        <label for="email">Email</label>
        <input type="text" name="nom" value="Test">
        <label for="prenom">Nom</label>
        <input type="text" name="email" id="email" value="test@test.com">
        <label for="password">Password</label>
        <input type="password" name="mdp" id="password" value="123456">
        <input type="submit" name="inscription" value="S'inscrire">
    </form>
<?php require "Views/footer.php"?>