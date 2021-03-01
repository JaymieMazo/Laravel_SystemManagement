<template>
    <div>
            <v-app-bar dense app  clipped-left>
                    <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                        <v-toolbar-title>System Management System</v-toolbar-title>
            </v-app-bar>


            <v-navigation-drawer clipped app  v-model="drawer">
                    <v-list>    
                                   <v-list-item    
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
                    title:'Purchasing',
                    icon:'mdi-trash-can',
                    router:'/Purchasing'
                }, 

                        {
                    title:'test',
                    icon:'mdi-trash-can',
                    router:'/test'
                }, 

                ]
        }
    }

}
</script>


