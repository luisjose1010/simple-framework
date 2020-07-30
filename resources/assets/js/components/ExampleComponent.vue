<template>
    <div class="example">
        <h2>{{ body }}</h2>
        <br><br>
        <img src="./../../img/test-img.jpg">
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
        width: 20%;
        border-radius: 4px;
    }

    img {
        border: 1px solid rgb(43, 138, 66);
        background-color: rgb(55, 177, 85);
        border-radius: 4px;
        padding: 5px;
        width: 150px;
    }
</style>
