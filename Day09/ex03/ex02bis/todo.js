
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


var close = Array();
var json_str = getCookie('myCookie');
if (json_str !== "")
{
    var array = JSON.parse(json_str);
    var len = array.length;
    for (var i = 0; i < len; i++) {
        var div = $("<div></div>");
        div.append(document.createTextNode(array[i]));
        div.className = "list";
        $("#ft_list").prepend(div);

        var span = $("<span></span>");
        div.append(span.append(document.createTextNode("\u00D7")));
        close.push(span);

        for (j = 0; j < close.length; j++) {
            $(close[j]).click(function () {
                if ($(this).parent().parent().val() != null) {
                    var isDel = confirm("DEL?");
                    if (isDel === true) {
                        ($(this).parent()).remove();
                        close.splice((array.indexOf(this.parentElement.firstChild.nodeValue)), 1);
                        array.splice((array.indexOf(this.parentElement.firstChild.nodeValue)), 1);
                    }
                }
            });
        }
    }
}
else
    var array = Array();


function newElement() {
    var div = $("<div></div>");
    var inputValue = prompt("Task");  
    div.append(document.createTextNode(inputValue));
    if (inputValue === "") {
        alert("Task can`t be empty!");
    }
    else if (inputValue != null) {
        $("#ft_list").prepend(div);
        array.push(inputValue);
    }

    var span = $("<span></span>");
    div.append(span.append(document.createTextNode("\u00D7")));
    close.push(span);

    for (j = 0; j < close.length; j++) {
        $(close[j]).click(function() {
            if ($(this).parent().parent().val() != null)
            {
                var isDel = confirm("DEL?");
                if (isDel === true)
                {
                    ($(this).parent()).remove();
                    close.splice((array.indexOf(this.parentElement.firstChild.nodeValue)),1);
                    array.splice((array.indexOf(this.parentElement.firstChild.nodeValue)),1);
                }
            }
        });
    }
}

window.onunload=function () {
    var json_arr = JSON.stringify(array);
    createCookie("myCookie", json_arr, 1);
}
 