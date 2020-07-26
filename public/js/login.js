function login_action(event) {
  event.preventDefault();
  let login_field = $("#login")
  let password_field = $("#password")
  let login = login_field.val()
  let password = password_field.val()
  axios({
    url: "/api/login",

    method: "post",

    headers: {
      "Accept": "application/json",
      "Content-Type": "application/json"
    },
    data: {
      email: login,
      password: password
    },

    responseType: 'json'
  }).then(function (response) {
    token = response.data["success"]["token"];
    localStorage.setItem("token", token);
  }).catch(function(error) {
    //app.error = error.response.data["error"]
    toastr.error("Error logging in")
  })
}

function register_action(event) {
  event.preventDefault();
  let login_field = $("#login")
  let name_field = $("#name")
  let password_field = $("#password")
  let c_password_field = $("#c_password")
  let login = login_field.val()
  let name = name_field.val()
  let password = password_field.val()
  let c_password = c_password_field.val()
  axios({
    url: "/api/register",

    method: "post",

    headers: {
      "Accept": "application/json",
      "Content-Type": "application/json"
    },
    data: {
      name: name,
      email: login,
      password: password,
      c_password: c_password
    },

    responseType: 'json'
  }).then(function (response) {
    token = response.data["success"]["token"];
    localStorage.setItem("token", token);
    toastr.info("Register success")
  }).catch(function(error) {
    toastr.error("Error in register")
    if (error.response) {
      toastr.error(error.response.data.errors)
    }
  })
}

function show_login(event) {
  vm.login=true;
  event.preventDefault();
}

function show_register(event) {
  vm.login=false;
  event.preventDefault();
}

function needs_login(handler) {
  var token = localStorage.getItem("token");
  if (token === 'undefined' || token === null) {
    $("#login_modal").show();
  }
  else {
    handler(token);
  }
}
