## UI Class
- Cada UI Component/Element/Collection heredan de UI Class

## UI Element
- Define/Obtiene observables, defaults, initiliza propiedades, obtiene templates.
- Contiene la funcionalidad principal de los UI Components.
- No pueden tener Child Components.

## UI Collection
- Utiliza UI Element como base.
- Extiende y agrega funcionalidad para Child Component y Regions.

## UI Component
- Es un alias del UI Collection (son las mismas clases).

## Inicializar components en blocks.
- Mediante XML en layout.
- Mediante JSON en template.

## Acceso a Propiedades
- getTemplate() === get('template') === template: 'Ruta/al/template' (en phtml)
- require('uiRegistry').get('free-shipping-banner').set('hello', 'world');
- require('uiRegistry').get('free-shipping-banner').set('welcome', { to: { my: 'world' } });
- require('uiRegistry').get('free-shipping-banner').get('welcome');
- require('uiRegistry').get('free-shipping-banner').remove('welcome.to.my');

## Documentacion Oficial