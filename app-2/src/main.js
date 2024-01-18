import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import TagsInput from './components/Tagsinput.vue'


const app = createApp(App)
app.component('tags-input', TagsInput)
app.mount('#app')
