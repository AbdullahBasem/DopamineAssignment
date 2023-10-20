@include('common.head')
<body>
@include('common.nav')
<section id="hero_section">
    <div>
        <img class="md:h-auto md:max-w-full my-4 xl:max-w-full"
             id="hero_first_image"
             src="{{asset('assets/images/serious-male-inspector-with-notepad-meeting-discussing-papers-with-young-entrepreneurs@2x.png')}}"
             alt="image description" width="952px" height="748px"
             style="position:absolute; overflow: auto; z-index: 10">
    </div>
    <div class="h-auto max-w-full  md:top-64 md:right-24 flex items-center justify-center"
         id="secound_hero_image"
         style="background-image:url('{{asset('assets/images/Group 27@2x.png')}}');">
        <div class="justify-start md:w-[635px] md:h-[500px] ml-[120px] mt-[300px]">
            <h2 class="large_title">We Bring</h2>
            <h2 class="large_title">Success To You</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <button
                class="bg-primary hover:bg-primary text-black font-bold py-2 px-4 w-[178px] h-[50px] mt-6 shadow-md">
                GET A QUOTE
            </button>
        </div>
    </div>
</section>
{{--hero section end--}}

{{--start services section--}}
<section class="md:absolute md:top-[976px] md:left-[80px]" id="services_section">
    <div>
        <h3 class="md:absolute section_background_text md:top-[-60px] md:left-[160px]">Services</h3>
        <h3 class="large_title">
            How Can
        </h3>
        <h3 class="secondary_title">
            We Serve You?
        </h3>
        <p class="md:w-[635px] md:mt-6 lorem_text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        </p>
    </div>
    <div class="mt-6 grid md:grid-cols-4 sm:grid-cols-1 gap-4">
        <div class="md:w-[428px] md:h-[422px] bg-[#D8D8D81A] ">
            <div class="flex flex-col items-center pb-10 px-[39px]">
                <img class="w-24 h-24 mb-3 mt-[80px] " src="{{asset('assets/images/office-building.png')}}"
                     alt="Bonnie image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white mt-[19px]">Corporate/Commercial</h5>
                <span class="text-sm text-[#191919]  mt-[17px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</span>
                <div class="flex mt-4 space-x-3 md:mt-6">
                    <a href="#"
                       class="inline-flex items-center px-4 py-2 text-sm font-medium text-center  bg-primary  rounded-lg md:w-[48px] md:h-[48px]">
                        <img width="32px" src="{{asset('assets/images/expand_more_black_24dp@2x.png')}}" alt=""> </a>
                </div>
            </div>
        </div>
        <div class="md:w-[428px] md:h-[422px] bg-[#D8D8D81A] ">
            <div class="flex flex-col items-center pb-10 px-[39px]">
                <img class="w-24 h-24 mb-3 mt-[80px]" src="{{asset('assets/images/money-bag@2x.png')}}"
                     alt="Bonnie image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white mt-[19px]">Corporate/Commercial</h5>
                <span class="text-sm text-[#191919]  mt-[17px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</span>
                <div class="flex mt-4 space-x-3 md:mt-6">
                    <a href="#"
                       class="inline-flex items-center px-4 py-2 text-sm font-medium text-center  bg-primary  rounded-lg md:w-[48px] md:h-[48px]">
                        <img width="32px" src="{{asset('assets/images/expand_more_black_24dp@2x.png')}}" alt=""> </a>
                </div>
            </div>
        </div>
        <div class="md:w-[428px] md:h-[422px] bg-[#D8D8D81A] ">
            <div class="flex flex-col items-center pb-10 px-[39px]">
                <img class="w-24 h-24 mb-3 mt-[80px]" src="{{asset('assets/images/agreement@2x.png')}}"
                     alt="Bonnie image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white mt-[19px]">Corporate/Commercial</h5>
                <span class="text-sm text-[#191919]  mt-[17px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</span>
                <div class="flex mt-4 space-x-3 md:mt-6">
                    <a href="#"
                       class="inline-flex items-center px-4 py-2 text-sm font-medium text-center  bg-primary  rounded-lg md:w-[48px] md:h-[48px]">
                        <img width="32px" src="{{asset('assets/images/expand_more_black_24dp@2x.png')}}" alt=""> </a>
                </div>
            </div>
        </div>
        <div class="md:w-[428px] md:h-[422px] bg-[#D8D8D81A] ">
            <div class="flex flex-col items-center pb-10 px-[39px]">
                <img class="w-24 h-24 mb-3 mt-[80px]" src="{{asset('assets/images/global-online@2x.png')}}"
                     alt="Bonnie image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white mt-[19px]">Corporate/Commercial</h5>
                <span class="text-sm text-[#191919]  mt-[17px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</span>
                <div class="flex mt-4 space-x-3 md:mt-6">
                    <a href="#"
                       class="inline-flex items-center px-4 py-2 text-sm font-medium text-center  bg-primary  rounded-lg md:w-[48px] md:h-[48px]">
                        <img width="32px" src="{{asset('assets/images/expand_more_black_24dp@2x.png')}}" alt=""> </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{--end services section--}}
{{--start area of experince section --}}
<section class="md:absolute md:top-[1826px] w-full" id="about_section">
    <div class="md:absolute md:mt-24 md:w-[1248px] md:h-[921px] bg-[#fff] z-20 bg-[#FBFBFB] text-center items-center"
         style="    text-align: -webkit-center;">

        <div class="md:w-[531px] sm:w-[270px] mt-6">
            <h3 class="mt-24 large_title" style="text-align: justify;">
                Areas Of Expertise
            </h3>
            <p class="mt-6 md:justify-left lorem_text  sm:justify-center" style="text-align: justify;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            </p>
        </div>
        <div
            class="grid md:grid-cols-2 sm:md:grid-cols-1 w-[760px] md:absolute sm:relative md:mt-24 md:left-[300px] sm:mb-4">
            <div class="grid grid-cols-2 w-[390px] mt-16">
                <div>
                    <h4 class="flex flex-col justify-between p-4 leading-normal">
                        International Divorce Cases
                    </h4>
                    <img src="{{asset('assets/images/arrow-lo-right-lg@2x.png')}}" alt="">
                </div>

                <div class="bg-secondary w-[132px] h-[110px] py-[15px] px-[26px] justify-end">
                    <img class="w-[80px] h-[80px] " src="{{asset('assets/images/divorce@2x.png')}}" alt="">
                </div>
            </div>
            <div class="grid grid-cols-2 w-[390px] mt-16">
                <div>
                    <h4 class="flex flex-col justify-between p-4 leading-normal text-sm">
                        International Divorce Cases
                    </h4>
                    <img src="{{asset('assets/images/arrow-lo-right-lg@2x.png')}}" alt="">
                </div>

                <div class="bg-secondary w-[132px] h-[110px] py-[15px] px-[26px] justify-end">
                    <img class="w-[80px] h-[80px] " src="{{asset('assets/images/divorce@2x.png')}}" alt="">
                </div>
            </div>
            <div class="grid grid-cols-2 w-[390px] mt-16">
                <div>
                    <h4 class="flex flex-col justify-between p-4 leading-normal text-sm">
                        International Divorce Cases
                    </h4>
                    <img src="{{asset('assets/images/arrow-lo-right-lg@2x.png')}}" alt="">
                </div>

                <div class="bg-secondary w-[132px] h-[110px] py-[15px] px-[26px] justify-end">
                    <img class="w-[80px] h-[80px] " src="{{asset('assets/images/divorce@2x.png')}}" alt="">
                </div>
            </div>
            <div class="grid grid-cols-2 w-[390px] mt-16">
                <div>
                    <h4 class="flex flex-col justify-between p-4 leading-normal text-sm">
                        International Divorce Cases
                    </h4>
                    <img src="{{asset('assets/images/arrow-lo-right-lg@2x.png')}}" alt="">
                </div>

                <div class="bg-secondary w-[132px] h-[110px] py-[15px] px-[26px] justify-end">
                    <img class="w-[80px] h-[80px] " src="{{asset('assets/images/divorce@2x.png')}}" alt="">
                </div>
            </div>
        </div>


    </div>
    <img class="md:absolute sm:relative md:w-[950px] md:h-[1009px]  md:right-0 z-10 large_image"
         src="{{asset('assets/images/business-men-sitting-lawyers-s-desk-people-signing-important-documents (1)@2x.png')}}"
         alt="">
