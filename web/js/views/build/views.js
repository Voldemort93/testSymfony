/**
 * Created by vladimir on 03.03.16.
 */
//Add product
AddProductView = Backbone.View.extend({
    initialize: function() {
    },
    //template: _.template($('#tplAddProduct').html()),
    template: this["JST"]["templates/tplAddProduct.tpl"],
    events: {
        'click #btn' : 'addProduct'
    },

    addProduct: function() {
        this.collection.create({
            name: $('#name').val(),
            price: $('#price').val(),
            description: $('#description').val()
        }, {
            success: function() {
                window.location.hash = "#";
            }
        });
    },
    render: function() {
        this.$el.html(this.template({
            edit: false,
            name: '',
            price: '',
            description: ''
        }));
        return this;
    }

});

/**
 * Created by vladimir on 03.03.16.
 */
UpdateProductView = Backbone.View.extend({
    initialize: function() {
        console.log(this.$el.data('#name'));
        $('#content').html('');
    },
    //template: _.template($('#tplAddProduct').html()),
    template: this["JST"]["templates/tplAddProduct.tpl"],
    events: {
        'click #btn': 'updateProduct'
    },

    updateProduct: function() {


        this.model.save({
            name: $('#name').val(),
            price: $('#price').val(),
            description: $('#description').val()
        }, {
            success: function() {
                window.location.hash="#";
            }
        });

    },
    render: function() {
        this.$el.html(this.template(_.extend(this.model.toJSON(),{'edit':true})));
        return this;
    }

});

/**
 * Created by vladimir on 03.03.16.
 */

showProductView = Backbone.View.extend({
    tagName: 'tr',
    //template: _.template($('#tplGet').html()),
    template: this["JST"]["templates/tplGet.tpl"],
    events:{
        'click [data-bind=del]': 'del'
    },
    render: function () {
        product = this.model.toJSON();
        this.$el.html(this.template(product));
        return this;
    },
    del: function() {
        var _this = this;
        this.model.destroy({
            success: function () {
                _this.remove();
            }
        });
    }
});
/**
 * Created by vladimir on 03.03.16.
 */

showProductsView = Backbone.View.extend({
    initialize: function(args) {
        this.collection = args.collection;
        this.collection.fetch({success: this.render.bind(this)});
    },
    events: {
    },
    //template: _.template($('#tplMain').html()),
    template: this["JST"]['templates/tplMain.tpl'],
    render: function() {
        var _this = this;
        this.$el.html(this.template());
        this.collection.each(function(model) {
            var _view = new showProductView({
               model:model
            })
            _this.$el.find('tbody').append(_view.render().el);
        });

        return this;
    }
});
