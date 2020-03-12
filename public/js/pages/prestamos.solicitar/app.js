$(document).ready(function(){

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

    $('form[name=formPrestamo]').validate({
        error: function(input) {
          $(this).addClass("error")
        },
     })


    Inputmask.extendAliases({
        pesos: {
            prefix: "$ ",
            groupSeparator: ".",
            alias: "numeric",
            placeholder: "0",
            autoGroup: !0,
            digits: 2,
            digitsOptional: !1,
            clearMaskOnLostFocus: !1
        }
    });
    $("#inputmask").inputmask({ alias : "pesos" })
    $("[name=valor_total]").inputmask({alias : "pesos"})
    $("[name=cuota_pago]").inputmask({alias : "pesos"})
    $('input[name="daterange"]').daterangepicker({startDate: moment(), endDate: moment().add(1, 'months')})
    $('#date_1 .input-group.date').datepicker({
        dateFormat: 'yy-mm-dd',
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });
    $(".select2_demo_1").select2({
        placeholder: "---Cliente",
        allowClear: true
    });
    $(".select2_demo_2").select2({
        placeholder: "---Fiador",
        allowClear: true
    });
    $(".select2_demo_3").select2({
        placeholder: "---Ingresos",
        allowClear: true
    });

    moment.locale('es');
    $('#fecha').change(function () {
        var dia = moment($(this).val()).format('dddd');
        return dia
    });

    function fechas_pagos(cada, desde, hasta){
        let actual = moment(desde).format('YYYY-MM-DD')
        let final = moment(hasta).format('YYYY-MM-DD')
        let fechaAdd = moment(desde).add(cada, 'd').format('YYYY-MM-DD')
        let fechas = []
        let i = 0
        while(moment(fechaAdd).isBetween(actual, final)){
            fechas[i] = fechaAdd
            fechaAdd = moment(fechaAdd).add(cada, 'd').format('YYYY-MM-DD')
            i++
        }
        if(moment(hasta).diff(fechaAdd) > (cada/2))
            fechas.push(hasta)
        else 
            fechas[i-1] = hasta
        return fechas
    }
    //console.log(fechas_pagos(7, '2020-03-07', '2020-05-07'))

    /**
     * evento que captura algun cambio en los input de la vista prestamo solicitar
     * se realia los calculos matematicos para describir los detalles del prestamo a solicitar
     */
    $('.prestamo').on('change',function(e){
        let monto = parseInteger($('[name=monto]').val())
        let fechas =  $('[name=daterange]').val().split("-")
        let dias = moment(fechas[0]).diff(fechas[1],'days') * -1
        let mes = moment(fechas[0]).diff(fechas[1],'months') * -1
        let tipo = parseInt($('[name=tipo_pago]').val())
        let porcentaje = parseFloat($('[name=porcentaje_cobro]').val())
        let cantidad = fechas_pagos(tipo, fechas[0], fechas[1])
        let total = monto * porcentaje
        total = (total * mes) + monto
        let cuota = total / cantidad.length
        cuota = Math.round(cuota)
        $("[name=no_cuota_pago]").val(cantidad.length)
        $("[name=valor_total]").val(total)
        $("[name=cuota_pago]").val(cuota)
    })

    function parseInteger(value){
        monto = value.replace(/[$ ,]/g, '')
        return Math.trunc(monto)
    }

    function startSolicitar(quien, donde = 'index'){
        let urlBase = $(location).attr('href')
        urlBase = urlBase.split('/')
        urlBase[3] = quien
        urlBase[4] = donde
        urlBase = urlBase.join('/')
        $.ajax({
            url : urlBase,
            method : 'POST',
            success : function(res){
                res = res.split("<!DOCTYPE html>")[0]
                res = JSON.parse(res)
            }
        })
    }
    //console.log(startSolicitar('Cliente', 'index'))

    $('#addSolicitudPrestamo').on('click',function(e){
        $("form[name=formPrestamo]").submit()
    })

    $('form[name=formPrestamo]').on('submit',function(e){
        e.preventDefault()
        let array = $(this).serializeArray()
        array[0].value = parseInteger(array[0].value)
        array.push(array[1].value.replace(/ /g, '').split("-"))
        $.ajax({
            url : $(this).attr('action'),
            method : $(this).attr('method'),
            data : {'data' : JSON.stringify(array)},
            success : function(res){
                res == 1 ? toastr.success("Los datos se han guardado correctamente!","Guardado") : toastr.error("Ah ocurrido un error al ingresar los datos.", "Error") 
            }
        })
        setTimeout(function(){
            $(location).reload()
        },5000)
    })

})