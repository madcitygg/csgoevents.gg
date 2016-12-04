/* 

TODO:
- Do something cleaner with the path to the theme directory 
- Don't commit the 'public' assets directory

*/
module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: ['public/wp-content/themes/csgoeventsgg/dev/js/vendor/isotope.pkgd.js', 'public/wp-content/themes/csgoeventsgg/dev/js/app.js'],
        dest: 'public/wp-content/themes/csgoeventsgg/public/js/<%= pkg.name %>.js'
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      },
      dist: {
        files: {
          'public/wp-content/themes/csgoeventsgg/public/js/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
        }
      }
    },
    jshint: {
      files: ['Gruntfile.js', 'dev/js/**/*.js'],
      options: {
        // options here to override JSHint defaults
        globals: {
          jQuery: true,
          console: true,
          module: true,
          document: true
        }
      }
    },
    sass: {
      options: {
        sourceMap: false
      },
      dist: {
        files: {
          'public/wp-content/themes/csgoeventsgg/public/css/app.css':'public/wp-content/themes/csgoeventsgg/dev/scss/app.scss'
        }
      }
    },
    postcss: {
      options: {
        map: {
            inline: false,
            annotation: 'public/wp-content/themes/csgoeventsgg/public/css/maps/'
        },
        processors: [
          require('pixrem')(), // add fallbacks for rem units
          require('autoprefixer')({browsers: 'last 2 versions, not ie <= 8'}),
          require('cssnano')()
        ]
      },
      dist: {
        src: 'public/wp-content/themes/csgoeventsgg/public/css/app.css'
      }
    },
    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'public/wp-content/themes/csgoeventsgg/dev/images/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'public/wp-content/themes/csgoeventsgg/public/images/'
        }]
      }
    },
    copy: {
      main: {
        files: [
          {expand: true, flatten: true, src: ['public/wp-content/themes/csgoeventsgg/dev/fonts/**'], dest: 'public/wp-content/themes/csgoeventsgg/public/fonts/'}
        ]
      }
    },
    watch: {
      options: {
        livereload: true
      },
      files: ['<%= concat.dist.src %>', 'public/wp-content/themes/csgoeventsgg/dev/scss/**/*.scss'],
      tasks: ['concat', 'uglify', 'sass', 'postcss']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('default', ['concat', 'uglify', 'sass', 'postcss', 'copy']);
  grunt.registerTask('compress-images', ['imagemin']);

  grunt.registerTask('w', ['watch']);
  grunt.registerTask('production', ['default', 'compress-images']);
};
