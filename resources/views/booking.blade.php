@verbatim
<div>
  <div class="modal" tabindex="-1" role="dialog" id="booking_modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="mobile">Mobile</label>
              <input type="tel" class="form-control" id="mobile" aria-describedby="mobileHelp" placeholder="Enter Mobile Number">
              <small id="mobileHelp" class="form-text text-muted">We'll never share your mobile with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
              <small id="emailHelp" class="form-text text-muted">Providng an email is optional</small>
            </div>
            <div class="form-group">
              <label for="number">Number of guests</label>
              <input type="number" class="form-control" id="number" placeholder="Number of guests">
            </div>
            <div class="form-group" v-if="dates.length==0">
              <label for="arrival">Date of arrival</label>
              <input type="text" class="form-control" id="arrival" placeholder="Date of arrival">
            </div>
            <div class="form-group" v-else>
              <label for="arrival">Date of arrival</label>
              <select class="form-control" id="arrival">
                <option v-for="date in dates">{{ date }}</option>
              </select>
            </div>
            <input type="hidden" :value="table" id="table"></input>
            <button type="submit" class="btn btn-primary" onclick="make_booking(event)">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#booking_modal').hide()">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div v-for="tables in groupedTables" class="row" class="tables">
    <div v-for="table in tables" class="col-sm-4">
      <rest-table :name="table.name" :position="table.position.name" :count="table.count" :img-url="table.image" :booking_count="table.booking_count"></rest-table>
    </div>
  </div>
</div>
@endverbatim
