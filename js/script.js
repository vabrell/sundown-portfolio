addEventListener('load', () => {

  const hamburgers = document.querySelectorAll('.navbar-burger')

  if ( hamburgers.length > 0 ) {

    hamburgers.forEach(burger => {

      burger.addEventListener('click', () => {

        const dataTarget = burger.dataset.target
        const target = document.querySelector(`#${dataTarget}`)

        burger.classList.toggle('is-active')
        target.classList.toggle('is-active')

      })

    })

  }

})