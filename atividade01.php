
<html>
    <head>
        <meta charset="UTF-8">
        <title>Atividade 01</title>
    </head>
    <body>
        <form action="atividade01.php" method="POST">
            <table border="2" align="center">
                <Tr>
                    <td>Entre com um numero</td>
                    <td><input type="text" size="5" name="numero"></td>
                </Tr>
                <Tr>
                    <td colspan="2" align="center"><input type="submit" value="Procurar" name="procurar"></td>
                    
                </Tr>
            </table>
        </form>
        <?php
        if(isset($_POST['procurar']))
        {
         $numero=$_POST['numero'];
         $procurar=$_POST['procurar'];
         $n=0;
         while($n<=$numero)
             {
             
             echo " $n ";
             $n++;
         }
        }
        ?>
    </body>
</html>
