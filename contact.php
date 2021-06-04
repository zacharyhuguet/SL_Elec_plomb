
<?php 
    $auth = 0;
    include 'lib/includes.php';
    include 'partials/header.php'; 

    if(!empty($_POST))
    {
        

        if( $_POST['nom'] == ''     || $_POST['prenom'] == ''     || 
            $_POST['adresse'] == '' || $_POST['codePostal'] == '' || 
            $_POST['ville'] == ''   || $_POST['telephone'] == ''  || 
            $_POST['email'] == ''   || $_POST['message'] == '')
        {
            $error = "Tout les champs sont requis";
        } else { 
            $error = "";

            $from = $_POST['email'];
            $to = "zacharyhuguet2222@gmail.com";
            $subject = "Mail Automatique";
            $message = "nom: " . $_POST['nom']
            .$message = "prenom: ". $_POST['prenom']
            .$message = "adresse: ". $_POST['adresse']
            .$message = "code postal: ". $_POST['codePostal']
            .$message = "ville: ". $_POST['ville']
            .$message = "telephone: ". $_POST['telephone']
            .$message = "email: ". $_POST['email']
            .$message = "message: ". $_POST['message']
            .$message = "fichier: ". $_POST['monfichier']
            .$headers = "De :" . $from;
            mail($to,$subject,$message, $headers);
        }
    }
?>
  <link rel="stylesheet" href="css/style_contact.css">

    <form action="#" method="post">

        <fieldset class="box" >
            <legend class="box2">Contacter moi</legend>

            <input type="text" placeholder="nom"           name="nom"        id="nom"><br><br>
            <input type="text" placeholder="prenom"        name="prenom"     id="prenom"><br><br>
            <input type="text" placeholder="adresse"       name="adresse"    id="adresse"><br><br>
            <input type="text" placeholder="code Postal"    name="codePostal" id="codePostal"><br><br>
            <input type="text" placeholder="ville"         name="ville"      id="ville"><br><br>
            <input type="text" placeholder="telephone"     name="telephone"  id="telephone"><br><br>
            <input type="text" placeholder="email"         name="email"      id="email"><br><br>
            <textarea          placeholder="Votre message" name="message"    id="message"></textarea><br>
            <br>

  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select File to upload:<br>
    <input type="file"   name="file" id="file" multiple >   <br>
  </form>
  <hr>




            <p style="color:red;"><?php if(isset($error)){echo $error;} ?></p><br><br>
            <input type="submit" value="Envoyer">

        </fieldset>

    </form>

<?php 
    include 'partials/footer.php'; 
?>