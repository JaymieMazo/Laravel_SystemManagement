<template>
<div   >
    <v-list-item-group >
    
    <v-list-item   class="system" v-for="(item , key) in Accounting " :key="key"  >

    <v-list-item-title>{{item.name}}</v-list-item-title>
    </v-list-item>
    </v-list-item-group>
</div>
</template>


<script>
export default {

    data(){
        return{
                Accounting:[
                    {name:'Accounting Tool'},
                    {name:'Accounting Inventory Data Extraction Tool'},
                    {name:'Accounting  Inventory Tool(XPA)'},
                    {name:'Agrix Broking'},
                    {name:'Hawking Broking'},
                    {name:'Cash Advance Liquidation(XPA'},
                    {name:'Conference Room  Reservation System'},
                    {name:'Data Extract CAD Billing Details'},
                    {name:'Data Extract for Agrix Broking'},
                    {name:'Data Extract for HRD Broking'},
                    {name:'Data Extract HRD Warehouse Details'},
                    {name:'Data Extract HTI Warehouse Details'},
                     {name:'Data Extract PVTECH Warehouse Details'},
                    {name:'Data Extract SCAD Warehouse Details'},
                     {name:'Data Extract WUKONG Warehouse Details'},
                    {name:'Hinban Check'},
                    {name:'HRD Broking'},
                    {name:'HRD Umbrella Administration System'},
                     {name:'HRD Warehouse Management System'},
                    
                    
                    ]
        }
    }, 




    created(){
            
    }

}
</script>

<style scoped>


.system{
font-size: 10px;
}

 .system:hover{
        background-color:cadetblue ;

    }
</style>