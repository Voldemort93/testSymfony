/**
 * Created by vladimir on 25.02.16.
 */

Product = Backbone.Model.extend({
    //validate
    urlRoot: '/product/',
    validate: function(attrs) {
        if( ! attrs.name || ! attrs.price ) {
            return 'Название и цена обязательны для заполнения!';
        }
    }
});