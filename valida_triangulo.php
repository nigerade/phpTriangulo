<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
		<title>Classificação do Triângulo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="php.css">
        <link rel="stylesheet" href="style.css">
    </head>
	<body> 
    <header id="header">
        <h2 class="header-h2"><a href="index.html" id="header-h2-a">Dev.</a></h2>

        <ul class="navlist">
            <li><a href="https://github.com/nigerade">Github</a></li>
            <li><a href="https://br.linkedin.com/in/nicholas-gerade-b21a8019b">Linkedin</a></li>
            <li><a href="https://nigerade.github.io/Portfolio2.0/">Portfolio</a></li>
        </ul>
    </header>

    <section id="container-php">
		<?php
        $n1 = $_GET["lado1"]; 
        $n2 = $_GET["lado2"];
        $n3 = $_GET["lado3"];

        echo 
        "<p class='lados'>
        Lado 1: $n1 </p>
        <p class='lados'>
        Lado 2: $n2 </p>
        <p class='lados'>
        Lado 3: $n3 </p>";
        
        if ($n1 == 0 || $n2 == 0 || $n3 == 0 || $n1 == "" || $n2 == "" || $n3 == "") {
            echo '<p class="texto">Digite um número qualquer ou Diferente de 0!!</p>';
        } else if ($n1 + $n2 <= $n3 || $n2 + $n3 <= $n1 || $n3 + $n1 <= $n2) {
            echo '<p class="texto">A soma de dois lados quaisquer não é menor que o terceiro lado</p>';
        } else {
            if ($n1 == $n2 && $n2 == $n3) {
                $imagem = "triangulo_equilatero.png";
                echo "<img src='$imagem' class='imagem'>";			
            } else if ($n1 == $n2 || $n2 == $n3 || $n1 == $n3) {
                $imagem = "triangulo_isosceles.png";	
                echo "<img src='$imagem' class='imagem'>";				
            } else {
                $imagem = "triangulo_escaleno.png";
                echo "<img src='$imagem' class='imagem'>";
            }
        }
		?>
    </section>

        <footer id="footer">
            <p>Nicholas Gerade &copy; - 2023</p>
        </footer>
    </body>
</html>
