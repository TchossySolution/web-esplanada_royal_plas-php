 <?php $this->layout('_theme') ?>

 <link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . BASE_STYLES . "/aboutStyle.css")?>">

 <main>
   <section id="container-img-cabecalho">
     <div id="cores-por-cima-img"></div>
     <div id="container-conteudo-img-hotel">
       <p id="nome-pagina" class="maiuscula">Venha conhecer-nos</p>
       <p id="referencia">
         Casa / <span id="referencia-colorida"> Sobre Nós </span>
       </p>
     </div>
   </section>

   <!--Seccão sobre o hotel-->
   <section id="sobre-hotel">
     <div id="sobre-hotel-conteudo">
       <p class="maiuscula" id="sobre-hotel-conteudo-p1">Pensão <?= SITE ?></p>
       <p id="sobre-hotel-conteudo-p2">A nosso pensão é a melhor!</p>
       <p id="sobre-hotel-conteudo-p3">
         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos
         commodi ullam, assumenda error cupiditate iste ratione corporis sunt
         aliquid ipsa doloribus vero, quibusdam incidunt soluta quod.
         Dignissimos veritatis quibusdam ipsam! Lorem ipsum dolor sit amet
         consectetur adipisicing elit. Nisi, quam facere unde laboriosam quae
         eveniet exercitationem ab, quibusdam corporis non labore id, maxime
         iste. Repellat laudantium quos dolor rerum unde.
       </p>
     </div>
     <img src="https://media-cdn.tripadvisor.com/media/photo-s/05/98/9c/e7/entrada-do-hotel-e-parque.jpg ?>"
       alt="imagem do documento" />
   </section>

   <!--Seccao sobre faturas-->
   <section id="seccao-faturas">
     <p class="maiuscula" id="p-fatura">Faturas</p>

     <div class="container-cubos-fatura">
       <div class="cubo-fatura">
         <div class="cubo-conteudo">
           <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/blogging.png") ?>" alt="" />
           <p class="numero-fatura">7</p>
           <p class="maiuscula">blogs</p>
         </div>
       </div>

       <div class="cubo-fatura">
         <div class="cubo-conteudo">
           <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/board-meeting.png") ?>" alt="" />
           <p class="numero-fatura">6</p>
           <p class="maiuscula">escritórios</p>
         </div>
       </div>

       <div class="cubo-fatura">
         <div class="cubo-conteudo">
           <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/bed (1).png") ?>" alt="" />
           <p class="numero-fatura">3</p>
           <p class="maiuscula">Quartos</p>
         </div>
       </div>

       <div class="cubo-fatura">
         <div class="cubo-conteudo">
           <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/electric-car.png") ?>" alt="" />
           <p class="numero-fatura">1</p>
           <p class="maiuscula">Parque de estacionamento</p>
         </div>
       </div>
     </div>

     <div class="container-cubos-fatura">
       <div class="cubo-fatura">
         <div class="cubo-conteudo">
           <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/food-service.png") ?>" alt="" />
           <p class="numero-fatura">1</p>
           <p class="maiuscula">Restaurante</p>
         </div>
       </div>

       <div class="cubo-fatura">
         <div class="cubo-conteudo">
           <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/garfo.png") ?>" alt="" />
           <p class="numero-fatura">29</p>
           <p class="maiuscula">Tipos de patos</p>
         </div>
       </div>

       <div class="cubo-fatura">
         <div class="cubo-conteudo">
           <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/stationary-bike.png") ?>" alt="" />
           <p class="numero-fatura">2</p>
           <p class="maiuscula">Ginásio</p>
         </div>
       </div>

       <div class="cubo-fatura">
         <div class="cubo-conteudo">
           <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/team.png") ?>" alt="" />
           <p class="numero-fatura">33</p>
           <p class="maiuscula">Menbros</p>
         </div>
       </div>
     </div>


   </section>

   <!-- Secção de Serviços  -->
   <section id="seccao-servicos">
     <p class="maiuscula" id="p-servicos">Serviços</p>

     <div id="imgs-servicos">
       <div class="container">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/restaurant.jpg") ?>" alt="Avatar"
           class="image" />
         <div class="overlay">
           <div class="text">Nosso Restaurante</div>
         </div>
       </div>

       <div class="container">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/gym.jpg") ?>" alt="Avatar" class="image" />
         <div class="overlay">
           <div class="text">Nosso Gynasio</div>
         </div>
       </div>

       <div class="container">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/spa.jpg") ?>" alt="Avatar" class="image" />
         <div class="overlay">
           <div class="text">Area de Relaxo</div>
         </div>
       </div>

       <div class="container">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/aboutImages/bar.jpg") ?>" alt="Avatar" class="image" />
         <div class="overlay">
           <div class="text">Nosso Bar</div>
         </div>
       </div>
     </div>


   </section>
 </main>