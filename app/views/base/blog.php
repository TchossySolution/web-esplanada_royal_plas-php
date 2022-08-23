 <?php $this->layout('_theme') ?>
 <link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . BASE_STYLES . "/blogStyles.css")?>">

 <main>
   <section id="container-img-cabecalho">
     <div id="cores-por-cima-img"></div>
     <div id="container-conteudo-img-hotel">
       <p id="nome-pagina">Relaxe e veja os nossos blogs</p>
       <p id="referencia">
         Casa / <span id="referencia-colorida"> Blogs </span>
       </p>
     </div>
   </section>

   <section id="seccao-blogs">
     <!-- Post 1 -->
     <div class="container-post">
       <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/blog-post1.jpg")?> " alt="post1"
         class="img-post" />
       <div class="conteudo-post">
         <h3 class="titulo-post">
           Lembram daqueles brinquedinhos de infância!
         </h3>

         <p class="paragrafo-sobre-post">
           Um carrinho único parecia uma garagem cheia de milhões de carros,
           e alimentava a alegria de qualquer criança.
         </p>
       </div>
       <div class="info-post">
         <div class="container-img-info-post">
           <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/rafae1l.jpg")?> " alt="criadora"
             class="img-info-post" />
         </div>
         <p class="info-post-autor">
           Rafael Pilartes
           <i class="fa-solid fa-clock"></i>
           11 de Novembro de 2021
         </p>
       </div>
     </div>

     <!-- Post 2 -->
     <div class="container-post">
       <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/blog-post2 (1).jpg")?> " alt="post2"
         class="img-post" />
       <div class="conteudo-post">
         <h3 class="titulo-post">Temos os melhores quartos</h3>

         <p class="paragrafo-sobre-post">
           Já pensou em se acomodar em uma linda cama e confortavél,
           aproveite e reserve já o seu quarto aqui no fleuma.
         </p>
         <div class="info-post">
           <div class="container-img-info-post">
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/daudy.jpg")?> " alt="criadora"
               class="img-info-post" />
           </div>
           <p class="info-post-autor">
             Abadalabadas
             <i class="fa-solid fa-clock"></i>
             20 de Maio de 2022
           </p>
         </div>
       </div>
     </div>

     <!-- Post 1 -->
     <div class="container-post">
       <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/blog-post4.jpg")?> " alt="post1"
         class="img-post" />
       <div class="conteudo-post">
         <h3 class="titulo-post">A importância do vinho</h3>
         <p class="paragrafo-sobre-post">
           Não importa o tempo, o vinho sempre foi foi especial, pra todos
           nós país e avós do tempo do kwanza burro.
         </p>
         <div class="info-post">
           <div class="container-img-info-post">
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/rafae1l.jpg")?> " alt="criadora"
               class="img-info-post" />
           </div>
           <p class="info-post-autor">
             Victor Luís
             <i class="fa-solid fa-clock"></i>
             7 de Junho de 2022
           </p>
         </div>
       </div>
     </div>

     <!-- Post 2 -->
     <div class="container-post">
       <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/blog-post5.jpg")?> " alt="post2"
         class="img-post" />
       <div class="conteudo-post">
         <h3 class="titulo-post">Comidas saborodas e deliciosas</h3>
         <p class="paragrafo-sobre-post">
           Aproveite os melhores pratos e garanta a sua saúde em seu
           beneficio proprio...
         </p>
         <div class="info-post">
           <div class="container-img-info-post">
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/daudy.jpg")?> " alt="criadora"
               class="img-info-post" />
           </div>
           <p class="info-post-autor">
             Tonilson Casimiro
             <i class="fa-solid fa-clock"></i>
             15 de agosto de 2022
           </p>
         </div>
       </div>
     </div>

     <!-- Post 2 -->
     <div class="container-post">
       <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/blog-post6.jpg")?> " alt="post2"
         class="img-post" />
       <div class="conteudo-post">
         <h3 class="titulo-post">O direito da criança</h3>

         <p class="paragrafo-sobre-post">
           Toda criança merece se divertir e curtir a sua liberdade, assim
           dizia o engenheiro informatico Tonilson Casimiro
         </p>
         <div class="info-post">
           <div class="container-img-info-post">
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/daudy.jpg")?> " alt="criadora"
               class="img-info-post" />
           </div>
           <p class="info-post-autor">
             Sebastião Gomes
             <i class="fa-solid fa-clock"></i>
             17 de abril de 2022
           </p>
         </div>
       </div>
     </div>

     <!-- Post 2 -->
     <div class="container-post">
       <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/blog-post5.jpg")?> " alt="post2"
         class="img-post" />
       <div class="conteudo-post">
         <h3 class="titulo-post">O direito da criança</h3>

         <p class="paragrafo-sobre-post">
           Toda criança merece se divertir e curtir a sua liberdade, assim
           dizia o engenheiro informatico Tonilson Casimiro
         </p>
         <div class="info-post">
           <div class="container-img-info-post">
             <img src=" <?= urlProject(FOLDER_BASE . BASE_IMAGES . "/blogImages/daudy.jpg")?> " alt="criadora"
               class="img-info-post" />
           </div>
           <p class="info-post-autor">
             Sebastião Gomes
             <i class="fa-solid fa-clock"></i>
             17 de abril de 2022
           </p>
         </div>
       </div>
     </div>
   </section>
 </main>