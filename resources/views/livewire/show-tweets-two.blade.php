<div>
        <div class="text-xl font-bold p-2">Home</div>
          <div class="grid grid-cols-12">
  
              <a href="#" class="col-span-6  text-center font-bold hover:bg-gray-200 py-4">
                <span class="border-b-4 py-3 border-blue-500">For you</span>
              </a>
  
              <a href="#" class="col-span-6 text-center font-bold hover:bg-gray-200 py-4">
                <span class="border-b-4 py-3 active:border-blue-500">Following</span>
              </a>
          </div> 
  
          <div class="grid grid-cols-12 pl-2 md:pl-2">

            
            <div class="hidden md:block">
                
                <x-assets.profile-photo />

            </div>
            
            <div class="col-span-12 md:col-span-11 pr-6">

                <form method="post" wire:submit.prevent='create'>
                  
                   <input type="text" wire:model.lazy="content" placeholder="type.."
                   class="py-4 border border-transparent  w-full focus:outline-dashed text-lg text-gray-600"
                   style="outline: none;">
            
                    <div class="flex items-center"> 
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="w-4 h-4 fill-blue-400"><g><path d="M12 1.75C6.34 1.75 1.75 6.34 1.75 12S6.34 22.25 12 22.25 22.25 17.66 22.25 12 17.66 1.75 12 1.75zm-.25 10.48L10.5 17.5l-2-1.5v-3.5L7.5 9 5.03 7.59c1.42-2.24 3.89-3.75 6.72-3.84L11 6l-2 .5L8.5 9l5 1.5-1.75 1.73zM17 14v-3l-1.5-3 2.88-1.23c1.17 1.42 1.87 3.24 1.87 5.23 0 1.3-.3 2.52-.83 3.61L17 14z"></path></g></svg>
            
                    <div class="text-blue-400 font-bold px-1">Everyone can reply</div>
                    </div>
                        
                        
                    <div class="border-b text-end px-6 ">
                        <button type="submit"
                        class="mb-1 bg-blue-500 py-2 px-5 rounded-full text-white hover:bg-blue-600 "
                        >
                        Post</button>
                    </div>

                    <div class="text-red-400 mb-6">
                      @error('content')
                        {{$message}}
                      @enderror
                    </div>
                                   
                </form>
                              
            </div>
            
          </div>

          <div>
            @foreach ($tweets as $tweet)
        
            <a href="#" class="hover:bg-gray-100 flex">

        
              <div class="px-2  mt-8 text-sm sm:text-base">
                
                  <div class="flex gap-x-2">
                      <div class="shrink-0">
                        @if($tweet->user->profile_photo_path)
                          <img src="{{ $tweet->user->profile_photo_path }}" alt="pic"  class="rounded-full w-10 h-10">
                        @else
                          <img alt="usuario" src="{{url('images/profile_normal.png')}}"  class="rounded-full w-10 h-10">
                        @endif
                      </div>
                      
                      <div>
                        <div class="flex gap-x-4">
                          <div class="font-bold">{{$tweet->user->name}}</div>
                          <div class="text-gray-400 hidden sm:block">{{$tweet->user->email}}</div>
                        </div>

                        <div class="text-gray-500 sm:hidden">{{$tweet->user->email}}</div>
                 
                        <div>
                          {{$tweet->content}}
                        </div>
                      
                                         
                      </div>
                     

                  </div>
                  
                  <div class="px-6 ">
                    <div class="flex px-6 mt-2 ">
                                          
                        <a href="#" class="fill-gray-500 hover:fill-blue-500 "><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M1.751 10c0-4.42 3.584-8 8.005-8h4.366c4.49 0 8.129 3.64 8.129 8.13 0 2.96-1.607 5.68-4.196 7.11l-8.054 4.46v-3.69h-.067c-4.49.1-8.183-3.51-8.183-8.01zm8.005-6c-3.317 0-6.005 2.69-6.005 6 0 3.37 2.77 6.08 6.138 6.01l.351-.01h1.761v2.3l5.087-2.81c1.951-1.08 3.163-3.13 3.163-5.36 0-3.39-2.744-6.13-6.129-6.13H9.756z"></path></g></svg></a>
                                          
                        <a href="#" class="fill-gray-500 hover:fill-green-500 px-8 md:px-16"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M4.5 3.88l4.432 4.14-1.364 1.46L5.5 7.55V16c0 1.1.896 2 2 2H13v2H7.5c-2.209 0-4-1.79-4-4V7.55L1.432 9.48.068 8.02 4.5 3.88zM16.5 6H11V4h5.5c2.209 0 4 1.79 4 4v8.45l2.068-1.93 1.364 1.46-4.432 4.14-4.432-4.14 1.364-1.46 2.068 1.93V8c0-1.1-.896-2-2-2z"></path></g></svg></a>
                                          
                        {{-- @if(auth()->user()) --}}
                        {{-- @if($tweet->likes())
                        sim = {{$tweet->likes_qtd}}
                        @else
                        nao
                        @endif --}}

                        {{-- @if($tweet->likes) --}}
                        
                        <a href="#" 
                        wire:click.prevent="like({{$tweet->id}}, {{auth()->user()->id}})"
                        class="fill-gray-500 hover:fill-red-500"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M16.697 5.5c-1.222-.06-2.679.51-3.89 2.16l-.805 1.09-.806-1.09C9.984 6.01 8.526 5.44 7.304 5.5c-1.243.07-2.349.78-2.91 1.91-.552 1.12-.633 2.78.479 4.82 1.074 1.97 3.257 4.27 7.129 6.61 3.87-2.34 6.052-4.64 7.126-6.61 1.111-2.04 1.03-3.7.477-4.82-.561-1.13-1.666-1.84-2.908-1.91zm4.187 7.69c-1.351 2.48-4.001 5.12-8.379 7.67l-.503.3-.504-.3c-4.379-2.55-7.029-5.19-8.382-7.67-1.36-2.5-1.41-4.86-.514-6.67.887-1.79 2.647-2.91 4.601-3.01 1.651-.09 3.368.56 4.798 2.01 1.429-1.45 3.146-2.1 4.796-2.01 1.954.1 3.714 1.22 4.601 3.01.896 1.81.846 4.17-.514 6.67z"></path></g></svg>
                        </a>

                        {{-- @else --}}
                        <a href="#" 
                        wire:click.prevent="unlike({{$tweet->id}}, {{auth()->user()->id}})"
                        class="fill-yellow-500 hover:fill-red-500"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M16.697 5.5c-1.222-.06-2.679.51-3.89 2.16l-.805 1.09-.806-1.09C9.984 6.01 8.526 5.44 7.304 5.5c-1.243.07-2.349.78-2.91 1.91-.552 1.12-.633 2.78.479 4.82 1.074 1.97 3.257 4.27 7.129 6.61 3.87-2.34 6.052-4.64 7.126-6.61 1.111-2.04 1.03-3.7.477-4.82-.561-1.13-1.666-1.84-2.908-1.91zm4.187 7.69c-1.351 2.48-4.001 5.12-8.379 7.67l-.503.3-.504-.3c-4.379-2.55-7.029-5.19-8.382-7.67-1.36-2.5-1.41-4.86-.514-6.67.887-1.79 2.647-2.91 4.601-3.01 1.651-.09 3.368.56 4.798 2.01 1.429-1.45 3.146-2.1 4.796-2.01 1.954.1 3.714 1.22 4.601 3.01.896 1.81.846 4.17-.514 6.67z"></path></g></svg>
                        </a>
                        {{-- @endif --}}
                        
                                         
                        <span class="text-gray-500 text-sm">{{$tweet->likes->count()}}</span>
                                                                                        
                        <a href="#" class="fill-gray-500 hover:fill-blue-500 px-8 md:px-16"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M8.75 21V3h2v18h-2zM18 21V8.5h2V21h-2zM4 21l.004-10h2L6 21H4zm9.248 0v-7h2v7h-2z"></path></g></svg></a>
                           
                        <a href="#" class="fill-gray-500 hover:fill-blue-500"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M12 2.59l5.7 5.7-1.41 1.42L13 6.41V16h-2V6.41l-3.3 3.3-1.41-1.42L12 2.59zM21 15l-.02 3.51c0 1.38-1.12 2.49-2.5 2.49H5.5C4.11 21 3 19.88 3 18.5V15h2v3.5c0 .28.22.5.5.5h12.98c.28 0 .5-.22.5-.5L19 15h2z"></path></g></svg></a>
                   
                    </div>
                    
                  </div>
                                                              
              </div>
            </a>
            @endforeach

        </div>
  
          <a href="#" class="hover:bg-gray-100 flex py-4">
  
          <div class="px-2">
            <div class="flex">
              <div class="shrink-0">
                <img alt="usuario" src="https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png" class="rounded-full w-10 h-10 ">
              </div>
              <div class="px-2 text-sm sm:text-base"> 
               
                <span class="font-bold">Terra Brasil Noticiamos</span> <span class="text-gray-400">@terrabrasil - 3h</span>
              
                <div>
                  Câmara aprova cota para filmes brasileiros nos cinemas até 2033
                </div>

                <div class="flex shrink-0">
                  <img alt="foto" draggable="true" src="https://static.poder360.com.br/2021/09/geoffrey-moffett-TFRezw7pQwI-unsplash-1-848x477.jpg" class="rounded-t-lg">
                </div>

                <div class="text-gray-600  p-2 rounded-b-xl">
                  <div>terrabrasil.com.br</div>
                  <div>Câmara aprova cota para filmes brasileiros nos cinemas até 2033</div>
                </div>               
              </div>
            </div>


            <div class="px-12 flex">                 
              <a href="#" class="fill-gray-500 hover:fill-blue-500"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M1.751 10c0-4.42 3.584-8 8.005-8h4.366c4.49 0 8.129 3.64 8.129 8.13 0 2.96-1.607 5.68-4.196 7.11l-8.054 4.46v-3.69h-.067c-4.49.1-8.183-3.51-8.183-8.01zm8.005-6c-3.317 0-6.005 2.69-6.005 6 0 3.37 2.77 6.08 6.138 6.01l.351-.01h1.761v2.3l5.087-2.81c1.951-1.08 3.163-3.13 3.163-5.36 0-3.39-2.744-6.13-6.129-6.13H9.756z"></path></g></svg></a>
              <a href="#" class="fill-gray-500 hover:fill-green-500 px-8 md:px-16"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M4.5 3.88l4.432 4.14-1.364 1.46L5.5 7.55V16c0 1.1.896 2 2 2H13v2H7.5c-2.209 0-4-1.79-4-4V7.55L1.432 9.48.068 8.02 4.5 3.88zM16.5 6H11V4h5.5c2.209 0 4 1.79 4 4v8.45l2.068-1.93 1.364 1.46-4.432 4.14-4.432-4.14 1.364-1.46 2.068 1.93V8c0-1.1-.896-2-2-2z"></path></g></svg></a>
              <a href="#" class="fill-gray-500 hover:fill-red-500"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M16.697 5.5c-1.222-.06-2.679.51-3.89 2.16l-.805 1.09-.806-1.09C9.984 6.01 8.526 5.44 7.304 5.5c-1.243.07-2.349.78-2.91 1.91-.552 1.12-.633 2.78.479 4.82 1.074 1.97 3.257 4.27 7.129 6.61 3.87-2.34 6.052-4.64 7.126-6.61 1.111-2.04 1.03-3.7.477-4.82-.561-1.13-1.666-1.84-2.908-1.91zm4.187 7.69c-1.351 2.48-4.001 5.12-8.379 7.67l-.503.3-.504-.3c-4.379-2.55-7.029-5.19-8.382-7.67-1.36-2.5-1.41-4.86-.514-6.67.887-1.79 2.647-2.91 4.601-3.01 1.651-.09 3.368.56 4.798 2.01 1.429-1.45 3.146-2.1 4.796-2.01 1.954.1 3.714 1.22 4.601 3.01.896 1.81.846 4.17-.514 6.67z"></path></g></svg></a>
              <a href="#" class="fill-gray-500 hover:fill-blue-500 px-8 md:px-16"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M8.75 21V3h2v18h-2zM18 21V8.5h2V21h-2zM4 21l.004-10h2L6 21H4zm9.248 0v-7h2v7h-2z"></path></g></svg></a>
              <a href="#" class="fill-gray-500 hover:fill-blue-500"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M12 2.59l5.7 5.7-1.41 1.42L13 6.41V16h-2V6.41l-3.3 3.3-1.41-1.42L12 2.59zM21 15l-.02 3.51c0 1.38-1.12 2.49-2.5 2.49H5.5C4.11 21 3 19.88 3 18.5V15h2v3.5c0 .28.22.5.5.5h12.98c.28 0 .5-.22.5-.5L19 15h2z"></path></g></svg></a>
            </div>
  
          </div>
          </a>

          {{-- mais um  pra ser elon musk--}}

          <a href="#" class="hover:bg-gray-100 flex py-4">
  
            <div class="px-2">
              <div class="flex">
                <div class="shrink-0">
                  <img alt="usuario" src="https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png" class="rounded-full w-10 h-10 ">
                </div>
                <div class="px-2 text-sm sm:text-base"> 
                 
                  <span class="font-bold">Elon Musk</span> <span class="text-gray-400">@elonmusk - 2h</span>
                
                  <div>
                    If you want to scare the heck out of people this Halloween …
                  </div>
  
                  <div class="flex shrink-0">
                    <img alt="Image" draggable="true" src="https://pbs.twimg.com/media/F7hwdbUWQAAK2Rr?format=jpg&amp;name=small" class="rounded-lg">
                  </div>
                             
                </div>
              </div>
              
              <div class="px-12 flex">                 
                <a href="#" class="fill-gray-500 hover:fill-blue-500"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M1.751 10c0-4.42 3.584-8 8.005-8h4.366c4.49 0 8.129 3.64 8.129 8.13 0 2.96-1.607 5.68-4.196 7.11l-8.054 4.46v-3.69h-.067c-4.49.1-8.183-3.51-8.183-8.01zm8.005-6c-3.317 0-6.005 2.69-6.005 6 0 3.37 2.77 6.08 6.138 6.01l.351-.01h1.761v2.3l5.087-2.81c1.951-1.08 3.163-3.13 3.163-5.36 0-3.39-2.744-6.13-6.129-6.13H9.756z"></path></g></svg></a>
                <a href="#" class="fill-gray-500 hover:fill-green-500 px-8 md:px-16"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M4.5 3.88l4.432 4.14-1.364 1.46L5.5 7.55V16c0 1.1.896 2 2 2H13v2H7.5c-2.209 0-4-1.79-4-4V7.55L1.432 9.48.068 8.02 4.5 3.88zM16.5 6H11V4h5.5c2.209 0 4 1.79 4 4v8.45l2.068-1.93 1.364 1.46-4.432 4.14-4.432-4.14 1.364-1.46 2.068 1.93V8c0-1.1-.896-2-2-2z"></path></g></svg></a>
                <a href="#" class="fill-gray-500 hover:fill-red-500"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M16.697 5.5c-1.222-.06-2.679.51-3.89 2.16l-.805 1.09-.806-1.09C9.984 6.01 8.526 5.44 7.304 5.5c-1.243.07-2.349.78-2.91 1.91-.552 1.12-.633 2.78.479 4.82 1.074 1.97 3.257 4.27 7.129 6.61 3.87-2.34 6.052-4.64 7.126-6.61 1.111-2.04 1.03-3.7.477-4.82-.561-1.13-1.666-1.84-2.908-1.91zm4.187 7.69c-1.351 2.48-4.001 5.12-8.379 7.67l-.503.3-.504-.3c-4.379-2.55-7.029-5.19-8.382-7.67-1.36-2.5-1.41-4.86-.514-6.67.887-1.79 2.647-2.91 4.601-3.01 1.651-.09 3.368.56 4.798 2.01 1.429-1.45 3.146-2.1 4.796-2.01 1.954.1 3.714 1.22 4.601 3.01.896 1.81.846 4.17-.514 6.67z"></path></g></svg></a>
                <a href="#" class="fill-gray-500 hover:fill-blue-500 px-8 md:px-16"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M8.75 21V3h2v18h-2zM18 21V8.5h2V21h-2zM4 21l.004-10h2L6 21H4zm9.248 0v-7h2v7h-2z"></path></g></svg></a>
                <a href="#" class="fill-gray-500 hover:fill-blue-500"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 h-5 "><g><path d="M12 2.59l5.7 5.7-1.41 1.42L13 6.41V16h-2V6.41l-3.3 3.3-1.41-1.42L12 2.59zM21 15l-.02 3.51c0 1.38-1.12 2.49-2.5 2.49H5.5C4.11 21 3 19.88 3 18.5V15h2v3.5c0 .28.22.5.5.5h12.98c.28 0 .5-.22.5-.5L19 15h2z"></path></g></svg></a>
              </div>
    
            </div>
            </a>
          
      <!-- FIM GRID 2 - FEED  -->

</div>
