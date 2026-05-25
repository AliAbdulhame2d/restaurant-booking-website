<div class="max-w-sm mx-auto space-y-4">

      <div class="sm:col-span-6">
        <label for="first_name" class="block text-sm font-medium text-gray-700"> First Name </label>
        <div class="mt-1">
          <input type="text" id="first_name"  name="first_name" value="{{old('first_name', $reservation->first_name ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('first_name')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      <div class="sm:col-span-6">
        <label for="last_name" class="block text-sm font-medium text-gray-700"> Last Name </label>
        <div class="mt-1">
          <input type="text" id="last_name"  name="last_name" value="{{old('last_name', $reservation->last_name ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('last_name')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      <div class="sm:col-span-6">
        <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
        <div class="mt-1">
          <input type="email" id="email"  name="email" value="{{old('email', $reservation->email ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('email')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      <div class="sm:col-span-6">
        <label for="phone" class="block text-sm font-medium text-gray-700"> Phone </label>
        <div class="mt-1">
          <input type="tel" id="phone"  name="phone" value="{{old('phone', $reservation->phone ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('phone')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      <div class="sm:col-span-6">
        <label for="reservation_time" class="block text-sm font-medium text-gray-700"> Reservation Time </label>
        <div class="mt-1">
          <input type="datetime-local" id="reservation_time"  name="reservation_time" value="{{old('reservation_time', $reservation->reservation_time ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('reservation_time')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      <div class="sm:col-span-6">
        <label for="status" class="block text-sm font-medium text-gray-700"> Status </label>
        <div class="mt-1">
          
          <select name="status" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
              
            
              <option value="pending" {{isset($reservation) && ('pending' == $reservation->status) ? 'selected' : '' }}>Pending</option>
              <option value="confirmed" {{isset($reservation) && ('confirmed' == $reservation->status) ? 'selected' : '' }}>Confirmed</option>
              <option value="cancelled" {{isset($reservation) && ('cancelled' == $reservation->status) ? 'selected' : '' }}>Cancelled</option>
           

          </select>
        
          @error('status')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      <div class="sm:col-span-6">
        <label for="guest_count" class="block text-sm font-medium text-gray-700">  Guest Count </label>
        <div class="mt-1">
          <input type="number" id="guest_count"  name="guest_count" value="{{old('guest_count', $reservation->guest_count ?? '')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          
          @error('guest_count')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      <div class="sm:col-span-6">
        <label for="table_id" class="block text-sm font-medium text-gray-700"> Table Number </label>
        <div class="mt-1">
          
          <select name="table_id" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
              
            @foreach ($tables as $table)
              <option value="{{$table->id}}" {{isset($table) && ($table->id == $table->table_id) ? 'selected' : '' }}>{{$table->table_number}}</option>
            @endforeach

          </select>
        
          @error('table_id')
          <p class="text-red-500">{{$message}}</p>
          @enderror

        </div>
      </div>

      
          
      <div class="flex sm:col-span-6">
          <div class=" mt-1 mx-auto">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        
            {{isset($reservation) ? 'Update':'Add'}}       
          
          </button>
        </div>
      </div>

</div>