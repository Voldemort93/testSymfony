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
    template: _.template($('#tplMain').html()),
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
