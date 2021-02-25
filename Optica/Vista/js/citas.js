
function insertCita()
{
    var nombre = document.getElementById('id_inputNames').value
    var ape = document.getElementById('id_inputApes').value
    var fecha = document.getElementById('id_inputDate').value
    var hora = document.getElementById('id_inputTime').value
    var motivo = document.getElementById('id_inputMotivos').value

    console.log("http://localhost/proyectolentes/Optica/mysql/citas_mysql.php?nombre="+nombre+"&ape="+ape+"&fecha="+fecha+"&hora="+hora+"&motivo="+motivo)

    $.ajax({
        url:"http://localhost/proyectolentes/Optica/mysql/citas_mysql.php?nombre="+nombre+"&ape="+ape+"&fecha="+fecha+"&hora="+hora+"&motivo="+motivo
    }).done(function (datos)
    {

        console.log(datos)

        //var json_string = JSON.stringify(datos)
        var json_parse = JSON.parse(datos)

        if(json_parse.status_code == 200)
        {
            alert("guardando....")
        }else
        {
            alert("no se puedo guardar")
        }


    }).fail(function ()
    {
        alert("error api rest")
    })
}