</section>
{{--end area of experince section--}}

{{--start contact us section--}}
<section class="md:absolute sm:relative md:top-[2800px] md:w-full z-30" id="contact_us_section">
    <div class="h-[813px] w-full"
         style="background-image:url('{{asset('assets/images/Group 28@2x.png')}}') ; background-size: 100%;">
        <div class="grid md:grid-cols-2 sm:grid-cols-1">
            <div class="md:w-full sm:w-[50%] md:h-[531px] md:ml-[120px] md:mt-[300px] ">
                <h2 class="large_title">We Are Here For You</h2>
                <p class="md:w-[531px] lorem_text mobile_text_continer">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>

                <ul class="mt-6 space-y-4 text-left sm:p-8 ">
                    <li class="flex items-center space-x-3">
                        <img class="flex-shrink-0 w-[48px] h-[48px]" src="{{asset('assets/images/Group 15@2x.png')}}"
                             alt="">
                        <span class="small_span">+971 4 000 0000</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <img class="flex-shrink-0 w-[48px] h-[48px]" src="{{asset('assets/images/Group 15@2x.png')}}"
                             alt="">
                        <span class="small_span">info@domainname.com</span>
                    </li>
                    <li class="flex items-center space-x-3 w-[466px]">
                        <img class="flex-shrink-0 w-[48px] h-[48px]" src="{{asset('assets/images/Group 15@2x.png')}}"
                             alt="">
                        <span class="small_span" id="lorem_span">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</span>
                    </li>
                </ul>
            </div>
            <div id="contact_us_form"
                 class="md:w-[724px] md:h-[807px] md:mt-[300px] sm:w-[100%] sm:h-[100%] p-16 bg-white border border-gray-200 rounded-[2rem] shadow dark:bg-gray-800 dark:border-gray-700 text-center">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Contact & Reach
                        Us!
                    </h5>
                    @if(session()->get('success_message'))
                        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert" id="successMessage">
                            <div class="flex">
                                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                <div>
                                    <p class="font-bold">{{session()->get('success_message')}}</p>

                                </div>
                            </div>
                        </div>
                    @endif
                </a>
                <form class="mt-16" method="Post" action="{{url('contact_us/submit')}}">
                    @csrf
                    <div class="mb-8 text-left">
                        <input type="text" name="name"
                               class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Your Name">
                        <small class="text-red-500 text-xs italic"> {{$errors->first('name')}}</small>

                    </div>
                    <div class="mb-8 text-left">
                        <input type="email" id="email" name="email"
                               class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Email Address">
                        <small class="text-red-500 text-xs italic"> {{$errors->first('email')}}</small>
                    </div>
                    <div class="mb-8 text-left">
                        <input type="text" name="subject"
                               class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Your Subject">
                        <small class="text-red-500 text-xs italic"> {{$errors->first('subject')}}</small>
                    </div>
                    <div class="mb-8 text-left">
                        <textarea type="text" name="message"
                                  class=" md:w-608px md:h-[269px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder="Enter Your Message">
                        </textarea>
                        <small class="text-red-500 text-xs italic"> {{$errors->first('message')}}</small>
                    </div>
                    <div class="mb-8">
                        <button
                            type="submit"
                            class="bg-primary hover:bg-primary text-black font-bold py-2 px-4 w-[178px] h-[50px] mt-6 shadow-md">
                            SUBMIT
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
{{--end contact us section--}}

