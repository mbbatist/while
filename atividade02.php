
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form action="atividade02.php" method="POST">
            <table border="2" align="center" width="10%">
                <tr>
                    <td>Valor 1</td>
                    <td align="center"><input type="text" size="5" name="n1"></td>
                   
                </tr>
                 <tr>
                    <td>Valor 2</td>
                    <td align="center"><input type="text" size="5" name="n2"></td>
                    
                </tr>
                 <tr>
                     <td colspan="2" align="center"><input type="submit" value="Procurar" name="procurar"></td>
                </tr>
                </form></table> 
        <?php
        if(isset($_POST['procurar']))
        {
           $n1=$_POST['n1'];
           $n2=$_POST['n2'];

           if($n2<$n1)
        {
         echo"<center>Valor 2 deverá ser maior que valor 1!!!</center>";
        }
        else
          {
            $n1++;
         do{
             echo" $n1 ";
             $n1++;
           }
           while($n1 < $n2);
          }
        }?>
         </body>
</html>
