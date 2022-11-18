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
        <h1> Edit announcement </h1>
        <form action="{{route('announcement.update',$annonce->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 

            <div>
                <label for="category">Type :</label>
            </div>
            <div >
                <select id="category"  name="category" style="height: 48px; width: 100%; background-color: #F5F6FA;
                border-radius: 8px;">
                
                <option value="principale" selected>{{$annonce->status}}</option>
                <option value="principale">principale</option>
                <option value="normal" selected>normal</option>


                  </select>
            </div>
           
            
            <div>
                <label for="name">Name :</label>
            </div>
            <div >
                <input type="text" name="name" value="{{$annonce->name}}" id="name">
            </div>

            

            <div>
                <label for="picture">Picture  : </label>
            </div>
            <div >
                <input type="file" name="pictureAD" id="picture" placeholder="" required>
            </div>

            <div>
                <label for="picture">Expierd date  : </label>
            </div>
            <div >
                <input type="date" name="date" id="picture" value="{{$annonce->updated_at}}">
            </div>

            <div>
                <label for="description">Description  : </label>
            </div>
            <div >
                <textarea name="description" id="description"  rows="10">{{$annonce->description}}</textarea>
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