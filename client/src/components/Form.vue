<template>
    <div class="form-tester">

        <div class="response" v-if="response != ''">{{response}}</div>
        <br/>

        <label>Database Type</label>
        <select v-model="dbtype">
            <option>MySQL</option>
            <option>Microsoft SQL Server</option>
            <option>PostgreSQL</option>
            <option>Oracle</option>
            <option>I don't know</option>
        </select>

        <br/>

        <label>Host</label>
        <input v-model="host"/>

        <br/>

        <!-- <label>Port</label>
        <input v-model="port"/>
        
        <br/> -->

        <label>Database Name</label>
        <input v-model="dbname"/>

        <br/>

        <label>Username</label>
        <input v-model="username"/>

        <br/>

        <label>Password</label>
        <input v-model="password"/>

        <br/>

        <button @click="send">Test <i class="fa-solid fa-arrow-right"></i></button>
        
    </div>
    
    
</template>

<script>

    import axios from "axios"

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
                response: '', 
            }
        },
        methods: {
            send(){
                axios.post('http://localhost:8080/', {
                    servername: this.host,
                    dbname: this.dbname,
                    username: this.username,
                    password: this.password,
                })
                .then((response) => {
                    this.response = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
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

    .response{
        color: var(--color-pinky);
    }
</style>