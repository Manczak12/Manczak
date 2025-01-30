<template>
  <div id="app">
    <div class="baner">
      <h1>Witamy na naszej stronie!</h1>
    </div>
    <div class="layout">
      <div class="sidebar-left">
        <h3>Lewy bloczek</h3>
        <ul>
          <li>Sigma</li>
          <li>Boy</li>
          <li>gyat</li>
        </ul>
      </div>

    
      <div class="content">
        <h2>Głowna</h2>
        <p>Najlepze prkatyki 😊</p>
      </div>
      <div class="sidebar-right">
        <h3>Prawy Bloczek</h3>
        <p>Lewa reka prawa noga</p>
      </div>
    </div>

    <footer class="footer">
      <p>Strona Maksa</p>
    </footer>
  </div>
</template>

<script>
export default {
  name: "App",
};
</script>

<style>

.baner {
  text-align: center;
  padding: 20px;
  background-color: fuchsia;
  color: white;
}


.layout {
  display: grid;
  grid-template-columns: 300px 300px 300px;
  margin: 10px;
}

.layout {
  background-color: grey;
  padding: 50px;
}

.footer {
  text-align: center;
  padding: 10px;
  background: fuchsia;
  color: white;
  margin-top: 20px;
}
</style>
