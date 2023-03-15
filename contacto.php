<?php include('header.php') ?>
<!-- Pie de Página -->
<section id="pie">
    <div class="contenedor">
        <h1 class="display-1" style="font-size: 29px;">Ponte en contacto con nosotros</h1>
        <p class="textopie">Toda la información que necesites con un solo click<br>
            Escríbenos a info@yogasis.es</p>
        <?php
        if (isset($_GET['ok']))
            echo "<h1>Su mensaje ha sido enviado con éxito</h1>"
        ?>
        <div>
            <form action="enviarconsulta.php" method="post">
                <input type="text" name="nombre" class="contactoinput" aria-placeholder="Nombre">
                <input type="text" name="apellido" class="contactoinput" aria-placeholder="Apellido">
                <input type="email" name="correo" class="contactoinput" aria-placeholder="Ingresa tu correo">
                <textarea name="mensaje" class="contactoinput" cols="40" rows="10">
                </textarea>
                <input type="submit" value="Enviar consulta" class="btn2">
            </form>
        </div>
        <!-- <a href="" class="btn">Escríbenos</a> -->
    </div>
</section>
<?php include('footer.php') ?>