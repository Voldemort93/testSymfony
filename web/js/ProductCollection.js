/**
 * Created by vladimir on 25.02.16.
 */

ProductsCollection = Backbone.Collection.extend({
    model: Product,
    url: '/product/'
});