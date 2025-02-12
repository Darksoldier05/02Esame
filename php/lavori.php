<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8"> <!--  Definisce la codifica dei caratteri per supportare caratteri speciali -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--  Rende la pagina responsive -->
    <title>Lavori</title> <!--  Titolo della pagina visualizzato nel browser -->
    <link rel="stylesheet" href="../scss/style.css"> <!--  Collegamento al file SCSS compilato per lo stile -->
    <!--  Collegamento ai file JavaScript esterni -->
    <?php include 'header.php'; ?>
</head>

<body>

    <div class="container"> <!--  Contenitore principale per strutturare la pagina -->

        <main class="lavori">
            <h1>I Miei Lavori</h1> <!--  Titolo principale della pagina -->
            <section class="lavori-grid"> <!--  Griglia per visualizzare i lavori -->

                <?php
                //  Carica il file JSON contenente i lavori e lo converte in un array associativo
                $lavori = json_decode(file_get_contents('lavori.json'), true);

                //  Ciclo foreach per iterare su ogni lavoro e generare dinamicamente gli elementi HTML
                foreach ($lavori as $lavoro) {
                    echo "<a href='lavoro.php?id=" . urlencode($lavoro["id"]) . "'>"; // Usa ID invece del titolo
                    echo "<div class='lavoro-item'>"; //  Contenitore per ogni singolo lavoro
                    echo "<img src='" . htmlspecialchars($lavoro["immagine"]) . "' alt='" . htmlspecialchars($lavoro["titolo"]) . "'>"; //  Immagine del lavoro con testo alternativo
                    echo "<h3>" . htmlspecialchars($lavoro["titolo"]) . "</h3>"; //  Titolo del lavoro
                    echo "</div>";
                    echo "</a>";
                }
                ?>

            </section>
        </main>

        <?php include 'footer.php'; ?>
    </div>
</body>

</html>