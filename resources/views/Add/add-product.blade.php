<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <style>
        .login{
            height: max-content;
            padding-top:40px;
            padding-bottom: 20px;
        }
        ul li a.homelink{
  border-bottom: none;
}
.addlink{
    border-bottom: solid 4px #EF8506;
}
    </style>
</head>
<body>
    @include('includes.head')

   <div class="container login ">
        <h1> Add Product </h1>
        <form action="{{route('Articles.store')}}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div>
                <label for="category">category :</label>
            </div>
            <div >
                <select id="category"  name="category" style="height: 48px; width: 100%; background-color: #F5F6FA;
                border-radius: 8px;">
                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}">{{$categorie->name}}</option>


                @endforeach
                  </select>
            </div>
            @error("category")
                 <small class=" form-text text-danger">{{$message}}</small>
                @enderror
            
            <div>
                <label for="name">Name :</label>
            </div>
            <div >
                <input type="text" name="name" placeholder="Name of your product" id="name">
            </div>
                @error("name")
                 <small class=" form-text text-danger">{{$message}}</small>
                @enderror

            <div>
                <label for="model">model :</label>
            </div>
            <div >
                <input type="text" name="model" placeholder="model of your product" id="model">
            </div>

            <div>
                <label for="name">Link :</label>
            </div>
            <div >
                <input type="text" name="link" placeholder="Link of your product" id="link">
            </div>
            @error("link")
                 <small class=" form-text text-danger">{{$message}}</small>
                @enderror

            <div>
                <label for="Price">Price : </label>
            </div>
            <div >
                <input  type="number" name="price" id="price" placeholder="Price of the product">
            </div>
            @error("price")
                 <small class=" form-text text-danger">{{$message}}</small>
                @enderror

            <div>
                <label for="promotion">Promotion : </label>
            </div>
            <div >
                <input  type="number" name="promotion" id="promotion" placeholder="promotion of the product">
            </div>

            <div>
                <label for="picture">Picture  : </label>
            </div>
            <div >
                <input type="file" name="picture" id="picture" placeholder="" required>
            </div>
            @error("picture")
                 <small class=" form-text text-danger">{{$message}}</small>
                @enderror


            <div>
                <label for="description">Description  : </label>
            </div>
            <div >
                <textarea name="description" id="description"  rows="10"></textarea>
            </div>
            @error("description")
                 <small class=" form-text text-danger">{{$message}}</small>
                @enderror

            <div>
                <label for="advantage">more advantage  : </label>
            </div>
            <div >
                <textarea name="advantage" id="advantage"  rows="10"></textarea>
            </div>

            <div >
                <input class="submit" type="submit" value="Save">
            </div>
        </form>
        
   </div>


   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   <script src="{{ asset('assets/js/script.js') }}"></script>  
   <script src="{{ asset('assets/js/script1.js') }}"></script>

</body>