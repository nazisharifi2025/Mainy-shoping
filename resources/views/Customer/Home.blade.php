<html>
    <heade>
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </heade>
    <body class="h-screen w-full overflow-y-scroll">
        @if ($Customers->count()>0)
            <div class="w-11/12 mx-auto flex flex-col justify-center items-center">
            <h1 class="text-4xl font-bold text-center">All Customer</h1>
            <table class="border border-collapse w-full">
                <tr>
                    <th class="py-2 px-4 border">Id</th>
                    <th class="py-2 px-4 border">Name</th>
                    <th class="py-2 px-4 border">LastName</th>
                    <th class="py-2 px-4 border">Email</th>
                    <th class="py-2 px-4 border">Profile Pictar</th>
                </tr>
                @foreach ($Customers as $Customer)
                     <tr>
                        <td class="border px-4 py-1">{{ $Customer->id }}</td>
                        <td class="border px-4 py-1">{{ $Customer->name }}</td>
                        <td class="border px-4 py-1">{{ $Customer->lastName }}</td>
                        <td class="border px-4 py-1">{{ $Customer->email }}</td>
                        <td class="border px-4 py-1 text-center">
                            <img class="h-14 w-14 rounded-full mx-auto" src="storage/{{  $Customer->img_url }}">
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        @else
        <h1 class="text-center text-4xl font-bold">No Customer Currently Exists</h1>
        @endif
    </body>
</html>