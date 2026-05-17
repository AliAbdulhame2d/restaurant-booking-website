<div class="max-w-sm mx-auto space-y-4">
      <div class="sm:col-span-6">
        <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
        <div class="mt-1">
          <input type="text" id="name"  name="name" value="{{old('name', $category->name ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('name')
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
          <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{old('description', $category->description ?? '')}}</textarea>
          
          @error('description')
            <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>
      
      <div class="flex sm:col-span-6">
         <div class=" mt-1 mx-auto">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        
            {{isset($category) ? 'Update':'Add'}}       
          
          </button>
        </div>
      </div>

</div>