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
            <!-- Titoli -->
            <div class="titles text-center">
                <!-- Titolo -->
                <h1 class="text-body">Strong Password Generator</h1>
                <!-- Sottotitolo -->
                <h2 class="text-white">Genera un password sicura</h2>
            </div>
            <!-- Informazioni -->
            <div class="informations bg-white p-4 mt-4">
                <!-- Form -->
                <form action="./index.php" method="GET">
                    <!-- Lunghezza password -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Lunghezza password:</label>
                        <input type="number" name="lengthPassword" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <!-- Submit -->
                    <button type="submit" name="submit" value="1" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>