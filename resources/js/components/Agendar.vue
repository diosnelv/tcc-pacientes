<template>
<!--    <h1>holaaa</h1>-->
    <vue-cal
        selected-date="2022-10-18"
        xsmall
        :timeCellHeight="70"
        :hide-weekdays="[6,7]"
        :time-from="13 * 60" :time-to="21 * 60"
        :disable-views="['years','year','month']"
        events-count-on-year-view
        active-view="month"
        :events="horarios"
        :on-event-click="agendarConsulta"
        locale="es">
    </vue-cal>

    <!--    <vue-cal :timeCellHeight="150" :time="false" :timeStep="60" :events="comidas" :hide-weekdays="[7]" :time-from="6 * 60" :time-to="21 * 60" :disable-views="['years', 'year', 'month']" style="height: 100%" locale="es" />-->
</template>

<script>
import VueCal from 'vue-cal'
import moment from 'moment'
import axios from 'axios'
import Swal from 'sweetalert2';
import 'vue-cal/dist/vuecal.css'
import 'vue-cal/dist/i18n/es.js'
    export default {
        components: { VueCal },
        mounted() {
            // console.log('dieta: '+JSON.stringify(this.comidas));
        },
        props: {
            horarios: Array
        },
        methods: {
            agendarConsulta (event, e) {
                    let timerInterval
                // console.log('event'+JSON.stringify(event));
                let dia = moment(event.start).lang("es").format('dddd, DD MMMM');
                let inicio = moment(event.start).lang("es").format('HH:mm')+' hs.';
                let fin = moment(event.end).lang("es").format('HH:mm ')+' hs.';

                Swal.fire({
                    title: `¿Desea agendar su consulta en este horario?`,
                    html: '<h4><b class="text-primary">Día: </b>'+dia+'</h4>'+
                        '<h4><b class="text-primary">Inicio: </b>'+inicio+'</h4>'+
                        '<h4><b class="text-primary">Fin: </b>'+fin+'</h4>',
                    showCancelButton: true,
                    confirmButtonText: 'Reservar',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#3490E0'
                }).then(result => {
                    if (result.isConfirmed){
                        Swal.fire({
                            title: 'Agendando consulta...',
                            didOpen: () => {
                                Swal.showLoading()
                            },
                        });
                        axios.post('guardar-consulta',{
                            id: event.id
                        }).then(response => {
                            Swal.fire({
                                title: 'Consulta reservada',
                                html: 'La consulta se agendó con éxito',
                                icon: 'success',
                                showConfirmButton: false
                            })
                            setTimeout( function (){
                                window.location.assign('/consultas')
                            }, 2000)
                        })
                    }
                })

                // Prevent navigating to narrower view (default vue-cal behavior).
                e.stopPropagation()
            }
        }
        ,
        data: () => ({
            events: [
                {
                    start: '2022-10-19 14:00',
                    end: '2022-10-19 18:00',
                    title: 'Need to go shopping',
                    icon: 'shopping_cart', // Custom attribute.
                    content: 'Click to see my shopping list',
                    contentFull: 'My shopping list is rather long:<br><ul><li>Avocados</li><li>Tomatoes</li><li>Potatoes</li><li>Mangoes</li></ul>', // Custom attribute.
                    class: 'leisure'
                },
                {
                    start: '2022-10-22 10:00',
                    end: '2022-10-22 15:00',
                    title: 'Golf with John',
                    icon: 'golf_course', // Custom attribute.
                    content: 'Do I need to tell how many holes?',
                    contentFull: 'Okay.<br>It will be a 18 hole golf course.', // Custom attribute.
                    class: 'sport'
                }
            ]
        })
    }
</script>

<style>
/* Default indicator is count, but you can override it with one of the following rules. */

/* Dot indicator */
.vuecal__cell-events-count {
    width: 4px;
    min-width: 0;
    height: 4px;
    padding: 0;
    color: #6cb2eb;
}

.vuecal__event.agendado {background-color: rgba(253, 156, 66, 0.9);border: 1px solid rgb(233, 136, 46);color: #fff;}
.vuecal__event.libre {background-color: rgba(34,139,34, 0.9);border: 1px solid rgb(60,179,113);color: #fff;}

</style>
