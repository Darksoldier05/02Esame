<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8"> <!--  Imposta la codifica caratteri per supportare caratteri speciali -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  Rende il sito responsive su dispositivi mobili -->
  <title>Sito Personale - Home</title> <!--  Titolo della pagina visualizzato nella scheda del browser -->
  <link rel="stylesheet" href="scss/style.css"> <!--  Collegamento al file SCSS/CSS per gli stili della pagina -->

  <?php include 'php/header-index.php'; ?>
</head>

<body>
  <div class="container"> <!--  Contenitore principale che racchiude tutta la struttura della pagina -->

    <br>

    <!--  CONTENUTO PRINCIPALE -->
    <main class="index">

      <!--  Sezione HERO (Intestazione con presentazione) -->
      <section class="hero">
        <h1>Benvenuto sul Mio Sito Personale!</h1> <!-- Titolo principale della pagina -->
        <p>Sono Alessio, un web designer e sviluppatore con la passione per il design moderno e funzionale.</p>
        <!-- Breve descrizione personale -->

        <div class="cta-buttons"> <!-- Contenitore per i pulsanti di chiamata all'azione -->
          <a href="./php/servizi-offerti.php" class="btn primary" title="Scopri i servizi che offro">Scopri di più</a>
          <!-- Link alla pagina dei servizi offerti con title per maggiore contesto -->
          <a href="./php/contatti.php" class="btn tertiary"
            title="Compila il modulo di contatto per scrivermi">Contattami</a>
          <!-- Link alla pagina dei contatti con title descrittivo -->
          <a href="./php/lavori.php" class="btn secondary" title="Guarda i miei lavori e progetti passati">I miei
            lavori</a>
          <!-- Link alla pagina dei lavori con title esplicativo -->
        </div>
      </section>


      <!--  Sezione FEATURES (Vantaggi del servizio) -->
      <section class="features">
        <h2>Perché Scegliere Me?</h2> <!--  Titolo della sezione con i motivi per scegliere i servizi -->

        <div class="features-grid"> <!--  Griglia con i punti di forza -->
          <div class="feature-item">
            <h3>Design Moderno</h3>
            <p>Creo siti web accattivanti che combinano estetica e funzionalità.</p>
            <!--  Descrizione del primo vantaggio -->
          </div>
          <div class="feature-item">
            <h3>Ottimizzazione SEO</h3>
            <p>Garantisco che il tuo sito sia facilmente trovabile sui motori di ricerca.</p>
            <!--  Descrizione del secondo vantaggio -->
          </div>
          <div class="feature-item">
            <h3>Supporto Continuo</h3>
            <p>Offro manutenzione e aggiornamenti per assicurare il miglior servizio possibile.</p>
            <!--  Descrizione del terzo vantaggio -->
          </div>
        </div>
      </section>
    </main>

    <?php include 'php/footer.php'; ?>


  </div>
</body>

</html>