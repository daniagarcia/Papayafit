import router from './routes'
import VueAxios from 'vue-axios'
import axios from 'axios'
import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/es'
import App from '../components/App.vue'

window.Vue = require('vue')
Vue.use(VueAxios, axios)
Vue.use(ElementUI, { locale })

new Vue(Vue.util.extend({ router }, App)).$mount('#dashboard')