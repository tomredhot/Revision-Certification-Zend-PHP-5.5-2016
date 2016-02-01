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
        <h3>1.Configuration</h3>
        <h4>Principe</h4>
        <p>Le fichier de configuration PHP sur un serveur se nomme <b>php.ini</b>.<br />
        	Il contient différentes directives sur le comportement du language. Lors du chargement de PHP ce fichier est cherché à différent endroit (peut être donc overidé, notamment par user.ini en FASTCGI et CGI)</p>
        <h4>Gestion des erreurs</h4>
        <p>Voici les différentes valeurs (mixables entres elles) de la directive <b>error_reporting</b></p>
        <table class="table table-striped table-bordered">
        	<tr>
        		<td><code>E_ERROR</code></td>
        		<td>1</td>
        		<td>erreur critique. Interruption.</td>
        	</tr>
        	<tr>
        		<td><code>E_WARNING</code></td>
        		<td>2</td>
        		<td>erreur non critique. Pas d’interruption.</td>
        	</tr>
        	<tr>
        		<td><code>E_PARSE</code></td>
        		<td>4</td>
        		<td>erreur d’interprétation. Problème de syntaxe.</td>
        	</tr>
        	<tr>
        		<td><code>E_NOTICE</code></td>
        		<td>8</td>
        		<td>erreur informative. Probablement une variable non déclarée. Pas d’interruption.</td>
        	</tr>
        	<tr>
        		<td><code>E_CORE_ERROR</code></td>
        		<td>16</td>
        		<td>Idem [1] et [2] mais au niveau du cœur de PHP.</td>
        	</tr>
        	<tr>
        		<td><code>E_CORE_WARNING</code></td>
        		<td>32</td>
        		<td>Voir [16]</td>
        	</tr>
        	<tr>
        		<td><code>E_COMPILE_ERROR</code></td>
        		<td>64</td>
        		<td>Problème Zend Core. Interruption</td>
        	</tr>
        	<tr>
        		<td><code>E_COMPILE_WARNING</code></td>
        		<td>128</td>
        		<td>Problème Zend Core. Interruption.</td>
        	</tr>
        	<tr>
        		<td><code>E_STRICT</code></td>
        		<td>2048</td>
        		<td>Syntaxe déconseillée. Pas d’interruption.</td>
        	</tr>
        	<tr>
        		<td><code>E_RECOVERABLE_ERROR</code></td>
        		<td>4096</td>
        		<td>Idem [1] mais recoverable si gestionnaire d’erreur. Sinon Interruption</td>
        	</tr>
        	<tr>
        		<td><code>E_USER_ERROR</code></td>
        		<td>256</td>
        		<td>Idem [1] coté applicatif. Levées en utilisant trigger_error()</td>
        	</tr>
        	<tr>
        		<td><code>E_USER_WARNING</code></td>
        		<td>512</td>
        		<td>Idem [2] coté applicatif. Levées en utilisant trigger_error()</td>
        	</tr>
        	<tr>
        		<td><code>E_USER_NOTICE</code></td>
        		<td>1024</td>
        		<td>Idem [8] coté applicatif. Levées en utilisant trigger_error()</td>
        	</tr>        	
            <tr>
        		<td><code>E_USER_DEPRECATED</code></td>
        		<td>16384</td>
        		<td>Idem [8192] coté applicatif. Levées en utilisant trigger_error()</td>
        	</tr>        	
            <tr>
        		<td><code>E_ALL</code></td>
        		<td>32767</td>
        		<td>Toutes les erreurs sauf E_STRICT</td>
        	</tr>        	
            
        </table>
        <p>
            <code>error_reporting = E_ALL</code><br />
            <code>error_reporting = E_ALL & ~E_NOTICE</code><br />
            <code>display_errors = on</code> : affiche les erreurs dans le résultats (la page web). Activé pour la certification<br />
            <code>log_error = on</code> : active les logs<br />
            <code>error_logs = /chemin/error.log</code> chemin vers les logs (syslog pour système de log du serveur)<br />

        </p>



    </div> <!-- /container -->