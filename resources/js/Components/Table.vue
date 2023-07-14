<template lang="">
    <div>
        <div>
            <Form @submitted="getter"/>
        </div>
        <div>
            <Table :names="names"/>
        </div>
    </div>
</template>
<script>
import Form from './Form.vue';
import Table from './Table.vue';

export default {
    components:{
        Form,
        Table,
    },
    data(){
        return{
            names:[]
        };
    },
    mounted(){
        this.getter();
    },
    methods:{
        getter(){
            axios.get('/get-names').then(({data})=>{
                this.names=data;
            });
        }
    }
};
</script>
<style lang="">

</style>
