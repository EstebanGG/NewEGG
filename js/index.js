function loadHome() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("masterChange").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "XML/Home.xml", true);
  xhttp.send();
}

function loadAbout() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("masterChange").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "XML/About.xml", true);
  xhttp.send();
}

function loadServices() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("masterChange").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "XML/Services.xml", true);
  xhttp.send();
}

function loadPortafolio() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("masterChange").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "XML/Portfolio.xml", true);
  xhttp.send();
}

function loadContact() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("masterChange").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "XML/Contact.xml", true);
  xhttp.send();
}
