<template>
    <div>
            <v-app-bar dense app  clipped-left>
                    <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                        <v-toolbar-title>System Management System</v-toolbar-title>
            </v-app-bar>


            <v-navigation-drawer clipped app  v-model="drawer">
                    <v-list>    
                                   <v-list-item     class="route1" 
                                        v-for="(item, index) in Departments" 
                                        :key="index" 
                                        :to="item.router">
                                    
                                            <v-list-item-icon>
                                                    <v-icon>{{item.icon}}</v-icon>
                                            </v-list-item-icon>

                                            <v-list-item-title>{{item.title}}</v-list-item-title>
                                          
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
            Departments:[
                {
                    title:'Administration',
                    icon:'mdi-account' , 
                    router:'/'
                },
                
                 {
                    title:'Accounting',
                    icon:'mdi-cog' , 
                    router:'/Accounting'
                },


                {
                    title:'Cad Design 1',
                    icon:'mdi-trash-can',
                    router:'/CadDesign1'
                }, 

                {
                   title:'Cad Design 2',
                    icon:'mdi-trash-can',
                    router:'/CadDesign2'
                }, 
                 {
                    title:'Denki',
                    icon:'mdi-trash-can',
                    router:'/Denki'
                }, 
                {
                    title:'Engineering',
                    icon:'mdi-trash-can',
                    router:'/Engineering'
                },   
                {
                    title:'Estimation',
                    icon:'mdi-trash-can',
                    router:'/Estimation'
                }, 
                {
                    title:'Exterior',
                    icon:'mdi-trash-can',
                    router:'/Exterior'
                }, 
                {
                    title:'Frame',
                    icon:'mdi-trash-can',
                    router:'/Frame'
                }, 
                {
                    title:'FSE',
                    icon:'mdi-trash-can',
                    router:'/FSE'
                }, 
                 {
                    title:'GPC',
                    icon:'mdi-trash-can',
                    router:'/GPC'
                }, 
                {
                    title:'Hacchu',
                    icon:'mdi-trash-can',
                    router:'/Hacchu'
                },

                ]
        }
    }

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
</style>