<div class="max-w-sm mx-auto space-y-4">

      <div class="sm:col-span-6">
        <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
        <div class="mt-1">
          <input type="text" id="name"  name="name" value="{{old('name', $menu->name ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('name')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      <div class="sm:col-span-6">
        <label for="price" class="block text-sm font-medium text-gray-700"> Price </label>
        <div class="mt-1">
          <input type="text" id="price" name="price" value="{{old('price', $menu->price ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('price')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      <div class="sm:col-span-6">
        <label for="category_id" class="block text-sm font-medium text-gray-700"> Category </label>
        <div class="mt-1">
          
          <select name="category_id" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
              
            @foreach ($categories as $category)
              <option value="{{$category->id}}" {{isset($menu) && ($category->id == $menu->category_id) ? 'selected' : '' }}>{{$category->name}}</option>
            @endforeach

          </select>
        
          @error('category_id')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      <div class="sm:col-span-6">
        <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
        <div class="mt-1">
          <input type="file" id="image" wire:model="newImage" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('image')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>
          
      <div class="sm:col-span-6">
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <div class="mt-1">
          <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{old('description', $menu->description ?? '')}}</textarea>
          
          @error('description')
            <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>
          
      <div class="flex sm:col-span-6">
          <div class=" mt-1 mx-auto">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        
            {{isset($menu) ? 'Update':'Add'}}       
          
          </button>
        </div>
      </div>

</div>