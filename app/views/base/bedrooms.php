 <?php $this->layout('_theme') ?>
 <link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . BASE_STYLES . "/bedroomsStyle.css")?>">

 <main>
   <section id="container-img-cabecalho">
     <div id="cores-por-cima-img"></div>
     <div id="container-conteudo-img-hotel">
       <p id="nome-pagina" class="maiuscula">veja os quartos disponivéis</p>
       <p id="referencia" class="maiuscula">
         Casa / <span id="referencia-colorida"> Quartos </span>
       </p>
     </div>
   </section>

   <!--Seccão dos quartos -->
   <section id="seccao-quartos">
     <!--quarto1-->
     <div class="container-quarto">
       <div class="container-imagem-quarto">
         <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/fotoquarto.jpg") ?>"
           alt="foto-quarto-solteiro" class="imagem-quarto" />
       </div>

       <div class="conteudo-quarto">
         <div class="container-descricao-quarto">
           <p class="maiuscula nome-quarto">Quarto solteiro</p>
           <div class="area-estrelas-amarelas">
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png")?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png")?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png")?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png")?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png")?>" alt="star"
               class="img-estrela" />
           </div>
           <p class="paragrafo-sobre-quarto">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
             aperiam error, quisquam ratione exercitationem beatae ab ex
             maiores? Ratione suscipit aspernatur minima repellendus
             voluptate corrupti deserunt laudantium placeat, similique
             aliquid!
           </p>
         </div>

         <div class="container-icones-quartos">
           <abbr title="Direito a café"><img
               src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/cafe.png") ?>" alt="café"
               class="img-elementos" /></abbr>

           <abbr title="Assistir Televisão"><img
               src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/plasma.png") ?>" alt="plasma"
               class="img-elementos" /></abbr>

           <abbr title="Internet - Wifi"><img
               src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/wifi.png") ?>" alt="wifi"
               class="img-elementos" /></abbr>
         </div>
       </div>

       <a href="<?= urlProject("bedrooms/details/1") ?>">
         <div class="container-sobre-preco">
           <p class="maiuscula sobre-preco">Apartir de</p>
           <p class="maiuscula sobre-preco">20.000kz</p>
           <button class="maiuscula ver-mais">Mais
             informações</button>
         </div>
     </div>
     </a>

     <!--quarto2-->
     <div class="container-quarto">
       <div class="container-imagem-quarto"> <img
           src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/quarto.jpg") ?>" alt="foto-quarto-solteiro"
           class="imagem-quarto" /> </div>
       <div class="conteudo-quarto">
         <div class="container-descricao-quarto">
           <p class="maiuscula nome-quarto">Quarto solteiro</p>
           <div class="area-estrelas-amarelas">
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png") ?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png") ?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png") ?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png") ?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png") ?>" alt="star"
               class="img-estrela" />
           </div>
           <p class="paragrafo-sobre-quarto">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
             aperiam error, quisquam ratione exercitationem beatae ab ex
             maiores? Ratione suscipit aspernatur minima repellendus
             voluptate corrupti deserunt laudantium placeat, similique
             aliquid!
           </p>
         </div>

         <div class="container-icones-quartos">
           <abbr title="Direito a café"><img
               src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/cafe.png")?>" alt="café"
               class="img-elementos" /></abbr>

           <abbr title="Assistir Televisão"><img
               src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/plasma.png")?> " alt="plasma"
               class="img-elementos" /></abbr>

           <abbr title="Internet - Wifi"><img
               src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/wifi.png")?> " alt="wifi"
               class="img-elementos" /></abbr>
         </div>
       </div>

       <a href="<?= urlProject("bedrooms/details/1") ?>">
         <div class="container-sobre-preco">
           <p class="maiuscula sobre-preco">Apartir de</p>
           <p class="maiuscula sobre-preco">15.000kz</p>
           <button class="maiuscula ver-mais">Mais informações</button>
         </div>
     </div>

     </a>
     <!--quarto3-->
     <div class="container-quarto">
       <div class="container-imagem-quarto">
         <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/fotoquarto.jpg") ?>"
           alt="foto-quarto-solteiro" class="imagem-quarto" />
       </div>
       <div class="conteudo-quarto">
         <div class="container-descricao-quarto">
           <p class="maiuscula nome-quarto">Quarto solteiro</p>
           <div class="area-estrelas-amarelas">
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png") ?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png") ?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png") ?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png") ?>" alt="star"
               class="img-estrela" />
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/estrela-amarela.png") ?>" alt="star"
               class="img-estrela" />
           </div>
           <p class="paragrafo-sobre-quarto">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
             aperiam error, quisquam ratione exercitationem beatae ab ex
             maiores? Ratione suscipit aspernatur minima repellendus
             voluptate corrupti deserunt laudantium placeat, similique
             aliquid!
           </p>
         </div>

         <div class="container-icones-quartos">
           <abbr title="Direito a café"><img
               src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/cafe.png")?>" alt="café"
               class="img-elementos" /></abbr>

           <abbr title="Assistir Televisão"><img
               src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/plasma.png")?>" alt="plasma"
               class="img-elementos" /></abbr>

           <abbr title="Internet - Wifi"><img
               src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/bedroomsImages/wifi.png")?>" alt="wifi"
               class="img-elementos" /></abbr>
         </div>
       </div>

       <a href="<?= urlProject("bedrooms/details/1") ?>">
         <div class="container-sobre-preco">
           <p class="maiuscula sobre-preco">Apartir de</p>
           <p class="maiuscula sobre-preco">15.000kz</p>
           <button class="maiuscula ver-mais">Mais informações</button>
         </div>
     </div>
   </section>
   </a>
 </main>