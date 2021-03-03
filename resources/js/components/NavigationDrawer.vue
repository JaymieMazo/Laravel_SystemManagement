<template>
    <div>
            <v-app-bar dense app  clipped-left>
                    <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                        <v-toolbar-title>HRD System Management System</v-toolbar-title>
            </v-app-bar>


            <v-navigation-drawer clipped app  v-model="drawer" class="navbar">
                        <v-list>    
                                    <v-list-item     class="route1" 
                                            v-for="(item, index) in departments" 
                                            :key="index" 
                                            :to="item.router">
                                            <v-list-item-title>{{item.department_name}}</v-list-item-title>   
                                    </v-list-item> 
                        </v-list>
            </v-navigation-drawer>
    
    </div>


</template>

<script>

export default {
    data(){
        return{
            drawer:true, 
            departments:[]

            // Departments:[
               
            //      {
            //         title:'Accounting',
            //         icon:'mdi-cog' , 
            //         router:'/'
            //     },
                
            //      {
            //         title:'Administration',
            //         icon:'mdi-account' , 
            //         router:'Administration'
            //     },
                

            //     {
            //         title:'Cad Design 1',
            //         icon:'mdi-trash-can',
            //         router:'/CadDesign1'
            //     }, 

            //     {
            //        title:'Cad Design 2',
            //         icon:'mdi-trash-can',
            //         router:'/CadDesign2'
            //     }, 
            //      {
            //         title:'Denki',
            //         icon:'mdi-trash-can',
            //         router:'/Denki'
            //     }, 
            //     {
            //         title:'Engineering',
            //         icon:'mdi-trash-can',
            //         router:'/Engineering'
            //     },   
            //     {
            //         title:'Estimation',
            //         icon:'mdi-trash-can',
            //         router:'/Estimation'
            //     }, 
            //     {
            //         title:'Exterior',
            //         icon:'mdi-trash-can',
            //         router:'/Exterior'
            //     }, 
            //     {
            //         title:'Frame',
            //         icon:'mdi-trash-can',
            //         router:'/Frame'
            //     }, 
            //     {
            //         title:'FSE',
            //         icon:'mdi-trash-can',
            //         router:'/FSE'
            //     }, 
            //      {
            //         title:'GPC',
            //         icon:'mdi-trash-can',
            //         router:'/GPC'
            //     }, 
            //     {
            //         title:'Hacchu',
            //         icon:'mdi-trash-can',
            //         router:'/Hacchu'
            //     },
            //      {
            //         title:'House Presentation',
            //         icon:'mdi-trash-can',
            //         router:'/HousePresentation'
            //     }, 
            //     {
            //         title:'IQA',
            //         icon:'mdi-trash-can',
            //         router:'/IQA'
            //     },
            //      {
            //         title:'Logistics',
            //         icon:'mdi-trash-can',
            //         router:'/Logistics'
            //     }, 
            //     {
            //         title:'Original Hiroi',
            //         icon:'mdi-trash-can',
            //         router:'/OriginalHiroi'
            //     },
            //       {
            //         title:'Panel Assembly',
            //         icon:'mdi-trash-can',
            //         router:'/PanelAssembly'
            //     }, 
            //     {
            //         title:'Piping',
            //         icon:'mdi-trash-can',
            //         router:'/Piping'
            //     },
           

            //  {
            //         title:'Plan Application',
            //         icon:'mdi-trash-can',
            //         router:'/PlanApplication'
            //     }, 
            //     {
            //         title:'QA',
            //         icon:'mdi-trash-can',
            //         router:'/QA'
            //     },
            //       {
            //         title:'R&D',
            //         icon:'mdi-trash-can',
            //         router:'/R&D'
            //     }, 
            //     {
            //         title:'Security',
            //         icon:'mdi-trash-can',
            //         router:'/Security'
            //     },
            //        {
            //         title:'Structural Calculation 1',
            //         icon:'mdi-trash-can',
            //         router:'/StructuralCalculation1'
            //     }, 
            //     {
            //       title:'Structural Calculation 2',
            //         icon:'mdi-trash-can',
            //         router:'/StructuralCalculation2'
            //     },
            //       {
            //       title:'Structural Panel',
            //         icon:'mdi-trash-can',
            //         router:'/StructuralCalculation2'
            //     },

            //       {
            //       title:'Technical and Support',
            //         icon:'mdi-trash-can',
            //         router:'/TechnicalAndSupport'
            //     },
            //       {
            //       title:'Unit Wiring',
            //         icon:'mdi-trash-can',
            //         router:'/UnitWiring'
            //     },
            //     ] , 
        }
    }, 


   created(){
            axios.get('api/home').then(res=>{
                this.departments=res.data
                console.log(this.departments)
            })
        },
}
</script>




<style scoped>

.route1{
text-decoration: none;
}

.route1:hover{
background-color: darkgrey;}

.route1:active{
background-color:teal;}

.navbar{
    width:800px;
}

</style>