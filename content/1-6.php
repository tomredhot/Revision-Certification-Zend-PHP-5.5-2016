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
        <h3>6.Namespace</h3>
        <br />
        <h4>Déclaration</h4>
        <p><code>namespace monApp;<br />
            namespace monApp\db\adapter;
            </code>
            <br /> Peut être précédé seulement de <code>declare(encoding='UTF-8');</code>.<br />
            Si aucun spacename n'est déclaré ou si [voir exemple suivant], le spacename est global (comme si aucun spacename n'est déclaré)<br /><code>namespace { <br />
              class maClasse {} <br />
            }</code></p>
        <h4>Multi-déclaration</h4>
        <p>
           <code>namespace monApp\db\adapter; <br />
                class mysql {} <br /><br />
                namespace autreApp; <br />
                class mysql {} <br /><br />
                namespace maLibrarie { <br />
                  class mysql {} <br />
                } <br /><br />
                namespace { <br />
                  class mysql{} <br />
                }
            </code><br />
            Les déclarations avec accolades ne sont pas compatibles avec celles sans accolades.
        </p>
        <br />
        <h4>Accès</h4>
        Globalement, les adresses de namespace se comporte comme une url : chemin absolu, relatif, dossier courant etc...<br />
        Pour pouvoir les utiliser: use<br />

        <code>
            use monApp\db\adapter\mysql; <br />
            use monApp\db\adapter\mysql,OtherApp\db\adapter\mysql; <br />
            use monApp\db\adapter\mysql as M; // alias <br />
            $o = new M();<br />
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