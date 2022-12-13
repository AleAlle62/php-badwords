<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- titolo  -->
    <title>PHP  BadWords</title>
    <!-- css  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- codice php -->
    <div class="primop">
        <?php
            $lorem = 'solitamente i generatori di testi casuali più conosciuti con il termine inglese text random generator servono per avere testi di vario genere da copiare ed incollare, magari per testarne la disposizione o il colore su un sito web appena creato. Quindi non è importante il testo in sé ma avere un testo già scritto per riempire uno spazio vuoto, altrimenti la soluzione alternativa sarebbe stata premere tasti a caso della tastiera. Avete sentito parlare di Cicerone? Fu un avvocato, politico e scrittore romano; ed è lui colui che ha scritto Lorem Ipsum che è diventato il più utilizzato testo casu';
        ?>
    </div>
    <h1> paragrafo: 
        <h3><?= $lorem?></h3>
    </h1>
    <h1 class="corretto">lunghezza paragrafo: <?php echo strlen($lorem); ?> parole</h1> 
    <?php $lorem_due = $_GET['lorem_due']?>
	<form method="GET" action="">
		<label for="lorem_due">inserisci parola</label>
		<input type="text" id="lorem_due" name="lorem_due">
		<button>invio</button>
    </form>
    <?php 
        $testo = 'solitamente i generatori di testi casuali più conosciuti con il termine inglese text random generator servono per avere testi di vario genere da copiare ed incollare, magari per testarne la disposizione o il colore su un sito web appena creato. Quindi non è importante il testo in sé ma avere un testo già scritto per riempire uno spazio vuoto, altrimenti la soluzione alternativa sarebbe stata premere tasti a caso della tastiera. Avete sentito parlare di Cicerone? Fu un avvocato, politico e scrittore romano; ed è lui colui che ha scritto Lorem Ipsum che è diventato il più utilizzato testo casu';
        $cerca = $_GET['lorem_due'];
        $sosituisci = "***";
    ?>
    <h4> parola corretta: <?php echo ${lorem_due};?>   
        <h2><?php echo str_replace($cerca, $sosituisci, $testo);?></h2> 
        <h4 class="corretto">lunghezza lettere corrette: <?php echo strlen($lorem_due); ?> lettere</h4> 
    </h4 class="corretto">  
</body>
</html>