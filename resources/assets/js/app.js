
import Vue from 'vue'
import upperFirst from 'lodash/upperFirst'
import camelCase from 'lodash/camelCase'
import Vuetify from 'vuetify';

Vue.use(Vuetify);

const requireComponent = require.context(
  // La ruta relativa de la carpeta de componentes
  './components',
  // Si mirar o no en las subcarpetas
  true
)

requireComponent.keys().forEach(fileName => {
  // Obtener la configuración de los componentes
  const componentConfig = requireComponent(fileName)

  // Obtener el nombre PascalCase del componente
  const componentName = upperFirst(
    camelCase(
      // Quitar el `./`en el comienzo y la extensión del nombre del archivo 
      fileName.replace(/^\.\/(.*)\.\w+$/, '$1')
    )
  )

  // Registrar el componente a nivel global
  Vue.component(
    componentName,
    // Busca las opciones de componentes en `.default`, que
    // existen si el componente fue exportado con `export default`,
    // de lo contrario volver a la raíz del módulo.
    componentConfig.default || componentConfig
  )
})

const app = new Vue({
    el: "#app",
    vuetify: new Vuetify()
})
