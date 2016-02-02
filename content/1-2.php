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
        <h3>2.Performances</h3>
        <br />
        <h4>Garbage Collection (ramasse-miette)</h4>
        <p>Libération cyclique de la mémoire (des variables). Par defaut 10 000 racines.<br />
            <code>zend.enable_gc = false</code> : désactivation (php.ini)<br />
            <code>void gc_enable(void)</code> : fonction d'activation (script)<br />
            <code>void gc_disable(void)</code> : fonction de desactivation (script)<br />
            <code>int gc_collect_cycles(void)</code> : vide le GC et retourne le nombre de cycle</p>
        <br />
        <h4>Cache Bytecode</h4>
        <p>Pré-processing des sources</p><br />
        <h4>Extension OPCache</h4>
        <p> Extension de Zend pour le cache depuis 5.5. Activée de base. 3 fonctions utiles :<br /> 
            <code>boolean opcache_compile_file(string $file)</code> : mise en cache sans appel du fichier $file<br />
            <code>boolean opcache_invalidate(string $file, boolean $force)</code> : invalidation de $file<br />
            <code>boolean opcache_reset (void)</code> : reset complet du cache OPCache.
        </p>




    </div> <!-- /container -->