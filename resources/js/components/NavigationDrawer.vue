<template>
    <div>
                <v-app-bar dense app  clipped-left>
                        <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                         <v-tool-bar-title>System Management System</v-tool-bar-title>
                </v-app-bar>

               



            <v-navigation-drawer clipped app  v-model="drawer">

                    <v-list>    
                            <v-list-item-group v-for="item in Departments" :key="item" >
                                   <v-list-item :to="item.router">
                                     <v-list-item-icon>
                                                <v-icon>{{item.icon}}</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-title>{{item.title}}</v-list-item-title>
                                          
                                   </v-list-item> 

                            </v-list-item-group>
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
                    router:'/Hello'
                },
                ]
        }
    }

}
</script>


