<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atv 25/03/2022</title>
</head>
<body>
<?php 
    $sal = 1200;
    echo   'Salário inicial: '.$sal;
    $sal = $sal * 1.15;
    echo    '<br>Salário com acréscimo de 15%: '.$sal;

    $alunos = [
        'ENIO FRANK DE ABREU',
        'BRUNO HENRIQUE SILVA FIM',
        'MOZART HENRIQUE MARQUES',
        'WALLISON RODRIGUES NOGUEIRA',
        'BRUNNA THAYMY DIAS PADILHA',
        'EDUARDO LUCAS PEREIRA',
        'VICTOR LUCA DE MELLO RODRIGUES',
        'FILIPE GUSTAVO PINHEIRO DOS SANTOS SILVA',
        'IAGO BRAGA DA SILVA',
        'JONATHAN SOARES DA SILVA',
        'LUCAS DIAS DA SILVA',
        'MANOEL JOSE DA SILVA JUNIOR',
        'IGOR PEREIRA DE SOUZA',
        'KELLY DOS SANTOS SOUZA',
        'ALAN SILVA VILELA',
        'PATRYCIA BARBOSA ZUCATELLI',
    ];
    echo '<br><br>Alunos presentes: ';
    for ($i=0; $i < 16; $i++) { 
        echo '<br>'.$alunos[$i];
    }
    $rs ='';
    if (isset($_POST['nome'])) {
        $rs = ($_POST['nota1']+$_POST['nota2']+$_POST['nota3']+$_POST['nota4'])/4;
        if ($rs>=6) {
            $rs =$_POST['nome'].' aprovado.';     
        }else{
            $rs =$_POST['nome'].' reprovado.';  
        }
    }
   
?>  
<form action="index.php" method="post">
    <br>
    <input type="text" name="nome" placeholder="Nome" id="">
    <br>
    <input type="text" name="nota1" placeholder="Nota 1" id="">
    <br>
    <input type="text" name="nota2" placeholder="Nota 2" id="">
    <br>
    <input type="text" name="nota3" placeholder="Nota 3" id="">
    <br>
    <input type="text" name="nota4" placeholder="Nota 4" id="">
    <input type="submit" value="Enviar">
    <?php echo '<br><br>'.$rs?>
</form>  
</body>
</html>