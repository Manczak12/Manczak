<template>
  <div class="counters">
    <h1>20 Guzikow</h1>
    <div class="counters-grid">
      <div v-for="(counter, index) in counters" :key="index" class="counter-item">
        <button @click="increment(index)">
          Klikniecia: {{ counter }}
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Counters",
  data() {
    return {
      counters: Array(20).fill(0),
    };
  },
  methods: {
    increment(index) {
      this.counters[index]++;
    },
  },
};
</script>

<style>
.counters {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
  background-color: aqua;
}

.counters h1 {
  font-size: 20px;
  margin-bottom: 20px;
}

.counter-item button {
  padding: 10px 15px;
  font-size: 10px;
  color: aqua;
  background-color: red;

}
</style>
