<template>
    <div class="container">
        <div class="tester">
            <Form />
        </div>
    </div>
</template>

<script>
    import Form from './Form'; 

    export default{
        name:'Tester',
        components: {
            Form,
        }
    }
</script>

<style scoped>

    .container{
        display: flex;
        justify-content: center;
    }

    .tester{
        background-color: rgba(255,255,255, 0.1);;
        height: 500px;
        width: 500px;   
    }
</style>