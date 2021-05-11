@extends('layouts.pfront')

@section('content')
 <div class="container">
  <div class="row">
   <div class="col-md-8 mx-auto">
       <h1>Myプロフィール</h1>
     @if (!is_null($posts))
      <div class ="form-group row">
          <label class="col-md-2">氏名</label>
          <div class="col-md-10">
            <p type="text" class="form-control" name="name">{{ str_limit($posts->name, 60) }}</p>
          </div>
         </div>
         <div class ="form-group row">
          <label class="col-md-2">性別</label>
          <div class="col-md-10">
            <p type="text" class="form-control" name="gender">{{ str_limit($posts->body, 60) }}</p>
          </div>
         </div>
          <div class ="form-group row">
          <label class="col-md-2">趣味</label>
          <div class="col-md-10">
            <p type="text" class="form-control" name="hobby">{{ str_limit($posts->body, 60) }}</p>
          </div>
         </div>
         <div class ="form-group row">
         <label class="col-md-2">自己紹介</label>
         <div class="col-md-10">
          　<textarea class="form-control" name="introduction">{{ str_limit($posts->body, 150) }}</textarea>
         </div>
         </div>
         @endif
         <div class ="row">
           <div class="posts col-md-8 mx-auto mt-3">
          </div>  
        </div>
     </div>
   </div>
 </div>
@endsection