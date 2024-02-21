//create account function
function createAccount() {
    let csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    var fn = document.getElementById("fn").value;
    var ln = document.getElementById("ln").value;
    var email = document.getElementById("email").value;
    var ps1 = document.getElementById("ps1").value;
    var ps2 = document.getElementById("ps2").value;
    if (ps1 != ps2) {
        alert("Passwords do not match");
    }
    var mobile = document.getElementById("mb").value;
    var gender = document.getElementById("gender").value;

    var data = JSON.stringify({
        fn: fn,
        ln: ln,
        email: email,
        ps1: ps1,
        ps2: ps2,
        mobile: mobile,
        gender: gender,
    });
    const main_error = document.getElementById("maine");
    const fn_error = document.getElementById("fne");
    const ln_error = document.getElementById("lne");
    const em_error = document.getElementById("eme");
    const ps1_error = document.getElementById("ps1e");
    const ps2_error = document.getElementById("ps2e");
    const mb_error = document.getElementById("mbe");
    const gn_error = document.getElementById("gne");
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;
            jsone = JSON.parse(response);
            console.log(jsone.error);
            if (jsone.status == "success") {
                console.log(jsone.status);
            } else if (jsone.error.Err != null) {
                console.log(jsone.error.Err);
                main_error.innerHTML = jsone.error.Err;
                main_error.classList =
                    "col-12 bg-danger-subtle text-danger text-center rounded-4 d-block";
            } else if (jsone.error.email != null) {
                em_error.classList =
                    "col-12 bg-danger-subtle text-danger text-center rounded-4 d-block ";
                for (i = 0; i < jsone.error.email.length; i++) {
                    em_error.innerHTML = jsone.error.email[i];
                    console.log(jsone.error.email[i]);
                }
            }

            if (jsone.error.fn != null) {
                fn_error.classList =
                    "col-12 bg-danger-subtle text-danger text-center rounded-4 d-block ";
                for (i = 0; i < jsone.error.fn.length; i++) {
                    fn_error.innerHTML = jsone.error.fn[i];
                    console.log(jsone.error.fn[i]);
                }
            }
            if (jsone.error.ln != null) {
                ln_error.classList =
                    "col-12 bg-danger-subtle text-danger text-center rounded-4 d-block ";
                for (i = 0; i < jsone.error.ln.length; i++) {
                    ln_error.innerHTML = jsone.error.ln[i];
                    console.log(jsone.error.ln[i]);
                }
            }
            if (jsone.error.mobile != null) {
                mb_error.classList =
                    "col-12 bg-danger-subtle text-danger text-center rounded-4 d-block ";
                for (i = 0; i < jsone.error.mobile.length; i++) {
                    mb_error.innerHTML = jsone.error.mobile[i];
                    console.log(jsone.error.mobile[i]);
                }
            }
            if (jsone.error.ps1 != null) {
                ps1_error.classList =
                    "col-12 bg-danger-subtle text-danger text-center rounded-4 d-block ";
                for (i = 0; i < jsone.error.ps1.length; i++) {
                    ps1_error.innerHTML = jsone.error.ps1[i];
                    console.log(jsone.error.ps1[i]);
                }
            }
            if (jsone.error.ps2 != null) {
                ps2_error.classList =
                    "col-12 bg-danger-subtle text-danger text-center rounded-4 d-block ";
                for (i = 0; i < jsone.error.ps2.length; i++) {
                    ps2_error.innerHTML = jsone.error.ps2[i];
                    console.log(jsone.error.ps2[i]);
                }
            }
            if (jsone.error.gender != null) {
                gn_error.classList =
                    "col-12 bg-danger-subtle text-danger text-center rounded-4 d-block ";
                for (i = 0; i < jsone.error.gender.length; i++) {
                    gn_error.innerHTML = jsone.error.gender[i];
                    console.log(jsone.error.gender[i]);
                }
            }

            if (jsone.status == "success") {
                window.location.href = "/signin";
            }
        }
    };

    xhr.open("POST", "/signupProcess", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken);
    xhr.send(data);
}

function login(){
    let csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    var email = document.getElementById("email").value;
    var ps = document.getElementById("ps").value;
    var formCheck = document.getElementById("formCheck").checked;
    var cookies = 0;
    if (formCheck == true) {
        cookies = 1;
    }
    var data = JSON.stringify({
        email: email,
        password: ps,
        cookies: cookies
    });
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4 && xhr.status == 200){
            var response = xhr.responseText;
            jsone = JSON.parse(response);
            if(jsone.status == "Success"){
                window.location.href = "/";
            }else{
                console.log(jsone.error);
                alert(jsone.error);
            }
        }
    }
    xhr.open("POST", "/signinProcess", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken);
    xhr.send(data);

}