<?php 
/*
### CREATOR : MALLEN Thomas
### PROJECT : Fiche de révision pour la certification ZCPE
### WEBSITE : http://www.thomas-mallen.fr/
### WEBSITE : http://www.dotlab.fr/
### 2016
### WITH BOOTSTRAP (http://getbootstrap.com/)
### BASED ON THE BOOK "Préparation à la certification ZCPE" ENI EDITIONS
*/ ?>
    <div class="container">

        <h1>1.Base PHP</h1>
        <h3>5.Variable et constante</h3>
        <br />
        <h4>Variables dynamiques</h4>
        <p> <code>$a="b";<br />
            $b="Bonjour, je suis la var $b";<br /> 
            echo $$a; // Bonjour je suis la var $b</code>
        </p>
        <p>
           Variables Dynamiques "sans nom" : <br />
            <code>$a='';<br /> 
            ${''}='Bonjour, je suis une var sans nom'; <br /> 
            echo $$a; // Bonjour je suis une var sans nom
            </code>
        </p>
        <br />
        <h4>Variables Globale</h4>
        Accesible dans dans le contexte globale. Pour modifier une variable Global il faut être dans le contexte global (hors d'une fonction par exemple) <br />
        <code>function TestGlobal(){ <br />
            &nbsp;&nbsp;&nbsp;&nbsp;echo $GLOBALS['a']; <br />
        } <br />
        $a="Je suis une variable globale"; <br />
        TestGlobal(); // Je suis une variable globale <br />
        </code>
        <br />
        <h4>Fonctions Utiles</h4>
        <p>
            <code>  $a="";<br />
                    $b="J'existe";<br />
                    isset($a); // TRUE<br />
                    isset($b); // TRUE<br />
                    if(TRUE === isset($a)){ }
            </code><br />
            <code>unset(); // detruire une var
            </code>
        </p>
        <br />
        <h4>Constante</h4>
        <code>
            define('constant1', 'valeur de ma constante 1'); <br />
            define('Constant2','1122', TRUE); // CASE UNSENSITIVE<br />
            const constant3 = 123; // CASE SENSITIVE<br />
        </code>
        Si appelle d'une constante non défini (ex : <code>echo constantNonDefini;</code> ) se comporte comme si le nom est un string + retourne une <code>E_NOTICE</code><br />
        Une constante (sauf les constantes de classe) sont défini dans le contexte globale avec la même portée qu'une variable globale
        




    </div> <!-- /container -->