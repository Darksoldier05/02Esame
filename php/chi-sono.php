<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8"> <!--  Definisce la codifica dei caratteri per supportare caratteri speciali e accentati -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  Rende il sito responsive adattandolo ai dispositivi mobili -->
  <title>Sito Personale - Chi Sono</title> <!--  Titolo della pagina che compare nella scheda del browser -->
  <link rel="stylesheet" href="../scss/style.css"> <!--  Collegamento al file CSS principale per lo stile -->

  <?php include 'header.php'; ?>
</head>

<body>
  <div class="container"> <!--  Contenitore principale per mantenere il layout organizzato -->

    <br> <!--  Spazio vuoto per separare header e contenuto principale -->

    <main class="chi-sono"> <!--  Sezione principale della pagina "Chi Sono" -->

      <section class="about"> <!--  Introduzione personale -->
        <h1>Chi Sono</h1>
        <p>Ciao! Mi chiamo Alessio, un web designer e sviluppatore con anni di esperienza nella creazione di siti web
          moderni e funzionali.</p> <!--  Breve descrizione del profilo professionale -->
        <p>La mia missione è aiutare aziende e professionisti a costruire una presenza online che unisca estetica,
          funzionalità e valore. Credo nella semplicità e nell'efficacia, offrendo soluzioni su misura per ogni cliente.
        </p> <!--  Spiega il valore aggiunto offerto ai clienti -->
      </section>

      <section class="skills"> <!--  Sezione delle competenze professionali -->
        <h2>Le Mie Competenze</h2>
        <div class="skills-grid"> <!--  Griglia per disporre le competenze in modo ordinato -->

          <div class="skill-item">
            <h3>HTML & CSS</h3>
            <p>Esperto nella creazione di layout responsivi e moderni.</p> <!--  Specializzazione nel front-end -->
          </div>

          <div class="skill-item">
            <h3>JavaScript</h3>
            <p>Animazioni, interattività e funzionalità dinamiche.</p> <!--  Implementazione di funzioni dinamiche -->
          </div>

          <div class="skill-item">
            <h3>Design Grafico</h3>
            <p>Progettazione di interfacce utente accattivanti e intuitive.</p> <!--  Focus su UI/UX design -->
          </div>

          <div class="skill-item">
            <h3>SEO</h3>
            <p>Ottimizzazione per garantire la visibilità sui motori di ricerca.</p>
            <!--  Miglioramento della visibilità online -->
          </div>

        </div>
      </section>

      <section class="timeline"> <!--  Sezione con la timeline della carriera -->
        <h2>La Mia Storia</h2>
        <div class="timeline-container"> <!--  Contenitore della timeline -->

          <div class="timeline-item">
            <h3>2021</h3>
            <p>Ho iniziato la mia carriera come freelance, collaborando con piccole imprese per sviluppare siti web su
              misura.</p> <!--  Primo step della carriera -->
          </div>

          <div class="timeline-item">
            <h3>2023</h3>
            <p>Ho lavorato per un'agenzia di marketing digitale, specializzandomi in design grafico e ottimizzazione
              SEO.</p> <!--  Esperienza in un'agenzia -->
          </div>

          <div class="timeline-item special">
            <h3>2025</h3>
            <p>Oggi continuo a crescere, offrendo servizi personalizzati a clienti in tutto il mondo.</p>
            <!--  Situazione attuale e prospettive future -->
          </div>

        </div>
      </section>

    </main>

    <?php include 'footer.php'; ?>

  </div>
</body>

</html>