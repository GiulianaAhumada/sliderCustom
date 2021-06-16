<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel = " stylesheet " href = "Styles/estiloSlider.css" >
    <title>Parte 3: Redimensionamos las imágenes</title>
</head>
<body>
<?php

include("redimensionarImg.php");

move_uploaded_file($_FILES['foto1']['tmp_name'],$_FILES['foto1']['name']);
$imagen1=redimensionarImg($_FILES['foto1']['name'], 700, 400);

move_uploaded_file($_FILES['foto2']['tmp_name'],$_FILES['foto2']['name']);
$imagen2=redimensionarImg($_FILES['foto2']['name'], 700, 400);

move_uploaded_file($_FILES['foto3']['tmp_name'],$_FILES['foto3']['name']);
$imagen3=redimensionarImg($_FILES['foto3']['name'], 700, 400);



unlink($_FILES['foto1']['name']);
unlink($_FILES['foto2']['name']);
unlink($_FILES['foto3']['name']);

 
 
  
?>
    <div class="container-all">

        <input type="radio" id="1" name="image-slide" hidden/>
        <input type="radio" id="2" name="image-slide" hidden/>
        <input type="radio" id="3" name="image-slide" hidden/>

        <div class="slide">

            <div class="item-slide">
                <?php echo '<img src="images/'.$imagen1.'">'; ?>
            </div>

            <div class="item-slide">
                <?php echo '<img src="images/'.$imagen2.'">'; ?>
            </div>

            <div class="item-slide">
                <?php echo '<img src="images/'.$imagen3.'">';  ?>
            </div>

        </div>

        <div class="pagination">
           
            <label class="pagination-item" for="1">
            <?php echo '<img src="images/'.$_FILES['foto1']['name'].'">'; ?>
            </label>
            
            <label class="pagination-item" for="2">
            <?php echo '<img src="images/'.$_FILES['foto2']['name'].'">'; ?>
            </label>
            
            <label class="pagination-item" for="3">
            <?php echo '<img src="images/'.$_FILES['foto3']['name'].'">'; ?>
            </label>
            
        </div>
        
    </div>

<footer>
    
    <div class="footer1">
    Ahumada Giuliana <br>
    Domancich Tomás <br>
    Luna Martina <br>
    Rodriguez Virginia 
   </div>
   <div class="footer2">
    Profesora:López María de los Ángeles <br>  
    7mo 1era Programación<br>
    Parte 3: Redimensionamos las imágenes<br>
    GRUPO 10
   </div>
</footer>
</body>
</html>