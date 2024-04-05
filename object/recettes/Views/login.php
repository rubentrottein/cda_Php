    <h2>Inscription</h2>
    <form action="?url=login" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="miranda.croissant@gmail.com">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="123456">
        <input type="submit" name="login" value="send">
    </form>
<?php require "Views/footer.php"?>