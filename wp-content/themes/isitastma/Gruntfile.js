module.exports = function(grunt) {
  grunt.initConfig({
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'assets/css/main.css': 'assets/scss/main.scss'
        }
      }
    },
    watch: {
      sass: {
        // We watch and compile sass files as normal but don't live reload here
        files: ['assets/scss/*.sass'],
        tasks: ['sass'],
      },
      livereload: {
        // Here we watch the files the sass task will compile to
        // These files are sent to the live reload server after sass compiles to them
        options: { livereload: true },
        files: ['assets/css/main.css'],
      },
    },
  });
   
  grunt.loadNpmTasks('grunt-contrib-sass');
   
  grunt.registerTask('default', ['sass']);

};