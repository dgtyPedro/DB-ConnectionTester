<template>
    <header>
        <h1>Database Connection Tester</h1>
        <a class="madewith">made with Lumen + Vue</a>
    </header>
</template>

<script>
    export default{
        name:'Header'
    }
</script>

<style scoped>
    header{
        background-color: rgba(0, 0, 0, 0.01);
        display: flex;
        justify-content: center;
        align-items: end;
        padding: 1%;
        margin-bottom: 5vh;
    }

    .madewith{
        font-style: italic;
    }
</style>