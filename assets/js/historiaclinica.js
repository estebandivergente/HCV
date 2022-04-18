show_form(true);

function show_form(bool) {

    if(bool) {
        $('#form').show();
        $('#table').hide();
    } else {
        $('#form').hide();
        $('#table').show();
    }

}

const select = (el, all = false) => {
el = el.trim()
if (all) {
    return [...document.querySelectorAll(el)]
} else {
    return document.querySelector(el)
}
}

const datatables = select('.datatable', true)
datatables.forEach(datatable => {
    new simpleDatatables.DataTable(datatable);
});