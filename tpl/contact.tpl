<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href='../css/bootstrap-theme.css' rel='stylesheet' type='text/css' />
    <link href='../css/bootstrap.css' rel='stylesheet' type='text/css' />
    <link href='../css/comon.css' rel='stylesheet' type='text/css' />
    <!--<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />-->

    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <title>Swag</title>
</head>

<form method="post" action="../php/contact.php">
    <div id="form" class="contact">
        <input type="hidden" name="send" value="1"/>
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name"/><br>
        </div>
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname"/><br>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email"/><br>
        </div>
        <div class="form-group">
            <label for="address_1">Addresse</label>
            <input type="text" id="address_1" name="address_1"/><br>
        </div>
        <div class="form-group">
            <label for="address_2"></label>
            <input type="text" id="address_2" name="address_2"/><br>
        </div>
        <div class="form-group">
            <label for="zip">Code postal</label>
            <input type="text" id="zip" name="zip"/><br>
        </div>
        <div class="form-group">
            <label for="city">Ville</label>
            <input type="text" id="city" name="city"/><br>
        </div>
        <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="text" id="phone" name="phone"/><br>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" rows="4" cols="50" name="message"></textarea><br>
        </div>
        <div class="form-group">
            <label></label>
            <input type="submit" class="btn btn-info" value="Envoyer"/>
        </div>
    </div>
</form>