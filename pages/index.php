<?php
session_start();

if (!isset($_SESSION['logged']) AND $_SESSION['logged'] !== true) {
	header("Location: /login/index.php");
	return;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" type="text/css" href="../../style/home.css">
    <title>Document</title>
</head>
<body>
    <div class="title header">
        <h4>Creazione di sito web su un server AWS</h4>
    </div>
    <div class="container">
        <div class="main-text">
            
            <div class="paragraph">
                <div class="paragraph-title">
                    <h2>Creazione di un'istanza AWS</h2>
                </div> 
                <div class="poaragraph-text">
                    Per iniziare a creare il proprio sito web su WAS dobbiamo inizialmente creare un'istanza.
                    Per creare un'istanza bisogna:      <br>
                    1. Eseguire l'accesso nella consolo di Amazon AWS;      <br>
                    2. Entrare nella dashboard EC2;     <br>
                    3. Selezionare "Avvia Instanza";        <br>
                    4. Impostare un nome, a piacimento, all'istanza (per esempio: Server Web );     <br>
                    5.Scegliere il sistema operativo per l'instanza, in questo caso utilizzeremo Ubuntu;    <br>
                    6. Creare le chiavi RSA che serviranno per accedere da remoto al server.    <br>
                </div>
            </div>

            <div class="paragraph">
                <div class="paragraph-title">
                    <h2>Istallazione di Docker</h2>
                </div> 
                <div class="poaragraph-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam rerum, nisi laudantium ea rem doloremque itaque repellendus, odit laborum expedita voluptates ipsam eaque maiores delectus non facere ratione ad!
                </div>
            </div>

            <div class="paragraph">
                <div class="paragraph-title">
                    <h2>Configurazione di Nginx</h2>
                </div> 
                <div class="poaragraph-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam rerum, nisi laudantium ea rem doloremque itaque repellendus, odit laborum expedita voluptates ipsam eaque maiores delectus non facere ratione ad!
                </div>
            </div>

            <div class="paragraph">
                <div class="paragraph-title">
                    <h2>Creazionew del sito web</h2>
                </div> 
                <div class="poaragraph-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam rerum, nisi laudantium ea rem doloremque itaque repellendus, odit laborum expedita voluptates ipsam eaque maiores delectus non facere ratione ad!
                </div>
            </div>

            <div class="paragraph">
                <div class="paragraph-title">
                    <h2>Configurazione di MariaDB</h2>
                </div> 
                <div class="poaragraph-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam rerum, nisi laudantium ea rem doloremque itaque repellendus, odit laborum expedita voluptates ipsam eaque maiores delectus non facere ratione ad!
                </div>
            </div>

            <div class="paragraph">
                <div class="paragraph-title">
                    <h2>Creazione del database</h2>
                </div> 
                <div class="poaragraph-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam rerum, nisi laudantium ea rem doloremque itaque repellendus, odit laborum expedita voluptates ipsam eaque maiores delectus non facere ratione ad!
                </div>
            </div> 
        </div>
    </div>
</body>
</html>