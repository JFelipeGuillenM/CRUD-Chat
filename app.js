$(document).ready(function () {
    let edit=false;
    fetchDatos();
    fetchArbol(0);

    $('#tb_datos').DataTable({
        language: {
            url: 'assets/lib/datatables/es-ES.json'
        }
    });

        $('#task-form').submit(function(e){
            if($('#nombre').val() != '' &&  $('#contenido').val() != ''){
                const postData = {
                        nombre: $('#nombre').val(),
                        contenido: $('#contenido').val(),
                        padre: $('#padre').val(),
                        tipo: $('#tipo').val(),
                        id: $('#id-edit').val(),
                };
                let url = edit === false ? 'agregar.php' : 'edit-data.php';
                console.log(url);
           
                $.post(url, postData, function(response){
                    console.log(response);
                    fetchDatos();
                    $('#task-form').trigger('reset');
                    edit=false;
            });
        }else{
            alert('Debe llenar los campos');
        }
            e.preventDefault();
        });

        function fetchDatos(){
            $.ajax({
                url: 'listar.php',
                type: 'GET',
                success: function (response) {
                    //console.log(response);
                    let datos =  JSON.parse(response);
                    let template = '';
                    let comboIndex = '';

                    datos.forEach(dato => {
                        if(dato.id_tipo === "1"){
                            dato.id_tipo = "Mensaje";
                        }
                        if(dato.id_tipo === "2"){
                            dato.id_tipo = "Opción";
                        }
                        if(dato.id_tipo === "3"){
                            dato.id_tipo = "Respuesta";
                        }
                        template += `
                            <tr IdDato="${dato.id_principal}">
                                <td>${dato.id_principal}</td>
                                <td>${dato.nombre}</td>
                                <td>${dato.padre}</td>
                                <td>${dato.id_tipo}</td>
                                <td>${dato.contenido}</td>
                                <td>
                                    <a class="btn-editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a class="btn-eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        `
                    })
                    $('#datos').html(template);
                    datos.forEach(dato => {
                        comboIndex += `
                            <option value="${dato.id_principal}">${dato.nombre}</option>
                        `
                    })
                    $('#padre').html(comboIndex);
                }
            })
        }

        $(document).on('click', '.btn-eliminar', function(){
            let elemento = $(this)[0].parentElement.parentElement;
            let id = $(elemento).attr('IdDato')
            $.post('eliminar.php', {id}, function(response){
                console.log(response);
                fetchDatos();
            });
        });

        $(document).on('click', '.btn-editar', function(){
            
            let elemento = $(this)[0].parentElement.parentElement;
            let id = $(elemento).attr('IdDato')
            $.post('editar.php', {id}, function(response){
                const datos= JSON.parse(response);
                $('#nombre').val(datos.nombre);
                $('#contenido').val(datos.contenido);
                $('#padre').val(datos.padre);
                $('#tipo').val(datos.id_tipo);
                $('#id-edit').val(id);
                edit=true;
                
                console.log(response);
            })
            fetchDatos();
        });

        
      
})


function fetchArbol(id){
    $.ajax({
        async: false,
        data: {hijo: id},
        url: 'arbol.php',
        type: 'GET',
        cache: false,
        dataType: 'JSON',
        success: function (response) {


                $("#"+id+"").css({"backgroundColor":"black","color":"white"});
                $("#"+id+"").css({"pointer-events": "none"});
            
            var datos = JSON.stringify(response);
            var parsed = JSON.parse(datos);

            let template = '';

               $.each(parsed, function(i, item) {
                   //console.log(item.contenido);
                   //   console.log(item.id_principal);

                   template += '<tr><td id="'+item.id_principal+'" onclick="fetchArbol('+item.id_principal+')">'+item.contenido+'</td></tr>'

               });

            $('#dato').append(template);
        },
        error: function (data) {
            console.log(data)
        }
    })
}