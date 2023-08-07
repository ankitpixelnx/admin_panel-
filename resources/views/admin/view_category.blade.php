<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.style');

  </head>
  <body>
    
        <div class="container-scroller"> 
  @include('admin.sidebar');
      
     @include('admin.header');
  
      <div class="main-panel">
      <div class="content-wrapper">
       
      @if(session()->has('message'))
      <div class="alert alert-success">
      <button type="button" class="close"data-dismiss="alert"aria-hidden="true">x
      </button>
      {{session()->get('message')}}
      </div>
@endif

      <div class="div_center">
       <h2 class="h2_font">Add Category</h2>
       <form action="{{url('/add_category')}}" method="post">
         
       @csrf
       <input class="input_color" name="category_name" type="text"palceholder="write category name">
       <input type="submit"class ="btn btn-primary"name="submit"value="Add Category">
       </form>
        </div>  
        <table class="center">
      <tr>
        <td>Category Name</td>
        <td>Action</td>
      </tr>
      @foreach($data as  $data)
     <tr>
       <td>{{ $data->category_name }}</td>
       <td><a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a></td>   
     </tr>
     @endforeach
        </table>
      </div>
       </div>
    @include('admin.script');
  </body>
</html>