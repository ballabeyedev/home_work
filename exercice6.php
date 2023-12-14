<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviseurs</title>
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

        #form {
            border: 3px solid black;
            padding: 30px;
            border-radius: 10px;
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
            transition: 0.8s;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <div id="form">
        <form action="" method="POST">
            <label for="number">Nombre</label>
            <input type="text" name="number" id="number" placeholder="Entrer un nombre entier">

            <button type="submit">Afficher les diviseurs</button>
        </form>

        <?php
        if (isset($_POST["number"])) {
            $number = (int)$_POST["number"];
            if($number===0){
                echo '<div class="result">Pas de diviseur</div>';
            }
            else{
                echo '<div class="result">Les diviseurs de ' . $number . ' sont : ';

                for ($i = 1; $i <= $number; $i++) {
                    if ($number % $i == 0) {
                        echo $i . ' , ';
                    }
                }
    
                echo '</div>';
            }

            }

        ?>
    </div>
</body>
</html>
