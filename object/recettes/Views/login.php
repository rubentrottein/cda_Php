<?php require "Views/header.php"?>
    <h2>Inscription</h2>
    <form action="?url=login" method="POST">
        <input type="text" name="email" id="email" value="test@test.com">
        <label for="password">Password</label>
        <input type="password" name="mdp" id="password" value="123456">
        <input type="submit" value="send">
    </form>
<?php require "Views/footer.php"?>