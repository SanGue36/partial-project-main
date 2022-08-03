var name, email, message,phone
function reader() {
    name = document.forms["contactForm"]["name"].value;
    email = document.forms["contactForm"]["email"].value;
    message = document.forms["contactForm"]["message"].value;
    phone = document.forms["contactForm"]["phone"].value;
   
    var flag = 1
    let regex = /([a-zA-Z])$/;
    if (regex.test(name) == false) {
        flag = 0;
    }

    regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    if (regex.test(email) == false) {
        flag = 0;
        console.log(flag)
    }

    if (flag == 1) {
        message = "Name: " + name + 
        " Email: " + email + 
        " Message: " + message + 
        "Phone_No: " +phone;
        var url = "https://api.telegram.org/bot5360201528:AAE39ZJTUWmBUc0jttggOIENVv_1Sa6P-Kk/sendMessage?chat_id=-755724762&text=" + message
        var request = new XMLHttpRequest();
        request.open("POST", url, false);
        request.send(null);
    }
    console.log(message)
    document.forms["contactForm"].submit()
}