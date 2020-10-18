@extends("layouts.adminApp")

@section("contnet")
 <div class="admin_top_panel_text">
   <h1>редактировать слйдер</h1>
 </div>

 <div class="wrapper">

 <div class="form_wrapper_slide">
  @foreach ($items as $item)
    <form action="<?php echo route("updateSlider") ?>" method="POST" style="margin: 60px" enctype="multipart/form-data" class="slide_item_form">
      @csrf 
       <input type="hidden" value="<?php echo $item->id ?>" name="id">

       <h2> <?php echo "Слайд номер: " . $loop->iteration ?></h2>

      <div class="slide_item">
       <h3>Заголовок</h3>
       <input type="text" name="zag" value="<?php echo $item->zag ?>" class="form_item_slide input_text">
      </div>

      <div class="slide_item">
       <h3>Основной текст:</h3>
       <textarea name="title" class="slide_textarea">{{ $item->title }}</textarea>
      </div>

      <div class="slide_item">
       <h3>Ссылка:</h3>
       <input type="text" name="link" value="<?php echo $item->link ?>" class="form_item_slide input_text">
      </div>

      <div class="slide_item">
       <h3>Изображение</h3>
       <input type="file" name="image" value="<?php echo $item->image ?>" class="form_item_slide input_text">
      </div>

      <div class="slide_item">
       <input type="submit" value="сохранить">
       <a href="<?php echo route("delete", ["id" => $item->id]) ?>">Удалить слайд</a>
      </div>
    </form>
     

  @endforeach
 </div>
  <a href="<?php echo route("createSlide") ?>" class="addSlide">Добавить слайд</a>
 </div>
 
 <script>
 	bkLib.onDomLoaded(nicEditors.allTextAreas)
 </script>
@endsection