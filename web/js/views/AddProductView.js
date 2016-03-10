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
