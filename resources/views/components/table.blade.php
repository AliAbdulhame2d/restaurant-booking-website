@props(['headers', 'columns', 'rows', 'baseRoute'])
{{-- class="w-full text-left min-w-max  class="relative flex flex-col w-full h-full overflow-scroll --}}

<div class="overflow-x-auto text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
  <table class="w-full text-left">
    <thead>
      <tr>
        @foreach($headers as $header)
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                {{$header}}
                </p>
            </th>  
        @endforeach
       
        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
          <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70"></p>
        </th>
      </tr>
    </thead>

    <tbody>
      <!--rows: the records in Database-->
     @foreach ($rows as $row)
        <tr>
           <!--columns example: id, price, status, from Database-->
            @foreach($columns as $column)
                <td class="p-4 border-b border-blue-gray-50">
                  @if ($row->image && ($column == 'image'))
                      <img src="{{asset('storage/'.$row->$column)}}" style="height: 100px; width: 100px; min-height: 100px; min-width: 100px; border-radius: 0%; ">
                  
                  @elseif((strpos($column, '_id') !== false))
                  <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                    <!--to take one value from Database you need $row->$column. example:$row->id, $row->price,.. -->
                    {{$row->category->name??''}}
                </p>
                  @else
                      <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                          <!--to take one value from Database you need $row->$column. example:$row->id, $row->price,.. -->
                          {{$row->$column}}
                      </p>   
                  @endif
                    
                </td>
            @endforeach

                <td class="p-4 border-b border-blue-gray-50">
                  <div class="flex items-center">
                    <a href="{{route('admin.'.$baseRoute.'.edit', $row)}}" class="inline-block r-1 p-1.5 bg-green-500 text-white border rounded-md font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                        Edit
                    </a>
                  
                    <form method="POST" action="{{route('admin.'.$baseRoute.'.destroy', $row)}}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="inline-block p-1.5 bg-red-500 text-white border rounded-md font-sans text-sm antialiased font-normal leading-normal ">Delete</button>
                    </form>
                  </div>
                </td>
        </tr>
        @endforeach
        
    </tbody>
  </table>
</div>