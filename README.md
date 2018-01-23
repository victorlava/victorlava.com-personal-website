Hybrid front-end/backend boilerplate with **SASS** and **Live Reload**. Works well for simple websites with a little bit of **PHP**. Includes structured SASS with basic **OOCSS**.
# Features
* Grunt
* SASS
* Live Reload
* PHP

# Getting started
Take a look a the directory structure below and then proceed with the instructions on how to setup your first project.

## Directory Structure
1. [scss](https://github.com/victor-lava/front-end-boilerplate/tree/master/scss) *(style files)*
	1. [01-components](https://github.com/victor-lava/front-end-boilerplate/tree/master/scss/01-components)
	2. [02-partials](https://github.com/victor-lava/front-end-boilerplate/tree/master/scss/02-partials)
	3. [03-pages](https://github.com/victor-lava/front-end-boilerplate/tree/master/scss/03-pages)
	4. [04-base](https://github.com/victor-lava/front-end-boilerplate/tree/master/scss/04-base)
	5. style.scss
2. js *(unminified JS files)*
3. www *(PHP files)*
	1. css
	2. js *(minified JS files)*
	3. partials *(your PHP partial files, for ex. head.php, footer.php)*
	4. index.php
	5. contact.php
	6. about.php
	7. 404.php 

## Install global dependencies
1. [Node.js](https://nodejs.org/en/)
2. [Ruby](https://www.ruby-lang.org/en/documentation/installation/)
4. [Grunt.js](https://gruntjs.com/)
5. PHP (with working CLI)

## How to start new project
1. Open terminal
	1. Clone or download this repository
		``` git clone git@github.com:victor-lava/front-end-boilerplate.git ```
	2. Open the project
		``` cd project_folder/www ```
	3. Launch the PHP server
		``` php -S localhost:9000 ```

2. Open new terminal
	1. Open the project 
		``` cd project_folder/ ```
	2. Install the required node packages
		``` npm install ```
	3. Launch the grunt watch task
	   ``` grunt watch ```

3. Open http://localhost:9000 on your browser


## How to continue project
1. Open terminal
	1. Open the project
		``` cd project_folder/www ```
	2. Launch the PHP server
		``` php -S localhost:9000 ```

2. Open new terminal
	1. Open the project 
		``` cd project_folder/ ```
	2. Launch the grunt watch task
	   ``` grunt watch ```

## How to minify files
	1. Open the project 
		``` cd project_folder/www ```
	2. Launch grunt production task
		``` grunt production ```

# Author
 Full-stack web developer from Europe - Victor Lava. 

 Visit my website here - [victorlava.com](http://victorlava.com)

# License
MIT 

Copyright (c) <2017> <Victor Lava <info@victorlava.com>>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

# Credits
Borrowed some ideas from [Gergely Kovács](https://github.com/ggkovacs/architecture-sass-project).
