<?php
/* 
Snack 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/ 

$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';

$length_name = strlen($name);

/* 
if($length_name > 3 && (strpos($mail,'@') && strpos($mail,'.')) && is_numeric($age) ){
    echo 'Accesso Riuscito';
} else {
    echo 'Accesso Negato';
} */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
<form action="index.php">
  <label for="fname">Inserisci il nome:</label>
  <input type="text" name="name" ><br><br>
  <label for="lname">Inserisci la tua email:</label>
  <input type="email" name="mail"><br><br>
  <label for="fname">Inserisci la tua età:</label>
  <input type="text" name="age" ><br><br>
  <button type="submit">Invia</button>  
</form>

<?php if($length_name > 3 && (strpos($mail,'@') !== false && strpos($mail,'.') !== false) && is_numeric($age)) : ?>
    <p>Accesso Riuscito</p>
<?php else : ?>
    <p>Accesso Negato</p>
<?php endif;?>

    
    
</body>
</html>