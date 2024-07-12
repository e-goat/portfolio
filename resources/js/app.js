import './bootstrap';
import '../css/app.css'; 

import { initFlowbite } from 'flowbite';

Livewire.hook('commit', ({ component, commit, respond, succeed, fail }) => {
  succeed(({ snapshot, effect }) => {
      queueMicrotask(() => {
          initFlowbite();
      })
  })
})

document.addEventListener('livewire:navigated', () => {
  initFlowbite();
})