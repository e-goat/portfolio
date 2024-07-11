
document.addEventListener('livewire:navigated', () => {
  "use strict"
  const themeToggler = document.querySelector('#theme-toggle')

  // On page load or when changing themes, best to add inline in `head` to avoid FOUC
  if (localStorage.theme === 'dark') {
    document.documentElement.classList.add('dark')
    document.querySelector('.theme-toggler .svg-light').classList.remove('hidden')
    themeToggler.checked = true
  } else {
    document.documentElement.classList.remove('dark')
    document.querySelector('.theme-toggler .svg-dark').classList.remove('hidden')
  }

  themeToggler.addEventListener('click', () => {
    document.querySelectorAll('.toggler-svg').forEach(svg => svg.classList.remove('hidden'))
    if (localStorage.theme === 'dark') {
      document.querySelector('.toggler-svg.svg-light').classList.add('hidden')
      document.documentElement.classList.remove('dark')
      localStorage.theme = 'light'
    } else {
      localStorage.theme = 'dark'
      document.querySelector('.toggler-svg.svg-dark').classList.add('hidden')
      document.documentElement.classList.add('dark')
      document.documentElement.classList.add('dark')
    }
  })
})
