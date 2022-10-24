<template>
    <vue-cal :timeCellHeight="150" :time="false" :timeStep="60" :events="comidas" :hide-weekdays="[7]"
             :time-from="6 * 60" :time-to="21 * 60" :disable-views="['years', 'year', 'month']"
             :on-event-click="verReceta"
             style="height: 100%" locale="es" />
</template>

<script>
import VueCal from 'vue-cal'
import 'vue-cal/dist/vuecal.css'
import 'vue-cal/dist/i18n/es.js'
import Swal from "sweetalert2";
    export default {
        components: { VueCal },
        mounted() {
            console.log('dieta: '+JSON.stringify(this.comidas));
        },
        props: {
            comidas: Array
        },
        methods:{
            verReceta (event, e) {
                // console.log('event'+JSON.stringify(event));

                let rows = event.receta;
                let row = '';
                row += '<ul class="text-primary text-left">'
                $.each(rows, function (key, value){
                    row += '<li>';
                    row += value;
                    row += '</li>';
                })
                row += '</ul>';

                let titulo = 'Ingredientes' + (event.title === 'Almuerzo' || event.title === 'Desayuno' ? ' del ' : ' de la') + event.title;

                Swal.fire({
                    title: titulo,
                    html: row,
                    icon: 'success',
                    // showCancelButton: false,
                    confirmButtonText: 'Cerrar',
                    // cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#3490E0'
                })
            }
        },
        data: () => ({
            events: [
                {
                    start: '2022-07-15 07:00:00',
                    end: '2022-07-15 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Mixto con JyQ</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2022-07-15 12:00:00',
                    end: '2022-07-15 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Canelones de choclo</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2022-07-15 16:30:00',
                    end: '2022-07-15 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 fruta mediana</h6>',
                    class: 'merienda'
                },
                {
                    start: '2022-07-15 20:00:00',
                    end: '2022-07-15 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>Ensalada Cesar</h6>',
                    class: 'cena'
                },
                {
                    start: '2022-07-14 07:00:00',
                    end: '2022-07-14 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Jugo Natural y Mixto con JyQ</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2022-07-14 12:00:00',
                    end: '2022-07-14 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>verduras salteadas</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2022-07-14 16:30:00',
                    end: '2022-07-14 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 yogurt chico</h6>',
                    class: 'merienda'
                },
                {
                    start: '2022-07-14 20:00:00',
                    end: '2022-07-14 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>Omelette con queso</h6>',
                    class: 'cena'
                },
                {
                    start: '2022-07-13 07:00:00',
                    end: '2022-07-13 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Cafe con leche y 4 galletitas</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2022-07-13 12:00:00',
                    end: '2022-07-13 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Caldo de Verduras </h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2022-07-13 16:30:00',
                    end: '2022-07-13 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 fruta mediana</h6>',
                    class: 'merienda'
                },
                {
                    start: '2022-07-13 20:00:00',
                    end: '2022-07-13 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>Bife con Ensalada</h6>',
                    class: 'cena'
                },
                {
                    start: '2022-07-12 07:00:00',
                    end: '2022-07-12 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Te con leche y mixto de JyQ</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2022-07-12 12:00:00',
                    end: '2022-07-12 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Chop Suey</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2022-07-12 16:30:00',
                    end: '2022-07-12 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 banana</h6>',
                    class: 'merienda'
                },
                {
                    start: '2022-07-12 20:00:00',
                    end: '2022-07-12 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>2 porciones de pizza</h6>',
                    class: 'cena'
                },
                {
                    start: '2022-07-11 07:00:00',
                    end: '2022-07-11 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Cafe con Leche y  mixto </h6>',
                    class: 'desayuno'
                },
                {
                    start: '2022-07-11 12:00:00',
                    end: '2022-07-11 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Pollo al horno y verduras</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2022-07-11 16:30:00',
                    end: '2022-07-11 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 yogurt chico</h6>',
                    class: 'merienda'
                },
                {
                    start: '2022-07-11 20:00:00',
                    end: '2022-07-11 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>Pizza con rapiditas</h6>',
                    class: 'cena'
                },
                {
                    start: '2022-07-16 07:00:00',
                    end: '2022-07-16 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Cafe con leche y Mixto</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2022-07-16 12:00:00',
                    end: '2022-07-16 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Guiso con arroz integral</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2022-07-16 16:30:00',
                    end: '2022-07-16 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 fruta mediana</h6>',
                    class: 'merienda'
                },
                {
                    start: '2022-07-16 20:00:00',
                    end: '2022-07-16 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>Ensalada de atun</h6>',
                    class: 'cena'
                },
                {
                    start: '2022-07-28 07:00:00',
                    end: '2022-07-28 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Cafe con leche y Mixto con JyQ</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2022-07-28 12:00:00',
                    end: '2022-07-28 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Bife con ensalda verde</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2022-07-28 16:30:00',
                    end: '2022-07-28 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 fruta mediana</h6>',
                    class: 'merienda'
                },
                {
                    start: '2022-07-28 20:00:00',
                    end: '2022-07-28 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>sandwich de verduras</h6>',
                    class: 'cena'
                }
            ],
            // datos: ''
        })
    }
</script>

<style>
.vuecal__menu, .vuecal__cell-events-count {background-color: #42b983;}
.vuecal__title-bar {background-color: #e4f5ef;}
.vuecal__cell--today, .vuecal__cell--current {background-color: rgba(240, 240, 255, 0.4);}
.vuecal:not(.vuecal--day-view) .vuecal__cell--selected {background-color: rgba(235, 255, 245, 0.4);}
.vuecal__cell--selected:before {border-color: rgba(66, 185, 131, 0.5);}
/* Cells and buttons get highlighted when an event is dragged over it. */
.vuecal__cell--highlighted:not(.vuecal__cell--has-splits),
.vuecal__cell-split--highlighted {background-color: rgba(195, 255, 225, 0.5);}
.vuecal__arrow.vuecal__arrow--highlighted,
.vuecal__view-btn.vuecal__view-btn--highlighted {background-color: rgba(136, 236, 191, 0.25);}

.vuecal__event.desayuno {background-color: rgba(253, 156, 66, 0.9);border: 1px solid rgb(233, 136, 46);color: #fff;}
.vuecal__event.almuerzo {background-color: rgba(34,139,34, 0.9);border: 1px solid rgb(60,179,113);color: #fff;}
.vuecal__event.merienda {background-color: rgba(255, 102, 102, 0.9);border: 1px solid rgb(235, 82, 82);color: #fff;}
.vuecal__event.cena {background-color: rgba(0, 28, 200, 0.9);border: 1px solid rgb(0, 27, 148);color: #fff;}
</style>
