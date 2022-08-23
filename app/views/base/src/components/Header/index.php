  <link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . "/src/components/Header/styles.css")?>">

  <header id="header">

    <div class="container-conteudo-header-topo">
      <p class="conteudo-header-topo">Bem-vindo ao Hotel <?= SITE ?>.</p>

      <div id="conteudo2-topo">
        <p class="conteudo-header-topo">+244 8948 123 456</p>
        <p class="conteudo-header-topo">contact@hotelroyalplaza.com</p>
      </div>
    </div>

    <nav class="container-navegacao ">
      <a href="<?= urlProject() ?>" rel="prev" id="logotipo"><?= SITE ?></a>

      <ul class="menu">
        <li><a class="pagesLink" href="<?= urlProject("about") ?> ">SOBRE NÓS</a></li>
        <li><a class="pagesLink" href="<?= urlProject("bedrooms") ?> ">QUARTOS</a></li>
        <li><a class="pagesLink" href="<?= urlProject("gallery") ?> ">GALERIA</a></li>
        <li><a class="pagesLink" href="<?= urlProject("blog") ?> ">BLOGS</a></li>
        <li><a class="pagesLink" href="<?= urlProject("contacts") ?> ">CONTACTOS</a></li>
        <button id="botao-reserva"><a href="<?= urlProject("reservation") ?> "> <i
              class="fa-solid fa-calendar-days"></i>
            FAZER
            RESERVA</a></button>
      </ul>

      <div class="toggle" id="icone-open-menu"><i class="fa-solid fa-bars fa-lg"></i></div>
      <div class="toggle" id="icone-close-menu">x</div>
    </nav>

  </header>


  <script>
const conteudoTopo = document.querySelector('.container-conteudo-header-topo')

const nav = document.querySelector('header nav')

const logo = document.querySelector('#logotipo')

const toggle = document.querySelectorAll('header nav div.toggle')

const itensMenu = document.querySelectorAll('header nav ul li')

const linkHeader = document.getElementsByClassName('pagesLink')

window.addEventListener('scroll', function() {
  const header = document.getElementById('header')
  header.classList.toggle('sticky', window.scrollY > 70)

  logo.classList.toggle('cor-primaria', window.scrollY > 70)

  conteudoTopo.classList.toggle(
    'container-conteudo-header-topo',
    window.scrollY < 70
  )
  conteudoTopo.classList.toggle(
    'container-conteudo-header-topo-none',
    window.scrollY > 70
  )
})

for (const element of toggle) {
  element.addEventListener('click', function() {
    nav.classList.toggle('show')
  })
}

for (const element of itensMenu) {
  element.addEventListener('click', function() {
    nav.classList.remove('show')
  })
}
  </script>