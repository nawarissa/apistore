function send_message(event) {
  event.preventDefault();
  toastr.info("Message sent, thanks for contacting us");
  //$("#contact_modal").show();
  //window.location = "/contact";
}
