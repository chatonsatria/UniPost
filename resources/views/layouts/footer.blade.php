<section>
    <footer>
        <div class="flex flex-row w-full h-[240px] bg-slate-200 py-6">
            <div class="grid grid-cols-3 w-3/4 h-[240px] m-auto bg-white border shadow-md place-self-center -translate-y-[50px] rounded-md opacity-0" x-intersect="$el.classList.add('animate-fadeInDownCustom1')">

                <div class="flex flex-col p-6">
                    <h1 class="w-full font-sans text-lg">UniPost</h1>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, exercitationem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, placeat?</p>   
                </div>
                <div class="flex flex-col p-6">
                    <h1 class="w-full font-sans text-lg">Get In Touch</h1> 
                    <p  class="mt-3 flex flex-row">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                        </span> 9982 Ohio St. South Gate, CA</p>
                    <p  class="mt-3 flex flex-row">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                        </span> UniPost@mail.com</p>
                    <p  class="mt-3 flex flex-row">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                              </svg>
                        </span> +1 203-238-2398</p>
                </div>
                <div class="flex flex-col p-6">
                    <h1 class="w-full font-sans text-lg">Say Something</h1>
                    <div class="mt-3 bg-white">
                        <form action="#" method="POST">
                            <textarea class="h-[100px] w-full shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('message') }}" name="message" id="message" cols="30" rows="10"></textarea>
                            <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300" type="submit">Send</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</section>