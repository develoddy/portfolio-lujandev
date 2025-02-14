// const plugins = import.meta.glob('./plugins/*.js');

// for (const path in plugins) {
//   console.log(`Cargando plugin: ${path}`); 
//   plugins[path]().then((module) => {
//     console.log(`Plugin cargado: ${path}`, module);
//   });
// }


// const vendorModules = import.meta.glob('./vendor/*.js');
// for (const path in vendorModules) {
//     console.log(`Cargando vendorModules: ${path}`);
//   vendorModules[path]().then((module) => {
//     // Procesa el módulo si es necesario.
//     console.log(`Plugin cargado: ${path}`, module);
//   });
// }



import './bootstrap';

//import '../sass/app.scss';

// CSS
import './styles';

// JS
import './main';

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);
