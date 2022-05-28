<template>
  <div id="app">
    <Header />
    <Tester />
  </div>
</template>

<script>
  import Header from './components/Header'; 
  import Tester from './components/Tester'; 
  

  import './styles/global.css'

  export default {
    name: 'App',
    components: {
      Header,
      Tester
    }
  }
</script>

