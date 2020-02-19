<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               <app-qoute>
                   <h2 slot="title">{{ quoteTitle }}</h2>
                   <p slot="content">A wonderful Qoute</p>
                   <p>Слот без имени</p>
               </app-qoute>
            </div>
        </div>
    </div>
</template>

<script>
    import Quote from './components/Quote.vue';

    export default {
        data: function () {
            return {
                quoteTitle: 'The Quote',
            };
        },
        components: {
            'app-qoute': Quote,
        }
    }
</script>

<style>
    /** к слотам не присваивается в родительском элементе */
</style>
