<header-component v-bind:url="{{ json_encode( $logo ) }}" mail="{{ $email }}" v-on:enlarge-text="isFormActive = !isFormActive">
  <slider-component  v-bind:data="{{ json_encode($slider) }}"></slider-component>
</header-component>
 