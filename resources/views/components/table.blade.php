@props(['headers', 'columns', 'rows', 'baseRoute'])

<div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
  <table class="w-full text-left table-auto min-w-max">
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
                    <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                        <!--to take one value from Database you need $row->$column. example:$row->id, $row->price,.. -->
                        {{$column}}
                    </p>
                </td>
            @endforeach

                <td class="p-4 border-b border-blue-gray-50">
                    <a href="{{route('admin.'.$baseRoute.'.edit', $row)}}" class="inline-block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                        Edit
                    </a>

                </td>
        </tr>
        @endforeach
        
    </tbody>
  </table>
</div>