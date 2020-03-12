$(document).ready(function(){
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
    $('input[name="tbl_prestamos_fecha_final"]').daterangepicker({startDate: moment(), endDate: moment().add(1, 'months')})
    $('#date_1 .input-group.date').datepicker({
        dateFormat: 'yy-mm-dd',
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });

    let url = $(location).attr("href")
    url = url.split("/")
    if(url.length > 5){
        url = url.join("/")
        $.ajax({
            "url": url,
            "method": "POST",
            success:function(res){
                res = res.split("<!DOCTYPE html>")[0]
                res = $.parseJSON(res)
                setDataview(res)
            }
        })
    }
    function setDataview(res){
        $("[name=tbl_prestamos_id]").attr("disabled", true)
        let key = Object.keys(res)
        res = Object.values(res)
        for(let id in key){
            let item = key[id]
            let fecha = item == "tbl_prestamos_fecha_final" ? res[id-1] + " - " : ''
            $('[name='+item+']').val( fecha + res[id])
        }
    }
    function onLoadPrestamos(){
        let monto = parseInteger($('[name=tbl_prestamos_monto]').val())
        let fechas =  $('[name=tbl_prestamos_fecha_final]').val().split("-")
        let dias = moment(fechas[0]).diff(fechas[1],'days') * -1
        let mes = moment(fechas[0]).diff(fechas[1],'months') * -1
        let tipo = parseInt($('[name=tbl_prestamos_tipo]').val())
        let porcentaje = parseFloat($('[name=tbl_prestamos_porcentaje]').val())
        let cantidad = fechas_pagos(tipo, fechas[0], fechas[1])
        let total = monto * porcentaje
        total = (total * mes) + monto
        let cuota = total / cantidad.length
        cuota = Math.round(cuota)
        $("[name=no_cuota_pago]").val(cantidad.length)
        $("[name=valor_total]").val(total)
        $("[name=cuota_pago]").val(cuota)
    }
    setTimeout(()=>{
        onLoadPrestamos()
    }, 3000)
    
    $('.prestamo').on('change',function(e) {
        onLoadPrestamos()
    })

    function parseInteger(value){
        monto = value.replace(/[$ ,]/g, '')
        return Math.trunc(monto)
    }

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

    $('form[name=formPrestamos]').on('submit',function(e){
        e.preventDefault()
        let data = $(this).serializeArray()
        data[0].value = parseInteger(data[0].value)
        let fecha = data[1].value.split("-")
        data[1].value = fecha[0].replace(' ', '')
        data.push({'name': 'tbl_pretamos_final', 'value': fecha[1].replace(' ', '')})
        data = JSON.stringify(data)
        let url = $(location).attr('href')
        url = url.split('/')
        url[4] = 'updatePrestamos'
        url = url.join("/")
        $.ajax({
            'url' : url,
            'method' : 'POST',
            'data' : {'data' : data},
            success: function(res){
                console.log(res)
                res == 1 ? toastr.success("Los datos se han guardado correctamente!","Guardado") : toastr.error("Ah ocurrido un error al ingresar los datos.", "Error") 
            }
        })
    })

    $('#updatePrestamos').on('click',function(e){
        $("form[name=formPrestamos]").submit()
    })
})