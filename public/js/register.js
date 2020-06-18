var app = new Vue({
  el: "#formContent",
  data: {
    "name": "",
    "email": "",
    "password": "",
    "c_password": ""
  }
})
function sign_up_action(event) {
  event.preventDefault();
  let name_field = $("#name")
  let email_field = $("#email")
  let password_field = $("#password")
  let c_password_field = $("#c_password")
  let name = name_field.val()
  let email = email_field.val()
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
      email: email,
      password: password,
      c_password: c_password
    },

    responseType: 'json'
  }).then(function (response) {
    token = response.data["success"]["token"];
    localStorage.setItem("token", token);
    app.name = ''
    app.email = ''
    app.password = ''
    app.c_password = ''
    toastr.info("Registered successfully")
  }).catch(function (error) {
    toastr.error("There are errors in registeration")
    if (error.response.data["error"]["name"]){
      app.name = error.response.data["error"]["name"][0]
    }
    else {
      app.name = ''
    }
    if (error.response.data["error"]["email"]){
      app.email = error.response.data["error"]["email"][0]
    }
    else {
      app.email = ''
    }
    if (error.response.data["error"]["password"]){
      app.password = error.response.data["error"]["password"][0]
    }
    else {
      app.password = ''
    }
    if (error.response.data["error"]["c_password"]){
      app.c_password = error.response.data["error"]["c_password"][0]
    }
    else {
      app.c_password = ''
    }

  })
}
