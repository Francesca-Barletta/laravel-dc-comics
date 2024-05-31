import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import BaseComponent from 'bootstrap/js/dist/base-component';
import.meta.glob([
    '../img/**'
])

const { createApp } = Vue

createApp({
  data() {
    return {
   currentComic: 0,
   comics: [],
    }
  },
  methods: {
    removeComic() {
        alert('vuoi davvero cancellare questo elemento?')
    },
  },
  created() {
   
  }
}).mount('#app')

