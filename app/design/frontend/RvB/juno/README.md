# Tips:

- Para corregir o cambiar nombre del tema, en la BD eliminar el registro del tema de la tabla theme.
- El tamaño del preview.png debe ser 800x800 y en PNG.
- Frontend directory fallback: vendor > app/design > app/code / base > frontend/adminhtml
- Update Handles incluye el contenido del nodo referenciado.
- Layout Handles: page layout handles (rutas de controladores), page specific handles y arbitrary handles.
- Handles para CMS Home: cms_page_view_id_home (specific) = cm_index_index (page).
- Specific Handle para productos simples en específico: catalog_product_view_type_simple_id_{id} = /catalog/product/view?type=simple&id=1 = catalog_product_view_sku_{sku}.
- Specific Handle para productos descargables: catalog_product_view_type_downloadable.
- SpecificHandle para productos simples en el Cart: checkout_cart_configure_type_simple.
- Arbitrary Handle para todas las páginas: default.xml.

# Config Grunt

1. Se instala node (Mark dice que global, pendiente de checar en Arch RvB).
2. Se instala grunt: npm-install grunt-cli.
3. Se duplican archivos "package.json", "grunt-config.json" y "Gruntfile.js".
4. Se instalan librerías: npm install.
5. En "dev/tools/grunt/configs/" duplicar archivo themes.js con nombre "local-themes" y agregar tema custom.
6. Comandos: grunt clean, grunt exec, grunt less, grunt watch.
7. Funcionalidad LiveReload: LiveReload / Live Server Web Extension (https://github.com/ritwickdey/live-server-web-extension/blob/master/docs/Setup.md)

# CSS

1. _theme.less es para sobreescribir variables del tema.
2. _module.less es para hacer override de estilos nativos o estilizar custom modules.
3. _extend.less es para hacer extender estilos nativos o estilizar custom modules.
4. Ruta para consultar documentación interna de CSS en Magento: http://{URL}/static/frontend/Magento/blank/en_US/css/docs/index.html
5. Optimización de Assets: https://experienceleague.adobe.com/en/docs/commerce-operations/implementation-playbook/best-practices/development/optimize-css-js-files
6. Herramienta Online para minificar CSS: https://www.toptal.com/developers/cssminifier

# Future project ideas

- Add the help icon next to the label
- Updated font colors
- Pop-up arrow alignment with help icon
- Help icon size
- Help icon color, rest and hover states
- Custom Product Page Layout: Create a unique product page layout that focuses on visual storytelling, highlighting product features and benefits in a more engaging way.
- Animated Checkout Progress Indicator: Develop a checkout progress indicator with subtle animations and micro-interactions to enhance the user experience during checkout.
- Witty and Helpful 404 Error Page: Design a 404 error page that not only informs users but also entertains them with witty content while guiding them back to relevant pages.
- Enhanced Category Page Layout: Improve the category page by adding dynamic product highlighting and custom filtering options for a more interactive browsing experience.
- Zoomable Product Image Gallery: Build a product image gallery with zoom functionality and clickable hotspots that reveal product details or features.
- Responsive Sticky Header: Create a sticky header with smooth scroll-triggered animations that adapts seamlessly to various screen sizes.
- Footer Redesign: Redesign the footer with an animated newsletter signup form and improved layout of store information and links.
- Slide-out Mini-cart: Develop a slide-out mini-cart with real-time cart total updates and a smooth animation when adding or removing products.
- Dark Mode Theme Implementation: Implement a dark mode option for your theme with a toggle switch and smooth transition effects between light and dark modes.
- Main and Child Theme Structure: Create a main theme and a child theme, then design a showcase page that demonstrates the differences and inheritance between them.
- Interactive Product Comparison Page: Redesign the product comparison page to be more user-friendly and interactive, with side-by-side feature comparisons and highlighting of differences.
- Dynamic Product Badges System: Develop a system for displaying dynamic product badges (e.g., "New", "Sale", "Best Seller") with customizable styles based on product attributes or conditions.