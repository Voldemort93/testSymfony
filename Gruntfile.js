/**
 * Created by vladimir on 05.03.16.
 */
module.exports = function (grunt) {
    // Задачи
    grunt.initConfig({
        // Склеиваем
        concat: {
            main: {
                src: [
                    //'js/libs/jquery.js',
                    'web/js/views/*.js'  // Все JS-файлы в папке
                ],
                dest: 'web/js/views/build/views.js'
            }
        },
        // Сжимаем
        uglify: {
            main: {
                files: {
                    // Результат задачи concat
                    'web/js/views/build/views.min.js': '<%= concat.main.dest %>'
                }
            }
        },
        jst: {
            compile: {
                options: {
                    //namespace: "anotherNameThanJST",      //Default: 'JST'
                    prettify: true,                        //Default: false|true
                    amdWrapper: false,                      //Default: false|true
                    templateSettings: {
                    },
                    processName: function(filename) {
                        //Shortens the file path for the template.
                        return filename.slice(filename.indexOf("template"), filename.length);
                    }
                },
                files: {
                    "web/js/views/build/templates.js": ["src/dbBundle/Resources/views/Default/templates/*.tpl"]
                }
            }
        }
    });

    // Загрузка плагинов, установленных с помощью npm install
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jst');

    // Задача по умолчанию
    grunt.registerTask('default', ['concat', 'uglify','jst']);
};