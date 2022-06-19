
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> Categories  <a class="btn btn-info" href="category-create">New category</a></h2>
        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S. No.</th>
        <th>Title</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
    
        <tr>
          <td>{{$loop->index}}</td>
          <td>{{$category->title}}</td>
          <td>
              <a href="/category-edit/{{$category->id}}" class="btn btn-sm btn-info">Edit</a>
              <a href="/category-delete/{{$category->id}}" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>

       
      
   


          
      @endforeach
     
   </tbody>
  </table>

  <div class="d-flex justify-content-center">
    {!! $categories->links() !!}
  </div>
  
</div>

</body>
</html>

