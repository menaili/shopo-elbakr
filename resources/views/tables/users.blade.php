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

   <h1>Users</h1>
   <div class="container users ">
        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">User Name</th>
                <th scope="col">User email</th>
                <th scope="col">Joined At</th>
                <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($users as $user)
                <tr>
                    
                        
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td class="userEditBtn">
                      <button type="button" class="btn btn-danger deleteCategoryBtn" value="{{$user->id}}">Delete</button>
                     
                     {{-- modal --}}
                      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <form action="{{ url('deleteUsers/me')}}" method="POST">
                              @csrf

                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Delete this Account</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <input type="hidden" name="deleteme" id="deleteCat">
                              <h5>Are you sure you want to delete this account!</h5>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                    

                </tr>
               @endforeach
            </tbody>
        </table>
   </div>


   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   <script src="{{ asset('assets/js/script.js') }}"></script>  
   <script src="{{ asset('assets/js/script1.js') }}"></script>
   <script src="{{ asset('assets/js/wish.ajax.js') }}"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script>
      $(document).ready(function(){
      $('.deleteCategoryBtn').click(function(e){
          e.preventDefault();

          var delete_btn= $(this).val();
          $('#deleteCat').val(delete_btn);
          $('#deleteModal').modal('show');

      })
  })
   </script>


</body>