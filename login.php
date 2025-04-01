<?php

include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {

                //Créer un cookie pour l'utilisateur
                setcookie("user_id", $row['id'], time() + (86400 * 30), "/");
                //cookie valable 30j
                setcookie("user_email", $row['email'], time() + (86400 * 30), "/");




                // Démarrer la session et définir les variables de session

                $_SESSION["user_id"] = $row["id"];
                $_SESSION["user_email"] = $row["user_email"];

                // Redirection vers la page protégée
                header("location: protected_page.php");
                exit();
        } else {
            echo "Mot de passe invalide";
        }
    } else {
        echo "Aucun utilisateur trouvé avec cet email";
    }
    $conn->close();
}