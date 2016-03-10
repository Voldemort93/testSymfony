    <td name="name<%= id %>"> <%= name %> </td>
    <td name="price<%= id %>"> <%= price %>  </td>
    <td name="description<%= id %>"> <%= description %></td>
    <td class="col-md-1 btn-info text-center"><a href="#edit/<%= id %>">Редактировать</a></td>
    <td class="col-md-3 btn-danger text-center"><a data-id="<%=id%>" data-bind="del">Удалить</a></td>