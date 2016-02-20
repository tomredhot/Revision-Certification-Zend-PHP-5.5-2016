<?php
/*
### CREATOR : MALLEN Thomas
### PROJECT : Fiche de révision pour la certification ZCPE
### WEBSITE : http://www.thomas-mallen.fr/
### WEBSITE : http://www.dotlab.fr/
### 2016
### WITH BOOTSTRAP (http://getbootstrap.com/)
### BASED ON THE BOOK "Préparation à la certification ZCPE" ENI EDITIONS
*/
$index=file_get_contents('./content/exercices/chap1/index.php');
$htaccess=file_get_contents('./content/exercices/chap1/.htaccess');
$defaut=file_get_contents('./content/exercices/chap1/include/defaut.php');
$fonctions=file_get_contents('./content/exercices/chap1/include/fonctions.php');
$fonctions_namespace=file_get_contents('./content/exercices/chap1/include/fonctions_namespace.php');
$menu=file_get_contents('./content/exercices/chap1/include/menu.php');
$constantes=file_get_contents('./content/exercices/chap1/include/constantes.php');
?>
<div class="container">

    <h1>1.Base PHP</h1>
    <h3>9 Exercices</h3>
    <a href="./content/exercices/chap1.zip" class="btn btn-primary">Télécharger le zip</a>
    <br />
    <h4>Index.php</h4>
    <p>
        <pre><code class="language-php"><?php echo htmlspecialchars($index); ?></code></pre>
    </p>
    <br />
    <h4>.htaccess</h4>
    <p>
        <pre><code class="language-htaccess"><?php echo htmlspecialchars($htaccess); ?></code></pre>
    </p>
    <br />
    <h4>./include/constantes.php</h4>
    <p>
        <pre><code class="language-php"><?php echo htmlspecialchars($constantes); ?></code></pre>
    </p>
    <h4>./include/defaut.php</h4>
    <p>
    <pre><code class="language-php"><?php echo htmlspecialchars($defaut); ?></code></pre>
    </p>
    <h4>./include/fonctions.php</h4>
    <p>
    <pre><code class="language-php"><?php echo htmlspecialchars($fonctions); ?></code></pre>
    </p>
    <h4>./include/fonctions_namespace.php</h4>
    <p>
    <pre><code class="language-php"><?php echo htmlspecialchars($fonctions_namespace); ?></code></pre>
    </p>
    <h4>./include/menu.php</h4>
    <p>
    <pre><code class="language-php"><?php echo htmlspecialchars($menu); ?></code></pre>
    </p>







</div> <!-- /container -->