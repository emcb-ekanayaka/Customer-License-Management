 function licenseChange() {
            console.log("AAAAAAA");

            var licenseExpiry = document.getElementById("licenseExpiry");
            var description = document.getElementById("description");

            if (licenseExpiry.value === "no") {
                description.disabled = true;
                
            } else {
                description.disabled = false;
                description.required = true;
            }
}


  var myAlertDiv = document.getElementById("myAlert");
  
  setTimeout(function() {
    myAlertDiv.style.display = "none";
}, 3000);

  var errorAlert = document.getElementById("errorAlert");
  
  setTimeout(function() {
    errorAlert.style.display = "none";
}, 3000);
