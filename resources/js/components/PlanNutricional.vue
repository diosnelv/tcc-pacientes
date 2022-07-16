<template>
    <vue-cal :events="events" :disable-views="['years', 'year', 'month']" style="height: 100%" locale="es" :time="false" />
</template>

<script>
import VueCal from 'vue-cal'
import 'vue-cal/dist/vuecal.css'
import 'vue-cal/dist/i18n/es.js'
    export default {
        components: { VueCal },
        data: () => ({
            events: [
                {
                    start: '2021-03-22 07:00:00',
                    end: '2021-03-22 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Mixto con JyQ</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2021-03-22 12:00:00',
                    end: '2021-03-22 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Canelones de choclo</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2021-03-22 16:30:00',
                    end: '2021-03-22 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 fruta mediana</h6>',
                    class: 'merienda'
                },
                {
                    start: '2021-03-22 20:00:00',
                    end: '2021-03-22 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>Ensalada Cesar</h6>',
                    class: 'cena'
                },
                {
                    start: '2021-03-23 07:00:00',
                    end: '2021-03-23 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Jugo Natural y Mixto con JyQ</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2021-03-23 12:00:00',
                    end: '2021-03-23 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>verduras salteadas</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2021-03-23 16:30:00',
                    end: '2021-03-23 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 yogurt chico</h6>',
                    class: 'merienda'
                },
                {
                    start: '2021-03-23 20:00:00',
                    end: '2021-03-23 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>Omelette con queso</h6>',
                    class: 'cena'
                },
                {
                    start: '2021-03-24 07:00:00',
                    end: '2021-03-24 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Cafe con leche y 4 galletitas</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2021-03-24 12:00:00',
                    end: '2021-03-24 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Caldo de Verduras </h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2021-03-24 16:30:00',
                    end: '2021-03-24 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 fruta mediana</h6>',
                    class: 'merienda'
                },
                {
                    start: '2021-03-24 20:00:00',
                    end: '2021-03-24 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>Bife con Ensalada</h6>',
                    class: 'cena'
                },
                {
                    start: '2021-03-25 07:00:00',
                    end: '2021-03-25 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Te con leche y mixto de JyQ</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2021-03-25 12:00:00',
                    end: '2021-03-25 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Chop Suey</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2021-03-25 16:30:00',
                    end: '2021-03-25 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 banana</h6>',
                    class: 'merienda'
                },
                {
                    start: '2021-03-25 20:00:00',
                    end: '2021-03-25 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>2 porciones de pizza</h6>',
                    class: 'cena'
                },
                {
                    start: '2021-03-26 07:00:00',
                    end: '2021-03-26 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Cafe con Leche y  mixto </h6>',
                    class: 'desayuno'
                },
                {
                    start: '2021-03-26 12:00:00',
                    end: '2021-03-26 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Pollo al horno y verduras</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2021-03-26 16:30:00',
                    end: '2021-03-26 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 yogurt chico</h6>',
                    class: 'merienda'
                },
                {
                    start: '2021-03-26 20:00:00',
                    end: '2021-03-26 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>Pizza con rapiditas</h6>',
                    class: 'cena'
                },
                {
                    start: '2021-03-27 07:00:00',
                    end: '2021-03-27 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Cafe con leche y Mixto</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2021-03-27 12:00:00',
                    end: '2021-03-27 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Guiso con arroz integral</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2021-03-27 16:30:00',
                    end: '2021-03-27 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 fruta mediana</h6>',
                    class: 'merienda'
                },
                {
                    start: '2021-03-27 20:00:00',
                    end: '2021-03-27 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>Ensalada de atun</h6>',
                    class: 'cena'
                },
                {
                    start: '2021-03-28 07:00:00',
                    end: '2021-03-28 08:00:00',
                    title: 'Desayuno',
                    content: '<i class="fas fa-coffee"></i><br><br><h6>Cafe con leche y Mixto con JyQ</h6>',
                    class: 'desayuno'
                },
                {
                    start: '2021-03-28 12:00:00',
                    end: '2021-03-28 13:00:00',
                    title: 'Almuerzo',
                    content: '<i class="fas fa-hamburger"></i><br><br><h6>Bife con ensalda verde</h6>',
                    class: 'almuerzo'
                },
                {
                    start: '2021-03-28 16:30:00',
                    end: '2021-03-28 17:30:00',
                    title: 'Merienda',
                    content: '<i class="fas fa-apple-alt"></i><br><br><h6>1 fruta mediana</h6>',
                    class: 'merienda'
                },
                {
                    start: '2021-03-28 20:00:00',
                    end: '2021-03-28 21:00:00',
                    title: 'Cena',
                    content: '<i class="fas fa-pizza-slice"></i><br><br><h6>sandwich de verduras</h6>',
                    class: 'cena'
                }
            ]
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
