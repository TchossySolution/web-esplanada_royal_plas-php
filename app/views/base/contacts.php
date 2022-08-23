 <?php $this->layout('_theme') ?>
 <link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . BASE_STYLES . "/contactsStyles.css")?>">

 <main>
   <section id="container-img-cabecalho">
     <div id="cores-por-cima-img"></div>
     <div id="container-conteudo-img-hotel">
       <p id="nome-pagina">Contacto</p>
       <p id="referencia">
         Home / <span id="referencia-colorida"> contacto </span>
       </p>
     </div>
   </section>

   <section id="container-mais-contactos">
     <div>
       <section id="conteudo-sobre-contactos">
         <p class="maiuscula" id="conteudo-grande">Contacte-nos</p>
         <p class="maiuscula" id="sobre-pequeno">Vamos conversar</p>

         <p id="paragrafo-contactos">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ex
           voluptate officia animi necessitatibus esse iste facilis culpa
           quae cumque voluptatem, quasi dicta nam, eveniet quo et atque
           natus deserunt.
         </p>
       </section>

       <form action="" id="formulario-contactos">
         <div class="container-input">
           <input type="text" placeholder="NOME" />
         </div>

         <div class="container-input">
           <input type="email" placeholder="EMAIL" />
         </div>

         <div class="container-input">
           <input type="number" placeholder="TELEFONE" />
         </div>

         <div class="container-input">
           <input type="assunto" placeholder="ASSUNTO" />
         </div>

         <div id="container-textarea">
           <textarea name="" placeholder="MENSAGEM" id="" cols="65" rows="10"></textarea>
         </div>

         <button type="submit" id="botao-submit">
           ENVIE A SUA MENSAGEM
         </button>
       </form>
     </div>

     <div>
       <div id="container-googlemaps">
         <iframe
           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.920371438517!2d13.20353061416761!3d-8.886995593593568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f4ecd8854115%3A0x7129c2c136df2ac6!2sHotel%20Fleuma!5e0!3m2!1spt-BR!2sao!4v1653583083073!5m2!1spt-BR!2sao"
           width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
           referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>

       <div id="area-dos-retangulos-contacto">
         <div class="container-retangulo-contacto">
           <i class="fa-solid fa-location-dot"></i>
           <p>Na rua da gamek, perto do super</p>
         </div>

         <div class="container-retangulo-contacto">
           <i class="fa-solid fa-envelope"></i>
           <p>Email: hotelfleuma@gmail.com</p>
         </div>

         <div class="container-retangulo-contacto">
           <i class="fa-solid fa-phone"></i>
           <p>Telefone: 930077358</p>
         </div>

         <div class="container-retangulo-contacto">
           <i class="fa-solid fa-fax"></i>
           <p>Tel-Fixo: 933 555 400</p>
         </div>

         <div class="container-retangulo-contacto">
           <i class="fa-solid fa-earth-americas"></i>
           <p>www.fleuma.com</p>
         </div>
       </div>

       <div id="container-redes-socias">
         <a href="https://www.facebook.com/fleumahotel.co.ao" target="_blank">
           <abbr title="Facebook"><i class="fa-brands fa-facebook-f"></i></abbr>
         </a>
         <a href="https://www.instagram.com/explore/locations/599073958/hotel-fleuma/" target="_blank">
           <abbr title="Instagram"><i class="fa-brands fa-instagram"></i></abbr>
         </a>
         <a href="#">
           <abbr title="Watsapp Web"><i class="fa-brands fa-whatsapp"></i></abbr>
         </a>
       </div>
     </div>
   </section>
 </main>