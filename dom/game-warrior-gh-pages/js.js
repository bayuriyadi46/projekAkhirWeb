function gantiwarna() {
    var java = document.getElementById('java');
    var button = document.getElementById('buttonwarna');
    if (button.innerHTML == "Hijau") {
        java.style.cssText = "background-color: green;";
        button.innerHTML = "Merah";
    }
    else if (button.innerHTML == "Merah") {
        java.style.cssText = "background-color: red;";
        button.innerHTML = "Kuning";
    }
    else if (button.innerHTML == "Kuning") {
        java.style.cssText = "background-color: #FFD700;";
        button.innerHTML = "Hijau";
    }
}