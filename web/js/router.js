/**
 * Created by vladimir on 25.02.16.
 */

Router = Backbone.Router.extend({
    routes: {
        'new':"add",
        'edit/:id':'update',
        //'delete':'delete',
        '' : 'show'
    },
    initialize: function(){
        this.productsCollection=new ProductsCollection();
    /*
        var _viewMain = new ProductView();
        //var _addProductView = new AddProductView();
        $('#content').append(_viewMain.render().el);*/
    },
    show:function() {
        var _viewMain = new showProductsView({
            collection:this.productsCollection
        });
        $('#content').html(_viewMain.render().el);
    },
    add: function () {
        var _addProductView = new AddProductView({ collection: this.productsCollection });
        $('#content').html(_addProductView.render().el);
    },
    update: function (id) {
        var _updateProductView = new UpdateProductView({ model: this.productsCollection.get(id) });
        $('#content').html(_updateProductView.render().el);
    },
    index: function() {
        console.log('product!!!');
    }

});