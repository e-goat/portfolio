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

let attrs = [
    'snapshot',
    'effects',
    // 'id'
];

function snapKill() {
    document.querySelectorAll('article').forEach(function(element) {
        for (let i in attrs) {
            if (element.getAttribute(`wire:${attrs[i]}`) !== null) {
                element.removeAttribute(`wire:${attrs[i]}`);
            }
        }
    });

    document.querySelectorAll('div').forEach(function(element) {
        for (let i in attrs) {
            if (element.getAttribute(`wire:${attrs[i]}`) !== null) {
                element.removeAttribute(`wire:${attrs[i]}`);
            }
        }
    });
}

window.addEventListener('load',(ev) =>{
       snapKill();
});

document.addEventListener('livewire:navigated', () => {
  initFlowbite();
})