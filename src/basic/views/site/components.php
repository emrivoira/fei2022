<?php
?>

<div class="site-components">
    <div id="app" class='container mt-3'>
        <button-counter>/boutton-counterI
        <button-counter></button-counter>
</div>

<script>
        // Definir un nuevo componente llamado button-counter
    Vue.component('button-counter', {
    data: function () {
        return {
        count: 0
        }
    },
    template: '<button v-on:click="count++">Me ha pulsado {{ count }} veces.</button>'
    })

    var app=new Vue({
     el: 'Fapp',
     data:{
      },
    methods:{
    },
    computed:{
     },
    mounted (){
       console. log("Vue Mounted");
    })

</script>