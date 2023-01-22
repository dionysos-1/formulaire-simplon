<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formilaire d'inscription</title>
    <link rel="stylesheet" href="simplon.css">
</head>
<body>
    <form method="POST" action="Backend.php">
    <fieldset>
        <legend> INSCRIPTION</legend>
        <label>nom </label>
        <input type="text" name="nom" placeholder="entrez votre nom">
        <label>prenom </label><input type="text" name="prenom" placeholder="votre prenom"> <br>
        <label>tel</label><input type="number" name="tel" placeholder="notre numero"> <br>
        <label> e-mail</label><input name="e-mail" type="text" placeholder="notre e-mail"> <br>
        <input type="submit" value="envoyer"> <br>
    </fieldset>
    </form>
    
</body>
</html>