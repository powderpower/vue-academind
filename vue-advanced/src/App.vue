<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               
               <!-- Динамический компонент -->
               <button @click="selectedComponent = 'app-quote'">Quote</button>
               <button @click="selectedComponent = 'app-author'">Author</button>
               <button @click="selectedComponent = 'app-new'">New</button>
               <hr>
               <p>{{ selectedComponent }}</p>
               
               <component :is="selectedComponent">
                   <p>Default Content</p>
               </component>
               <!-- -->
               
               <!-- Обычный копонент -->
               <app-quote>
                   <h2 slot="title">{{ quoteTitle }}</h2>
                   <p slot="content">A wonderful Qoute</p>
                   <p>Слот без имени</p>
               </app-quote>
               <!-- -->

            </div>
        </div>
    </div>
</template>

<script>
    import Quote from './components/Quote.vue';
    import Author from './components/Author.vue';
    import New from './components/New.vue';

    export default {
        data: function () {
            return {
                quoteTitle: 'The Quote',
                selectedComponent: 'app-quote',
            };
        },
        components: {
            'app-quote': Quote,
            'app-author': Author,
            'app-new': New,
        }
    }
</script>

<style>
    /** к слотам не присваивается в родительском элементе */
</style>
