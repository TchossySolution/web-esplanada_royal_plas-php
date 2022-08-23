<link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . "/src/components/Footer/style.css")?>">

<footer>
  <div class="conteudo-footer">
    <a class="maiuscula cor-primaria destaque-footer logoNameFooter">Hotel <?= SITE ?></a>
    <p id="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates expedita id nisi eaque eius,
      obcaecati magnam aspernatur</p>
  </div>

  <div class="conteudo-footer ">
    <p class="maiuscula destaque-footer">Mais sobre</p>
    <p id="p2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis consectetur repellendus itaque dicta
      cupiditate praesentium illum, molestias voluptas quas illo hic porro numquam, alias quod ea. Itaque, quae fugit!
      Est?</p>
  </div>

  <div class="conteudo-footer">
    <p class="maiuscula destaque-footer">Links de navegação</p>
    <div class="container-itens-info">
      <a href="<?= urlProject("about") ?>"><i class="fa-solid fa-child-reaching"></i> Sobre Nós</a>
      <a href="<?= urlProject("contacts") ?>"><i class="fa-solid fa-address-book"></i> Contactos</a>
      <a href="https://goo.gl/maps/TS2uCafiKCd5tmVR9" target="_blank"><i class="fa-solid fa-map"></i> Nossa
        Localização</a>
      <a href="<?= urlProject("gallery") ?> "><i class="fa-solid fa-image"></i> Galeria</a>
    </div>
  </div>

  <div class="conteudo-footer">
    <p class="maiuscula destaque-footer">informação de contactos</p>

    <div class="container-itens-info">
      <p><i class="fa-solid fa-location-dot"></i> Lorem ipsum dolor sit amet consecte</p>
      <p><i class="fa-solid fa-phone"></i> Telefone: 930077358</p>
      <p><i class="fa-solid fa-fax"></i> Tel-Fixo: 933 555 400</p>
      <p><i class="fa-solid fa-earth-americas"></i> Web: www.fleuma.com</p>
      <p><i class="fa-solid fa-envelope"></i> Email: hotelfleuma@gmail.com</p>
    </div>
  </div>
</footer>