<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  BadWords</title>
</head>
<body>

    <!-- codice php -->
    <?php
		$lorem = 'olitamente i generatori di testi casuali più conosciuti con il termine inglese text random generator servono per avere testi di vario genere da copiare ed incollare, magari per testarne la disposizione o il colore su un sito web appena creato. Quindi non è importante il testo in sé ma avere un testo già scritto per riempire uno spazio vuoto, altrimenti la soluzione alternativa sarebbe stata premere tasti a caso della tastiera. Avete sentito parlare di Cicerone? Fu un avvocato, politico e scrittore romano; ed è lui colui che ha scritto Lorem Ipsum che è diventato il più utilizzato testo casu'
	?>

    <?php
        echo 
    ?>




	<form method="GET" action="">
		<label for="parola">inserisci parola</label>
		<input type="text" id="parola" name="parola">

        

		<button>invio</button>

        <h1>lunghezza paragrafo</h1> <?php echo strlen($lorem); ?>
    </form>

</body>
</html>