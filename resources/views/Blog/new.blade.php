@extends('base')

@section('title' ,'New Blog')

@section('content')
  
   <form action="" method="post">
   @csrf
   <div class="display-flex items-center">
        <input type="text" name="title" class="input ">
        <textarea type="text" name="content" class=""></textarea>
        <input type="submit" value="Envoyer">
        <div>
            @error('title')
               {{ $message }}
            @enderror
        </div>
    </div>
   </form>
@endsection
    
        
 