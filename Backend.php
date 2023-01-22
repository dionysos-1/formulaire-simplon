<?php  
	/* if (isset($_POST['aj'])) {
	 	# code...
	
	$nom = $_POST['nom'];
 	$pre=$_POST['prenom'];
 	$nbr=$_POST['tel'];
 	$mail=$_POST['e-mail'];
 	
 try {
 	$server="localhost";
 	$user="root";
 	$pass="";
 	$dbname="formulaire";
 	
 	$conn= new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
 	$conn->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 	$sql="INSERT INTO formulaire(nom,prenom,tel,e-mail) values('$nom','$pre','$nbr','$mail')";
 	if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['tel']) AND !empty($_POST['e-mail'])) {
 		echo "merci d'avoir emplir  correctement.";
 	
 	$conn->exec($sql);
 	} else echo '<p style="font-weight:bold; color:red; font-size: 20px;">un ou plusieurs champs sont vide veillez remplir tout les champs(obligatoire) </p>';
 } catch (Exception $e) {
 	
 }*/
 // Paramètres de connexion

 $nom = $_POST['nom'];
 $prenom=$_POST['prenom'];
 $telephone=$_POST['tel'];
 $email=$_POST['e-mail'];

 $user = 'root';
 $password = '';

 try {
    $db = new PDO ( 'mysql:host=localhost;dbname=contacts' ,$user,$password);
    foreach ($db -> query ( 'SELECT* FORME articles')as $row)
    {
        print_r($row);
    }
 } catch (PDOException $e) {
    print 'Erreur :' . $e->getMessage() . "<nbr/>";
    die;
 }