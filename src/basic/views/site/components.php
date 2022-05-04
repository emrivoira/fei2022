<?php
use yii\bootstrap4\Html;
?>

<div class="site-components">
    <div id="app" class='container mt-3'>
       
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

</script>