@verbatim
<div v-for="tables in groupedTables" class="row">
  <div v-for="table in tables" class="col-sm-3">
    <rest-table :name="table.name" :position="table.position.name" :count="table.count" :img-url="table.image"></rest-table>
  </div>
</div>
@endverbatim
