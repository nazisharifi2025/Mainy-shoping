<html>
    <heade>
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </heade>
    <body class="h-screen w-full overflow-y-scroll flex flex-col justify-center items-center gap-4 ">
      <form action="{{ URL('Product/create') }}" enctype="multipart/form-data" method="post" class="w-8/12 bg-white  p-6 mx-auto flex flex-col gap-4">
         <h1 class="text-4xl font-bold text-center font-serif">ADD A Product</h1> 
        @csrf
        <div class="flex space-x-2">
        <input placeholder="Product Name"  class="py-2 px-6 w-full border outline-none rounded-md" type="text" name="name" />
        <input placeholder="Price"  class="py-2 px-6 w-full border outline-none rounded-md" type="number" name="price" />
        <input placeholder="Quantity"  class="py-2 px-6 w-full border outline-none rounded-md" type="number" name="quantity" />
        </div>
        <div class="flex space-x-2">
        <input placeholder="Maid-in" class="py-2 px-6 w-full border outline-none rounded-md"  name="madeIn">
        <input  class="py-2 px-6 w-full border outline-none rounded-md" type="file" accept="image/*" name="img" />
       </div>
        <textarea class="h-32 w-full border outline-none rounded-md" name="des" placeholder="Description about Product" ></textarea>
        <button class="py-2 px-9 w-fit mx-auto bg-blue-300 rounded-md  font-serif text-xl shadow-md shadow-gray-400 text-white">Save</button>
      </form>
    </body>
</html>