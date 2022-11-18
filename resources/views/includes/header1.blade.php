@section('header1')
<header>

    
   

    <div class="head">
        <div class="logo">
           <a href="/Articles"> <img src="{{ asset('assets/imgs/logo.png') }}" alt=""> </a>
        </div>
        <div class="toggle" id="toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        
    </div>
    <div class="navigation" id="navigation">
            <ul>
                    <li><a href="/Articles" class="homelink">Home</a> </li>
                    <li><a href="/Favorites">Favorite</a> </li>
                    <li><a href="/ALLproducts">Products</a> </li>
                    

                   
            </ul>
           
            <div class="btn">
                {{-- <span class="account">
                    <a onclick="showlist()"> {{(Auth::user()->name)}} <i class="bi bi-chevron-down"></i></a>
                    <div id="profilelist">
                        <ul>
                          
                            <li>
                                <a href="/user/profile">Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" @click.prevent="$root.submit();" method="GET">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </span> --}}


                 <a href="/register"><button>Sign in </button></a>
                <div></div>
                <a href="/login"><button>Log in </button></a> 
            </div>
        </div>  
        
{{--         
        
        <div class="head">
            <div class="logo">
               <a href="/Articles"> <img src="{{ asset('assets/imgs/logo.png') }}" alt=""> </a>
            </div>
            <div class="toggle" id="toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
    
            
        </div>
        <div class="navigation" id="navigation">
                <ul>
                        <li><a href="/Articles" class="homelink">Home</a> </li>
                        <li><a href="/Favorites">Favorite</a> </li>
                        <li><a href="/ALLproducts">Products</a> </li>
                        {{-- <li><a href="/announcement">Annoncement</a> </li> --}}
                        {{-- <li><a href="/Users">Users</a> </li> --}}
    
                       
                {{-- </ul>
               
                <div class="btn">
                    <span class="account">
                        <a onclick="showlist()"> <i class="bi bi-chevron-down"></i></a>
                        <div id="profilelist">
                            <ul>
                              
                                <li>
                                    <a href="/user/profile">Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" = method="GET">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </span> 

                </div>
            </div>    --}}
   
            

            

        
        <script>
            showlist = function(){
            var account = document.getElementById("profilelist");
                account.classList.toggle("active");
        }
        </script>    
</header>

@show