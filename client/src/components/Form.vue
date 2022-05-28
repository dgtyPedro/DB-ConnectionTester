<template>
    <div class="form-tester">
        <label>Connection Method</label>
        <select>
            <option>mySQL</option>
        </select>

        <label>Host</label>
        <input/>

        <label>Port</label>
        <input/>

        <label>Database Name</label>
        <input/>

        <label>Username</label>
        <input/>

        <label>Password</label>
        <input/>

        <button>Test</button>
    </div>
    
    
</template>

<script>
    export default{
        name:'Form',
    }
</script>

<style scoped>
    .form-tester{
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>