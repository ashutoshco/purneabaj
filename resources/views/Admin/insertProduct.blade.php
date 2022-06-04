<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>insertProduct</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href="" class="navbar-brand">Admin</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card mx-auto">
                    <div class="card-body">
                    <form action="{{route('index')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control">
                        @error('title')
                            <p>{{$message}}</p>
                        @enderror
                      
                    </div> 
                     <div class="row">

                     
                    <div class="mb-3 col  ">
                        <label for="">discount_price</label>
                        <input type="text" name="discount_price" class="form-control">
                        
                    </div>
                    <div class="mb-3 col">
                        <label for="">price</label>
                        <input type="text" name="price" class="form-control">                            
                    
                    </div>
                </div>
                    <div class="mb-3">
                        <label for="">Brand</label>
                        <select name="brand_id"  class="form-select">
                            <option value="0">Brand</option>
                            @foreach($brands as $item)
                               <option value="{{$item->id}}">{{$item->brands_title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">category</label>
                        <select name="category_id"  class="form-select">
                            <option value="0">Main Category</option>
                            @foreach($categorys as $item)
                               <option value="{{$item->id}}">{{$item->cat_title}}</option>
                            @endforeach
                        </select>
                              
                       
                    </div>

                    <div class="mb-3">
                        <label for="">description</label>
                        <textarea rows="5" type="text" name="description" class="form-control"></textarea>
                     
                    </div>
                    <div class="mb-3">
                        <label for="">stock </label>
                        <input type="text" name="stock" class="form-control">
                  
                    </div>
                   
                    <div class="mb-3">
                        <label for="">image</label>
                        <input type="file" name="image" class="form-control">
                  
                    </div>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success w-100">
                    </div>
                </form>
                    </div>
                </div>
            </div>
            <div class="col-6"></div>
            </div>
        </div>
    </div>
</body>

</html>