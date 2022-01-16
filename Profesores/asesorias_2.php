<?php require_once "vistas/parte_superior.php" ?>
    <div id="jaas-container" >

        <script src='https://meet.jit.si/external_api.js' async></script>
        <style>html, body, #jaas-container { height: 85%; }</style>
        <script type="text/javascript">
          window.onload = () => {
            var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      var stringLength = 30;
  
      function pickRandom() {
      return possible[Math.floor(Math.random() * possible.length)];
      }
  
  var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');
            const api = new JitsiMeetExternalAPI("meet.jit.si", {
              roomName: randomString,
              parentNode: document.querySelector('#jaas-container')
            });
          }
        </script>
    </div>

    <footer class="piePagina">
            
            <!-- Aviso IPN -->
            <div class="bg--guinda">
                <div class="container">
                    <div class="row">
                      
                        <div class="col-lg-12 pl-7 piePagina-texto">
                            <h3 class="text-center piePagina-titulo">INSTITUTO POLITÉCNICO NACIONAL</h3>
                            <p>
                                D.R. Instituto Politécnico Nacional (IPN). Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo López Mateos, Zacatenco, Alcaldía Gustavo A. Madero, C.P. 07738, Ciudad de México, 2019. Conmutador: 55 57 29 60 00 / 55 57 29 63 00.
                            </p>
                            <br>
                            <p>
                                Esta página es una obra intelectual protegida por la Ley Federal del Derecho de Autor, puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica; su uso para otros fines, requiere autorización previa y por escrito de la Dirección General del Instituto.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-lg-12 pl-7">
                            <img src="images/educacion2.png" alt="SEP" class="EducacionplecaGob gob">
                         </div>
                    </div>
                </div>
            </div>

           
          
    </footer>


  
      
   

  