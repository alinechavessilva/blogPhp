           <?php

               $titulo=$_POST['titulo'];
               $texto=$_POST['textoposte'];
               $autor=$_POST['autor'];
               $hora = date('h:i:s');
               $data = date('Y-m-d'); //esta variável deverá ser apagada caso não seja usada
               $data_hora = "$data $hora";

               //abrindo conexão com banco
               include 'conectabanco.php';

               mysql_query("insert into poste(texto,hora,dt,titulo,autor) values ('$texto','$data_hora','$data','$titulo','$autor')");
                    
               $poste=mysql_query("select * from poste");
               $dados4=mysql_query("select * from poste order by id desc limit 4");
               $valores=mysql_fetch_array($poste);

                   

               // while($row = mysql_fetch_array($dados4)){
               //           echo $row['titulo']."<br>";
               //           echo nl2br($row['texto'])."<br>";
               //           echo $row['autor']."<br>";
               //           echo $row['dt']."<br>";
               //           echo $row['hora']."<br>";

               //       }

               header("location:admin.php");

               ?>
            
