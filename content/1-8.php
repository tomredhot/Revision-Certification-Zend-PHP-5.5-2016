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
    <h3>8.Structure de controle</h3>
    <br />
    <h4>if/elseif/else/switch</h4>
    <p>
        Standard if : <code>if($a<1 && 40<$b){ echo 'if';}else{echo 'else'; }</code><br />
        Sans accolade : <code>if($a<1 && 40<$b) echo 'if';</code><br />
        Sans accolade (2) : <br /><code>if($a<1 && 40<$b): <br />&nbsp;&nbsp;&nbsp;echo 'if'; <br />else: <br />&nbsp;&nbsp;&nbsp;echo 'else'; <br />endif;</code><br />
        Ternaire : <code>$val=($a==1)?'val1':'val2';</code><br />
        Switch :<br />
        <code>
            switch($valeur){ <br />
            &nbsp;&nbsp;&nbsp;case '1':<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo 1;<br />
            &nbsp;&nbsp;&nbsp;case '2':<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo 2;<br />
            &nbsp;&nbsp;&nbsp;default:<br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo 'val par defaut';<br />
            }
        </code>
    </p>
    <br />
    <h4>Boucle</h4>
    <p>
        while <code>
            while(condition){<br />
                // do something <br />
            }</code> Pas de références (alias)<br />

    </p>
    <br />
   




</div> <!-- /container -->