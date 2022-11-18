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
        <h1> Edit Product </h1>
        <form action="{{route('Articles.update',$articles->id)}}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            @method('PUT')
            <div>
                <label for="category">category :</label>
            </div>
            <div >
                <select id="category"  name="category" style="height: 48px; width: 100%; background-color: #F5F6FA;
                border-radius: 8px;">
                

                <option value="{{$articles->categorie_id}}" selected>{{$articles->name}}</option>

                @foreach ($categories as $categorie)

                  <option value="{{$categorie->id}}" >{{$categorie->name}}</option>
                    
                @endforeach

                
                  </select>
            </div>
            
            <div>
                <label for="name">Name :</label>
            </div>
            <div >
                <input type="text" name="name" value="{{$articles->title}}" id="name">
            </div>

            <div>
                <label for="model">model :</label>
            </div>
            <div >
                <input type="text" name="model" value="{{$articles->model_number}}" id="model">
            </div>

            <div>
                <label for="name">Link :</label>
            </div>
            <div >
                <input type="text" name="link" value="{{$articles->lien}}" id="link">
            </div>

            <div>
                <label for="Price">Price : </label>
            </div>
            <div >
                <input  type="number" name="price" id="price" value="{{$articles->price}}">
            </div>

            <div>
                <label for="promotion">Promotion : </label>
            </div>
            <div >
                <input  type="number" name="promotion" id="promotion" value="{{$articles->promotion}}">
            </div>

           
           
           
           
            <div>
                <label for="picture">Picture  : </label>
            </div>
            <div >
                <input type="file" name="picture" id="picture" placeholder="" required>
            </div>

            <div>
                <label for="picture">Seconde Picture  : </label>
            </div>
            <div >
                <input type="file" name="picture2" id="picture2">
            </div>

            <div>
                <label for="picture">third Picture  : </label>
            </div>
            <div >
                <input type="file" name="picture3" id="picture3">
            </div>


            <div>
                <label for="description">Description  : </label>
            </div>
            <div >
                <textarea name="description" id="description"  rows="10">{{$articles->texte}}</textarea>
            </div>

            <div>
                <label for="advantage">more advantage  : </label>
            </div>
            <div >
                <textarea name="advantage" id="advantage"  rows="10" >{{$articles->description}}</textarea>
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