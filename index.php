<?php  include("includes/header.php");?>


<div class="container" id="principal">

  <h1 class="titulo">Test de Autoestima</h1>
  <form id="Forma" method="POST" action="validacion.php">

              <div class="preguntas">
                     <p class="p_preguntas">1. A la hora de tomar decisiones en tu vida, como proponer cosas   nuevas en el trabajo, 
                     iniciar alguna actividad de ocio, o elegir un color nuevo para pintar tu casa, ¿sueles 
                     buscar la aprobación o el apoyo de las personas que te rodean?   
                     </p>
                     <span class="letras"> a) </span> <input id="rd1" type="radio" name="p1" value="a" required> No, consideras que tu opinión sea buena y  que la de los demás no tenga por qué 
                     serlo siempre.</input><br>
                     <span class="letras"> b) </span> <input id="rd1" type="radio" name="p1" value="b" > Sí, pero sólo ante las decisiones que       consideras demasiado importantes como 
                     para actuar precipitadamente.
                     </input><br>
                     <span class="letras"> c) </span> <input id="rd1" type="radio" name="p1" value="c" > Sí, siempre que puedes consultas con los demás. Te equivocas con frecuencia y 
                     quieres hacer las cosas bien.</input><br>
                     <span class="letras"> d) </span> <input id="rd1" type="radio" name="p1"  value="d" > Depende de la decisión. Sueles tener claro lo que vas a hacer, pero consideras 
                     las posibilidades que te ofrecen los demás.</input><br>
              </div>

              <hr>

              <div class="preguntas">
                     <p class="p_preguntas">2. Imagina que estás en una reunión social o familiar  importante;   adviertes que 110 vas 
                     vestido para la ocasión y que desentonas con los demás, ¿cómo te comportas?
                     </p>
                     <span class="letras"> a) </span><input id="rd2" type="radio" name="p2" value="a" required> No le das importancia, te comportas con naturalidad y si alguien te lo comenta 
                     haces alguna broma al respecto.</input><br>
                     <span class="letras"> b) </span> <input id="rd2" type="radio" name="p2" value="b" > Te da mucha vergüenza. Procuras situarte en algún lugar discreto y pasar 
                     desapercibido.
                     </input><br>
                     <span class="letras"> c) </span><input id="rd2" type="radio" name="p2" value="c" > Te sientes incómodo pero tratas de no pensar en ello, te integras en la reunión y 
                     das alguna excusa por tu error.</input><br>
                     <span class="letras">d) </span> <input id="rd2" type="radio" name="p2"  value="d" > No te importa nada en absoluto, aunque no lleves la ropa adecuada tienes estilo 
                     y sabes llevar bien cualquier cosa. </input><br>
              </div>

              <hr>

              <div class="preguntas">
                     <p class="p_preguntas">3. Tienes muchas ganas de irte a comprar ropa y le pides a algún amigo que te acompañe. 
                     Esta persona es más alta y más atractiva que tú, y todo lo que se prueba le queda mucho 
                     mejor que a ti.
                     </p>
                     <span class="letras"> a) </span><input id="rd3" type="radio" name="p3" value="a" required> Admiras el estilo de tu acompañante, al final compras un par de prendas 
                     necesarias pero muy simples en cuanto a forma y color.</input><br>
                     <span class="letras"> b) </span> <input id="rd3" type="radio" name="p3" value="b" > No estás dispuesto a que te gane, decides comprar varias prendas muy 
                     modernas y bastante caras.
                     </input><br>
                     <span class="letras"> c) </span><input id="rd3" type="radio" name="p3" value="c" > Admiras su estilo pero eres muy consciente del tuyo, compras la ropa que mejor 
                     te sienta y que necesitas, y pasáis un rato ameno probándoos cosas diferentes.

                      </input><br>
                     <span class="letras">d) </span> <input id="rd3" type="radio" name="p3"  value="d" > A su lado te sientes bastante poca cosa, te quita las ganas de probarte nada y 
                     mucho menos de comprar. Pones una excusa y te marchas. </input><br>
              </div>

              <hr>

              <div class="preguntas">
                     <p class="p_preguntas">4. Un día conoces a alguien nuevo y muy interesante, estáis  charlando animadamente y 
                     llega el momento de hablar de ti, ¿cuál de las siguientes opciones mejor se ajusta a lo 
                     que cuentas?
                     </p>
                     <span class="letras"> a) </span><input id="rd4" type="radio" name="p4" value="a" required> No crees que tengas mucho que contar, tu trabajo es muy corriente, tus amigos 
                     son normales y tus aficiones también. Prefieres que esta persona te cuente su vida.</input><br>
                     <span class="letras"> b) </span> <input id="rd4" type="radio" name="p4" value="b" > Tu trabajo te gusta y aunque sea corriente, siempre lo enfocas desde una 
                     perspectiva interesante, tus aficiones son tu pasión y disfrutas hablando de ellas, 
                     también hablas de tus proyectos futuros.
                      </input><br>
                     <span class="letras"> c) </span><input id="rd4" type="radio" name="p4" value="c" > Hablas en líneas        generales de tu trabajo y de tus aficiones, sobre todo hablas de 
                     tus amigos y de lo más interesante de sus vidas.
                     </input><br>
                     <span class="letras"> d) </span><input id="rd4" type="radio" name="p4" value="d" > Más que de tu trabajo actual, hablas de tus proyectos y de tus objetivos, y de lo 
                     que vas a hacer para logrados, de lo buenas que son tus amistades y lo poco 
                     usual de tus aficiones. Te gusta hablar de ti.</input><br>
              </div>

              <hr>

              <div class="preguntas">
                     <p class="p_preguntas">5. En tu lugar de trabajo o de estudios, se está explicando algo que es completamente 
                            nuevo para ti. Llega un momento en que te das cuenta que no has entendido casi nada
                            ¿qué haces?
                     </p>
                      <span class="letras"> a) </span><input id="rd5" type="radio" name="p5" value="a" required> Paras la explicación y requieres que se empiece de nuevo, si tu no lo entiendes 
                     habrá mucha gente que tampoco lo haga</input><br>
                     <span class="letras"> b) </span> <input id="rd5" type="radio" name="p5" value="b" > Si hay más gente que pregunte tu también lo haces, si no, buscas en un aparte al 
                     ponente para que te aclare las dudas.
                     </input><br>
                     <span class="letras"> c) </span><input id="rd5" type="radio" name="p5" value="c" > Te da mucha vergüenza  preguntar y demostrar así que no entiendes. Más tarde 
                     preguntarás a algún amigo o intentarás informarte por tu cuenta.
                      </input><br>
                     <span class="letras"> d) </span><input id="rd5" type="radio" name="p5" value="d" > Tomas nota de lo que no entiendes para preguntarlo al finalizar la charla, si 
                      sigues con dudas pedirás información complementaria para prepararte mejor</input><br>
              </div>

              <hr>

              <div class="preguntas">
                     <p class="p_preguntas">6. Tener un trabajo bien remunerado y que nos guste es algo difícil de conseguir, si 
                     tuvieras que valorar tu empleo o tu situación laboral, ¿cómo la definirías?
                     </p>
                     <span class="letras"> a) </span><input id="rd6" type="radio" name="p6" value="a" required> Satisfactoria, tratas de buscar el lado positivo de las cosas y nunca te faltan 
                     proyectos y objetivos que perseguir.
                      </input><br>
                     <span class="letras"> b) </span> <input id="rd6" type="radio" name="p6" value="b" > Horrible, no obstante, sabes que las cosas están mal y que tienes que aguantar 
                     lo que sea. Estás muy agradecido por tener trabajo
                      </input><br>
                      <span class="letras"> c) </span><input id="rd6" type="radio" name="p6" value="c" > No te preocupa especialmente el tema, tienes un montón de proyectos más 
                     importantes y con tu valía los alcanzarás.
                      </input><br>
                      <span class="letras"> d) </span><input id="rd6" type="radio" name="p6" value="d" > Has logrado que no te afecte, consideras más importante tu vida personal y 
                       privada y eso es por lo que luchas</input><br>
              </div>

              <hr>

              <div class="preguntas">
                     <p class="p_preguntas">7. Has tenido un día duro, has trabajado con más ahínco para finalizar una tarea en la 
                             oficina, has hecho todas las gestiones que tenías pendientes, has resuelto un par de 
                            problemas domésticos y encima le has hecho un favor a un amigo. ¿Qué haces al llegar 
                             a casa?
                     </p>
                     <span class="letras"> a) </span><input id="rd7" type="radio" name="p7" value="a" required> Prefieres no pensarlo, el día ha sido duro pero para ti no es algo nuevo, solo 
                     pides poder dormir bien y que mañana sea un día más tranquilo.
                     </input><br>
                     <span class="letras"> b) </span> <input id="rd7" type="radio" name="p7" value="b" > Se lo cuentas a todo el mundo, te gusta que se te reconozca cuando haces las 
                     cosas bien y exiges en casa que te mimen por haberte esforzado tanto.
                      </input><br>
                      <span class="letras"> c) </span><input id="rd7" type="radio" name="p7" value="c" > Estás muy satisfecho y decides darte un capricho, darte un baño de espuma y 
                     ver una buena película, o comprarte un regalito que hace tiempo querías.
                     </input><br>
                     <span class="letras"> d) </span><input id="rd7" type="radio" name="p7" value="d" > Te preocupa que se te haya olvidado algo o haber hecho algo mal por la prisa, 
                     repasas mentalmente las actividades y al día siguiente esperas no tener queja 
                     de nadie.
                     </input><br>
              </div>

              <hr>

              <div class="preguntas">
                     <p class="p_preguntas">8. En tu trabajo están buscando a una persona que represente a la empresa en un 
                     concurso del ramo. Piden una persona que cumpla unos requisitos, entre ellos, explicar 
                     bien vuestro trabajo y que haga una demostración práctica del mismo.
                     </p>
                     <span class="letras"> a) </span><input id="rd8" type="radio" name="p8" value="a" required>No te planteas ser voluntario, hay mil personas más capacitadas que tú para la 
                      demostración y no se te da bien hablar en público.
                      </input><br>
                     <span class="letras"> b) </span> <input id="rd8" type="radio" name="p8" value="b" > Te presentas voluntario, puede ser una experiencia interesante y si sales 
                     elegido puedes hacer una presentación innovadora. 
                     </input><br>
                     <span class="letras"> c) </span><input id="rd8" type="radio" name="p8" value="c" >No te presentas, serías capaz de hacerla bien pero crees que hay gente mejor 
                     preparada y más original que tú.
                     </input><br>
                     <span class="letras"> d) </span><input id="rd8" type="radio" name="p8" value="d" > Te presentas y estás casi seguro de que te elegirán, haces buenos proyectos y 
                     darás una buena imagen de la empresa.
                     </input><br>
              </div>

              <hr>

              <div class="preguntas">
                     <p class="p_preguntas">9. ¿Con cuál de las siguientes frases sobre la buena fortuna estás más de acuerdo?
                     </p>
                     <span class="letras"> a) </span><input id="rd9" type="radio" name="p9" value="a" required> La buena suerte puede tocarle a todo el mundo, yo me considero una persona    
                     afortunada a la que la vida le sonríe.

                      </input><br>
                     <span class="letras"> b) </span> <input id="rd9" type="radio" name="p9" value="b" > Para tener buena suerte hay que trabajar duro, sólo los muy afortunados la tienen sin apenas esfuerzo.
                      </input><br>
                     <span class="letras"> c) </span><input id="rd9" type="radio" name="p9" value="c" >Yo no tengo suerte, tanto los premios como las cosas especia les sólo les pasan 
                     a los demás.
                      </input><br>
                     <span class="letras"> d) </span><input id="rd9" type="radio" name="p9" value="d" > La suerte respecto a los premios es una cuestión de probabilidad, y respecto a 
                     las cosas de la vida, siempre depende de cómo se perciban.
                     </input><br>
              </div>

              <hr>

              <div class="preguntas">
                     <p class="p_preguntas">10. En una fiesta en La que no conoces a nadie excepto a Los anfitriones, te presentan a un 
                     grupo de personas de aspecto interesante. ¿Cuál es tu actitud?
                     </p>
                      <span class="letras"> a) </span><input id="rd10" type="radio" name="p10" value="a" required> Te interesa conocerlos no sólo para pasar un buen rato en la reunión sino 
                     porque puede ser una forma de iniciar una amistad.
                     </input><br>
                     <span class="letras"> b) </span> <input id="rd10" type="radio" name="p10" value="b" > Esperas causarles una buena impresión y decir cosas que les puedan interesar.
                      </input><br>
                      <span class="letras"> c) </span><input id="rd10" type="radio" name="p10" value="c" > Te gustaría llevarles a tu terreno en la conversación para así poder hablar de los 
                     temas que más te interesan.
                       </input><br>
                     <span class="letras"> d) </span><input id="rd10" type="radio" name="p10" value="d" > Antes de iniciar una conversación escuchas lo que dicen, y es peras para hablar 
                     a que lo hagan de temas que tú conozcas.

                     </input><br>
              </div>
              
              <div class="boton">
                     <input type="submit" class="btn  bt" name="enviar"></input>
              </div>
       </form>
       
</div>



<?php  include("includes/footer.php"); ?>