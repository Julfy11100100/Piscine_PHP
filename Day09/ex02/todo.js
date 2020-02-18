
function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}

//-------------------------------------------------------------------

var list = document.getElementsByClassName("ft_list");
var close = document.getElementsByClassName("close");
var json_str = getCookie('myCookie');
if (json_str !== "")
{
    var array = JSON.parse(json_str);
    var len = array.length;
    for (var i = 0; i < len; i++)
    {
        var div = document.createElement("div");
        var t = document.createTextNode(array[i]);
        div.appendChild(t);
        document.getElementById("ft_list").prepend(div);

        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        div.appendChild(span);

        for (j = 0; j < close.length; j++) {
            close[j].onclick = function() {
                var elem = this.parentElement;
                var isDel = confirm("DEL?");
                if (isDel === true)
                {
                    elem.remove();
                    array.splice((array.indexOf(this.parentElement.firstChild.nodeValue)),1);
                }
            }
        }
    }
}
else
    var array = Array();

function newElement() {
    var div = document.createElement("div");
    var inputValue = prompt("Task");  
    var t = document.createTextNode(inputValue);
    div.appendChild(t);
    if (inputValue === "") {
        alert("Task can`t be empty!");
    }
    else if (inputValue != null) {
        document.getElementById("ft_list").prepend(div);
        array.push(inputValue);
    }

    var span = document.createElement("SPAN");
    var txt = document.createTextNode("\u00D7");
    span.className = "close";
    span.appendChild(txt);
    div.appendChild(span);

    for (j = 0; j < close.length; j++) {
        close[j].onclick = function() {
           var elem = this.parentElement;
           var isDel = confirm("DEL?");
           if (isDel === true)
           {
               elem.remove();
               array.splice((array.indexOf(this.parentElement.firstChild.nodeValue)),1);
           }
        }
    }
}

window.onunload=function () {
    var json_arr = JSON.stringify(array);
    createCookie("myCookie", json_arr, 1);
}
 