
module.exports = function (grunt) {

    'use strict';

    grunt.initConfig({

        connect: {
            server: {
                options: {
                    port: 9000,
                    hostname: 'localhost'
                }
            }
        },

        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'style.css': 'scss/main.scss'
                }
            }
        },

        watch: {

            sass: {
                options: {
                    livereload: true
                },
                tasks: [
                    'sass'
                ],
                files: [
                    'scss/**/*.scss'
                ]
            },

            files: {
                options: {
                    livereload: true
                },
                files: [
                    '**/*.html'
                ]
            }
        }

    });

    // load npm tasks
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');


    // task definitions
    grunt.registerTask('default', [
        'connect',
        'sass',
        'watch'
    ]);

    grunt.registerTask('build', [
      // TODO add the task [Mateusz]
    ]);
};