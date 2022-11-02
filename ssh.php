<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SSH</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
            type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/terminal.css" />
    </head>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">INICIO</a>
        </div>
    </nav>
    <header>

    </header>
    <main id="container">
        <div id="terminal">
            <!-- Terminal Bar -->
            <section id="terminal__bar">
                <div id="bar__buttons">
                    <button class="bar__button" id="bar__button--exit">&#10005;</button>
                    <button class="bar__button">&#9472;</button>
                    <button class="bar__button">&#9723;</button>
                </div>
                <p id="bar__user">root@hector: ~</p>
            </section>
            <!-- Terminal Body -->
            <section id="terminal__body">
                <div id="terminal__prompt">
                    <span id="terminal__prompt--user">root@hector:</span>
                    <span id="terminal__prompt--location">~</span>
                    <span id="terminal__prompt--bling">$</span>
                    <span id="terminal__prompt--cursor"> </span> </span>
                    <span id="terminal__content">
                    <?php
                        $ip = $_POST['ip_ssh'];
                        $opcion = $_POST['opcion'];
                        $script = './ssh.sh ';
                        echo $script;
                        echo "$ip ";
                        echo "$opcion";  
                    ?>
                    <?php
                        if(!$_POST['ip_ssh'] || !$_POST['opcion']) {
                            header("Location: http://localhost:8080/index.php");
                        }                        
                        $output = $script . $ip . " " . $opcion;
                        echo "<pre>";
                        echo shell_exec($output);
                    ?>
                    </span>
            </section>
        </div>
    </main>

    </div>
    </div>
</body>

</html>