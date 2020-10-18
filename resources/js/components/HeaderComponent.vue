<template>
 <section class="section_header">
  <div class="menu_media_wrapper" v-show="isMenuMedia">
   <nav class="menu_media">
    <a v-for="item in menu" v-bind:href="item.url">{{ item.text }}</a>
    <a href="#" class="btn_start">get started</a> 
   <div class="close" v-on:click="menuMediShow">x</div>
   </nav>
  </div>
 
 
  <div class="shodow"></div>
   <header class="header_block">
    <div class="wrapper">
      <div class="menu_block">
       <div class="header_left_panel">
        <div class="logo">
         <img v-bind:src="'storage/folder/' + url" alt="error logo">
        </div>
     <div class="header_left_panel_line"></div>
     <div class="header_right_panel_email">
       <a href="#" class="mail">{{ mail }}</a>
     </div>
    </div>

    <nav class="menu">
      <a v-for="item in menu" v-bind:href="item.url">{{ item.text }}</a>
      <a class="btn_start" v-on:click.prevent="$emit('enlarge-text')"  href="#">Телефон</a> 
    </nav>
   </div>
  </div>
</header>
 
<div class="header_media">
 <div class="panel_header_media_top">
  <div class="logo_media_block">
   <img src="images/logo.png" alt="error logo">
  </div>

  <div class="btn_show_media_menu" v-on:click="menuMediShow">&#8801;</div>
 </div>
</div>
<slot></slot>
</section>
</template>

<script>
    export default {
        props: ["url", "mail"],
        mounted() {
            console.log('Component mounted.')
        },
        data: function() {
          return {
            menu: [
             { url: "#", text: "home" },
             { url: "#", text: "about us" },
             { url: "#", text: "pricing" },
             { url: "#", text: "contact us" },
            ],
            isMenuMedia: false,
            menuMediShow: () => {
              this.isMenuMedia = !this.isMenuMedia;
            }
          }
        }
    }
</script>