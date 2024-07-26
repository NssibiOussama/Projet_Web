<?php include ('header.php'); ?>

<img src="../images/2.jpg" id="bg">
<div class="form">
    <ul class="tab-group">
        <li class="tab active"><a href="#login">Mot De passe Oublié</a></li>
    </ul>
    <div class="tab-content">
        <div id="login">
            <h1 style="font-size: 25px">Bienvenue au seminaire du club</h1>
            <form action="updatepassword.php" method="post">
                <div class="field-wrap">
                    <label>Email</label>
                    <input type="email" name="email" autocomplete="off" />
                </div>
                <button class="button button-block">Envoyé</button><br>
                <center>
                    <font face="Open Source">
                        <p style="font-size:20px; color: #1AB186;"></p>
                    </font>
                </center>
            </form>
        </div>
    </div>
</div>
<script src="../js/index.js"></script>
</body>

</html>