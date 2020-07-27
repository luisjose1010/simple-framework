<template>
    <div class="example">
        {{ body }}
    </div>
</template>

<script>
    export default {
        data() {
            return {
                body: 'Componente de ejemplo'
            }
        }
    }
</script>

<style scoped>
    .example {
        background: rgb(66, 218, 104);
    }
</style>
