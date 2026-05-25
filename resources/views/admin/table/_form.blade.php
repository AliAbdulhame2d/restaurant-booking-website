<div class="max-w-sm mx-auto space-y-4">
      <div class="sm:col-span-6">
        <label for="table_number" class="block text-sm font-medium text-gray-700"> Table Number </label>
        <div class="mt-1">
          <input type="text" id="table_number"  name="table_number" value="{{old('table_number', $table->table_number ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('table_number')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>
   
      <div class="sm:col-span-6">
        <label for="capacity" class="block text-sm font-medium text-gray-700"> Capacity </label>
        <div class="mt-1">
          <input type="text" id="capacity"  name="capacity" value="{{old('capacity', $table->capacity ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('capacity')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      <div class="sm:col-span-6">
        <label for="location" class="block text-sm font-medium text-gray-700"> Location </label>
        <div class="mt-1">
          <input type="text" id="location"  name="location" value="{{old('location', $table->location ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('location')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>
 
      <div class="flex sm:col-span-6">
         <div class=" mt-1 mx-auto">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        
            {{isset($table) ? 'Update':'Add'}}       
          
          </button>
        </div>
      </div>

</div>