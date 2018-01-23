module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    serve: {
        options: {
            port: 9000
        }
    },

    sass: {
      options: {
        includePaths: []   
      },
      dist: {
        options: {
          outputStyle: 'expanded'
        },
        files: {
          'www/css/style.css': 'scss/style.scss'
        }        
      }
    },

    watch: {
      grunt: { 
        files: ['Gruntfile.js', 'www/*/**'] 
      },
      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      },
      options: { 
        livereload: true, 
        host: 'localhost',
        port: 35729
      } //Add Live Reload Chrome Extension for this to work
    },

    uglify: {
      all: {
        files: [{
          expand: true,
          cwd: 'js/',
          src: ['*.js'],
          dest: 'www/js',
          ext: '.min.js',
        }],
      },
    },
    
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'www/css',
          src: ['*.css'],
          dest: 'www/css',
          ext: '.min.css'
        }]
      }
    }


  });

grunt.loadNpmTasks('grunt-sass');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-serve');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-cssmin');

grunt.registerTask('default', 'watch');
grunt.registerTask('production', ['sass', 'cssmin', 'uglify']);
};