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
    //app.error = ''
    location = "/"
  }).catch(function(error) {
    //app.error = error.response.data["error"]
    toastr.error("Error logging in")
  })
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
