<html>
    <heade>
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </heade>
    <body class="h-screen w-full overflow-y-scroll">
        <div class="w-11/12 mx-auto flex flex-col justify-center items-center">
            <h1 class="text-4xl font-bold text-center">All Customer</h1>
            <table class="border border-collapse w-full">
                <tr>
                    <th class="py-2 px-4 border">Id</th>
                    <th class="py-2 px-4 border">Name</th>
                    <th class="py-2 px-4 border">LastName</th>
                    <th class="py-2 px-4 border">Email</th>
                </tr>
                @foreach ($users as $user)
                     <tr>
                        <td class="border px-4 py-1">{{ $user->id }}</td>
                        <td class="border px-4 py-1">{{ $user->name }}</td>
                        <td class="border px-4 py-1">{{ $user->lastName }}</td>
                        <td class="border px-4 py-1">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>