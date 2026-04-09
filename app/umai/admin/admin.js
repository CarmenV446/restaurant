
    function askDelete(naam) {
    document.getElementById('dialog-title').textContent = '"' + naam + '" verwijderen?';
    document.getElementById('overlay').classList.add('open');
}

    document.getElementById('cancel-delete').addEventListener('click', function () {
    document.getElementById('overlay').classList.remove('open');
});

    document.getElementById('overlay').addEventListener('click', function (e) {
    if (e.target === e.currentTarget) {
    document.getElementById('overlay').classList.remove('open');
}
});