{{--start blog section--}}
<section class="md:absolute sm:relative md:top-[4022px] w-full " id="news_section">
    <div class="text-center">
        <h3 class="xl_section_title large_title">
            Latest News & Updates
        </h3>
        <h3 class="md:absolute  md:top-[-140px] items-center m-auto left-0 right-0 section_background_text">
            Blog
        </h3>
        <p class="absolute w-[813px] mt-6 left-0 right-0 m-auto mobile_text_continer lorem_text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        </p>
    </div>
    <div class="grid md:grid-cols-4 sm:grid-cols-1 gap-4 absolute md:left-[160px] mt-32">
        <div>
            <div class="max-w-sm bg-white">
                <a href="#">
                    <img class="rounded-[1rem] md:h-[511px] md:w-[428px] large_image"
                         src="{{asset('assets/images/business-men-sitting-lawyers-s-desk-people-signing-important-documents (1)@2x.png')}}"
                         alt=""/>
                </a>
                <div class="top-0 m-auto text-center">
                    <a href="#"
                       class="mb-8 absolute top-[490px] items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg  ">
                        <img class="w-[32px] h-[32px]" src="{{asset('assets/images/expand_more_black_24dp@2x.png')}}"
                             alt="">
                    </a>
                    <a href="#">
                        <h5 class="mt-16 mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Lorem
                            ipsum dolor sit amet</h5>
                    </a>
                    <p class="w-[352px] mb-3 text-gray-700 text-justify tracking-normal text-xs">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>

        </div>
        <div>
            <div class="max-w-sm bg-white">
                <a href="#">
                    <img class="rounded-[1rem] md:h-[511px] md:w-[428px]"
                         src="{{asset('assets/images/business-men-sitting-lawyers-s-desk-people-signing-important-documents (1)@2x.png')}}"
                         alt=""/>
                </a>
                <div class="top-0 m-auto text-center">
                    <a href="#"
                       class="mb-8 absolute top-[490px] items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg  ">
                        <img class="w-[32px] h-[32px]" src="{{asset('assets/images/expand_more_black_24dp@2x.png')}}"
                             alt="">
                    </a>
                    <a href="#">
                        <h5 class="mt-16 mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Lorem
                            ipsum dolor sit amet</h5>
                    </a>
                    <p class="w-[352px] mb-3 text-gray-700 text-justify tracking-normal text-xs">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
        </div>
        <div>
            <div class="max-w-sm bg-white">
                <a href="#">
                    <img class="rounded-[1rem] md:h-[511px] md:w-[428px]"
                         src="{{asset('assets/images/business-men-sitting-lawyers-s-desk-people-signing-important-documents (1)@2x.png')}}"
                         alt=""/>
                </a>
                <div class="top-0 m-auto text-center">
                    <a href="#"
                       class="mb-8 absolute top-[490px] items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg  ">
                        <img class="w-[32px] h-[32px]" src="{{asset('assets/images/expand_more_black_24dp@2x.png')}}"
                             alt="">
                    </a>
                    <a href="#">
                        <h5 class="mt-16 mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Lorem
                            ipsum dolor sit amet</h5>
                    </a>
                    <p class="w-[352px] mb-3 text-gray-700 text-justify tracking-normal text-xs">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
        </div>
        <div>
            <div class="max-w-sm bg-white">
                <a href="#">
                    <img class="rounded-[1rem] md:h-[511px] md:w-[428px]"
                         src="{{asset('assets/images/business-men-sitting-lawyers-s-desk-people-signing-important-documents (1)@2x.png')}}"
                         alt=""/>
                </a>
                <div class="top-0 m-auto text-center">
                    <a href="#"
                       class="mb-8 absolute top-[490px] items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg  ">
                        <img class="w-[32px] h-[32px]" src="{{asset('assets/images/expand_more_black_24dp@2x.png')}}"
                             alt="">
                    </a>
                    <a href="#">
                        <h5 class="mt-16 mb-4 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Lorem
                            ipsum dolor sit amet</h5>
                    </a>
                    <p class="w-[352px] mb-3 text-gray-700 text-justify tracking-normal text-xs">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{--end blog section--}}

