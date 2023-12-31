<div>
         <!-- inicio usuario  -->
         <div class="mt-5 relative" x-data="{open: false}">
            <button @click="open=!open"
                class=" flex rounded-full hover:bg-gray-200 px-3 py-2">
                <img alt="usuario" src="https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png" class="rounded-full w-8 h-8">
              
              <div class="px-4">
                
              <div class="flex w-36">
                 <div class="font-bold">
                {{auth()->user()->name}}
                </div>  
                
                <div class="absolute flex justify-end w-32 pt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                  </svg>
                </div>
                
              </div>

              <div class="flex">
                <div class="text-gray-600">
                 {{auth()->user()->email}}
                </div>
              </div>
               
            
              </div>
            </button>


            
              <div class="absolute bg-white shadow-md border border-gray-200 
              rounded-xl w-full py-2" x-show="open">
              <a href="#" class="block hover:bg-gray-50 p-2 w-full font-bold ">Change profile photo</a>
              <a href="#" class="block hover:bg-gray-50 p-2 font-bold">Logout</a>
              
              </div>
            
            

        
          </div>
          <!-- fim usuario  -->
     

          
</div>


