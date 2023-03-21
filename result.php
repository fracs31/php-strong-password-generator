<!-- PHP -->
<?php
    session_start(); //inizio la sessione
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body class="bg-primary-subtle">
    <!-- Main -->
    <main class="pt-5">
        <!-- Container -->
        <div class="container">
            <!-- Risultato -->
            <div class="result p-4 mt-4 bg-info rounded">
                <!-- Sottotitolo -->
                <h3 class="text-primary-emphasis fs-4">
                    La tua password è: <?= $_SESSION['password']; ?>
                </h3>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>