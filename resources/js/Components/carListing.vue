<template>
    <div>
      <div v-for="car in cars" :key="car.id">
        <!-- Car information display -->
        <p>{{ car.brand }}</p>
        <p>{{ car.model }}</p>
        <!-- Other fields... -->
        
        <!-- Delete button -->
        <button @click="deleteCar(car.id)">Delete</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        cars: [], // Array to store car data fetched from the API
      };
    },
    methods: {
      async deleteCar(carId) {
        try {
          await axios.delete(`/api/cars/${carId}`);
          // If successful, remove the car from the local data array
          this.cars = this.cars.filter(car => car.id !== carId);
        } catch (error) {
          console.log(error);
        }
      },
      // Other methods...
    },
    mounted() {
      // Fetch car data from the API and assign it to the 'cars' data property
      this.fetchCars();
    },
  };
  </script>
  