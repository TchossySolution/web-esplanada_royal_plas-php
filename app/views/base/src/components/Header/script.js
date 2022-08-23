// script do header

const conteudoTopo = document.querySelector('.container-conteudo-header-topo')

const nav = document.querySelector('header nav')

const logo = document.querySelector('#logotipo')

const toggle = document.querySelectorAll('header nav div.toggle')

const itensMenu = document.querySelectorAll('header nav ul li')

const linkHeader = document.getElementsByClassName('pagesLink')

window.addEventListener('scroll', function () {
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
  element.addEventListener('click', function () {
    nav.classList.toggle('show')
  })
}

for (const element of itensMenu) {
  element.addEventListener('click', function () {
    nav.classList.remove('show')
  })
}
