
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
    
    <div class="container pt-5">
        <div class="col-sm-4">
            
                <h2> Edit Category</h2>
                    
                     <form method="POST" action="/category-update/{{$category->id}}">

                        @csrf
                        @method('put')
                          <label for="">Title</label>
                          <input type="text" name="title" class="form-control" value="{{$category->title}}">
                        <button class="btn btn-info mt-4" type="submit"> Update</button>
                    </form>
              
              
        </div>
        
    </div>
    
    </body>
    </html>
    
    