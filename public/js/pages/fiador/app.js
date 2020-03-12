$(function() {
    
    /**
     * funcion de inicio de los datepicker
     */
    $('#date_1 .input-group.date').datepicker({
        dateFormat: 'yy-mm-dd',
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });

    /**
     * funcion de inicio del plugin datatable
     */
    $('#tableFiador').DataTable({
        responsive : true,
        pageLength: 10,
        language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla.",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
        }
    });

    /**
     * funcion que traslada al idioma espanol el plugin de jquery validation
     */
    $.extend($.validator.messages, {
        required: "Este campo es obligatorio.",
        remote: "Por favor, rellena este campo.",
        email: "Por favor, escribe una dirección de correo válida",
        url: "Por favor, escribe una URL válida.",
        date: "Por favor, escribe una fecha válida.",
        dateISO: "Por favor, escribe una fecha (ISO) válida.",
        number: "Por favor, escribe un número entero válido.",
        digits: "Por favor, escribe sólo dígitos.",
        creditcard: "Por favor, escribe un número de tarjeta válido.",
        equalTo: "Por favor, escribe el mismo valor de nuevo.",
        accept: "Por favor, escribe un valor con una extensión aceptada.",
        maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
        minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
        rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
        range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."),
        max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."),
        min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
      })

      /**
       * funcion que llama el plugin de jquery validation que proporciona la validacion de los campo sne un formulario
       */
    $('#formFiador').validate({
        error: function(input) {
          $(this).addClass("error")
        },
     })

     /**
      * funcion para detectar escritura en un input del formulario y colocarla en mayuscula
      */
     $('#formFiador input[type=text]').on('keyup',function(e){
         $('input[name='+e.target.name+']').val($('input[name='+e.target.name+']').val().toUpperCase())
     })

     /**
      * funcion para obtener los datos del modal que proporciona los datos del cliente para el ingreso a la base de datos
      */
    $('#addFiador').on('click', function(e){
        e.preventDefault()
        proccesData('add')
    })

    $('#modFiador').on('click', function(e){
        e.preventDefault()
        let id = $(this).attr('data-id')
        proccesData('update', id)
    })

    $('.tableAccion').on('click', function(e){
        e.preventDefault()
        $('#addFiador').addClass('hidden')
        $('#modFiador').addClass('hidden')
        let id = $(this).attr('data-id')
        let baseUrl = $(location).attr('href')
        baseUrl = baseUrl.split("/")
        baseUrl[4] = 'getFiador'
        baseUrl[5] = id
        baseUrl = baseUrl.join("/")
        $.ajax({
            url : baseUrl,
            method : 'POST',
            success : function(res){
                res = JSON.parse(res)
                viewDataFiador(res)
            }
        })
    })

    $('#insertFiador').on('click',function(){
        $('#addFiador').removeClass('hidden')
        $('#modFiador').addClass('hidden')
    })

    $('.accionMod').on('click',function(e){
        e.preventDefault()
        $('#addFiador').addClass('hidden')
        $('#modFiador').removeClass('hidden')
        let id = $(this).attr('data-id')
        let baseUrl = $(location).attr('href')
        baseUrl = baseUrl.split("/")
        baseUrl[4] = 'getFiador'
        baseUrl[5] = id
        baseUrl = baseUrl.join("/")
        $.ajax({
            url : baseUrl,
            method : 'POST',
            success : function(res){
                res = JSON.parse(res)
                viewDataFiador(res)
            }
        })
        $('#modFiador').attr('data-id', id)
    })

    $('.accionDel').on('click',function(e){
        e.preventDefault()
        let id = $(this).attr('data-id')
        let baseUrl = $(location).attr('href')
        baseUrl = baseUrl.split("/")
        baseUrl[4] = 'deleteFiador'
        baseUrl[5] = id
        baseUrl = baseUrl.join("/")
        $.ajax({
            url : baseUrl,
            method : 'POST',
            success : function(res){
                res == 1 ? toastr.success("Los datos se han eliminado correctamente!","Eliminado!") : toastr.error("Ah ocurrido un error al ingresar los datos.", "Error") 
                $('#refreshView').attr('disabled', false)
            }
        })

    })

    function viewDataFiador(res){
        let key = Object.keys(res)
        res = Object.values(res)
        for(let id in key){
            let item = key[id]
            $('[name='+item+']').val(res[id])
        }
        $('#modalFiador').modal('show')
    }

    function proccesData(type, id = ''){
        let baseUrl = $(location).attr('href')
        baseUrl = baseUrl.split("/")
        baseUrl[4] = type == 'add' ? 'addFiador' : 'updateFiador'
        if(type == 'update')
            baseUrl[5] = id
        baseUrl = baseUrl.join("/")
        let dataForm = JSON.stringify($('#formFiador').serializeArray())
        $.ajax({
            url : baseUrl,
            method : $('#formFiador').attr("method"),
            data : {'data' : dataForm},
            success : function(res){
                res == 1 ? toastr.success("Los datos se han guardado correctamente!","Guardado") : toastr.error("Ah ocurrido un error al ingresar los datos.", "Error") 
                $('#refreshView').attr('disabled', false)
            }
        })
        $("#modalFiador").modal('hide')
    }

    $('#refreshView').on('click', function(){
        location.reload()
    })
    /**
     * codigo para enviar imagen por ajax
     * let formData = new FormData()
     * let file = $('imagen')[0].files[0]
     * formData.append('file', file)
     * php
     * imagen es blog || longblog
     * base64_encode(file_get_contents(imagen)) esto es lo que se envia
     * para traer base64_decode(imagen)
     * 
     */
})