 <?php $this->layout('_theme') ?>
 <link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . BASE_STYLES . "/bedroomsDetailsStyles.css")?>">

 <main>
   <section id="container-img-cabecalho">
     <div id="cores-por-cima-img"></div>
     <div id="container-conteudo-img-hotel">
       <p id="nome-pagina" class="maiuscula">nossos quartos</p>
       <p id="referencia">
         Quartos / <span id="referencia-colorida"> Quarto casal </span>
       </p>
     </div>
   </section>

   <section id="seccao-quarto">
     <div id="container-img-retangulo">
       <!--Seccao da galeria de fotos dos quartos
        Container das 2 seccoes
        galeria de imagens dos quartos
        <div class="container">

          Full-width images with number text 
          <div class="mySlides">
            <div class="numbertext">1 / 4</div>
              <img src="imagens-quarto-casal/img1.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 4</div>
              <img src="imagens-quarto-casal/img2.webp" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 4</div>
              <img src="imagens-quarto-casal/img1.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">4 / 4</div>
              <img src="imagens-quarto-casal/img2.webp" style="width:100%">
          </div>



          Next and previous buttons 
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

           Image text 
          <div class="caption-container">
            <p id="caption"></p>
          </div> 

         Thumbnail images 
          <div class="row">
            <div class="column">
              <img class="demo cursor" src="imagens-quarto-casal/img1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
            </div>
            <div class="column">
              <img class="demo cursor" src="imagens-quarto-casal/img2.webp" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
            </div>
            <div class="column">
              <img class="demo cursor" src="imagens-quarto-casal/img1.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
              <img class="demo cursor" src="imagens-quarto-casal/img2.webp" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
            </div>
            
          </div>
        </div>

          -->

       <div id="container-slide">
         <!-- Slideshow container -->
         <div class="slideshow-container">
           <!-- Full-width images with number and caption text -->
           <div class="mySlides fade">
             <div class="numbertext">1 / 3</div>
             <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/img1.jpg")?> "
               style="width: 100%; height: 600px" />
             <div class="text">Parte 1</div>
           </div>

           <div class="mySlides fade">
             <div class="numbertext">2 / 3</div>
             <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/img2.jpg")?> "
               style="width: 100%; height: 600px" />
             <div class="text">Parte 2 </div>
           </div>

           <div class="mySlides fade">
             <div class="numbertext">3 / 3</div>
             <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/img3.png")?> "
               style="width: 100%; height: 600px" />
             <div class="text">Parte 3</div>
           </div>

           <!-- Next and previous buttons -->
           <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
           <a class="next" onclick="plusSlides(1)">&#10095;</a>
         </div>
         <br />

         <!-- The dots/circles -->
         <div style="text-align: center">
           <span class="dot" onclick="currentSlide(1)"></span>
           <span class="dot" onclick="currentSlide(2)"></span>
           <span class="dot" onclick="currentSlide(3)"></span>
         </div>
       </div>
       <!--retangulo sobre imagens-->
       <div>
         <div id="container-info-fotos">
           <p id="sobre-preco-quarto">
             Apartir de <br />
             <span id="preco-quarto">10.000kz</span>
             <br />
             por noite
           </p>

           <div id="container-info-numeros">
             <p>Cama Casal</p>
             <p>Televisão</p>
             <p>Swit</p>
             <p>Bancas</p>
           </div>

           <button class="maiuscula">fazer reserva</button>
         </div>
         <div id="container-info-help">
           <div>
             <h1>Preciso de Ajuda?</h1>
             <h3>+244 930 077 358</h3>
             <h3>hotelfleuma@gmail.com</h3>
           </div>
           <i class="fa-solid fa-circle-question"></i>
         </div>
       </div>
     </div>
   </section>

   <section id="seccao-info-quarto">
     <h2>Serviços de sala</h2>
     <p id="">O quarto casal inclui:</p>

     <div id="container-todos-itens-quarto">
       <!-- area de alguns itens-->
       <div>
         <p class="itens-do-quarto">
           <i class="fa-solid fa-check"></i>
           Cama Casal
         </p>

         <p class="itens-do-quarto">
           <i class="fa-solid fa-check"></i>
           3 Pessoas
         </p>

         <p class="itens-do-quarto">
           <i class="fa-solid fa-check"></i>
           Internet Gratuita
         </p>

         <p class="itens-do-quarto">
           <i class="fa-solid fa-check"></i>
           Café da manhã incluido
         </p>
       </div>
       <!-- area de alguns itens-->
       <div>
         <p class="itens-do-quarto">
           <i class="fa-solid fa-check"></i>
           Cama Casal
         </p>

         <p class="itens-do-quarto">
           <i class="fa-solid fa-xmark"></i>
           3 Pessoas
         </p>

         <p class="itens-do-quarto">
           <i class="fa-solid fa-xmark"></i>
           Internet Gratuita
         </p>

         <p class="itens-do-quarto">
           <i class="fa-solid fa-xmark"></i>
           Café da manhã incluido
         </p>
       </div>

       <!-- area de alguns itens-->
       <div>
         <p class="itens-do-quarto">
           <i class="fa-solid fa-xmark"></i>
           Cama Casal
         </p>

         <p class="itens-do-quarto">
           <i class="fa-solid fa-xmark"></i>
           3 Pessoas
         </p>

         <p class="itens-do-quarto">
           <i class="fa-solid fa-xmark"></i>
           Internet Gratuita
         </p>

         <p class="itens-do-quarto">
           <i class="fa-solid fa-xmark"></i>
           Café da manhã incluido
         </p>
       </div>
     </div>
     <br>
     <br>
     <p id="conteudo-quarto">
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ex
       nesciunt mollitia laudantium atque tempore saepe tempora vero nemo ea,
       quos sit minus. Ipsam aliquid quibusdam quis perspiciatis quia iste!
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum iusto
       veritatis molestias dolor in rerum inventore, incidunt quos explicabo
       eius ad adipisci possimus dolorum assumenda itaque, unde vitae
       voluptates recusandae. Lorem ipsum dolor sit, amet consectetur
       adipisicing elit. Voluptatum earum recusandae neque reiciendis nobis
       vitae placeat explicabo et nihil quidem, incidunt numquam inventore
       dignissimos amet distinctio aut, similique itaque? Temporibus? Lorem
       ipsum dolor sit amet consectetur adipisicing elit. Ut animi quidem
       neque nemo ipsa tempore possimus. Odio enim sit iste culpa quidem
       sapiente numquam, harum sint, deserunt labore provident minus?
     </p>
   </section>


 </main>

 <script>
let slideIndex = 1
showSlides(slideIndex)

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n))
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n))
}

function showSlides(n) {
  let i
  let slides = document.getElementsByClassName('mySlides')
  let dots = document.getElementsByClassName('dot')
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none'
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(' active', '')
  }
  slides[slideIndex - 1].style.display = 'block'
  dots[slideIndex - 1].className += ' active'
}
 </script>