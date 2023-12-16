<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

 

        <script>
          document.addEventListener("DOMContentLoaded", function() {
              document.querySelectorAll('a[href="#"]').forEach(function(element) {
                  element.addEventListener('click', function(event) {
                      event.preventDefault();
                  });
              });
          });
        </script>


        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>

    <body class="font-sans antialiased">
    <div class="grid grid-cols-12">
      
    <!-- INICIO GRID 1  - MENU  -->
    <div class="hidden lg:block lg:col-span-3 border border-gray-100 pt-2 px-12">
    <!-- botar aqui depois hidden md:block  e ja vai servir perfeito pra tablet, celular-->

      
            <div class="pt-1">
              <a href="#" class="hover:bg-gray-200 flex w-10 rounded-full p-2 ">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class=" r-18jsvk2 r-4qtqp9 r-yyyyoo r-16y2uox r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-lrsllp"><g><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></g></svg>
              </a>
            </div>
      
              <div class="flex mt-5 ">
                <a href="#" class="flex p-2 hover:bg-gray-200 hover:rounded-full">
                <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M12 1.696L.622 8.807l1.06 1.696L3 9.679V19.5C3 20.881 4.119 22 5.5 22h13c1.381 0 2.5-1.119 2.5-2.5V9.679l1.318.824 1.06-1.696L12 1.696zM12 16.5c-1.933 0-3.5-1.567-3.5-3.5s1.567-3.5 3.5-3.5 3.5 1.567 3.5 3.5-1.567 3.5-3.5 3.5z"></path></g></svg>
                <div class="text-xl mx-3">Home</div> 
                </a>
              </div>
      
      
              <div class="flex">
                <a href="#" class="flex p-2 hover:bg-gray-200 hover:rounded-full">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M10.25 3.75c-3.59 0-6.5 2.91-6.5 6.5s2.91 6.5 6.5 6.5c1.795 0 3.419-.726 4.596-1.904 1.178-1.177 1.904-2.801 1.904-4.596 0-3.59-2.91-6.5-6.5-6.5zm-8.5 6.5c0-4.694 3.806-8.5 8.5-8.5s8.5 3.806 8.5 8.5c0 1.986-.682 3.815-1.824 5.262l4.781 4.781-1.414 1.414-4.781-4.781c-1.447 1.142-3.276 1.824-5.262 1.824-4.694 0-8.5-3.806-8.5-8.5z"></path></g></svg>
                  <div class="text-xl mx-3">Explore</div> 
                </a>
              </div>
      
              <div class="flex">
                <a href="#" class="flex p-2 hover:bg-gray-200 hover:rounded-full">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M19.993 9.042C19.48 5.017 16.054 2 11.996 2s-7.49 3.021-7.999 7.051L2.866 18H7.1c.463 2.282 2.481 4 4.9 4s4.437-1.718 4.9-4h4.236l-1.143-8.958zM12 20c-1.306 0-2.417-.835-2.829-2h5.658c-.412 1.165-1.523 2-2.829 2zm-6.866-4l.847-6.698C6.364 6.272 8.941 4 11.996 4s5.627 2.268 6.013 5.295L18.864 16H5.134z"></path></g></svg>
                  <div class="text-xl mx-3">Notifications</div> 
                </a>
              </div>
      
      
              <div class="flex">
                <a href="#" class="flex p-2 hover:bg-gray-200 hover:rounded-full">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M1.998 5.5c0-1.381 1.119-2.5 2.5-2.5h15c1.381 0 2.5 1.119 2.5 2.5v13c0 1.381-1.119 2.5-2.5 2.5h-15c-1.381 0-2.5-1.119-2.5-2.5v-13zm2.5-.5c-.276 0-.5.224-.5.5v2.764l8 3.638 8-3.636V5.5c0-.276-.224-.5-.5-.5h-15zm15.5 5.463l-8 3.636-8-3.638V18.5c0 .276.224.5.5.5h15c.276 0 .5-.224.5-.5v-8.037z"></path></g></svg>
                  <div class="text-xl mx-3">Messages</div> 
                </a>
              </div>
      
      
              <div class="flex">
                <a href="#" class="flex p-2 hover:bg-gray-200 hover:rounded-full">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M3 4.5C3 3.12 4.12 2 5.5 2h13C19.88 2 21 3.12 21 4.5v15c0 1.38-1.12 2.5-2.5 2.5h-13C4.12 22 3 20.88 3 19.5v-15zM5.5 4c-.28 0-.5.22-.5.5v15c0 .28.22.5.5.5h13c.28 0 .5-.22.5-.5v-15c0-.28-.22-.5-.5-.5h-13zM16 10H8V8h8v2zm-8 2h8v2H8v-2z"></path></g></svg>
                  <div class="text-xl mx-3">Lists</div> 
                </a>
              </div>
      
      
              <div class="flex">
                <a href="#" class="flex p-2 hover:bg-gray-200 hover:rounded-full">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M7.501 19.917L7.471 21H.472l.029-1.027c.184-6.618 3.736-8.977 7-8.977.963 0 1.95.212 2.87.672-.444.478-.851 1.03-1.212 1.656-.507-.204-1.054-.329-1.658-.329-2.767 0-4.57 2.223-4.938 6.004H7.56c-.023.302-.05.599-.059.917zm15.998.056L23.528 21H9.472l.029-1.027c.184-6.618 3.736-8.977 7-8.977s6.816 2.358 7 8.977zM21.437 19c-.367-3.781-2.17-6.004-4.938-6.004s-4.57 2.223-4.938 6.004h9.875zm-4.938-9c-.799 0-1.527-.279-2.116-.73-.836-.64-1.384-1.638-1.384-2.77 0-1.93 1.567-3.5 3.5-3.5s3.5 1.57 3.5 3.5c0 1.132-.548 2.13-1.384 2.77-.589.451-1.317.73-2.116.73zm-1.5-3.5c0 .827.673 1.5 1.5 1.5s1.5-.673 1.5-1.5-.673-1.5-1.5-1.5-1.5.673-1.5 1.5zM7.5 3C9.433 3 11 4.57 11 6.5S9.433 10 7.5 10 4 8.43 4 6.5 5.567 3 7.5 3zm0 2C6.673 5 6 5.673 6 6.5S6.673 8 7.5 8 9 7.327 9 6.5 8.327 5 7.5 5z"></path></g></svg>
                  <div class="text-xl mx-3">Communities</div> 
                </a>
              </div>
      
              <div class="flex">
                <a href="#" class="flex p-2 hover:bg-gray-200 hover:rounded-full">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></g></svg>
                  <div class="text-xl mx-3">Premium</div> 
                </a>
              </div>
      
      
              <div class="flex">
                <a href="#" class="flex p-2 hover:bg-gray-200 hover:rounded-full">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M5.651 19h12.698c-.337-1.8-1.023-3.21-1.945-4.19C15.318 13.65 13.838 13 12 13s-3.317.65-4.404 1.81c-.922.98-1.608 2.39-1.945 4.19zm.486-5.56C7.627 11.85 9.648 11 12 11s4.373.85 5.863 2.44c1.477 1.58 2.366 3.8 2.632 6.46l.11 1.1H3.395l.11-1.1c.266-2.66 1.155-4.88 2.632-6.46zM12 4c-1.105 0-2 .9-2 2s.895 2 2 2 2-.9 2-2-.895-2-2-2zM8 6c0-2.21 1.791-4 4-4s4 1.79 4 4-1.791 4-4 4-4-1.79-4-4z"></path></g></svg>
                  <div class="text-xl mx-3">Profile</div> 
                </a>
              </div>
      
              <div class="flex">
                <a href="#" class="flex p-2 hover:bg-gray-200 hover:rounded-full">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"><g><path d="M3.75 12c0-4.56 3.69-8.25 8.25-8.25s8.25 3.69 8.25 8.25-3.69 8.25-8.25 8.25S3.75 16.56 3.75 12zM12 1.75C6.34 1.75 1.75 6.34 1.75 12S6.34 22.25 12 22.25 22.25 17.66 22.25 12 17.66 1.75 12 1.75zm-4.75 11.5c.69 0 1.25-.56 1.25-1.25s-.56-1.25-1.25-1.25S6 11.31 6 12s.56 1.25 1.25 1.25zm9.5 0c.69 0 1.25-.56 1.25-1.25s-.56-1.25-1.25-1.25-1.25.56-1.25 1.25.56 1.25 1.25 1.25zM13.25 12c0 .69-.56 1.25-1.25 1.25s-1.25-.56-1.25-1.25.56-1.25 1.25-1.25 1.25.56 1.25 1.25z"></path></g></svg>
                  <div class="text-xl mx-3">More</div> 
                </a>
              </div>
      
      
              <div class="mt-4">
                <button class="flex p-2 bg-blue-500 text-xl text-white rounded-full px-20 py-3">Post</button>
              </div>
      
              <livewire:change-photo />

           
    </div>
        <!-- FIM DA GRID 1  MENU -->
      
          
          <!-- INICIO GRID 2 - FEED  -->
          <div class="col-span-12 lg:col-span-5 border border-gray-100 pb-12">

          <livewire:show-tweets-two/>
      
          </div>
          <!-- INICIO GRID 3 - PREMIUM  -->
      
          <div class="hidden lg:block col-span-4 border border-gray-100 ">
      
            <div class="px-10 py-2">
              <div>
                <input type="text" placeholder="Search" class="px-4 py-2 rounded-full bg-gray-200 w-full focus:bg-white">
              </div>
      
              <div class="bg-gray-100 rounded-lg font-bold my-4 p-4 space-y-3">
                <h2 class=" text-xl">Subscribe to premium</h2>
                <p class="">Subscribe to unlock new features and if eligible, receive a share of ads revenue.</p>
                <button class="bg-black text-white px-4 py-1 rounded-full">Subscribe</button>
              </div>
      
      
              <div class="bg-gray-100 rounded-xl my-4">
                <h2 class="font-bold  text-xl p-4">What's happening</h2>
      
                <a href="#" class="hover:bg-gray-200 flex" wire:click.prevent>
                <div class="p-4">
                  <p class=" text-sm text-gray-600">Event - LIVE</p>
                  <p class="font-bold ">[SDC23] Official Keynote</p>
                </div>
                </a>
                
                
                <a href="#" class="hover:bg-gray-200 flex " wire:click.prevent>
                  <div class="p-4">
                  <p class=" text-sm text-gray-600">Politcs . Trending</p>
                  <p class="font-bold ">Execução</p>
                  <p class="text-sm text-gray-600">34.7K posts</p>
                </div>
                </a>
                
                <a href="#" class="hover:bg-gray-200 flex " wire:click.prevent>
                <div class="p-4">
                  <p class="text-sm text-gray-600">Entertainment . Trending</p>
                  <p class="font-bold ">Sulista</p>
                  <p class="text-sm text-gray-600">17.7K posts</p>
                </div>
                </a>
      
                <a href="#" class="hover:bg-gray-200 flex " wire:click.prevent>
                <div class="p-4">
                  <p class="text-sm text-gray-600">Unscripted reality . Trending</p>
                  <p class="font-bold ">Shannon</p>
                  <p class="text-sm text-gray-600">15.4K posts</p>
                </div>
                </a>
      
      
                <a href="#" class="hover:bg-gray-200 flex rounded-xl">
                  <div class="p-4">
                    <p class="text-blue-500">Show more</p>
                  </div>
                </a>
      
               
              </div>
      
              <div class="bg-gray-100 rounded-xl ">
                <h2 class="font-bold  text-xl p-4">Who to follow</h2>
      
        <!-- user bill gates who to follow  -->
              <a href="#" class="hover:bg-gray-200 flex" wire:click.prevent>
              <div class="p-4 w-full flex items-center">
                    <img alt="usuario" src="https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png" class="rounded-full w-8 h-8 ">
      
                    <div class=" flex w-full">
                      <div class="px-2">
                        <div class="font-bold">Bill Gates</div>
                        <div class="text-gray-500">@billgates</div>
                      </div>
                    </div>
      
                    <div class="text-end">
                      <button class="font-bold bg-black text-white px-4 py-1 rounded-full">
                          Follow
                      </button>
                    </div>
                  
              </div>
            </a>
      
              <a href="#" class="hover:bg-gray-200 flex" wire:click.prevent>
                <div class="p-4 w-full flex items-center">
                          <img alt="usuario" src="https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png" class="rounded-full w-8 h-8 ">
      
                          <div class=" flex w-full">
                            <div class="px-2">
                              <div class="font-bold">Paulo Coelho</div>
                              <div class="text-gray-500">@paulocoelho</div>
                            </div>
                          </div>
      
                          <div class="text-end">
                            <button class="font-bold bg-black text-white px-4 py-1 rounded-full">
                                Follow
                            </button>
                          </div>
                        
                  </div>
                </a>
      



              <a href="#" class="hover:bg-gray-200 flex" wire:click.prevent>
                <div class="p-4 w-full flex items-center">
                          <img alt="usuario" src="https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png" class="rounded-full w-8 h-8 ">
      
                          <div class=" flex w-full">
                            <div class="px-2">
                              <div class="font-bold">Marcio Freitas</div>
                              <div class="text-gray-500">@marciof</div>
                            </div>
                          </div>
      
                          <div class="text-end">
                            <button class="font-bold bg-black text-white px-4 py-1 rounded-full">
                                Follow
                            </button>
                          </div>
                        
                </div>
              </a>
      
      
              <a href="#" class="hover:bg-gray-200 flex rounded-xl" wire:click.prevent>
                <div class="p-4 text-blue-500">
                  Show more
                </div>
              </a>
                    
           </div>
      
                
              <div class="text-xs space-x-3 mt-4 p-2">
                <a href="#" class="hover:underline">Terms of Service</a>
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Cookie Policy</a>
                <a href="#" class="hover:underline">Accessibility</a>
                <a href="#" class="hover:underline">Ads info</a>
                <a href="#" class="hover:underline">More</a>
                © 2023 X Corp.
      
              </div>
              
              
               
              </div>
      
      
              
      
            </div>
      
          </div>
          <!-- FIM GRID 3 - PREMIUM  -->
        </div>

       

        @livewireScripts

        
      </body>
</html>
