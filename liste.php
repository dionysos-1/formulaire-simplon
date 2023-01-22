<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
        </tr>
        <?php
        // Paramètres de connexion
        $user = "username";
        $password = "";

        // Créer une connexion à la base de données
        try {  
            $db = new PDO ( 'mysql:host=localhost;dbname=contacts' ,$user,$password);
            foreach ($db -> query ( 'SELECT* FORME articles')as $row)
            {
                print_r($row);
            }
             }

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("La connexion a échoué : " . $conn->connect_error);
        }

        // Exécuter la requête de sélection
        $result = $conn->query("SELECT * FROM users");

        // Afficher les données des utilisateurs
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nom"] . "</td>";
            echo "<td>" . $row["prenom"] . "</td>";
            echo "<td>" . $row["telephone"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "</tr>";
        }

        // Fermer la connexion
        $conn->close();
        ?>
    </table>
</body>
</html>