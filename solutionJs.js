function myFunction() {
    var str = document.getElementById('textareaId').innerHTML;
    var res = str.split(" ");
    for (i = 0; i < res.length; i++) {
        if (res[i].indexOf(".") > -1) {
            res[i + 1] = res[i + 1].capitalize();
        }
    }
    document.getElementById("textareaId").innerHTML = res.join(" ");
}

String.prototype.capitalize = function () {
    return this.toLowerCase().replace(/\b\w/g, function (m) {
        return m.toUpperCase();
    });
};