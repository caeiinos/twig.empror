# Simple twig theme.
## Dependencies

* timber & twig (Composer)
* laravel-mix
* babel
## Install

1. Install Wordpress by `wp core download` and go to wp-content/themes/
2. `git clone https://github.com/caeiinos/twig.empror.git`
3. `cd bootimber`
3. `composer install` - Timber installation (`/vendor` folder will be created)
4. `npm install` - Gulp, Bootstrap, BrowserSync, Sass, Autoprefixer, Cssnano installation (`/node-modules` folder will be created)
5. Activate theme in WP Admin panel

## Features

- Copy `src/*.twig` to `dist/*.html` folder.
- Doesn't copy `templates/*.twig` and `templates/**/*.twig`
- Copy `src/assets/*/` to `dist/assets/*/` folder.
- Compile SASS `src/styles/app.scss` to `dist/styles` folder.
- Bundle and transpile JS `src/scripts/app.js` to `dist/scripts` folder.
- Run a dev web server with browsersync.
- Has babel built in.
- fichier `js.map` et `css.map`


## methodology

- everything is based on the `BEM method` every folder or every class is named after **BLOCK > ELEMENT > MODIFIER(s)**
> **EXAMPLE** of structure :
>- `/src` - src folder (not compiled)
>   -  `/styles` - styles folder for all scss 
>        - `/components` - components folder for all components : *header, footer,...*
>           - `/header` - header section
>              - `/nav` - nav parts of the header
>                 - `nav.scss` - basic nav styles
>                 - `nav--front.scss` - nav styles for the front pages
>
> more readble and better for debugging with *css.map*
>
> **Don't make file with a thousand line when you can organize it in different folder**

- css class must be named block_element--modifier
- use short name for class like *header_nav--front* easy simple readable
> Don't make extra long nesting **.class .anotherClass .againAnotherClass .againAndAgain { style }**

## Commands

- `npm dev` : build on files changes.
- `npm devlopement` : build on files changes.
- `npm start` : build on files changes, launch a dev server with browsersync.
- `npm watch` : build on files changes, launch a dev server with browsersync.
- `npm run clean` : clean the `dist` folder.
- `npm run build` : create `dist` folder with minification.

## Resources

* [Timber Docs](https://timber.github.io/docs/)
* [Twig Docs](https://twig.symfony.com/doc/2.x/)
* [WP Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
* [Laravel mix](https://laravel-mix.com/)
* [Babel js](https://babeljs.io/docs/en/usage)