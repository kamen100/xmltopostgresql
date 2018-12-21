window.onload = function () {
    if (navigator.userAgent.indexOf("Firefox") > 0) {
        document.getElementById("buttonMoz").style.visibility = "visible";
        document.getElementById("buttonMoz").className = "col-2 text";
//        document.getElementById("buttonMoz").classList.remove = "hidden";


//        var el = document.getElementById("buttonMoz");
//        el.setAttribute('visibility','visible');
//        el.className = 'col-2 text';
    }
};
document.getElementById('get_author').onchange = function () {
    var authorVal = document.getElementById("get_author").value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", 'view.php', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () { // Call a function when the state changes.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            // Request finished. Do processing here.

            document.getElementById("content").innerHTML = this.responseText;
            //

            //           
        }
        ;
    };
    xhr.send("xhr=" + authorVal);
};