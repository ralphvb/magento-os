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