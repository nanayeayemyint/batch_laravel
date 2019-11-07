@extends('template')
@section('content')
 <div class="container">
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <h1 class="my-4">Page Heading
          <small>Category Items</small>
        </h1>
        <!-- Blog Post -->

          <table class="table table-bordered" cellpadding="10"  cellspacing="0">
            <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
             @php
             $i=1; 
            @endphp
            @foreach($categories as $row)
            <tr>
              <td>{{$i++}}</td>  
              <td>{{$row->name}}</td>
              <td>
                <a href="{{route('category.edit',$row->id)}}"class="btn btn-success">Edit</a>
               </td>
               <td>
                 <form method="post" action="{{route('category.destroy',$row->id)}}">
                   @csrf
                   @method('DELETE')
                   <input type="submit" class="btn btn-danger" value="Delete">
                 </form>
                  @endforeach
               </td>
           </tr>
           
          </tbody>
          </table>
        </div>
        </div>
        
      
    <!-- /.row -->
  </div>
 @endsection
