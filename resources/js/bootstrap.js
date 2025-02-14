import 'bootstrap';

import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

import $ from 'jquery';
window.$ = $;
window.jQuery = $;


console.log('Meanmenu:', $.fn.meanmenu);

console.log("mostrando JQuery: ", window.$);  // Debe mostrar la referencia de jQuery


import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
