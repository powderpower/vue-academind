<template>
    <div> <!-- все что в тепмлейте нужно оборачивать дополнительно в 1 див -->
        <p>Server Status: {{ status }}</p>
        <button @click="changeStatus">Change Status</button>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            status: 'Critical'
        };
    },
    methods: {
        changeStatus: function() {
            this.status = 'Normal';
        },
    }
}
</script>