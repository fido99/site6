@extends("layouts.adminApp")

@section("contnet")
 <div class="admin_top_panel_text">
   <h1>добавиь слйдер</h1>
 </div>
 <div class="wrapper">
    <div class="form_wrapper_slide">
	  <form action="<?php echo route("create") ?>" method="POST" enctype="multipart/form-data" class="slide_item_form">
	   @csrf
	  <div class="slide_item">
        <h3>Заголовок</h3>
	    <input type="text" name="zag" class="form_item_slide input_text">
	  </div>
      <div class="slide_item">
        <h3>Основной текст:</h3>	  
	    <textarea name="title" class="slide_textarea"></textarea>
	  </div>

      <div class="slide_item">
       <h3>Ссылка:</h3>	  
	   <input type="text" name="link" class="form_item_slide input_text">
	  </div>


      <div class="slide_item">
       <h3>Изображение</h3>
	   <input type="file" name="image">
	  </div>

	   <input type="submit" value="добавить">
	  </form>
  </div>
 </div>
 <script>
  bkLib.onDomLoaded(nicEditors.allTextAreas)
</script>
@endsection