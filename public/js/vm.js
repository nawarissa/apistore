
function needs_login(handler) {
  var token = localStorage.getItem("token");
  if (token === 'undefined' || token === null) {
    toastr.warning("Please login first")
    $("#login_modal").show();
  }
  else {
    handler(token);
  }
}

function login() {
  $("#login_modal").show();
}

var vm = "";

Vue.component('rest-table', {
  props: ['name', 'position', 'count', 'imgUrl', "booking_count"],
  template: '<div class="rest-table"><img class="rest-image" onclick="show_booking_modal(event)" width="230" height="200" :src="imgUrl" :alt="name" /><h2 style="padding-left:40px;">{{ name }}</h2><p style="padding-left:40px;">{{ position }} - {{ count }}</p><p style="padding-left:40px;">Number of bookings: {{ booking_count }}</p></div>'
})

$(document).ready(function() {
  vm = new Vue({
    el: "#app",
    data: {
      page: "main",
      tables: [],
      table: "",
      dates: [],
      min_count: 1,
      max_count: 25,
      login: true
    },
    computed: {
      groupedTables() {
        return _.chunk(this.tables, 3);
      }
    }
  });
  var token = localStorage.getItem("token");
  if (token === 'undefined' || token === null) {
    vm.login = false;
  }
  else {
    vm.login = true;
  }
  if (window.location.pathname == "/booking") {
    go_booking_page();
  }
});

function do_logout(token) {
  axios(
    {
      method: "POST",
      url: "/api/logout",
      headers: {
        "Accept": "application/json",
        "Content-Type": "application/json",
        "Authorization": `Bearer ${token}`
      },
    }
  ).then(function(response) {
    vm.login = false
    localStorage.removeItem("token")
  })
}

function logout() {
  needs_login(do_logout);
}

function go_booking_page() {
  vm.page = "booking";

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
}


function make_booking(event) {
  event.preventDefault();
  var table = $("#table").val();
  var mobile = $("#mobile").val();
  var name = table;
  var email = $("#email").val()
  var arrival = $("#arrival").val()
  var d = new Date(arrival);
  arrival = d.toLocaleString();
  var number = $("#number").val()
  if (number > vm.max_count) {
    toastr.error("Cannot book this number of guests on this table");
  }
  else {
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
      toastr.info("Booking was successful")
      vm.dates = []
      var tomorrow = new Date();
      tomorrow.setDate(tomorrow.getDate() + 1);
      flatpickr("#arrival", {
        enableTime: true,
        minDate: tomorrow
      });
    }).catch(function (error) {
      if (error.response) {
        if (error.response.status == 422) {
          toastr.error(`Please select one of available dates`)
          vm.dates = error.response.data.dates
        }else if (error.response.status == 500) {
          toastr.error("Internal error please try again later")
          vm.dates = []
        }
      }
      else {
        toastr.error("Unknown error, please try again")
      }


    })
  }
}

function show_booking_modal(event) {
  event.preventDefault();
  vm.table = event.currentTarget.getAttribute("alt");
  for (var table in vm.tables) {
    if (vm.tables[table].name == vm.table) {
      vm.max_count = vm.tables[table].count;
      break
    }
  }
  var tomorrow = new Date();
  tomorrow.setDate(tomorrow.getDate() + 1);
  flatpickr("#arrival", {
    enableTime: true,
    minDate: tomorrow
  });
  needs_login(function(token) {
    vm.dates = []
    $("#booking_modal").show();
  });
}
