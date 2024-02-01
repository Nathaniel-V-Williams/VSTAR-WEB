(() => {

    const cucumberMenu = document.getElementById('cucumber-menu')
    const menu = document.getElementById('menu')
    const btnMenuClose = document.getElementById('menu-close')

    cucumberMenu.addEventListener('click', () => cucumberMenu.classList.add('show'))
    btnMenuClose.addEventListener('click', () => cucumberMenu.classList.remove('show'))

})()