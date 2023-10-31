<div>
         <!-- inicio usuario  -->
         <div class="mt-5 relative" x-data="{open: false}">
            <button @click="open=!open"
                class=" flex rounded-full hover:bg-gray-200 px-3 py-2">
                @if ( $path = auth()->user()->profile_photo_path)
                    <img src="{{ url("{$path}") }}" alt="pic" width="45" class="rounded-full shrink-0">
                    
                @else
                    <img alt="usuario" src="{{url('images/profile_normal.png')}}"  class="rounded-full w-8 h-8">
                @endif
                
                
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
              <a href="#" class="block hover:bg-gray-50 p-2 w-full font-bold " 
              wire:click.prevent="openModalChangePhoto()">Change profile photo</a>
              <a href="#" class="block hover:bg-gray-50 p-2 font-bold"
              wire:click.prevent="logout()">Logout</a>
              
              </div>
            
            

        
          </div>
          <!-- fim usuario  -->

          {{-- src="https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png" --}}
          <x-dialog-modal wire:model.lazy="showModal">
            <x-slot name="title">Edit Profile</x-slot>
            <x-slot name="content">
              <div class="shrink-0 mb-4 w-full">
                @if ( $path = auth()->user()->profile_photo_path)
                    <img src="{{ url("{$path}") }}" alt="pic" class="rounded-full w-60 h-60">
                @else
                    <img alt="usuario" src="{{url('images/profile_normal.png')}}" class="rounded-full">
                @endif
                
              </div>
              
              <form method="post" wire:submit.prevent='storagePhoto()'>

                @if ($photo)
                  Photo Preview:
                  <img src="{{ $photo->temporaryUrl() }}" class="mb-4">
                @endif

                <input type="file" name="photo" id="photo" wire:model='photo'>

                <div class="text-red-500">
                   @error('photo')
                {{$message}}
                @enderror
                </div>
               
            </x-slot>
            <x-slot name="footer">
              <button class="font-bold" type="submit">Save</button>
            </x-slot>

           
          </form>

          
          </x-dialog-modal>
     

          
</div>


{{-- img link https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png  --}}

