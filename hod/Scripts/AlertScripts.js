
  function Alert(type, title, message) {
  array = ["primary", "secondary", "success", "danger", "warning", "info", "light", "dark"];

  scriptS = "<div class='alert alert-"+type+" alert-dismissible col-lg-12 col-xl-12' role='alert'>";
  scriptS += "<h4 class='alert-heading'>"+title+"</h4><hr>";

  scriptS += "<p>"+message+"</p>";
  scriptS += " <button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
  scriptS += "<span aria-hidden='true'>&times;</span></button></div>";
  document.write(script);
  return scriptS;
}


