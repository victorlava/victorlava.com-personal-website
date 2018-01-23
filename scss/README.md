# Base (01-base)
The base directory contains styles that help start a project. The base directory could contain the following type of SASS files. The most important is **global.scss, because it's global - every style that doesn't fit inside component, partial, page or any of the base files, should go here.**
* _settings.scss
* _global.scss
* _fonts.scss
* _helpers.scss
* _animations.scss							

# Partials/Layout (02-partials)
The partials directory will probably contain the bulk of your SASS files. A page may consist of multiple partials and should be styled individually. These partials may include files like:
* _head.scss
* _footer.scss

# Components (03-components)
While partials/ and pages/ is kind of macro (defining the global wireframe), components/ is more micro. It can contain all kinds of specific modules like a slider, a loader, a widget, or anything along those lines. There are usually a lot of files in components/ 
since your site is should be mostly composed of tiny modules.
* _section.scss
* _navbar.scss
* _heading.scss											  			

# Pages (04-pages)
If you have page-specific styles, It’s good to put them in a pages/ folder and in a file named after the page. For example, it’s not uncommon to have very specific styles for the home page, so you’d have a _home.scss file in pages/ dealing with this. 
* _home.scss
* _about.scss
* _404.scss
* _contact.scss

# Vendors (05-vendors)


