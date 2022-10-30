<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Contact Us</h2>
        <p class="mb-4"></p>
      </header>
  
      <form method="POST" action="{{ route('contact-form.store') }}" enctype="multipart/form-data">
        @csrf
        @method('put')
     
  
        <div class="mb-6">
          <label for="name" class="inline-block text-lg mb-2">Name</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
            placeholder="Enter your name" />
  
          @error('name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

  
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">
            Email
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
            <label for="phone" class="inline-block text-lg mb-2">
             Phone
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phone"   placeholder="Enter your number" />
  
    
            @error('phone')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>

          <div class="mb-6">
            <label for="subject" class="inline-block text-lg mb-2">
             Subject
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="subject"  placeholder="subject" />
  
    
            @error('subject')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>


  
        <div class="mb-6">
          <label for="message" class="inline-block text-lg mb-2">
           Message
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="message" rows="10"
            placeholder="Leave your message"></textarea>
  
          @error('message')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
               Submit
          </button>
  
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>
    </x-card>
  </x-layout>
  