<!DOCTYPE html>
<html>
    <head>
        <title>getting started vue.js</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script src="/js/vue.js"></script>
    </head>
    <body>
        <div id="app">
            <h1 v-once>{{ title }}</h1> <!-- v-once - рендерит елемент 1 раз -->
            <p>{{ sayHello() }} - <a v-bind:href="link">Google</a></p>
            <p v-html="finishedLink"></p> <!-- v-html - рендерит строку как html -->
        </div>

        <script>
            new Vue({
                el: '#app',
                data: {
                    title: 'Hello World',
                    link: 'http://google.com',
                    finishedLink: '<a href="http://google.com">Google</a>',
                },
                methods: {
                    sayHello: function () {
                        this.title = 'Hello';
                        return this.title;
                    }
                }
            })
        </script>

        <div id="app-2">
            <button v-on:click="increase(2, $event)">Click Me</button>
            <button v-on:click="counter++">Click Me</button>
            <p>{{ counter * 2 }}</p>
            <p v-on:mousemove="updateCoordinates">
                Coordinates {{ x }} / {{ y }} - <span v-on:mousemove.stop="">DEAD SPOT</span>
            </p>
            <input type="text" v-on:keyup.enter.space="alertMe">
        </div>

        <script>
            new Vue({
                el: '#app-2',
                data: {
                    counter:0,
                    x: 0,
                    y: 0,
                },
                methods: {
                    increase: function (step, event) {
                        this.counter += step;
                    },
                    updateCoordinates: function (event) {
                        this.x = event.clientX;
                        this.y = event.clientY;
                    },
                    alertMe: function () {
                        alert('me!');
                    },
                }
            })
        </script>

        <div style='margin-top:20px;' id='app-3'>
            <input type="text" v-model="name">
            <p>{{ name }}</p>
        </div>

        <script>
            new Vue({
                el: '#app-3',
                data: {
                    name:'Andy',
                },
                methods: {

                }
            })
        </script>

        <div style='margin-top:20px;' id='app-4'>
            <button v-on:click="increase">Increase</button>
            <p>Counter: {{ counter }}</p>
            <p>Result: {{ result }}</p>
        </div>

        <script>
            new Vue({
                el: '#app-4',
                data: {
                    counter: 0,
                    result: '',
                },
                methods: {
                    increase: function () {
                        this.counter++;
                        this.result = this.counter > 5 ? 'Greater than 5' : 'Smaller 5';
                    },
                    decrease: function () {

                    }
                }
            })
        </script>
    </body>
</html>