/**
 * Created by vladimir on 21.02.16.
 */

(function(){
    window.App = {
        Models: {},
        Views: {},
        Collections: {}
    };

/*
    App.Models.Product
    App.Views.ProductView
    App.Collections.ProductsCollections
*/

    window.template = function(id) {
        return _.template($('#' + id).html());
    }

    App.Models.Product = Backbone.Model.extend({
        defaults: {
            name: "empty name",
            price: "0.00",
            description: "empty"
        },
        validate: function(attrs) {
            console.log("Hello "+attrs);
            if (attrs.price <= 0) {
                return "Цена не может быть отрицательной!";
            }
        },
        initialize: function () {
            if (!this.get("name")) {
                this.set({"name": this.defaults.name});
            }
            if (!this.get("price")) {
                this.set({"price": this.defaults.price});
            }
            if (!this.get("description")) {
                this.set({"description": this.defaults.description});
            }
            return "DONE";
        }
    });

    App.Views.ProductView = Backbone.View.extend({
        tagName: 'li',

        //template: _.template($('#product-id').html()),
        //template: '#product-id',
        template: template('product-id'),

        initialize: function() {
            this.render();
        },

        render: function () {
            this.$el.html(this.template(this.model.toJSON()));
            return this;
        }
    });
    var product = new App.Models.Product();

    App.Collections.ProductsCollection = Backbone.Collection.extend({
        model: App.Models.Product/*,
        url: 'localhost:8000/product'*/
    });

    //var Products = new ProductCollection;

    App.Views.ProductsView = Backbone.View.extend({
        tagName: 'ul',
        initialize: function(){
        },
        render: function() {
            this.collection.each(function(product){
                var productView = new App.Views.ProductView({model:product});
                this.$el.append(productView.render().el);
            }, this);
            return this;
        }
    });

    var productCollection = new App.Collections.ProductsCollection([
        {
            name: "Hatsan",
            price: 1234.56,
            description: "380 m/s"
        },
        {
            name: "Kral",
            price: 1444.56,
            description: "360 m/s"
        },
        {
            name: "Bam",
            price: 734.56,
            description: "120 m/s"
        }
    ]);

    var productsView = new App.Views.ProductsView({collection: productCollection});
$(document.body).append(productsView.render().el);
console.log(productsView);
}());