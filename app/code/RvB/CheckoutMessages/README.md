## Depuracion de componente hijos.
- require('uiRegistry').get('checkout.sidebar').elems();
- require('uiRegistry').get('checkout.sidebar')._elems;
- require('uiRegistry').get('propertyName = propertyValue');
- require('uiRegistry').get('parentName = checkout.sidebar');
- require('uiRegistry').get('parentName = checkout.sidebar, index = guarantee');
- require('uiRegistry').get(ui => ui.parentName == 'checkout.sidebar' && console.log(ui.name));