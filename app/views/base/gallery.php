 <?php $this->layout('_theme') ?>
 <link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . BASE_STYLES . "/galleryStyle.css")?>">

 <main>
   <section id="container-img-cabecalho">
     <div id="cores-por-cima-img"></div>
     <div id="container-conteudo-img-hotel">
       <p id="nome-pagina" class="maiuscula">nossa galeria</p>
       <p id="referencia">
         Casa / <span id="referencia-colorida"> Galeria de imagens </span>
       </p>
     </div>
   </section>

   <div class="container">
     <h2 class="titleGallery">Conheça as nossas maravilhas</h2>

     <ul class="filter-menu">
       <li data-target="all">Tudo</li>
       <li data-target="piscina">Piscina</li>
       <li data-target="restaurant">Restaurantes</li>
       <li data-target="bar">Bar</li>
     </ul>

     <ul class="filter-item">
       <li data-item="piscina">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/galleryImages/pscina1.jpg")?>" alt="" />
       </li>
       <li data-item="piscina">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/galleryImages/piscina2.jpeg")?>" alt="" />
       </li>
       <li data-item="piscina">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/galleryImages/piscina3.avif")?>" alt="" />
       </li>

       <li data-item="restaurant">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/galleryImages/restaurante1.jpeg")?>" alt="" />
       </li>

       <li data-item="restaurant">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/galleryImages/restaurante2.jpg")?>" alt="" />
       </li>

       <li data-item="bar">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/galleryImages/bar1.jpg")?>" alt="" />
       </li>
       <li data-item="bar">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/galleryImages/bar2.jpg")?>" alt="" />
       </li>
       <li data-item="bar">
         <img src="<?= urlProject(FOLDER_BASE . BASE_IMAGES . "/galleryImages/bar3.jpg")?>" alt="" />
       </li>
     </ul>
   </div>
 </main>

 <script>
// Filtro na galeria
let sortBtn = document.querySelector('.filter-menu').children
let sortItem = document.querySelector('.filter-item').children

for (let i = 0; i < sortBtn.length; i++) {
  sortBtn[i].addEventListener('click', function() {
    for (let j = 0; j < sortBtn.length; j++) {
      sortBtn[j].classList.remove('current')
    }

    this.classList.add('current')

    let targetData = this.getAttribute('data-target')

    for (let k = 0; k < sortItem.length; k++) {
      sortItem[k].classList.remove('active')
      sortItem[k].classList.add('delete')

      if (
        sortItem[k].getAttribute('data-item') == targetData ||
        targetData == 'all'
      ) {
        sortItem[k].classList.remove('delete')
        sortItem[k].classList.add('active')
      }
    }
  })
}
 </script>