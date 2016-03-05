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

    });

    // Загрузка плагинов, установленных с помощью npm install
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // Задача по умолчанию
    grunt.registerTask('default', ['concat', 'uglify']);
};