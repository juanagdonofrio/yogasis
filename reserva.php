<?php include('header.php') ?>
<!-- Packs -->
<section id="descripcion">
  <div class="contenedor">
    <h3 class="display-2">Elige un plan</h3>
    <p class="display-3">Tenemos tu opción perfecta</p>
    <ul id="menu">
      <li><a href="reserva.php?nom=ini">Inicial</a></li>
      <li><a href="reserva.php?nom=int">Intermedio</a></li>
      <li><a href="reserva.php?nom=ava">Avanzado</a></li>
    </ul>
  </div>
</section>
<?php
$nombre = '';
$clases = '';
$precio = '';
$info = '';
$img = '';
if (isset($_GET['nom'])) {
  switch ($_GET['nom']) {
    case 'ini':
      $nombre = 'Inicial';
      $clases = 'Clases semanales: 2';
      $precio = 'Precio mensual: 30€';
      $info = 'Si no tienes experiencia previa';
      $img = "./img/yogaini.jpg";
      break;
    case 'int':
      $nombre = 'Intermedio';
      $clases = 'Clases semanales: 3';
      $precio = 'Precio mensual: 50€';
      $info = 'Si ya has practicado anteriormente';
      $img = "./img/yogaint.jpg";
      break;
    case 'ava':
      $nombre = 'Avanzado';
      $clases = 'Clases semanales: 5';
      $precio = 'Precio mensual: 80€';
      $info = 'Eres un yoguini experimentado';
      $img = "./img/yogaava.jpg";
      break;
  }
}
?>
<section id="descripcion">
  <div class="linea">
    <h4><?php echo "$nombre" ?></h4>
    <p><?php echo $clases ?></p>
    <p><?php echo $precio ?></p>
    <p><?php echo $info ?></p>
    <img src="<?php echo $img ?>" alt="<?php echo $nombre ?>">
  </div>
</section>


<?php include('footer.php') ?>