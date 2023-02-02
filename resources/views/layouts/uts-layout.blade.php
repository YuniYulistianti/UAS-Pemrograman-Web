<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YUNI</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <!-- Header Start -->
    <section class="container mx-auto p-5 font-poppins">
        <div class="flex items-center justify-between">
          <div class="">
          <img src="{{ url('img') }}/Group 35.png" alt="logo" />
          </div>
          <nav class="items-center">
            <ul class="flex flex-row gap-8 font-normal text-[15px]">
              <li>
                <a href="#"><span class="text-[#FF994F] font-semibold">Home</span></a>
              </li>
              <li class="text-[#646464]"><a href="#">Course</a></li>
              <li class="text-[#646464]"><a href="#">Mentors</a></li>
              <li class="text-[#646464]"><a href="#">About Us</a></li>
              <li class="text-[#646464]"><a href="#">Contact</a></li>
            </ul>
          </nav>
          <div class="right-side flex gap-10">
            <div class="flex gap-4 font-semibold text-[12px] items-center">
              <div class="btn-login py-2 px-10 rounded-full text-[#FF994F]">
                <button class="text-[15px]">Log in</button>
              </div>
              <div>
            <button class="button-primary">Registration</button>
            </div>
      </section>
        <section class="w-[1240px] mx-auto">
            <div class="container mx-auto flex items-center font-inter items-center justify-between">
              <div class="w-[700px] items-center">
                <h1 class="font-bold text-[68px] text-[#151F3C]">The Best <span class="text-[#FF994F]">Courses</span> With the Best Mentors</h1>
                <p class="text-[15px] font-thin py-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>
                  <button class="button-primary text-[14px]">Register Now</button>
              </div>
              <div>
                <div class="absolute w-[200px] left-[1160px] bottom-[350px] top-[300px items-stretch z-1">
                <img src="{{ url('img') }}/Group 33.png" alt="" />
              </div>
              <div>
              <div class="absolute w-[400px] bottom-[2500px] left-[675px] righ-[150px] top-[400px] items-stretch z-1">
              <img src="{{ url('img') }}/Group 33.png" alt="" />
                </div>
                <div class="w-[200px] z-10"></div>
                <img src="{{ url('img') }}/image 6.svg" alt="" />
              </div>
            </div>
          </section>
          <Section class="py-14">
        <div class="container mx-auto flex items-center font-inter items-center justify-between">
          <div class="w-[600px] items-center">
            <h1 class="font-bold text-[45px] text-[#151F3C]">Find The Course </h1>
            <h2 class="font-bold text-[45px] text-[#151F3C]">You Want</h2>
          </div>
          <div class="flex">
          </div>
          <p class=" text-slate-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>  
        </div>
      </Section>
      <div class="grid grid-cols-3 gap-1 py-10 mx-20">
        <div class="w-[400px] relative">
          <p class="absolute text-[#FF994F] bg-[#fff] text-[14px] rounded-full py-2 px-4 mx-4 my-4"><span class="font-bold">$25/</span>Course</p>
          <div class="absolute flex bg-[#00000066] text-white font-light rounded-full py-2 px-6 right-14 top-4 items-center gap-1 text-[14px]"><img src="{{ url('img') }}/Star 1.svg" alt="" />(2.1k)</div>
          <div class="absolute flex gap-4 items-center text-white top-[160px] left-4 text-[15px] w-[25px]"><img src="{{ url('img') }}/Ellipse 61.svg" alt="" />Raphael</div>
          <p class="absolute top-44 left-14 text-white text-[14px] font-light">teacher</p>
          <h2 class="absolute font-bold top-32 left-4 text-white text-[18px]">Basic programming (HTML, CSS)</h2>
          <img src="{{ url('img') }}/Rectangle 11.png" alt="" />
          <div class="absolute flex gap-2 text-white top-[180px] right-16 pl-64 text-[13px] items-center"><img src="{{ url('img') }}/Polygon 1.png" alt="" /><img src="Polygon 1.png" alt="" />20 video</div>
        </div>
        <!-- galeri 1 -->
        <div class="w-[400px] relative">
          <p class="absolute text-[#FF994F] bg-[#fff] text-[14px] rounded-full py-2 px-4 mx-4 my-4"><span class="font-bold">$25/</span>Course</p>
          <div class="absolute flex bg-[#00000066] text-white font-light rounded-full py-2 px-6 right-14 top-4 items-center gap-1 text-[14px]"><img src="{{ url('img') }}/Star 1.svg" alt="" />(3.5k)</div>
          <div class="absolute flex gap-4 items-center text-white top-[160px] left-4 text-[15px] w-[25px]"><img src="{{ url('img') }}/microna.png" alt="" />Microna</div>
          <p class="absolute top-44 left-14 text-white text-[14px] font-light">teacher</p>
          <h2 class="absolute font-bold top-32 left-4 text-white text-[18px]">Basic programming (HTML, CSS)</h2>
          <img src="{{ url('img') }}/Rectangle 12.png" alt="" />
          <div class="absolute flex gap-2 text-white top-[180px] right-16 pl-64 text-[13px] items-center"><img src="{{ url('img') }}/Polygon 1.png" alt="" /><img src="Polygon 1.png" alt="" />20 video</div>
        </div>
        <!-- galeri 1 -->
        <div class="w-[400px] relative">
          <p class="absolute text-[#FF994F] bg-[#fff] text-[14px] rounded-full py-2 px-4 mx-4 my-4"><span class="font-bold">$25/</span>Course</p>
          <div class="absolute flex bg-[#00000066] text-white font-light rounded-full py-2 px-6 right-14 top-4 items-center gap-1 text-[14px]"><img src="{{ url('img') }}/Star 1.svg" alt="" /><img src="Star 1.svg" alt="" />(4k)</div>
          <div class="absolute flex gap-4 items-center text-white top-[160px] left-4 text-[15px] w-[25px]"><img src="{{ url('img') }}/david.png" alt="" />Davidun</div>
          <p class="absolute top-44 left-14 text-white text-[14px] font-light">teacher</p>
          <h2 class="absolute font-bold top-32 left-4 text-white text-[18px]">Photography</h2>
          <img src="{{ url('img') }}/Rectangle 13.png" alt="" />
          <div class="absolute flex gap-2 text-white top-[180px] right-16 pl-64 text-[13px] items-center"><img src="{{ url('img') }}/Polygon 1.png" alt="" /><img src="Polygon 1.png" alt="" />20 video</div>
        </div>
      </div>
      <div class="mb-5 action flex mx-auto justify-center items-center gap-5">
          <a href="#" class="button-primary">See Course</a>
          </div>
        </div>
        <div class="container flex mx-auto items-center font-inter items-center justify-between">
          <div class="w-[500px] righ-[150px] z-10">
          <img src="{{ url('img') }}/Group 2222.png" alt="" />
          </div>
          <div class="container flex mx-auto items-center font-inter items-center justify-between">
            <div class="w-[500px] righ-[150px] z-10 mx-auto items-center font-inter items-center justify-between" >
              <h1 class="font-bold text-[45px] text-[#151F3C]">Mentors who are </h1>
              <h2 class="font-bold text-[45px] text-[#151F3C]">professional in</h2>
              <h3 class="font-bold text-[45px] text-[#151F3C]">their fields</h3> 
              <p class="text-[15px] font-thin py-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>   
          </div>
        </div>
      </div>
      <section class="py-28 max-w-[1300px] mx-auto ">
        <div class="container mx-auto font-inter items-center ">
          <div class="flex justify-between items-center mx-auto gap-4">
            <div class="px-10 ">
              <h2 class="w-[500px] font-bold text-[40px] text-[#151F3C] max-lg:text-2xl max-lg:w-[400px]">We will provide the best for our users from year to year</h2>
              <p class="text-[#969696] text-[14px] py-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>
              <div class="grid grid-cols-2 w-[300px] gap-4 py-4">
                <div class="flex gap-2"><img src="{{ url('img') }}/14.png" alt="" />World-class</div>
                <div class="flex gap-2"><img src="{{ url('img') }}/14.png" alt="" />Flexible</div>
                <div class="flex gap-2"><img src="{{ url('img') }}/14.png" alt="" />Affordable</div>
                <div class="flex gap-2"><img src="{{ url('img') }}/14.png" alt="" />Job-relevan</div>
              </div>
              <div>
                <button class="button-primary">Register Now</button>
              </div>
            </div>
            <div class="pl-20 max-lg:hidden">
            <img src="{{ url('img') }}/Group 1966.svg" alt="" />
            </div>
          </div>
        </div>
            <!--  -->
    <section class="bg-[#FFFAF2] py-20 my-10">
      <div class="container mx-auto font-[inter] w-[1300px] px-10">
        <div class="flex justify-between items-center">
          <div class="w-[400px] max-lg:w-[200px]">
            <h1 class="font-bold text-[40px] text-[#151F3C] max-lg:text-xl">
              Trusted <br />
              by 20,000+ People
              </h1>
            <p class="text-[#969696] text-[14px] max-lg:text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>
          </div>
          <div class="relative h-52 w-52">
            <div class="absolute inset-y-20 left-10 w-[350px] max-lg:w-[150px] max-lg:-left-[300px]"><img src="{{ url('img') }}/Frame 11.svg" alt="" /></div>
          </div>
          <div class="relative h-52 w-52">
            <div class="absolute -inset-y-10 right-0 w-[350px] max-lg:w-[150px] max-lg:-left-[720px] max-lg:inset-y-8"><img src="{{ url('img') }}/Frame 11.svg" alt="" /></div>
          </div>
        </div>
      </div>
      <!-- Develop Your Quality -->
    <section>
      <div class="container mx-auto py-20 px-10 max-w-[1300px]">
        <div class="bg-header rounded-3xl py-24 max-lg:py-12">
          <div class="mx-20 w-[450px]">
            <h1 class="text-[#151F3C] font-bold text-[40px] max-lg:text-2xl">Develop Your Quality</h1>
            <p class="text-[14px] text-[#969696] py-6 max-lg:text-sm max-lg:w-[250px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>
            <div>
                <button class="button-primary">Get Started</button>
              </div>
          </div>
        </div>
        <div class="relative">
          <div class="absolute -top-[350px] right-0 z-20 w-[500px] max-lg:hidden"><img src="{{ url('img') }}/image 9.svg" alt="" /></div>
          <div class="absolute right-[150px] -top-[380px] w-[130px] max-lg:hidden"><img src="{{ url('img') }}/Group 33.png" alt="" /></div>
          <div class="absolute right-[500px] -top-[180px] w-[130px] max-lg:hidden"><img src="{{ url('img') }}/Group 33.png" alt="" /></div>
          <div class="absolute left-0 -top-[405px] max-lg:w-[150px] max-lg:-top-[293px]"><img src="{{ url('img') }}/Rectangle 151.svg" alt="" /></div>
          <div class="absolute left-0 -top-[405px] max-lg:w-[200px] max-lg:-top-[293px]"><img src="{{ url('img') }}/Rectangle 152.svg" alt="" /></div>
          <div class="absolute left-14 -top-[405px] max-lg:w-[200px] max-lg:-top-[293px]"><img src="{{ url('img') }}/Rectangle 153.svg" alt="" /></div>
        </div>
      </div>
    </section>
    </section>
    <footer class="py-50 px-50 bg-[#281900]">
      <div class="flex flex-wrap">
       <div class="mx-10 w-[300px]">
         <div class="flex flex-wrap py-10">
         <img src="{{ url('img') }}/Group 35.svg" alt="" />
         </div>
         <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>
         <div class="flex flex-wrap py-10" >
         <img src="{{ url('img') }}/Vector.svg" alt="" class="mr-4"  />
         <img src="{{ url('img') }}/Vector (1).svg" alt="" class="mr-4"  />
         <img src="{{ url('img') }}/Vector (2).svg" alt="" class="mr-4"  />
         <img src="{{ url('img') }}/Vector (3).svg" alt="" class="mr-4"  />
         </div>
       </div>
       <div class="mt-10 ">
         <h2 class="font-bold text-white">Home</h2>
         <ul class="py-6 text-slate-400">
           <li class="pb-6 text-white"><a href="#">class</a></li>
           <li class="pb-6 text-white"><a href="#">Course</a></li>
           <li class="pb-6 text-white"><a href="#">About</a></li>
           <li class="pb-6 text-white"><a href="#">Mentors</a></li>
         </ul>
       </div>
       <div class="mt-10 ml-12">
         <h2 class="font-bold text-white">Our company</h2>
         <ul class="py-6 text-slate-400">
           <li class="pb-6 text-white"><a href="#">Class Comunity</a></li>
           <li class="pb-6 text-white"><a href="#">Course company </a></li>
           <li class="pb-6 text-white"><a href="#">Company name</a></li>
           <li class="pb-6 text-white"><a href="#">Mens course</a></li>
           <li class="pb-6 text-white"><a href="#">Courses.com </a></li>
         </ul>
       </div>
       <div class="mt-10 ml-12">
         <h3 class="font-bold text-white">Class</h3>
         <ul class="py-6 text-slate-400">
           <li class="pb-6 text-white"><a href="#">Potography</a></li>
           <li class="pb-6 text-white"><a href="#">HTML & CSS </a></li>
           <li class="pb-6 text-white"><a href="#">JavaScript</a></li>
           <li class="pb-6 text-white"><a href="#">Java</a></li>
           <li class="pb-6 text-white"><a href="#">PHP</a></li>
           <li class="pb-6 text-white"><a href="#">UI/UX Design</a></li>
           <li class="pb-6 text-white"><a href="#">Web Design</a></li>
           <li class="pb-6 text-white"><a href="#">Design Grafis</a></li>
       </div>
       <div class="mt-10 ml-12">
         <h3 class="font-bold text-white">About Us</h3>
         <ul class="py-6 text-slate-400">
           <li class="pb-6 text-white"><a href="#">You can contact Us to send email to us</a></li>
           <img src="{{ url('img') }}/Frame 31.png" alt="" class="mr-4"  />
     </div>
    <script src="./app.js"></script>
</html>