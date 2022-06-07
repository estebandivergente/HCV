show_form(false);

function show_form(bool) {

    if(bool) {
        $('#form').show();
        $('#table').hide();
    } else {
        $('#form').hide();
        $('#table').show();
    }

}

let data = [
    {nombre: 'Sparky', especie: 'pincher', edad: '4', propietario: 'Juan Gonzalez'},
    {nombre: 'Jack', especie: 'danés', edad: '2', propietario: 'Jose Sanchez'},
    {nombre: 'Niño', especie: 'pincher', edad: '5', propietario: 'Diego Lopez'}
];

$('#tabla').html(data.map((item, index) => {
    return `<tr>
                <td>${index + 1}</td>
                <td>${item.nombre}</td>
                <td>${item.especie}</td>
                <td>${item.edad} años</td>
                <td>${item.propietario}</td>
            </tr>`;
}));

const datatables = select('.datatable', true)
datatables.forEach(datatable => {
    new simpleDatatables.DataTable(datatable);
});