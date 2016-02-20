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
$exemple=htmlentities("<?php $ xml = <<<XML
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<livre>
    <titre>Certification PHP 5.5</titre>
    <chapitre id=\"3\">
        <id>3</id>
        <titre>Formats et types de données</titre>
        <description>Gestion XML, JSON, Date et heure et
introduction aux services web REST et SOAP</description>
    </chapitre>
</livre>
XML;

function debutElement($parseur, $nom, $attributs)
{
    echo \"* Début élément : $nom<br/>\";
    $nbAttributs = count($attributs);
    echo \"- Nombre d’attributs : $nbAttributs<br />\";
    if ($nbAttributs > 0) {
        print_r($attributs);
        echo ’<br />’;
    }
}

function finElement($parseur, $nom)
{
   echo \"Fin élément $nom<br/><br/>\";
}

$parseur = xml_parser_create();
xml_set_element_handler($parseur, ’debutElement’, ’finElement’);
echo xml_parse($parseur, $xml, true);

/* Affiche :
* Début élément : LIVRE
- Nombre d’attributs : 0
* Début élément : TITRE
- Nombre d’attributs : 0
Fin élément TITRE

* Début élément : CHAPITRE
- Nombre d’attributs : 1
Array ( [ID] => 3 )
* Début élément : ID
- Nombre d’attributs : 0
Fin élément ID

* Début élément : TITRE
- Nombre d’attributs : 0
Fin élément TITRE

* Début élément : DESCRIPTION
- Nombre d’attributs : 0
Fin élément DESCRIPTION

Fin élément CHAPITRE

Fin élément LIVRE

1
*/");
?>







</div> <!-- /container -->