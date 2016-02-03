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
        <h3>4.Type de données</h3>
        <br />
        <h4>Définition</h4>
        <ul>
            <li>Boolean</li>
            <li><a href="#int">Int</a></li>
            <li>Float, double</li>
            <li><a href="#string">String</a></li>
            <li>Tableau</li>
            <li>Object</li>
            <li>Ressource</li>
            <li>Null</li>
        </ul>
        <br />
        <h4 id="int">Entier, int</h4>
        <p> Un entier peut être en base 10, 2 (binaire), 8 (octale), 16(héxadécimale). Savoir convertir en différentes bases pour la certif.</p>
        <h5><b>Binaire (base de 2)</b></h5>
        Commence par 0b (b comme Binaire). Ex : Ob101100<SUB>2</SUB> = 44<sub>10</sub><br />
        La méthode conversion la plus simple est la suivante<br />
        <img src="./content/images/binaire.jpg" />
        <h5><b>Octale (base de 8)</b></h5>
        Commence par 0. Ex : 054<SUB>8</SUB> = 44<sub>10</sub><br />
        La méthode conversion la plus simple est d'utiliser la base 2 ou utiliser la méthode de calcul par division en remplaceant le 2 par le 8.<br />
        <img src="./content/images/octale.jpg" />
        <h5><b>Hexadécimale (base de 16)</b></h5>
        Commence par 0x (x comme HeXa). Ex : 0x2C<SUB>16</SUB> = 44<sub>10</sub><br />
        La méthode conversion la plus simple est d'utiliser la base 2 ou la base 8 puis convertir avec le tableau ci dessous<br />
        <img src="./content/images/hexadecimale.jpg" /><br />
        <br />
        <table class="table">
            <tr>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
            </tr>
            <tr>
                <td>0</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
                <td>F</td>
            </tr>
        </table>
        <h5><b>Revenir en base 10</b></h5>
        <code>0b2C<SUB>16</SUB> = (2*16<sup>1</sup>) + (12*16<sup>0</sup>) = 44<sub>10</sub></code><br />
        <code>054<SUB>8</SUB> = (5*8<sup>1</sup>) + (4*8<sup>0</sup>) = 44<sub>10</sub></code><br />
        <code>0b101100<SUB>2</SUB> = (1*2<sup>5</sup>) + (0*2<sup>4</sup>) + (1*2<sup>3</sup>) + (1*2<sup>2</sup>) + (0*2<sup>1</sup>) + (0*2<sup>0</sup>) = 44<sub>10</sub></code><br />
        <code>0b101100<SUB>2</SUB> = (1*32) + (0*16) + (1*8) + (1*4) + (0*2) + (0*1)= 44<sub>10</sub></code><br />
        <code>0b101100<SUB>2</SUB> = (32) + (8) + (4) = 44<sub>10</sub></code>
        <br />
        <h5><b>Fonctions utiles</b></h5>
        <p>
            <code>dechex($int)</code> : de base 10 vers 16.<br />
            <code>hexdec($int)</code> : de base 16 vers 10.<br />
            <code>octdec($int)</code> : de base 8 vers 10.<br />
            <code>decoct($int)</code> : de base 10 vers 8.<br />
            <code>base_convert($int, $baseFrom, $baseTo)</code> : de base $baseFrom vers $baseTo.<br />
        </p>
        <h5><b>Convertisseurs pour vérification et ou exercice</b></h5>
        <form id="convertisseur">
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Binaire (2)</span>
                  <input type="text" class="form-control" id="ConvertBinaire">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Octale (8)</span>
                  <input type="text" class="form-control"  id="ConvertOctale">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Décimale (10)</span>
                  <input type="text" class="form-control"  id="ConvertDecimale">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Hexadécimale (10)</span>
                  <input type="text" class="form-control"  id="ConvertHexadecimale">
                </div>
            </div>
        </form>
        <br />
        <h4 id="string">String</h4>
        <p> 
            Peut être entouré de apostrophes '<br />
            Peut être entouré de guillemets "<br />
            Peut être défini par <code>HEREDOC</code><br />
            Peut être défini par <code>NOWDOC</code>
        </p>
        <br />
        <h4 >Transtypage</h4>
        <p> 
            Quelques exemples spéciaux de transtypage<br />
            <code>'2' + 1 // 3<br />
                1 + '2 ftx' // 3<br />
                1 + '2.3' // 3.3<br />
                1 + '2<sub>e</sub>3' // 2001<br />
                1 + '2ea' // 3 <br />
                $z = (bool) array(); // FALSE<br />
                $a = (bool) 'MaChaine'; //TRUE<br />
                $a = (bool) ''; //FALSE<br />
                $b = (int) TRUE; // 1


            </code><br />
            Un objet avec aucun membre ou une variable convertit en BOOL donne TRUE<br />
            Fonctions utiles
            <p>
                <code>settype($var, $toType)</code><br />
                <code>strval ou intval</code><br />
            </p>

        



    </div> <!-- /container -->