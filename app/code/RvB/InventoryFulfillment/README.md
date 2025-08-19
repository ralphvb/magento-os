# Comandos para depurar en la consola del navegador:

## UI Components
- require('uiRegistry')
- require('uiRegistry').get('uiComponentName')
- require('uiRegistry').get('uiComponentName').parameter
- require('uiRegistry').get(uiItem => console.log(uiItem.name))

## KO Templates
- $0 (Elemento seleccionado del DOM)
- require('ko').contextFor($0)
- require('ko').contextFor($0).parameter

## Documentacion Oficial
- KO Bindings: [Custom Knockout.js bindings](https://developer.adobe.com/commerce/frontend-core/ui-components/concepts/knockout-bindings/)
- Magento Binding: [Binding syntax](https://developer.adobe.com/commerce/frontend-core/ui-components/concepts/binding-syntax/)

# Hierarchy Fallback

- Layout XML Config Node
- Init Script (x-magento-init)
- Construct Arguments