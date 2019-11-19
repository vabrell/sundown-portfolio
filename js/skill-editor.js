addEventListener('load', () => {
  const select = document.querySelector('#iconSelect'),
    icon = document.querySelector('#selectIcon')

  select.addEventListener('change', e => {
    // Remove current icon
    icon.classList.remove(icon.classList[2])

    // Set selected icon
    icon.classList.add(e.target.value)
  })
})
