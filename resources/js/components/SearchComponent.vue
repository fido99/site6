<template>
 <div class="search_wrapper">
   <h3>Поиск:</h3>
   <div class="search_input_wrapper">
    <input type="text" v-model="key" class="input_search" placeholder="search">
   </div>

   <ul class="plants_list">
    <li v-for="item in dataArr" class="name"> {{ item.name }}</li>
   </ul>
 </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                key: "",
                dataArr: []
            }
        },

        watch: {
          key(after, before) {
            this.fetch();
          }
        },

        methods: {
          fetch() {
            axios.get('/api/search', {params: {'key': this.key}})
            .then((response) => {
                this.dataArr = response.data;
                console.log(response.data);
            })
            .catch((err) => {
                console.log(err);
            })
          }
        }
    }
</script>
