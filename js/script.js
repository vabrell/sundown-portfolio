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
    
    tabs.forEach( tab => {
      
      tab.addEventListener('click', () => {
        if( !tab.classList.contains('is-active') ) {
          
          document.querySelector('.is-active').classList.remove('is-active')
          tab.classList.add('is-active')
        }
      })
    })
  }



})