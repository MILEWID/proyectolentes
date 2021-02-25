function producto_id()
{
    let html_table = "";
    var id_p = document.getElementById("idProducto").value

    $.ajax(
        {
            url:"http://localhost/proyectolentes/Optica/mysql/producto.php?id="+id_p
        }).done(function (datos)
    {
        var json_parse = JSON.parse(datos)

        console.log(datos)

        if(json_parse.status_code==200)
        {
            html_table = `<tr>
                        <td>${json_parse.datos.id}</td>
                        <td>${json_parse.datos.nombre}</td>
                        <td>${json_parse.datos.marca}</td>
                        <td>${json_parse.datos.tipo}</td>
                        <td>${json_parse.datos.precio}</td>
                        <td>${json_parse.datos.material}</td>
                        <td>${json_parse.datos.sexo}</td>
                        <td>
                            <a href="http://localhost/proyectolentes/Optica/productos/editar?id=${json_parse.datos.id}&name=${json_parse.datos.nombre}&marca=${json_parse.datos.marca}&precio=${json_parse.datos.precio}&material=${json_parse.datos.material}" class="btn btn-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                            <a href="<?php echo URL; ?>productos/eliminarProdu?id=<?php echo $row['id'];?> "  class="btn btn-danger" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </a>
                        </td>
                      </tr> `

            document.getElementById("id_table_body_product").innerHTML = html_table;
        }else
            {
                alert("no existen datos disponibles")
            }

    }).fail(function()
    {
        alert("error api rest")
    })
}

function modificarPro(id)
{



    var name = document.getElementById("idNombre").value
    var marca = document.getElementById("idMarca").value
    var precio = document.getElementById("idPrecio").value

    var material = document.getElementById("idMaterial").value

    var sexo = document.getElementById("idSexo")
    var tipo = document.getElementById("idTipo")

    var sexo_value =  sexo.options[sexo.selectedIndex].value
    var tipo_value = tipo.options[tipo.selectedIndex].value


    $.ajax(
    {
      url:"http://localhost/proyectolentes/Optica/mysql/producto_update.php?id="+id+"&name="+name+
          "&marca="+marca+"&precio="+precio+"&type="+tipo_value+"&material="+material+"&sexo="+sexo_value
    }).done(function(datos)
{
    var json_parse =  JSON.parse(datos)

    if(json_parse.status_code == 200)
    {
        alert("Cambio completo")
        location.href = "http://localhost/proyectolentes/Optica/productos"
    }else
        {
            alert("No se pudo efectuar el cambio")
        }

}).fail(function()
{

})


}