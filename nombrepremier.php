<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Premier</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .nombre {
        background-color: #fff;
        padding: 20px;
        border-radius: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: black;
        color: #fff;
        transition: 0,8em;
    }

    p {
        margin-bottom: 16px;
        color: blue;
        text-decoration: underline; 
    }

    .result {
        margin-top: 20px;
        font-weight: bold;
    }

    .prime {
        color: green;
        border: 1px solid black;
        padding: 10px;
    }

    .non-prime {
        color: red;
        border: 1px solid black;
        padding: 10px;

    }
</style>

</head>
<body>
    <div class="nombre">
        <p>VERIFICATION SI UN NOMBRE EST PREMIER OU NON</p>
        <form action="" method="POST">
            <label for="name">Nombre</label>
            <input type="text" name="number" id="name" placeholder="Entrer votre nombre">
            <button type="submit">Valider</button>
        </form>
    </div>

    <?php
    // Vérifie si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupère la valeur du champ "number" du formulaire
        $mon_nombre = $_POST["number"];
        $est_premier = true;

        if ($mon_nombre < 2) {
            $est_premier = false;
        } else {
            // Utilise la fonction sqrt pour obtenir la racine carrée
            for ($i = 2; $i <= sqrt($mon_nombre); $i++) {
                if ($mon_nombre % $i === 0) {
                    $est_premier = false;
                    break;
                }
            }
        }

        if ($est_premier) {
            echo '<p class="result prime">' . $mon_nombre . ' est un nombre premier.</p>';
        } else {
            echo '<p class="result non-prime">' . $mon_nombre . ' n\'est pas un nombre premier.</p>';
        }
    }
?>

</body>
</html>
