<?php ob_start(); ?>

    <section>
        <article>
            <h1></h1>
            <p>Léo si ton GitHub marche bien tu dois voir cette ligne</p>
            <p></p>
        </article>
    </section>


<?php $contenu = ob_get_clean(); ?>
<?php require("gabarit/template.php"); ?>
