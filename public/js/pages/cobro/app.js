$(document).ready(function(){

    $('#example-table').DataTable({
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

    let url = $(location).attr('href')
    url = url.split("/")
    url[3] = 'Prestamo'
    url[4] = 'getAllPrestamos'
    url = url.join('/')
    let data = []
    $.ajax({
        'url' : url,
        'method' : "POST",
        success : function(res){
            res = $.parseJSON(res)
            onLoadCobro(res)
        }
    })

    function onLoadCobro(res){
        for(let i = 0;i < res.length; i++){
            let fechas = fechas_pagos(res[i].tbl_prestamos_tipo, res[i].tbl_prestamos_fecha_inicio, res[i].tbl_prestamos_fecha_final)
            for(let j = 0; j < fechas.length; j++){
                let monto = res[i].tbl_prestamos_monto
                let porcentaje = res[i].tbl_prestamos_porcentaje
                let mes = moment(res[i].tbl_prestamos_fecha_inicio).diff(res[i].tbl_prestamos_fecha_final,'months') * -1
                let total = monto * porcentaje
                total = (total * mes) + monto
                let cuota = total / fechas.length
                cuota = Math.round(cuota)
                data.push({
                    title : 'Cliente: ' + res[i].tbl_cliente_nombre + ' ' + res[i].tbl_cliente_apellido1,
                    start :  fechas[j],
                    description : 'Cobro valor: ' + cuota
                })
            }
        }
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next',
                center: 'title',
                right: 'basicDay,listWeek'
            },
            defaultView : 'basicDay',
            defaultDate: new Date(),
            locale: 'es',
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            droppable: true, // this allows things to be dropped onto the calendar
            eventLimit: true, // allow "more" link when too many events
            events: data,
            eventRender: function(event, element) {
                if(event.description) {
                  element.find('.fc-list-item-title').append('<br><span class="fc-desc">' + event.description + '</span>');
                  element.find('.fc-content').append('<br><span class="fc-desc">' + event.description + '</span>');
                }
              }
        })
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
            fechas.push(moment(hasta).format('YYYY-MM-DD'))
        else 
            fechas[i-1] = moment(hasta).format('YYYY-MM-DD')
        return fechas
    }

    
})