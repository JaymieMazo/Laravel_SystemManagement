<template>
   <v-app>

      <div>
            <nav-drawer></nav-drawer>
            <v-main>
                <div>
                    <router-view></router-view>
                </div>
            </v-main>
      </div>
      
   </v-app>
</template>




<script>
    import  NavDrawer from '../components/NavigationDrawer';

    export default {
        components:{NavDrawer}

    }
</script>