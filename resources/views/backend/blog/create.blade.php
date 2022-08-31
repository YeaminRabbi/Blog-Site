@extends('layouts.backend.master')

@section('content')
<div class="container mt-5">
    <div class="row">
         <div class="col-md-6">
            <h3 class="text-center">Blog Form</h3>
        </div>
    </div>
   <div id="vue-app">
        <blog-form-component></blog-form-component>
   </div>
</div>
@endsection


@section('footer_js')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    
  <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>  
@endsection