
function needs_login(handler) {
  var token = localStorage.getItem("token");
  if (token === 'undefined' || token === null) {
    alert("show login modal");
    $("#login_modal").show();
  }
  else {
    handler(token);
  }
}

Vue.component('rest-table', {
  props: ['name', 'position', 'count', 'imgUrl', "booking_count"],
  template: '<div class="rest-table"><img onclick="show_booking_modal(event)" width="230" height="200" :src="imgUrl" :alt="name" /><h2>{{ name }}</h2><p>{{ position }} - {{ count }}</p><p>Number of bookings: {{ booking_count }}</p></div>'
})

var vm = new Vue({
  el: "#app",
  data: {
    page: "booking",
    tables: [],
    table: "",
    dates: []
  },
  computed: {
    groupedTables() {
      return _.chunk(this.tables, 3);
    }
  }
})

axios({
  url: "/api/tables",

  method: "GET",

  headers: {
    "Accept": "application/json"
  },

  responseType: 'json',
}).then(function(response) {
  vm.tables = response.data.tables;

})

function make_booking(event) {
  event.preventDefault();
  var table = $("#table").val();
  var mobile = $("#mobile").val();
  var name = table;
  var email = $("#email").val()
  var arrival = $("#arrival").val()
  var d = new Date(arrival);
  arrival = d.toLocaleString();
  console.log(arrival);
  var number = $("#number").val()
  axios({
    method: "POST",
    url: "/api/booking",
    headers: {
      "Accept": "application/json",
      "Content-Type": "application/json",
      "Authorization": `Bearer ${localStorage.getItem("token")}`
    },
    data: {
      table: table,
      mobile: mobile,
      name: name,
      email: email,
      number: number,
      arrival: arrival
    },
    responseType: 'json'
  }).then(function (response) {
    alert(response.data.msg)
    vm.dates = []
  }).catch(function (error) {
    if (error.response.status == 422) {
      alert(`You can try these available dates ${error.response.data.dates}`)
      vm.dates = error.response.data.dates
    }else if (error.response.status == 500) {
      alert("Internal error please try again later")
      vm.dates = []
    }

  })
}

function show_booking_modal(event) {
  event.preventDefault();
  vm.table = event.currentTarget.getAttribute("alt");
  flatpickr("#arrival", {
    "enableTime": true
  });
  needs_login(function(token) {
    alert("show booking modal");
    vm.dates = []
    $("#booking_modal").show();
  });
}
