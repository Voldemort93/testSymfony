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
