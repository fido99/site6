@extends("layouts.adminApp")

@section("contnet")
  <div class="admin_top_panel_text">
   <h1>Панель администрирования сайта</h1>
  </div>
   
  <div class="wrapper">
   <div class="pants_zag">
    <h2>Растения:</h2>

    @foreach ($plants as $item)
     <p style="text-align: left">{{ $item->name }} <a href="<?php echo route('plantsDelete', ['id' => $item->id]) ?>">Удалить</a></p>
    @endforeach
   </div>
   <form action="<?php echo route('edit') ?>" method="POST"  class="form_wrapper" enctype="multipart/form-data">
   	@csrf
    
    <div class="form_item_wrapper">
   	 <h2>title:</h2>
     <input type="text" name="title" class="form_item" value="<?php echo $title ?>">
    </div>
    
    <div class="form_item_wrapper">
   	 <h2>email:</h2>
     <input type="text" name="email" class="form_item" value="<?php echo $email ?>">
    </div>

    <div class="form_item_wrapper">
   	 <h2>logo_url:</h2>
     <input type="file" name="logo_url" class="form_item" value="<?php echo $logo_url ?>">
    </div>
    
    <div class="slider_btn_wrapper">
      <a href="<?php echo route("editSlider") ?>" class="btn_slider">редактировать слайдер</a>
    </div>

    <div class="form_item_wrapper">
   	 <h2>footer text:</h2>
     <textarea name="footer_text" class="form_item text_block" value="">{{ $footer_text }}</textarea>
    </div>
    <input type="submit" value="Сохранить" class="btn">

   </form>
  </div>

<script>
  bkLib.onDomLoaded(nicEditors.allTextAreas);

 
</script>

@endsection