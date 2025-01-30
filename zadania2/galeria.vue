<template>
  <div class="gallery">
    <h1>Galeria zdjec</h1>
    <div class="gallery-grid">
      <div 
        v-for="(image, index) in images" 
        :key="index" 
        class="gallery-item" 
        @click="openModal(index)"
      >
        <img :src="image" :alt="'Zdjecie ' + (index + 1)" />
      </div>
    </div>

    
    <div v-if="isModalOpen" class="modal" @click="closeModal">
      <div class="modal-content">
        <img :src="images[currentImage]" :alt="'Zdjecie ' + (currentImage + 1)" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Gallery",
  data() {
    return {
      images: [
        "12.png",
        "13.jfif",
        "14.jfif",
        "15.png",
      ],
      isModalOpen: false,
      currentImage: 0,
    };
  },
  methods: {
    openModal(index) {
      this.currentImage = index;
      this.isModalOpen = true;
    },
    closeModal() {
      this.isModalOpen = false;
    },
  },
};
</script>

<style>

.gallery {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
  background-color: cadetblue;
}

.gallery h1 {
  font-size: 20px;
  margin-bottom: 20px;
}
.gallery-item img {
  width: 100%;
  height: auto;
  border-radius: 8px;
  cursor: pointer;
  transition: transform 0.3s ease;
}


</style>