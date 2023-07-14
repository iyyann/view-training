<template>
    <div>
        <div>
            Age: {{ getAge }}
        </div>
    </div>

</template>

<script>
export default{
    props:["age"],

    data(){
        return {
            getAge: 0,
        };
    },

    mounted(){
        this.getAge = this.age;
    },
    methods:{


    },

    watch:{
        age(NewVal,OldVal){
            alert(NewVal, OldVal)
            this.age = NewVal;
        },
    },
};
</script>