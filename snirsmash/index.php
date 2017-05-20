<?php ob_start(); ?>

    <section>
        <article>
            <h1></h1>
        </article>
    </section>


<?php $contenu = ob_get_clean(); ?>
<?php require("gabarit/template.php"); ?>
