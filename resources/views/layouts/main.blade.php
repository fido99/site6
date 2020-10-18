<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	<link rel="stylesheet" href="/css/m.css">
  <link rel="stylesheet" href="/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/owl/owl.theme.default.css">
  
	<meta name="viewport" content="width=device-width, initial-scale=1">

   
</head>
<body>
 <div id="app">
  <div class="form_modeal_wrapper" v-show="isFormActive" style="display: none">
   <div class="modal_close" v-on:click="isFormActive = !isFormActive">x</div>
     <form action="/admin/send" method="GET" class="form_modal">
      <div class="form_true" v-show="!isSend">true</div>
      <h3 class="form_model_zag it" v-text="formText"></h3>
      @csrf
      <input type="tel" name="phone" v-model="phone" class="form_modal_item it" placeholder="Телефон" v-show="isSend">
      <input type="submit" class="btn_modal_form it" v-on:click.prevent="fetch" v-show="isSend">
     </form>
  </div>
 
	@include("components.header")
	 @yield("contnet")
	@include("components.footer")

 </div>
 
 
<script src="js/app.js"></script>
 
</body>
</html>

 