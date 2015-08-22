
module.exports = function (grunt) {

    'use strict';

    grunt.initConfig({

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
                    '**/*.php',
                    '**/*.json'
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
        'sass',
        'watch'
    ]);

    grunt.registerTask('build', [

    ]);
};