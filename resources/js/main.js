
document.addEventListener('livewire:navigated', () => { 
  const themeToggler = document.querySelector('#theme-toggle')

  // On page load or when changing themes, best to add inline in `head` to avoid FOUC
  if (localStorage.theme === 'dark') {
    document.documentElement.classList.add('dark')
    themeToggler.checked = true
  } else {
    document.documentElement.classList.remove('dark')
  }

  themeToggler.addEventListener('click', () => {
    if (localStorage.theme === 'dark') {
      document.documentElement.classList.remove('dark')
      localStorage.theme = 'light'
    } else {
      localStorage.theme = 'dark'
      document.documentElement.classList.add('dark')
      document.documentElement.classList.add('dark')
    }
  })
})
