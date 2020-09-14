const rows = document.querySelectorAll('tbody tr');
const searchInput = document.getElementById('search');
const buttons = document.getElementsByTagName('button');
const table = document.getElementById('table-show');

searchInput.addEventListener('keyup', function(event) {
    const query = event.target.value.toLowerCase();
    rows.forEach(row => {
        row.querySelector('td').textContent.toLowerCase().includes(query) ? (row.style.display = '') : (row.style.display = 'none');
    });
})

function disableButtons(buttons){
    buttons[0].disabled = true;
    buttons[1].disabled = true;
    buttons[2].disabled = true;
}

function disableTable(table){
    table.style.display='none';
}

function createRoute(){
    const showForm = document.getElementById('route');
    showForm.style='flex';
    disableTable(table);
    disableButtons(buttons);
}

function createPackage(){
    const showForm = document.getElementById('package');
    showForm.style='flex';
    disableTable(table);
    disableButtons(buttons);
}

function createUser(){
    const showForm = document.getElementById('user');
    showForm.style='flex';
    disableTable(table);
    disableButtons(buttons);
}
//searchInput.addEventListener();
