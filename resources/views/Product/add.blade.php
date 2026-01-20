<html>
    <heade>
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </heade>
    <body class="h-screen w-full overflow-y-scroll flex flex-col gap-4 ">
        <h1 class="text-4xl font-bold text-center font-serif">ADD A Product</h1> 
      <form action="{{ URL('') }}" enctype="multipart/form-data" method="post" class="w-5/12 bg-white shadow-xl shadow-gray-400 p-6 mx-auto flex flex-col gap-4">
        @csrf
        <input placeholder="Product Name"  class="py-2 px-6 w-full border-b shadow-gray-300 shadow-md bg-gray-100 outline-none rounded-md" type="text" name="name" />
        <input placeholder="Price"  class="py-2 px-6 w-full border-b shadow-gray-300 shadow-md bg-gray-100 outline-none rounded-md" type="text" name="Price" />
        <input placeholder="Quantity"  class="py-2 px-6 w-full border-b shadow-gray-300 shadow-md bg-gray-100 outline-none rounded-md" type="email" name="quantity" />
        <input placeholder="Maid-in" class="py-2 px-6 w-full border-b shadow-gray-300 shadow-md bg-gray-100 outline-none rounded-md"  name="maidIn">
        <input  class="py-2 px-6 w-full border-b shadow-gray-300 shadow-md bg-gray-100 outline-none rounded-md" type="file" name=img" />
        <textarea name="des" placeholder="Description about Product" ></textarea>
        <button class="py-2 px-9 w-fit mx-auto bg-black font-serif text-xl shadow-md shadow-gray-400 text-white">Save</button>
      </form>
    </body>
</html>