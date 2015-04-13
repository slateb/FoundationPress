# starterslab [![Build Status](https://travis-ci.org/olefredrik/starterslab.svg?branch=master)](https://travis-ci.org/olefredrik/starterslab)

This is a WordPress starter theme based on Foundation 5 by Zurb. The purpose of starterslab, is to act as a small and handy toolbox that contains the essentials needed to build any design. starterslab is meant to be a starting point, not the final product. If you're looking for an all-in-one theme with built-in shortcodes, plugins, fancypancy portfolio templates or whatnot, I'm afraid you have to look elsewhere.

Please fork, copy, modify, delete, share or do whatever you like with this. 

All contributions are welcome!

## Requirements

**A brief explanation to the requirements** (feel free to skip this if you're a pro):

Back in the days we wrote all styles in the style.css file. Then we realized that this could quickly create clutter and confusion, especially in larger projects. Foundation uses SASS (equivalent to LESS, used in Bootstrap). In short, SASS is a CSS pre-processor that allows you to write styles more effectively and tidy. 

To compile SASS files into one style sheet, we use a tool called Grunt. In short, Grunt is a task runner that automates repetitive tasks like minification, compilation, linting, etc. Grunt and Grunt plugins are installed and managed via npm, the Node.js package manager. Before setting up Grunt ensure that your npm is up-to-date by running ```npm update -g npm``` (this might require ```sudo``` on certain systems)

Bower is a package manager used by Zurb to distribute Foundation. When you have Bower installed, you will be able to run ```foundation update``` in the terminal to update Foundation to the latest version. (After an upgrade you must run ```grunt build``` to recompile files).


**Okay, so you'll need to have the following items installed before continuing.**

  * [Node.js](http://nodejs.org)
  * [Grunt](http://gruntjs.com/): Run `[sudo] npm install -g grunt-cli`
  * [Bower](http://bower.io): Run `[sudo] npm install -g bower`

## Quickstart

```bash
cd my-wordpress-folder/wp-content/themes/
git clone git@github.com:olefredrik/starterslab.git
mv starterslab your-theme-name
cd your-theme-name
npm install && bower install && grunt build
```

**Tip:** 
If you get an error saying Permission denied (publickey) when cloning the repository, use the https protocol instead:
```git clone https://github.com/olefredrik/starterslab.git```

While you're working on your project, run:

`grunt watch`

And you're set!

Check for Foundation Updates? Run:
`foundation update` 
(this requires the foundation gem to be installed in order to work. Please see the [docs](http://foundation.zurb.com/docs/sass.html) for details.)

### Stylesheet Folder Structure

  * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

  * `scss/foundation.scss`: Imports for Foundation components and your custom styles.
  * `scss/config/_settings.scss`: Original Foundation 5 base settings
  * `scss/config/_custom-settings.scss`: Copy the settings you will modify to this file. Make it your own
  * `scss/site/*.scss`: Unleash your creativity and make it look perfect. Create the files you need (and remember to make import statements for all your files in scss/foundation.scss)
  
  * `css/foundation.css`: All Sass files are minified and compiled to this file
  * `css/foundation.css.map`: CSS source maps

### Script Folder Strucutre
  
  * `bower_components/`: This is the source folder where all Foundation components are located. `foundation update` will check and update scripts in this folder.

  * `js/custom`: This is where you put all your custom scripts. Every .js file you put in this directory will be minified and concatinated to [foundation.js](https://github.com/olefredrik/starterslab/blob/master/js/foundation.js)

  * `js/vendor`: Vendor scripts are copied from `bower_components/` to this directory. We use this path for enqueing the vendor scripts in WordPress.

  * Please note that you must run `grunt build` in your terminal for the script to be copied and concatinated. See [Gruntfile.js](https://github.com/olefredrik/starterslab/blob/master/Gruntfile.js) for details
