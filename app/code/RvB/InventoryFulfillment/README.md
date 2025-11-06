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
- Ko Utils: [Ko Utils](https://gist.github.com/hyle/1180607)

# Hierarchy Fallback

- Layout XML Config Node
- Init Script (x-magento-init)
- Construct Arguments

# CSS
- lib/web/css/source/lib/variables/*.less

---

# Future project ideas

1. <b>Convert Product List to KO Template:</b> Transform a standard Magento product list template into a Knockout.js template. Use observables to manage product data and implement dynamic sorting and filtering functionality. This will give you practice in converting static content to interactive KO-powered interfaces.

2. <b>Multi-Step Form with KO Event Handlers:</b> Create a multi-step customer survey or product customization form using Knockout.js. Implement form navigation and data persistence using KO event handlers and observables. This project will strengthen your skills in form handling and state management with KO.

3. <b>Dynamic Product Card with Magento CSS Variables:</b> Develop a product card component that uses Knockout.js to dynamically update its appearance based on product attributes. Utilize Magento CSS variables in your KO template to create smooth color transitions or style changes. This will help you understand the interaction between KO templates and Magento's styling system.

4. <b>Animated Order Status Tracker:</b> Build a visual representation of an order's journey from placement to delivery. Use KO computed functions and observables to update the status and animate a package icon moving through different stages. This project will showcase your ability to create dynamic, data-driven visualizations with KO.

5. <b>Custom Data Binding for Product Availability:</b> Create an advanced custom data binding that visualizes product availability. The binding could display different icons or color-coded text based on stock levels, and even show estimated restock dates for out-of-stock items. This will deepen your understanding of KO's binding system and how to extend it.

6. <b>Interactive Shopping Guide UI Component:</b> Combine UI components and KO.js templates to build an interactive shopping guide. This could be a product recommender that asks users a series of questions and suggests items based on their responses. Use UI components for the overall structure and KO templates for the dynamic content. This challenging project will test your ability to integrate KO with Magento's UI component system.