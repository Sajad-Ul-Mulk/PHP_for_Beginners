<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>

         <form method="post" action="register">
             @csrf

             <div class="mb-6">
                 <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="name"
                 >
                     Name
                 </label>

                 <input class="border border-gray-400 p-2 w-full rounded-xl"
                        type="text"
                        name="name"
                        id="name"
                        value="{{old('name')}}"
                        required
                 >
                 @error('name')
                    <div class="text-red-400 text-sm">{{'*'.$message}}</div>
                 @enderror

             </div>

             <div class="mb-6">
                 <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="username"
                 >
                    Username
                 </label>

                 <input class="border border-gray-400 p-2 w-full rounded-xl"
                        type="text"
                        name="username"
                        id="username"
                        value="{{old('username')}}"
                        required
                 >
                 @error('username')
                 <div class="text-red-400 text-sm">{{$message}}</div>
                 @enderror
             </div>

             <div class="mb-6">
                 <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="email"
                 >
                     Email
                 </label>

                 <input class="border border-gray-400 p-2 w-full rounded-xl"
                        type="email"
                        name="email"
                        id="email"
                        value="{{old('email')}}"
                        required
                 >
                 @error('email')
                 <div class="text-red-400 text-sm">{{$message}}</div>
                 @enderror
             </div>

             <div class="mb-6">
                 <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="password"
                 >
                     Password
                 </label>

                 <input class="border border-gray-400 p-2 w-full rounded-xl"
                        type="password"
                        name="password"
                        id="password"
                        required
                 >
                 @error('password')
                 <div class="text-red-400 text-sm">{{$message}}</div>
                 @enderror
             </div>


             <div class="mb-6">
                 <button type="submit"
                         class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                 >
                     Submit
                 </button>
             </div>
         </form>
     </main>

    </section>


</x-layout>
