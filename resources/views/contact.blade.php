@extends("layouts.layout")
@section("title","Contact")
@section("content")
{{-- enviando mensaje flash de la sesion --}}
   <h1> Contact </h1>
  
   @include("partials.session-status")
            {{--action: Ruta a donde quiero que procese mi formulario--}}
<form method="POST" action="{{route("ContactPost")}}">
   @csrf {{--al agregar esto, decimos a laravel que el formulario es seguro, sino lo ponemos laravel nos protege de ataques xss
                        (ataques de suplantacion de identidad)--}}
<input name="name" placeholder="Nombre..." value="{{old('name')}}"> <br>
      {!!$errors->first('name','<small>:message</small><br>')!!} 


<input type="text" name="email" placeholder="Email..." value="{{old('email')}}"> <br>
      {!!$errors->first('email','<small>:message</small><br>')!!}


<input name="subject" placeholder="Asunto..." value="{{old('subject')}}"> <br>
      {!!$errors->first('subject','<small>:message</small><br>')!!} 
      {{--<input name="enviar" type="submit" value="Enviar">--}}

<textarea name="content" placeholder="Mensaje..." >{{old('content')}}</textarea> <br>
      {!!$errors->first('content','<small>:message</small><br>')!!} 
      <button> Enviar </button>
   </form>  
   
      
@endsection

