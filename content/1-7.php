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
    <h3>7.Opérateurs</h3>
    <br />
    <h4>Divers</h4>
    <p>
        Modulo (reste de la division) <code>48 % 7 // 6</code><br />
        Prédécrementation <code>--$a.'-'.$a // 4-4</code><br />
        Postincrémentation <code>$a++.'-'.$a // 4-5</code><br />
        Sur bool <code>$a.'-'.++$a // FALSE-TRUE</code><br />
        Sur string <code>$a.'-'.++$a // C-D</code> (décrémentation impossible)<br />
    </p>
    <br />
    <h4>Affectations</h4>
    <p>
        <code>
            $var='test';<br />
            $var=$var2='test'; </code> Pas de références (alias)<br />
        <b>Référence (Alias)</b>
        <br />
        <code>$var1=0; <br/>
            $var1 =& $var2; <br/>
            $var1 = 10;<br>
            echo $var2; // 10<br>
        </code>
    </p>
    <br />
    <h4>Opérateurs de comparaisons</h4>
    <p>
        Egal <code>$a == $b</code><br />
        Meme valeur et même type <code>$a === $b</code><br />
        Différent <code>$a != $b</code><br />
        Valeur ou type différent <code>$a !== $b</code><br />
        Sup ou egal <code>$a >= $b</code><br />
        Strictement inferieur <code>$a < $b</code><br />
        <b>Transtypage lors de comparaison :</b><br />
        String convertie en leurs valeurs dans la table ASCII<br />
        Bool en 1 ou 0, NULL en string vide<br />
        Objet ou table > all dans tous les cas.<br />

    </p>
    <br />
    <h4>Opérateurs combinés</h4>
    <p>
        <code>
            $a = 1;<br>
            $a += 3; // 4<br>
            $a <<= 1; // 8 (4+4<sup>1</sup>)<br>
        </code>
    </p>
    <br />





</div> <!-- /container -->