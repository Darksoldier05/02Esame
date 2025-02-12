<!DOCTYPE html>
<html lang="it"> <!--  Definisce la lingua principale del documento come italiano -->

<head>
  <meta charset="UTF-8">
  <!--  Imposta la codifica dei caratteri per supportare lettere accentate e simboli speciali -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  Rende il sito responsive adattandolo ai dispositivi mobili -->
  <title>Sito Personale - Servizi Offerti</title> <!--  Titolo della pagina mostrato nella scheda del browser -->
  <link rel="stylesheet" href="../scss/style.css">
  <!--  Collegamento al file SCSS compilato in CSS per lo stile della pagina -->
  <?php include 'header.php'; ?>
</head>

<body>
  <div class="container"> <!--  Contenitore principale che racchiude l'intero contenuto della pagina -->

    <br> <!--  Spazio tra header e contenuto principale -->

    <main class="servizi"> <!--  Sezione principale della pagina, contenente i servizi offerti -->
      <section class="intro"> <!--  Introduzione alla sezione dei servizi -->
        <h1>I Miei Servizi</h1> <!--  Titolo principale della sezione -->
        <p>Offro una vasta gamma di servizi per aiutarti a raggiungere i tuoi obiettivi online. Dai un'occhiata a ciò
          che posso fare per te!</p> <!--  Testo introduttivo -->
      </section>

      <section class="services-list"> <!--  Contenitore dei servizi offerti -->
        <div class="service-item"> <!--  Singolo servizio -->
          <div class="icon">🌐</div> <!--  Icona rappresentativa -->
          <h3>Creazione Siti Web</h3> <!--  Titolo del servizio -->
          <p>Realizzo siti web moderni, personalizzati e ottimizzati per ogni esigenza.</p>
          <!--  Descrizione del servizio -->
        </div>
        <div class="service-item">
          <div class="icon">📈</div> <!--  Icona per SEO -->
          <h3>Ottimizzazione SEO</h3>
          <p>Aiuto il tuo sito a posizionarsi in alto nei motori di ricerca per aumentare la visibilità.</p>
        </div>
        <div class="service-item">
          <div class="icon">🎨</div> <!--  Icona per Design Grafico -->
          <h3>Design Grafico</h3>
          <p>Progetto interfacce utente accattivanti e materiali grafici per la tua attività.</p>
        </div>
        <div class="service-item">
          <div class="icon">🔧</div> <!--  Icona per Manutenzione -->
          <h3>Manutenzione Siti</h3>
          <p>Offro servizi di aggiornamento e manutenzione per mantenere il tuo sito efficiente.</p>
        </div>
        <div class="service-item">
          <div class="icon">💡</div> <!--  Icona per Consulenza Digitale -->
          <h3>Consulenza Digitale</h3>
          <p>Ti aiuto a sviluppare strategie digitali efficaci per il tuo business.</p>
        </div>
        <div class="service-item">
          <div class="icon">📊</div> <!--  Icona per Analisi e Report -->
          <h3>Analisi e Report</h3>
          <p>Fornisco analisi dettagliate per monitorare le performance del tuo sito.</p>
        </div>
      </section>
    </main>

    <?php include 'footer.php'; ?>
  </div>
</body>

</html>