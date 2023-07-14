<template>
    <div>
        App (Hello World!)
        <div>
            Count:{{ count }}
            <button @click="addOne()">+</button>
            <button @click="minusOne()">-</button>
            <button @click="addTen()">+10</button>
        </div>
        <div>
            Total: {{ addPlusCount }}
        </div>

    </div>
</template>


<script>
import Age from "./Age.vue";
export default{
    //componenets
    components:{
        Age
    },


    //Variables
    data(){
        return{
            count:0,
            age:21,
        }
    },
    methods:{
        addOne(){
            this.count += 1;
        },

        minusOne(){
            this.count -= 1;
        },

        addTen(){
            this.count += 10;
        }
    },

    computed:{
     addPlusCount(){
        return this.add+this.count;
     },

    }


}
</script>
<style>

</style>