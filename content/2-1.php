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

    <h1>2.Formats & Types de données</h1>
    <h3>1.XML</h3>
    <br />
    <h4>Définition & extension</h4>
    <p><b>XML</b> = eXtensible Markup Language
        <br>extension simple pour lecture et ecriture d'XML : libxml (<code>--enable-libxml</code>, activée par défaut)</p>
    <br />
    <h4>Manipulation : XML Parser</h4>
    <p>Parseur de type SAX (simple Api Xml)<br />
        <code>$parser=xml_parser_create([$encodage])</code> : retourne la ressource parseur utile pour la suite.
        <br><code>$parser=xml_parser_create_ns([$encodage],[$separateur])</code> : idem précédents mais avec le support des espace de nom. (le separateur concerne les namespaces)
        <br><code>xml_set_element_handler($parseur,$functionDebut,$fonctionFin)</code> : post ou pre traitement des elements rencontrés dans le xml
        <br><code>xml_parse($parseur, $xml, true)</code> : lance le parse en utilisant la ressource $parseur et les fonctions de post et pré traitement defini par xml_set_element_handler.
        <br><code>xml_get_error_code() et xml_error_string()</code> : pour gerer les erreurs.
    </p>






</div> <!-- /container -->