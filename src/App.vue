<script setup>
import HelloWorld from './components/HelloWorld.vue'
import TheWelcome from './components/TheWelcome.vue'
</script>

<template>
  <header>

    <div id="juna">
      <div id="posisigambar">
    <img alt="Vue logo" class="logo" src="./assets/saya.jpg" width="205" height="225" id="gambar"/>

    <div class="wrapper">
      <HelloWorld msg="Rico franjes" />
    </div>
  </div>
  </div>
  </header>

  <main>
    <TheWelcome />
  </main>
</template>

<style scoped>
#juna{
  box-shadow: 0 0 40px rgba(0, 0, 0, 12);
  margin-left:-3px;
  height: 400px;
  width: 380px;

}

#posisigambar{
  margin-left: 80px;
  margin-top: 50px;
  
}
#gambar{
  border-radius: 48%;
}

header {
  line-height: 1.5;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
    margin-top: 20px;
  }
}
</style>
