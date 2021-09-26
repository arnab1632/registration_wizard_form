var currentTab = 0;
showTab(currentTab);

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        showSummary();
        document.getElementById("nextBtn").innerHTML = "Submit<img src='tik.png'>";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }

    fixStepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");

    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    
    if (currentTab >= x.length) {

        $.post("action.php",
             {
              fname: document.getElementById("formfname").value,
              lname: document.getElementById("formlname").value,
              email: document.getElementById("formemail").value,
              country: document.getElementById("formcountry").value,
              username: document.getElementById("formuname").value,
              password: document.getElementById("formpass").value
            },

        function(data,status){
            document.getElementById("nextprevious").style.display = "none";
            document.getElementById("all-steps").style.display = "none";
            document.getElementById("text-message").style.display = "block";
        });
    }

    showTab(currentTab);
}

function check() {
    if (document.getElementById('formpass').value == "" && document.getElementById('formcpass').value == "") {
        document.getElementById('pass-error').innerHTML = 'Please give password.';
    } 
    else if (document.getElementById('formpass').value == document.getElementById('formcpass').value) {
        document.getElementById('pass-error').style.color = 'green';
        document.getElementById('pass-error').innerHTML = 'matching';
    } 
    else {
        document.getElementById('pass-error').style.color = 'red';
        document.getElementById('pass-error').innerHTML = 'not matching';
    }
}

function checkEmail() {
    var email = document.getElementById('formemail');
    var filter = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/;

    if (!filter.test(email.value)) {
        document.getElementById('email-error').innerHTML = 'Please give a valid email.';
        email.focus;
        return false;
    }
    else {
        document.getElementById('email-error').innerHTML = '';
    }
}

function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByClassName("inputs");
    

    for (i = 0; i < y.length; i++) { 
        if (y[i].value == "" || y[i].value == "Your Country" || y[i].checked == false) {
            y[i].className += " invalid";
            valid = false;
        }
    }
    if (valid) {
        document.getElementsByClassName("step")[currentTab] += "finish";
    }
    return valid;
}

function fixStepIndicator(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //x[n].className += " active";
}

function showSummary() {

    fname    = document.getElementById("formfname").value;
    lname 	 = document.getElementById("formlname").value;
    email 	 = document.getElementById("formemail").value;
    country  = document.getElementById("formcountry").value;
    uname    = document.getElementById("formuname").value;
    password = document.getElementById("formpass").value;
    
    document.getElementById("fname").innerHTML=fname;
    document.getElementById("lname").innerHTML=lname;
    document.getElementById("email").innerHTML=email;
    document.getElementById("country").innerHTML=country;
    document.getElementById("uname").innerHTML=uname;
    document.getElementById("password").innerHTML=password;
}