<template lang="">
    <div>
        <form action="" @submit.prevent="submitForm">
            <div class="grid grid-cols2 gap-2">
                <div>
                    <label for="">First Name</label>
                    <input type="text" v-model ="fname">
                </div>

                <div>
                    <label for="">Middle Name</label>
                    <input type="text" v-model ="mname">
                </div>

                <div>
                    <label for="">Last Name</label>
                    <input type="text" v-model ="lname">
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data(){
        return {
            id:0,
            fname:"",
            mname:"",
            lname:"",
        };
    },
    methods:{
        submitForm(){
            let{fname,mname,lname} = this;
            alert("Submitting");
            axios
            .post('/submit-name',{id,fname,mname,lname})
            .then(({data})=>{
                alert("Successful!");
                this.id=0;
                this.fname="";
                this.mname="";
                this.lname="";
                this.$emit("submitted");
            });
        },
        submitFormAlt(){
            alert("Submitting");
            axios
            .post('/submit-name',{
                id:this.id,
                fname:this.fname,
                mname:this.mname,
                lname:this.lname
            })
            .then(({data})=>{
                alert("successful");
                this.id=0;
                this.fname="";
                this.mname="";
                this.lname="";
                this.$emit("submitted");
            });
        }
    },
};
</script>
<style lang="">

</style>