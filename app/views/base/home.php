<?php $this->layout('_theme') ?>

<link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . BASE_STYLES . "/homeStyles.css")?>">

<div>
  <section id="container-img-cabecalho">
    <div id="cores-por-cima-img"></div>
    <div id="container-conteudo-img-hotel">
      <h1 id="well-come-nome-hotel">Seja bem-vindo a</h1>
      <p id="nome-hotel">Pensão <?= SITE ?></p>
      <p>Navegue pelo nosso site para obter mias informações ... </p>
    </div>

  </section>

  <!--Seccao sobre nós-->
  <section id="sobre-nos">
    <div id="container-conteudo-about">
      <p class="maiuscula" id="welcome-hotel">Pensão <?= SITE ?></p>

      <p id="second-p">A nosso Pensão oferece as melhores condições e todo o tipo de conforto.</p>

      <p id="about-hotel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem suscipit,
        necessitatibus, numquam error voluptatum iusto aliquam inventore at adipisci eius dolor ipsa eveniet ad porro
        nemo? Nostrum deserunt ullam aut?Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident explicabo
        nostrum dicta suscipit molestias architecto possimus quasi ut. Ipsam repellendus modi recusandae ea doloribus
        perferendis eius vitae maiores dignissimos hic!</p>

      <a href="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/reservation") ?>"><button id="btn-reserva">Reserve um
          quarto</button></a>
    </div>

    <div id="container-imgs-about">
      <div class="container-img-about">
        <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/casa-de-praia1.jpg") ?>" alt=""
          class="img-about">
      </div>
      <div class="container-img-about">
        <img
          src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/uma-vista-aérea-de-cima-para-baixo-da-casa-bungalow-luxo-com-piscina.jpg") ?>"
          alt="" class="img-about">
      </div>
    </div>


  </section>

  <!--Seccao services-->
  <section id="seccao-services">
    <div class="headerSection">
      <p>O que nós fazemos</p>
      <h1>Conheça os nossos serviços</h1>
    </div>

    <div id="container-cubos-services">
      <div class="cubos-services3">
        <!--cubo services-->
        <div class="cubo-services">
          <i class="fa-solid fa-suitcase-rolling"></i>
          <h3>Plano de Viagem</h3>
          <p class="about-services">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, mollitia
            reiciendis delectus maxime quis neque cum ipsum debitis vero, saepe modi officia perspiciatis facere
            blanditiis aperiam voluptatem explicabo non dicta.</p>
        </div>

        <!--cubo services-->
        <div class="cubo-services">
          <i class="fa-solid fa-champagne-glasses"></i>
          <h3>Bar e Bebidas</h3>
          <p class="about-services">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, mollitia
            reiciendis delectus maxime quis neque cum ipsum debitis vero, saepe modi officia perspiciatis facere
            blanditiis aperiam voluptatem explicabo non dicta.</p>
        </div>

        <!--cubo services-->
        <div class="cubo-services">
          <i class="fa-solid fa-bed"></i>
          <h3>Quartos</h3>
          <p class="about-services">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, mollitia
            reiciendis delectus maxime quis neque cum ipsum debitis vero, saepe modi officia perspiciatis facere
            blanditiis aperiam voluptatem explicabo non dicta.</p>
        </div>

      </div>

      <div class="cubos-services3">
        <!--cubo services-->
        <div class="cubo-services">
          <i class="fa-solid fa-utensils"></i>
          <h3>Restaurante</h3>
          <p class="about-services">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, mollitia
            reiciendis delectus maxime quis neque cum ipsum debitis vero, saepe modi officia perspiciatis facere
            blanditiis aperiam voluptatem explicabo non dicta.</p>
        </div>

        <!--cubo services-->
        <div class="cubo-services">
          <i class="fa-solid fa-shirt"></i>
          <h3>Lavanderia</h3>
          <p class="about-services">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, mollitia
            reiciendis delectus maxime quis neque cum ipsum debitis vero, saepe modi officia perspiciatis facere
            blanditiis aperiam voluptatem explicabo non dicta.</p>
        </div>

        <!--cubo services-->
        <div class="cubo-services">
          <i class="fa-solid fa-paint-roller"></i>
          <h3>Pintura</h3>
          <p class="about-services">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, mollitia
            reiciendis delectus maxime quis neque cum ipsum debitis vero, saepe modi officia perspiciatis facere
            blanditiis aperiam voluptatem explicabo non dicta.</p>
        </div>
      </div>

    </div>


  </section>

  <!--Seccao dos icones ou coisas que o hotel... -->

  <section id="icones-representativos-hotel">
    <div id="cor-acima-icones-representativos"></div>
    <div id="container-infors-hotel">
      <div class="info-hotel">
        <span class="numero-info-hotel">25</span>
        <p>Suites de luxo <br> Apartir de 3000kz</p>
      </div>

      <div class="info-hotel">
        <span class="numero-info-hotel">10k</span>
        <p>clientes felizes<br> todos os anos</p>
      </div>

      <div class="info-hotel">
        <span class="numero-info-hotel">365</span>
        <p>Dias/Ano<br> todos os anos</p>
      </div>



  </section>

  <!-- seccao dos cubos info -->

  <section id="container-cubos-info">
    <div class="headerSection">
      <p>Escolha</p>
      <h1>Porquê escolher-nos?</h1>
    </div>

    <div class="cubo-info">
      <i class="fa-solid fa-handshake-simple"></i>
      <p class="p1 maiuscula">Confiança</p>
      <p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, voluptate! Ad odit quas veritatis.
        Architecto asperiores inventore assumenda dicta, esse, iusto suscipit molestias quas, corrupti quod dolor.</p>
    </div>

    <div class="cubo-info">
      <i class="fa-solid fa-star"></i>
      <p class="p1 maiuscula">Qualidade</p>
      <p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, voluptate! Ad odit quas veritatis.
        Architecto asperiores inventore assumenda dicta, esse, iusto suscipit molestias quas, corrupti quod dolor.</p>
    </div>

    <div class="cubo-info">
      <i class="fa-solid fa-scale-balanced"></i>
      <p class="p1 maiuscula">Bons preços</p>
      <p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, voluptate! Ad odit quas veritatis.
        Architecto asperiores inventore assumenda dicta, esse, iusto suscipit molestias quas, corrupti quod dolor.</p>
    </div>

  </section>


  <!-- Seccão do restaurante  -->
  <section id="seccao-restaurante">

    <div class="headerSection">
      <p>Restaurante</p>
      <h1>Conheça o nosso Menu</h1>
    </div>

    <div class="container-pratos">
      <!-- prato  -->
      <div class="container-comida-info">
        <div class="container-img-comida">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/comidabrasileira3.webp") ?> " alt=""
            class="img-comida">
        </div>
        <div class="container-info-comida">
          <div class="container-nome-preco">
            <span>Bitoque</span>
            <span class="preco-prato">3500kz</span>
          </div>
          <p>Um prato com batatas fritas, bifes, arroz, ovo e salada</p>
        </div>
      </div>

      <!-- prato  -->
      <div class="container-comida-info">
        <div class="container-img-comida">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/bitoque-vaca.jpg") ?> " alt=""
            class="img-comida">
        </div>
        <div class="container-info-comida">
          <div class="container-nome-preco">
            <span>Bitoque</span>
            <span class="preco-prato">3500kz</span>
          </div>
          <p>Um prato com batatas fritas, bifes, arroz, ovo e salada</p>
        </div>
      </div>

      <!-- prato  -->
      <div class="container-comida-info">
        <div class="container-img-comida">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/bacalhau-natas-batata-doce.jpg") ?> " alt=""
            class="img-comida">
        </div>
        <div class="container-info-comida">
          <div class="container-nome-preco">
            <span>Bitoque</span>
            <span class="preco-prato">3500kz</span>
          </div>
          <p>Um prato com batatas fritas, bifes, arroz, ovo e salada</p>
        </div>
      </div>
    </div>

    <div class="container-pratos">
      <!-- prato  -->
      <div class="container-comida-info">
        <div class="container-img-comida">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/comidabrasileira3.webp") ?> " alt=""
            class="img-comida">
        </div>
        <div class="container-info-comida">
          <div class="container-nome-preco">
            <span>Bitoque</span>
            <span class="preco-prato">3500kz</span>
          </div>
          <p>Um prato com batatas fritas, bifes, arroz, ovo e salada</p>
        </div>
      </div>

      <!-- prato  -->
      <div class="container-comida-info">
        <div class="container-img-comida">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/comidabrasileira3.webp") ?> " alt=""
            class="img-comida">
        </div>
        <div class="container-info-comida">
          <div class="container-nome-preco">
            <span>Bitoque</span>
            <span class="preco-prato">3500kz</span>
          </div>
          <p>Um prato com batatas fritas, bifes, arroz, ovo e salada</p>
        </div>
      </div>

      <!-- prato  -->
      <div class="container-comida-info">
        <div class="container-img-comida">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/comidabrasileira3.webp") ?> " alt=""
            class="img-comida">
        </div>
        <div class="container-info-comida">
          <div class="container-nome-preco">
            <span>Bitoque</span>
            <span class="preco-prato">3500kz</span>
          </div>
          <p>Um prato com batatas fritas, bifes, arroz, ovo e salada</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Seccão dos depoimentos-->
  <section id="seccao-depoimentos">

    <div class="headerSection">
      <p>Depoimentos</p>
      <h1>O que os clientes dizem?</h1>
    </div>

    <div id="container-cards-depoimentos">

      <!--Card-depoimento1-->
      <div class="card-depoimentos">
        <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/tony.jpg") ?> " alt=""
          class="imagem-depoente">
        <div class="virgulas-card-depoimentos">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/virgula.png") ?> " alt=""
            class="img-virgula">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/virgula.png") ?> " alt=""
            class="img-virgula">
        </div>
        <div class="info-depoente">
          <p class="nome-depoente">Tonilson Casimiro</p>
          <p class="pais-depoente">Angola / Luanda</p>
        </div>
        <div class="container-icones-star">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
        </div>
        <p class="conteudo-depoente">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deleniti autem,
          provident, magni voluptas expedita rerum excepturi labore quos corrupti nemo, et soluta placeat officia libero
          accusamus quasi a ipsam?</p>
      </div>

      <!--Card-depoimento1-->
      <div class="card-depoimentos">
        <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/victor.jpg") ?> " alt=""
          class="imagem-depoente">
        <div class="virgulas-card-depoimentos">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/virgula.png") ?> " alt=""
            class="img-virgula">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/virgula.png") ?> " alt=""
            class="img-virgula">
        </div>
        <div class="info-depoente">
          <p class="nome-depoente">Victor Luís</p>
          <p class="pais-depoente">Angola / Luanda</p>
        </div>
        <div class="container-icones-star">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
        </div>
        <p class="conteudo-depoente">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deleniti autem,
          provident, magni voluptas expedita rerum excepturi labore quos corrupti nemo, et soluta placeat officia libero
          accusamus quasi a ipsam?</p>
      </div>

      <!--Card-depoimento1-->
      <div class="card-depoimentos">
        <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/rafael.jpg") ?> " alt=""
          class="imagem-depoente">
        <div class="virgulas-card-depoimentos">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/virgula.png") ?> " alt=""
            class="img-virgula">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/virgula.png") ?> " alt=""
            class="img-virgula">
        </div>
        <div class="info-depoente">
          <p class="nome-depoente">Rafael Pilartes</p>
          <p class="pais-depoente">Angola / Luanda</p>
        </div>
        <div class="container-icones-star">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
        </div>
        <p class="conteudo-depoente">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deleniti autem,
          provident, magni voluptas expedita rerum excepturi labore quos corrupti nemo, et soluta placeat officia libero
          accusamus quasi a ipsam?</p>
      </div>

      <!--Card-depoimento1-->
      <div class="card-depoimentos">
        <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/daudy.jpg") ?> " alt=""
          class="imagem-depoente">
        <div class="virgulas-card-depoimentos">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/virgula.png") ?> " alt=""
            class="img-virgula">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/virgula.png") ?> " alt=""
            class="img-virgula">
        </div>
        <div class="info-depoente">
          <p class="nome-depoente">Domingos Caetano</p>
          <p class="pais-depoente">Angola / Luanda</p>
        </div>
        <div class="container-icones-star">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
          <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/homeImages/estrela-amarela.png") ?> " alt=""
            class="img-estrela">
        </div>
        <p class="conteudo-depoente">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deleniti autem,
          provident, magni voluptas expedita rerum excepturi labore quos corrupti nemo, et soluta placeat officia libero
          accusamus quasi a ipsam?</p>
      </div>


    </div>
  </section>

  <section id="seccao-email">

    <div id="cores-por-cima-seccao-email"></div>

    <div id="container-central-email">
      <div id="container-conteudo-seccao-email">
        <p id="sobre-newsletter1" class="maiuscula">Assine a nossa newsletter </p>
        <p id="sobre-newsletter2" class="maiuscula">Subscreva a nossa newsletter para receber as últimas novidades</p>
      </div>

      <div id="container-input-email">
        <form action="">
          <input type="email" placeholder="DIGITE O SEU EMAIL" id="mandar-email">
          <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
        </form>
      </div>
    </div>

  </section>
</div>

<script type="text/javascript" src="<?= urlProject(FOLDER_BASE . BASE_JS . "/homeScripts.js") ?>">
</script>