<?php
// Inizializzazione delle variabili
$nome = $cognome = $email = $telefono = $tipo = $messaggio = "";
$nomeErr = $cognomeErr = $emailErr = $tipoErr = $messaggioErr = "";

// Controlla se il modulo è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Validazione Nome
    if (empty($_POST["nome"])) {
        $nomeErr = "Il nome è obbligatorio.";
    } else {
        $nome = htmlspecialchars(trim($_POST["nome"]));
    }

    // Validazione Cognome
    if (empty($_POST["cognome"])) {
        $cognomeErr = "Il cognome è obbligatorio.";
    } else {
        $cognome = htmlspecialchars(trim($_POST["cognome"]));
    }

    // Validazione Email
    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Inserisci un'email valida.";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    // Il telefono non è obbligatorio, quindi lo sanitizziamo solo se presente
    $telefono = !empty($_POST["telefono"]) ? htmlspecialchars(trim($_POST["telefono"])) : "";

    // Validazione Tipo di Richiesta
    if (empty($_POST["tipo"])) {
        $tipoErr = "Seleziona un'opzione.";
    } else {
        $tipo = htmlspecialchars(trim($_POST["tipo"]));
    }

    // Validazione Messaggio
    if (empty($_POST["messaggio"])) {
        $messaggioErr = "Il messaggio è obbligatorio.";
    } else {
        $messaggio = htmlspecialchars(trim($_POST["messaggio"]));
    }

    // Se non ci sono errori, salva il messaggio
    if (empty($nomeErr) && empty($cognomeErr) && empty($emailErr) && empty($tipoErr) && empty($messaggioErr)) {
        $data = "Nome: $nome $cognome\nEmail: $email\nTelefono: $telefono\nTipo di Richiesta: $tipo\nMessaggio: $messaggio\n-----------------\n";
        file_put_contents("messaggi.txt", $data, FILE_APPEND);
        $successMessage = "Messaggio inviato con successo!";
        
        // Reset dei campi per evitare reinvio con gli stessi dati
        $nome = $cognome = $email = $telefono = $tipo = $messaggio = "";
    }
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contattami</title>
    <link rel="stylesheet" href="../scss/style.css">
    <?php include 'header.php'; ?>
    </head>

<body>

    <div class="container">

        <main class="contatti">
            <h1>Contattami</h1>
            <p>Scrivimi un messaggio e ti risponderò al più presto!</p>

            <?php if (isset($successMessage)) echo "<p class='success'>$successMessage</p>"; ?>

            <form action="contatti.php" method="post" novalidate>
                <div class="form-row">
                    <div class="input-group">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
                        <span class="error"><?php echo $nomeErr; ?></span>
                    </div>
                    <div class="input-group">
                        <label for="cognome">Cognome:</label>
                        <input type="text" id="cognome" name="cognome" value="<?php echo $cognome; ?>">
                        <span class="error"><?php echo $cognomeErr; ?></span>
                    </div>
                </div>

                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>">
                    <span class="error"><?php echo $emailErr; ?></span>
                </div>

                <div class="input-group">
                    <label for="telefono">Telefono:</label>
                    <input type="tel" id="telefono" name="telefono" value="<?php echo $telefono; ?>">
                </div>

                <div class="input-group">
                    <label for="tipo">Tipo di richiesta:</label>
                    <select id="tipo" name="tipo">
                        <option value="" disabled <?php echo empty($tipo) ? 'selected' : ''; ?>>Seleziona un'opzione</option>
                        <option value="informazioni" <?php echo ($tipo == "informazioni") ? 'selected' : ''; ?>>Informazioni Generali</option>
                        <option value="preventivo" <?php echo ($tipo == "preventivo") ? 'selected' : ''; ?>>Richiesta Preventivo</option>
                        <option value="supporto" <?php echo ($tipo == "supporto") ? 'selected' : ''; ?>>Supporto Tecnico</option>
                        <option value="collaborazione" <?php echo ($tipo == "collaborazione") ? 'selected' : ''; ?>>Proposta di Collaborazione</option>
                    </select>
                    <span class="error"><?php echo $tipoErr; ?></span>
                </div>

                <div class="input-group">
                    <label for="messaggio">Messaggio:</label>
                    <textarea id="messaggio" name="messaggio"><?php echo $messaggio; ?></textarea>
                    <span class="error"><?php echo $messaggioErr; ?></span>
                </div>

                <button type="submit" name="submit">Invia</button>
            </form>
        </main>

        <?php include 'footer.php'; ?>
    </div>

</body>
</html>