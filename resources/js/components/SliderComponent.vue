<template>
 <div class="owl-carousel owl-theme">
 
  <div class="slide_item" v-for="item in data" v-bind:style="{ background: 'url(images/slider/' + item.image + ') no-repeat', backgroundSize: 'cover' }" >
    <div class="slide_text_content">
     <h2 v-text="item.zag">ad</h2>
     <p v-text="item.title">assd</p>
     <a v-bind:href="item.link">Learn More</a>
    </div>
  </div>

 </div>
</template>

<script>
    export default {
        props: ['data'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
