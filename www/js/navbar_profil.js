function changeColor() {
    var button = document.querySelector('.btn-menu');
    button.classList.add('clicked');
    }

    let clickedButton = null;

    function changeColor(button) {
    if (clickedButton !== null) {
        clickedButton.classList.remove('clicked');
    }
    button.classList.add('clicked');
    clickedButton = button;
}