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


  const tabs = document.querySelectorAll('.tabs li')

  if ( tabs.length > 0 ) {

    document.querySelectorAll('section').forEach(section => {
      if(document.querySelector('.is-active').dataset.target !== section.id) {
        section.style.display = 'none'
      }
    })

    
    tabs.forEach( tab => {
      
      tab.addEventListener('click', () => {
        if( !tab.classList.contains('is-active') ) {

          const dataTarget = tab.dataset.target
          
          document.querySelector('.is-active').classList.remove('is-active')
          document.querySelectorAll('section').forEach(section => {
            section.style.display = 'none'
          })

          document.querySelector(`#${dataTarget}`).style.display = 'block'
          tab.classList.add('is-active')
        }
      })
    })
  }



})