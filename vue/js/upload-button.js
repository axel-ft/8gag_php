document.getElementById('image').onchange = function () {
    document.getElementById('filepath').innerHTML = document.getElementById('image').value.split("\\")[document.getElementById('image').value.split("\\").length - 1];
};
