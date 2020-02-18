<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               <app-qoute>
                   <h2>The Quote</h2>
                   <p>A wonderful Qoute</p>
               </app-qoute>
            </div>
        </div>
    </div>
</template>

<script>
    import Quote from './components/Quote.vue';

    export default {
        components: {
            'app-qoute': Quote,
        }
    }
</script>

<style>
    /** к слотам не присваивается в родительском элементе */
</style>
