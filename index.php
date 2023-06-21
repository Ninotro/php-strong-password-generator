<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Strong password generator</h1>
        <h2>Genera una password sicura</h2>
        <main>
        <section id="container-psw">
            <form id="form-psw">
                <label for="number">numero caratteri</label>
                <input type="number" name="number" id="number">
                <input type="submit" value="Conferma">
            </form>

            <?php 

            $number = $_GET['number'];
            
            
            include __DIR__ . '/partials/functions.php';
            
            
            
            if ($number > 0) {
                echo "<br><br> <h3>la tua password è:</h3> <br>" .  random_strings($number);
            }
            

            ?>
        </section>
    </main>
    </div>

    

</body>
</html>
