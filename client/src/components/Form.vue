<template>
    <div class="form-tester">

        <label>Database Type</label>
        <select v-model="dbtype">
            <option>MySQL</option>
            <option>Microsoft SQL Server</option>
            <option>PostgreSQL</option>
            <option>MongoDB</option>
            <option>MariaDB</option>
            <option>I don't know</option>
        </select>

        <br/>

        <label>Host</label>
        <input v-model="host"/>

        <br/>

        <label>Port</label>
        <input v-model="port"/>
        
        <br/>

        <label>Database Name</label>
        <input v-model="dbname"/>

        <br/>

        <label>Username</label>
        <input v-model="username"/>

        <br/>

        <label>Password</label>
        <input v-model="password"/>

        <br/>

        <button @click="send">Test</button>
    </div>
    
    
</template>

<script>
    export default{
        name:'Form',
        data() {
            return {
                dbtype: '',
                host: '',
                port: '',
                dbname: '',
                username: '',
                password: '',   
            }
        },
        methods: {
            send(){
                console.log([
                    this.dbtype,
                    this.host,
                    this.port,
                    this.dbname,
                    this.username,
                    this.password,
                ])
            }
        }
    }

</script>

<style scoped>
    .form-tester{
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 5%;
    }
</style>