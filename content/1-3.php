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
        <h3>3.Syntaxes</h3>
        <br />
        <h4>Balises</h4>
        <p> <code>short_open_tag = on</code> : autorise <?php echo htmlentities('<? ... ?>'); ?><br />
            <code>asp_tags = on</code> : autorise <?php echo '<%'; ?><br />
            Par défaut les 2 sont desactivés.<br />
            <code><?php echo htmlentities('<?='); ?></code> : autorisé même sans <code>short_open_tag = on</code>.<br />
            <code>output_buffering = on</code> : contre les problemes de content avant la declaration des headers PHP</p>
        <br />
        <h4>Divers</h4>
        <p>Saut de ligne autorisés au milieu d'une instruction, ex:<br />
            <code>$a=2; $c<br />=3 </code><br />
            Le dernier ?> peut-être omis<br />
            Commentaires:<br />
            <code>/* multi-lignes */</code><br />
            <code># mono-ligne</code><br />
            <code>// mono-ligne</code><br />
        </p>
        




    </div> <!-- /container -->