<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#00bf63",
                        },
                    },
                },
            };
        </script>
        <title>Opportunity Hub| Find job opportunities</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4 bg-stone-900 h-20">

            <a href="/">
                <img class="w-24 h-20" src="{{asset('images/OPPORTUNITY.png')}}" alt="" class="logo"/>
            </a>

           <ul class="flex space-x-6 mr-6 text-lg">

                @auth

                <li>
                    <a href="/">
               
                        <button class="hover:text-laravel mx-auto lg:mx-0  hover:underline  gradient text-laravel font-bold rounded-full my-6 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                         Home
                        </button>
                  </a>
            
                    
                </li>

                <li>
                    <a
                href="/opportunities/about">
                
                <button class="hover:text-laravel mx-auto lg:mx-0 hover:underline  gradient text-laravel font-bold rounded-full my-6 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                
                  About Us
                </button>
                  </a>
            
                </li>

                
                <li>
                    <a href="/opportunities/reviews">
               
                <button class="hover:text-laravel mx-auto lg:mx-0 hover:underline  gradient text-laravel font-bold rounded-full my-6 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  Reviews
                </button>
                  </a>
             
                </li>
                
                <li>
                    <a href="/opportunities/manage">
              
                <button class="hover:text-laravel mx-auto lg:mx-0  hover:underline  gradient text-laravel font-bold rounded-full my-6 py-2 px-3  shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <i class="fa-solid fa-gear"></i>
                Manage Opportunities
                </button>
                  </a>
            
                </li>
                
                
                </li> 

               <li class="text-laravel">
                <form class="inline" method="POST" action="/logout">
                @csrf
                <button type="submit" class="hover:text-laravel mx-auto lg:mx-0 hover:underline  gradient  font-bold rounded-full my-6 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <i class="fa-solid fa-power-off"></i>Logout
                </button>
                </form>
               </li>

               <li>
                <span class="text-laravel mx-auto lg:mx-0 font-bold text-sm my-6 py-2 px-3 block">
                 Welcome {{auth()->user()->name}}
                 <i class="fa-solid fa-user "></i>
                </span>
                
             </li>

             @else

                <li>
                    <a
                href="/">
                
                <button class="hover:text-laravel mx-auto lg:mx-0  hover:underline  gradient text-laravel font-bold rounded-full my-6 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                
                    Home
                </button>
                  </a>
            
                    
                </li>

                <li>
                    <a
                href="/opportunities/about">
             
                <button class="hover:text-laravel mx-auto lg:mx-0 hover:underline  gradient text-laravel font-bold rounded-full my-6 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
               
                  About Us
                </button>
                  </a>
            
                </li>

                
                <li>
                    <a href="/opportunities/reviews">
                
                <button class="hover:text-laravel mx-auto lg:mx-0 hover:underline  gradient text-laravel font-bold rounded-full my-6 py-2 px-3 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Reviews
                </button>
                  </a>
            
                </li>
                
                
                @endauth
            </ul>
        </nav> 
       

        <main>
            {{$slot}}
        </main>

        {{-- footer --}}
         <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-black h-20 mt-24 opacity-90 md:justify-center"
    >
        <p class="ml-2"> &copy; OpportunitiesHub2023</p>
   
        <div class=" ml-36 mr-28">
        <i class="fa-brands fa-square-instagram" ></i>
        <i class="fa-brands fa-github" ></i>
        <i class="fa-brands fa-square-facebook" ></i>
        <i class="fa-brands fa-square-twitter" ></i>
        </div>

        <div>
            <p>Contact Us: <i class="fa-solid fa-envelope"></i>opportunitieshub@gmail.com or <i class="fa-solid fa-phone"></i> 0712345678</p>
        </div>
        
     </footer> 

     {{-- flash message --}}
      <x-flash-message/>

    </body>

</html>