    <a href="#">Назад</a>
    <% if(!edit) { %>
    <h1 class="text-center">Добавить новую модель</h1>
    <% } else { %>
    <h1 class="text-center">Редактировать модель</h1>
    <% } %>
    <form id="addProduct" role="form"class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">Название: </label>
            <div class="col-sm-9">
                <input class="form-control" type="text" id="name" name="name" value="<%= name %>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name" for="price">Цена: </label>
            <div class="col-sm-9">
                <input class="form-control" type="text" id="price" name="price" value="<%= price %>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name" for="description">Описание: </label>
            <div class="col-sm-9">
                <textarea class="form-control" id="description" name="description" ><%= description %></textarea>
            </div>
        </div>
        <div class="form-group">
            <input class="center-block btn btn-success" type="button" id="btn" value="<%= edit ? 'Редактировать': 'Добавить' %> контакт">
        </div>
    </form>