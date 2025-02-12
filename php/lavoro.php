<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8"> <!--  Imposta la codifica dei caratteri in UTF-8 per supportare i caratteri speciali -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  Rende la pagina responsive adattandola ai dispositivi mobili -->
    <title>Dettagli Lavoro</title> <!--  Titolo della pagina visualizzato nella scheda del browser -->
    <link rel="stylesheet" href="../scss/style.css"> <!--  Collegamento al file SCSS/CSS per lo stile della pagina -->
    <?php include 'header.php'; ?>
</head>

<body>

    <div class="container"> <!--  Contenitore principale per organizzare il layout -->

        <main class="lavoro"> <!--  Sezione principale con i dettagli del lavoro -->

            <?php
            //  Caricamento dei dati dei lavori da un file JSON
            $lavori = json_decode(file_get_contents('lavori.json'), true);
            $id = isset($_GET['id']) ? $_GET['id'] : ""; //  Recupera l'ID del lavoro dalla query string
            
            $lavoro_corrente = null; //  Inizializza la variabile che conterrà i dettagli del lavoro selezionato
            
            //  Ciclo per trovare il lavoro corrispondente all'ID passato in GET
            foreach ($lavori as $lavoro) {
                if ($lavoro['id'] === $id) {
                    $lavoro_corrente = $lavoro;
                    break;
                }
            }

            //  Se il lavoro non viene trovato, mostra un messaggio di errore
            if (!$lavoro_corrente) {
                echo "<h2>Lavoro non trovato</h2>";
            } else {
                //  Se il lavoro esiste, mostra i dettagli
                echo "<div class='lavoro-dettagli'>";
                echo "<h1>" . htmlspecialchars($lavoro_corrente["titolo"]) . "</h1>"; //  Titolo del lavoro
                echo "<img src='" . htmlspecialchars($lavoro_corrente["immagine"]) . "' alt='" . htmlspecialchars($lavoro_corrente["titolo"]) . "'>"; //  Immagine del lavoro
                echo "<p>" . htmlspecialchars($lavoro_corrente["descrizione"]) . "</p>"; //  Descrizione del lavoro
                echo "</div>";
            }
            ?>

            <div class="cta"> <!--  Sezione per il pulsante di ritorno ai lavori -->
                <a href="lavori.php" class="btn primary">Torna ai Lavori</a>
                <!--  Pulsante per tornare alla lista dei lavori -->
            </div>
        </main>

        <?php include 'footer.php'; ?>
    </div>
</body>

</html>