@extends('base.base')

@section('content')

        <div class="bg-white dark:bg-slate-800">
            <header class="absolute inset-x-0 top-0 z-50">
              <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                  <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                  </a>
                </div>
                <div class="flex lg:hidden">
                  <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                  </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="dark:text-white text-sm font-semibold leading-6 text-gray-900">Tailwindcss</a>
                    <a href="#" class="dark:text-white text-sm font-semibold leading-6 text-gray-900">WFD</a>
                    <a href="#" class="dark:text-white text-sm font-semibold leading-6 text-gray-900">Class Activity</a>
                    <a href="#" class="dark:text-white text-sm font-semibold leading-6 text-gray-900">Assignment</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">

                    <a href="#" id="tombol-mode" onclick="mode()" class="dark:text-white text-sm font-semibold leading-6 text-gray-900 pe-5">Dark Mode</a>
                    {{-- <a href="#" class="dark:text-white text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a> --}}
                </div>
              </nav>
            </header>
          
            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
                <div class="mx-auto w-2xl py-32 sm:py-48 lg:pt-22 lg:pb-14">
                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div class="dark:text-white relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        Kunjungi situs tailwindcss.com <a href="https://tailwindcss.com" target="_blank" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                    </div>
                    </div>
                    <div class="text-center">
                        <h1 class="dark:text-white text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Web Framework and Deployment</h1>
                        <p class="dark:text-white mt-6 text-lg leading-8 text-gray-600">Latihan WFD membuat view menggunakan tailwindcss</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                            <a href="#" class="dark:text-white text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
                <div class="lg:columns-3 mt-5 px-2 pb-48">
                    <div class="break-before-column px-4 bg-white dark:bg-slate-800 px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
                        <div>
                            <span class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><!-- ... --></svg>
                            </span>
                        </div>
                        <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Menggunakan Tailwindcss</h3>
                        <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                        Teks paragraf contoh untuk menggunakan tailwindcss
                        </p>
                        <br>
                        <button class="py-2 px-5 bg-violet-500 text-white font-semibold rounded-full shadow-md hover:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75">
                            Simpan
                        </button>
                    </div>
                </div>
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
            </div>
        </div>
@endsection

@section('script')
<script>
    function mode()
    {
        element = document.getElementById('html');
        if(document.getElementById('tombol-mode').innerHTML == "Dark Mode")
        {
            document.getElementById('tombol-mode').innerHTML = 'Light Mode';
            element.classList.add("dark");
        }
        else
        {
            document.getElementById('tombol-mode').innerHTML = 'Dark Mode';
            element.classList.remove("dark");
        }
    }
</script>
@endsection