<html>
    <heade>
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </heade>
    <body class="h-screen w-full overflow-y-scroll  flex  flex-col gap-9 ">
        <h1 class="text-4xl font-bold text-center font-serif">ADD CUSTOMER</h1> 
      <form action="{{ URL('Customer/Create') }}" enctype="multipart/form-data" method="post" class="w-8/12 mx-auto flex flex-col gap-4">
        @csrf
        <lable class="text-xl font-bold ">
            Name:
        <input  class="py-2 px-6 w-full border outline-none rounded-md" type="text" name="name" />
        </lable>
        <lable class="text-xl font-bold ">
            Last Name:
        <input  class="py-2 px-6 w-full border outline-none rounded-md" type="text" name="lastName" />
        </lable>
        <lable class="text-xl font-bold ">
            Eamil:
        <input  class="py-2 px-6 w-full border outline-none rounded-md" type="email" name="email" />
        </lable>
        <lable class="text-xl font-bold ">
            Gender:
        <select class="py-2 px-6 w-full border outline-none rounded-md"  name="gender">
            <option value="mail">Male</option>
            <option value="female">Female</option>
        </select>
    </lable>
        <lable class="text-xl font-bold ">
        Profile Pictar:
        <input  class="py-2 px-6 w-full border outline-none rounded-md" type="file" name="image" />
        </lable>
        <button class="py-2 px-9 w-fit mx-auto bg-black font-serif text-xl shadow-md shadow-gray-400 text-white">Save</button>
      </form>
    </body>
</html>