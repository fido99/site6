<template>
 <div class="wrapper">
  <div class="search_block">
   <slot></slot>
  </div>
  <main class="contnet">
    <div class="contnet_header">
     <h3>Best of our features</h3>
     <div class="contnet_header_line"></div>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
   </div>

   <div class="items_block">
    <div class="item" v-for="item in items">
      <div class="img_icon_block">
       <img v-bind:src="item.image" alt="">
      </div>
      <div class="items_block_zag">{{ item.zag }}</div>
      <p class="items_block_text">{{ item.text }}</p>
    </div>
   </div>


  </main>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function() {
            return {
                items: [
                  {image: "images/item1.png", zag: "Ionicons", text: "Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem."},
                  {image: "images/item2.png", zag: "Creative Design", text: "Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et."},
                  {image: "images/item3.png", zag: "Photoshop and Sketch", text: "Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non magna."},
                ]
            }
        }
    }
</script>
