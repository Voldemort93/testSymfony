/**
 * Created by vladimir on 03.03.16.
 */

showProductView = Backbone.View.extend({
    tagName: 'tr',
    template: _.template($('#tplGet').html()),
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