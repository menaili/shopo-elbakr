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
    
   </style>
</head>
<body>
    @include('includes.head')

   <h1>Products</h1>
   
   <div class="container users ">

        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product price</th>
                <th scope="col">Category</th>
                <th scope="col">Edit</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($prds as $prd)
                <tr>
                    
                        
                    <th scope="row">{{$prd->id}}</th>
                    <td>{{$prd->title}}</td>
                    <td>{{$prd->price}} DA </td>
                    <td>{{$prd->category}}</td>
                    <td class="userEditBtn">
                        
                        <a href="{{route('Articles.edit',$prd->id)}}"><button class="bg-primary">Edit </button></a>
                        <form action="{{route('Articles.destroy',$prd->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <a>  <button class="bg-danger">Delete</button></a>

                            {{-- <button type="submit" class="btn btn-outline-danger">Delete</button> --}}
                        </form> 
                        
                    </td>

                    

                </tr>
               @endforeach
            </tbody>
        </table>
   </div>


   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   <script src="{{ asset('assets/js/script.js') }}"></script>  
   <script src="{{ asset('assets/js/script1.js') }}"></script>

</body>