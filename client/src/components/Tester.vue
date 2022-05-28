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
        color: var(--color-orangy);
        font-size: 1.5rem;
        background-color: rgba(255,255,255, 0.9);
        height: fit-content;
        width: 500px;   
        border-radius: 10px;
        -webkit-box-shadow: 5px 5px 14px 5px var(--color-orangy); 
        box-shadow: 5px 5px 14px 5px var(--color-orangy);
    }
</style>