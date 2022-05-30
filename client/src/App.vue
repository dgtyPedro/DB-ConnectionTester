<template>
  <div id="app">
    <Header />
    <Tester />
    <About />
  </div>
</template>

<script>
  import Header from './components/Header'; 
  import Tester from './components/Tester'; 
  import About from './components/About'; 
  

  import './styles/global.css'

  export default {
    name: 'App',
    components: {
      Header,
      Tester,
      About
    }
  }
</script>

