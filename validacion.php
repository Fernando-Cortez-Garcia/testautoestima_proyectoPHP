<?php 
  $va=0;
  $vb=0;
  $vc=0;
  $vd=0;
  // $result=[0,0,0,0];
  // $narray = [];
  $valoresf=[0,0,0,0];
  $contadores=[];
 


  if(isset($_POST['enviar'])){
      //recorremos todas las preguntas
      $c1=0;
      $c2=0;
      $c3=0;
      $c4=0;
        for($i=0; $i<=10;$i++){
            $var;
            if($i==0){
              $var=$_POST['p1'];
              if($var =='a'){
                $valoresf[0]= 4;
                $c4++;
              }
              if($var =='b'){
                $valoresf[0]= 2;
                $c2++;
              
              }
              if($var =='c'){
                $valoresf[0]= 1;
                $c1++;
              
              }
              if($var =='d'){
                $valoresf[0]= 3;
                $c3++;
              
              }
            }
            if($i==1){
              $var=$_POST['p2'];
              if($var =='a'){
                $valoresf[1]= 3;
                $c3++;
              }
              if($var =='b'){
                $valoresf[1]= 1;
                $c1++;
              }
              if($var =='c'){
                $valoresf[1]= 4;
                $c4++;
              }
              if($var =='d'){
                $valoresf[1]= 2;
                $c2++;
              
              }
            }
            if($i==2){
                $var=$_POST['p3'];
                  
                  if($var =='a'){
                      $valoresf[2]= 2;
                      $c2++;
                    }
                    if($var =='b'){
                      $valoresf[2]= 4;
                      $c4++;
                    }
                    if($var =='c'){
                      $valoresf[2]= 3;
                      $c3++;
                    }
                    if($var =='d'){
                      $valoresf[2]= 1;
                      $c1++;
                    
                    }

            }
            if($i==3){
              $var=$_POST['p4'];
              if($var =='a'){
                $valoresf[3]= 1;
                $c1++;
              }
              if($var =='b'){
                $valoresf[3]= 3;
                $c3++;
              
              }
              if($var =='c'){
                $valoresf[3]= 2;
                $c2++;
              
              }
              if($var =='d'){
                $valoresf[3]= 4;
                $c4++;
              
              }
              

            }
            if($i==4){
              $var=$_POST['p5'];
              if($var =='a'){
                $valoresf[4]= 4;
                $c4++;
              }
              if($var =='b'){
                $valoresf[4]= 2;
                $c2++;
              
              }
              if($var =='c'){
                $valoresf[4]=1;
                $c1++;
              
              }
              if($var =='d'){
                $valoresf[4]= 3;
                $c3++;
              
              }
            }

            
            if($i==5){
              $var=$_POST['p6'];
              if($var =='a'){
                $valoresf[5]= 3;
                $c3++;
              }
              if($var =='b'){
                $valoresf[5]= 1;
                $c1++;
              
              }
              if($var =='c'){
                $valoresf[5]= 4;
                $c4++;
              
              }
              if($var =='d'){
                $valoresf[5]= 2;
                $c2++;
              
              }
            }

            
            if($i==6){
                  $var=$_POST['p7'];
                  if($var =='a'){
                    $valoresf[6]= 2;
                    $c2++;
                  }
                  if($var =='b'){
                    $valoresf[6]= 4;
                    $c4++;
                  
                  }
                  if($var =='c'){
                    $valoresf[6]= 3;
                    $c3++;
                  
                  }
                  if($var =='d'){
                    $valoresf[6]= 1;
                    $c1++;
                  
                  }
                }
            if($i==7){
              $var=$_POST['p8'];
              if($var =='a'){
                $valoresf[7]= 1;
                $c1++;
              }
              if($var =='b'){
                $valoresf[7]= 3;
                $c3++;
              
              }
              if($var =='c'){
                $valoresf[7]= 2;
                $c2++;
              
              }
              if($var =='d'){
                $valoresf[7]= 4;
                $c4++;
              
              }

            }
            if($i==8){
                $var=$_POST['p9'];
              if($var =='a'){
                  $valoresf[8]= 4;
                  $c4++;
                }
                if($var =='b'){
                  $valoresf[8]= 2;
                  $c2++;
                
                }
                if($var =='c'){
                  $valoresf[8]= 1;
                  $c1++;
                
                }
                if($var =='d'){
                  $valoresf[8]= 3;
                  $c3++;
                
                }
              }
            if($i==9){
              $var=$_POST['p10'];
              if($var =='a'){
                $valoresf[9] =3;
                $c3++;
              }
              if($var =='b'){
                $valoresf[9]= 1;
                $c1++;
              
              }
              if($var =='c'){
                $valoresf[9]= 4;
                $c4++;
              
              }
              if($var =='d'){
                $valoresf[9]= 2;
                $c2++;
              
              }
          }
          $valorM[0]=$c1;
          $valorM[1]=$c2;
          $valorM[2]=$c3;
          $valorM[3]=$c4;
   }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css" type="text/css">
        <title>Resultado Test de Autoestima</title>
    </head>
    <style>
        body{
            background:url("img/R.jpg") no-repeat center center fixed;
          -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        h1{
          text-align:center;
        }
        h2{
          font-weight: bold;
          font-size:20px;
        }
    </style>
    <body>
        <div class="container"id="principal">
            <h1 class="titulo">Resultado</h1>
          <!-- imprimimos los resultados -->
              <div class="container">
                  <?php
                  $numeros=[1,2,3,4];
                  //para imprimir prueba

                  // for ($i=0; $i < count($valoresf); $i++) { 
                  //   echo $valoresf[$i];
                  // } 
                      if($c1 > $c2 and $c1 > $c3 and $c1 >$c4){
                        echo '<h1>Te recomiendo trabajar en ti y quererte tal como eres 🙋‍♂️</h1><br><h2>
                        Tienes un nivel algo bajo de autoestima</h2><br>
                        <p>se nota en la valoración que haces 
                        de ti mismo, de tu trabajo y de tu fortuna en la vida. Una de las razones por las que percibimos 
                        más las cosas negativas es que estas son más destacables que las positivas. En la escuela o 
                        de niños en casa, siempre nos regañaban por lo malo pero se olvidaban de felicitamos por lo 
                        bueno. Para elevar el nivel de nuestra autoestima es necesario aceptarse tal como uno es y 
                        valorar más lo que somos y lo que tenemos. A veces puede parecer difícil, pero si practicas 
                        unos minutos diarios a pensar en las cosas positivas que tienes, irás poco a poco queriéndote 
                        más.
                        </p>';
                    
                      }
                      elseif($c2> $c1 and $c2 > $c3 and $c2 >$c4){
                        echo '<h1>Animo vales mucho 🙌</h1><br><h2>
                        Tu nivel de autoestima es suficiente</h2><br>
                        <p>Es suficiente pero más a menudo de lo que te gustaría, 
                        te falla y te abandona. Los sucesos negativos que nos pasan absorben más nuestros sentidos 
                        pues son más desagradables que las cosas positivas, por ello les damos más importancia de 
                        la que merecen y no nos fijamos en lo bueno con igual intensidad. Todas las personas 
                        tenemos cosas positivas y todos cometemos errores o tenemos días flojos. La clave está en 
                        darle a cada cosa el justo valor que tiene, ver los errores como maneras de aprendizaje y 
                        reconocer las cosas buenas que poseemos. También podemos aprender a queremos a 
                        nosotros mismos cuidándonos con más mimo y dándonos gustos.</p>';
                      }
                      elseif($c3 > $c1 and $c3 > $c2 and $c3 >$c4){
                        echo '<h1>Felicidades!! 👏</h1><br><h2>
                        Tu nivel de autoestima es muy bueno</h2><br>
                        <p>sabes dar a las cosas el valor que 
                        merecen, reconoces lo bueno y no te dejas amilanar fácilmente por las adversidades. Eres 
                        una persona sensata y realista que tiene confianza en sí misma, tus objetivos no son 
                        irrealizables y te gusta luchar para conseguirlos. Has aprendido que las cosas no salen 
                        siempre como quieres ni cuando quieres, que todo requiere un esfuerzo y que es normal 
                        equivocarse. Cuando tienes un error procuras aprender lo que este te enseña y a evitarlo en 
                        futuras ocasiones. Un buen nivel de autoestima nos hace tener más ganas de luchar por las
                        cosas, nos ayuda a no desistir en nuestro empeño de lograr algo y hace que la vida nos sea 
                        más amable y agradable.</p>';
                      }
                      elseif($c4 > $c1 and $c4 > $c2 and $c4 >$c3){
                        echo '<h1>Felicidades!! 😎</h1><br><h2>
                        Tienes un alto nivel de autoestima</h2><br>
                        <p>Tienes un alto nivel de autoestima y mucha confianza y seguridad en ti mismo. 
                        Ambos sentimientos son muy positivos y necesarios para conseguir mucho más de lo que nos 
                        proponemos, sin embargo, es preciso ser cautelosos. Al igual que una baja autoestima, un 
                        exceso de esta puede hacernos perder la objetividad de nuestras acciones, hacernos creer 
                        demasiado buenos en algo, y si sobreviene una decepción o un fracaso, hacernos sufrir más 
                        de lo razonable. También si nos creemos demasiado especiales podemos hacer daño a los 
                        demás minusvalorando su esfuerzo o no apreciándolo en lo que vale. Siempre conviene tener 
                        una dosis de modestia
                        </p>';
                      }
                      else  {
                        $valorM= max($valorM);
                        echo $valorM;
                        if($valorM==1){
                          echo '<h1>Te recomiendo trabajar en ti y quererte tal como eres 🙋‍♂️</h1><br><h2>
                          Tienes un nivel algo bajo de autoestima</h2><br>
                          <p>se nota en la valoración que haces 
                          de ti mismo, de tu trabajo y de tu fortuna en la vida. Una de las razones por las que percibimos 
                          más las cosas negativas es que estas son más destacables que las positivas. En la escuela o 
                          de niños en casa, siempre nos regañaban por lo malo pero se olvidaban de felicitamos por lo 
                          bueno. Para elevar el nivel de nuestra autoestima es necesario aceptarse tal como uno es y 
                          valorar más lo que somos y lo que tenemos. A veces puede parecer difícil, pero si practicas 
                          unos minutos diarios a pensar en las cosas positivas que tienes, irás poco a poco queriéndote 
                          más.
                          </p>';
                          
  
                        }
                        elseif($valorM==2){
                          echo '<h1>Animo vales mucho 🙌</h1><br><h2>
                          Tu nivel de autoestima es suficiente</h2><br>
                          <p>Es suficiente pero más a menudo de lo que te gustaría, 
                          te falla y te abandona. Los sucesos negativos que nos pasan absorben más nuestros sentidos 
                          pues son más desagradables que las cosas positivas, por ello les damos más importancia de 
                          la que merecen y no nos fijamos en lo bueno con igual intensidad. Todas las personas 
                          tenemos cosas positivas y todos cometemos errores o tenemos días flojos. La clave está en 
                          darle a cada cosa el justo valor que tiene, ver los errores como maneras de aprendizaje y 
                          reconocer las cosas buenas que poseemos. También podemos aprender a queremos a 
                          nosotros mismos cuidándonos con más mimo y dándonos gustos.</p>';
                        }
                        elseif($valorM==3){
                          echo '<h1>Felicidades!! 👏</h1><br><h2>
                          Tu nivel de autoestima es muy bueno</h2><br>
                          <p>sabes dar a las cosas el valor que 
                          merecen, reconoces lo bueno y no te dejas amilanar fácilmente por las adversidades. Eres 
                          una persona sensata y realista que tiene confianza en sí misma, tus objetivos no son 
                          irrealizables y te gusta luchar para conseguirlos. Has aprendido que las cosas no salen 
                          siempre como quieres ni cuando quieres, que todo requiere un esfuerzo y que es normal 
                          equivocarse. Cuando tienes un error procuras aprender lo que este te enseña y a evitarlo en 
                          futuras ocasiones. Un buen nivel de autoestima nos hace tener más ganas de luchar por las
                          cosas, nos ayuda a no desistir en nuestro empeño de lograr algo y hace que la vida nos sea 
                          más amable y agradable.</p>';
                        }
  
                        elseif($valorM==4){
                          echo '<h1>Felicidades!! 😎</h1><br><h2>
                          Tienes un alto nivel de autoestima</h2><br>
                          <p>Tienes un alto nivel de autoestima y mucha confianza y seguridad en ti mismo. 
                          Ambos sentimientos son muy positivos y necesarios para conseguir mucho más de lo que nos 
                          proponemos, sin embargo, es preciso ser cautelosos. Al igual que una baja autoestima, un 
                          exceso de esta puede hacernos perder la objetividad de nuestras acciones, hacernos creer 
                          demasiado buenos en algo, y si sobreviene una decepción o un fracaso, hacernos sufrir más 
                          de lo razonable. También si nos creemos demasiado especiales podemos hacer daño a los 
                          demás minusvalorando su esfuerzo o no apreciándolo en lo que vale. Siempre conviene tener 
                          una dosis de modestia
                          </p>';
                        }

                      }
                  ?>
              </div>
        </div>
    </body>
</html>