<?php
    /** @var $this yii\web\View */
    
    use yii\helpers\html;
    use yii\web\View;

    $this->title = 'Components';
    $this->params['breadcrums'] [] = $this->title;

    $this->registerJSFile(
        "https://cdn.jsdelivr.net/npm/vue/dist/vue.js",
        ['position' => View::POS_HEAD]
    );

    $this->registerJSFile(
        "https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js",
        ['position'=> View::POS_HEAD]
    );
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

        var app = new Vue({
            el:'#app',
            data: {
            },
            methods: {
            },
            computed:{
            },
            mounted() {
                console.log("Vue Mounted");
            },
        })
    </script>
    

</div>