<template >
  <div class="vue1"><b>
    <p v-if="name" :style="{ color: textColor }">Selamat datang di website vue sederhana saya {{ name }}</p>
    <!-- Elemen input teks untuk menginputkan nama -->
    <div class="vue2">
    <input type="text" v-model="name" placeholder=" Masukkan nama">
  </div>

    <div class="vue3">
      Berikan inputan dari beberapa karakter, dan jika ingin mengubah warna teks makah klik tombil ubah warna
    </div>

    <button @click="changeTextColor">Ubah Warna Teks</button>
  
  </b>
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: '', // Variabel untuk menyimpan nama yang diinputkan
      textColor: 'black' // Warna awal teks
    };
  },
  methods: {
    // Metode untuk mengubah warna teks
    changeTextColor() {
      // Mengubah warna teks menjadi merah, hijau, atau kuning secara bergantian
      if (this.textColor === 'red') {
        this.textColor = 'green';
      } else if (this.textColor === 'green') {
        this.textColor = 'yellow';
      } else {
        this.textColor = 'red';
      }
    }
  }
};
</script>

<style scoped>
.vue1{
  color: white;
background-color: rgb(192, 192, 192);
width: 320px;
height: 350px;
padding: 20px;
font-weight: bold;
}
.vue2{
  margin-top: 13px;;
  font-weight: bold;
}
.vue3{
  margin-top: 13px;;
}
button{
  background-color: rgb(52, 165, 42);
  border-radius: 4px;
  margin-top: 10px;
  color: white;
}
button:hover{
  background-color: rgba(255, 0, 0, 0.863);
}
</style>