{{--start branches sections--}}
<section id="branches_section" class="md:absolute sm:relative md:top-[5060px] md:w-full">
    <div class="text-center">
        <h3 class="xl_section_title">
            Our Branches
        </h3>
        <h3 class="absolute md:top-[-100px] items-center m-auto left-0 right-0 section_background_text">
            Offices
        </h3>
        <p class="absolute w-[813px] mt-6 left-0 right-0 m-auto">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        </p>
    </div>
    <div class="md:absolute sm:relative grid md:grid-cols-2 sm:grid-cols-1 md:gap-[333px]   md:left-[160px] mt-32">
        <div class="w-[519px]  p-4 bg-white">
            <div class="flow-root">
                <ul role="list" class="">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="{{asset('assets/images/jo-circle-01@2x.png')}}"
                                     alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Jordan
                                </p>
                                <p class="text-xs text-gray-500  dark:text-gray-400">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="{{asset('assets/images/egypt@2x.png')}}"
                                     alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Egypt
                                </p>
                                <p class="text-xs text-gray-500  dark:text-gray-400">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="{{asset('assets/images/azerbaijan@2x.png')}}"
                                     alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Azerbaijan
                                </p>
                                <p class="text-xs text-gray-500  dark:text-gray-400">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="{{asset('assets/images/turkey@2x.png')}}"
                                     alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Turkey
                                </p>
                                <p class="text-xs text-gray-500  dark:text-gray-400">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="{{asset('assets/images/united-kingdom@2x.png')}}"
                                     alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    United Kingdom
                                </p>
                                <p class="text-xs text-gray-500  dark:text-gray-400">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                </p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        <div class="justify-end">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.0085854960976!2d35.86198917628754!3d31.9877827238996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1c914af478f%3A0x89bb810978a66630!2sWard%20Restaurant!5e0!3m2!1sen!2sjo!4v1697575439227!5m2!1sen!2sjo"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
</section>
{{--end branches sections--}}

{{--start footer--}}
@include('common.footer')
{{--end footer--}}
<script>
    setTimeout(function() {
        $('#successMessage').fadeOut('fast');
    }, 4000);
</script>
</body>

