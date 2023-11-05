<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPT Chat</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body >
<style>
      .gradient {
        background: linear-gradient(90deg, #20cd3a 0%, #15b9c1 100%);
      }
      .buttonclr {
        background: linear-gradient(90deg, #036812 0%, #15b9c1 100%);
      }
    </style>

<div class="flex flex-row h-screen">



<div class="bg-slate-100 flex flex-col justify-between items-center bg-green-900  w-16 p-4">
  <div class="flex flex-col space-y-4"> 
    <a href="#" class="mb-3">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 hover:text-green-200 text-white" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M4 10a2 2 0 012-2h2V6a2 2 0 012-2h2a2 2 0 012 2v2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2H6a2 2 0 01-2-2z" clip-rule="evenodd"/>
       </svg>
    </a>
    
    <a href="#" class="hover:text-white">
      <svg class="w-8 hover:text-green-200  h-8 mr-2 text-white "  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z" fill="currentColor" /></svg>
    <a>
    <a href="#" >
    <svg class="w-8 hover:text-green-200  h-8 mr-2 text-white " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18 10.5C19.6569 10.5 21 11.8431 21 13.5V19.5C21 21.1569 19.6569 22.5 18 22.5H6C4.34315 22.5 3 21.1569 3 19.5V13.5C3 11.8431 4.34315 10.5 6 10.5V7.5C6 4.18629 8.68629 1.5 12 1.5C15.3137 1.5 18 4.18629 18 7.5V10.5ZM12 3.5C14.2091 3.5 16 5.29086 16 7.5V10.5H8V7.5C8 5.29086 9.79086 3.5 12 3.5ZM18 12.5H6C5.44772 12.5 5 12.9477 5 13.5V19.5C5 20.0523 5.44772 20.5 6 20.5H18C18.5523 20.5 19 20.0523 19 19.5V13.5C19 12.9477 18.5523 12.5 18 12.5Z" fill="currentColor" /></svg>
    </a>
      

    
   

  </div>

  <div class="flex flex-col space-y-4">
    <a><svg class="w-8 h-8 mr-2 text-white " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8V16Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM12 4V8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16V20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z" fill="currentColor" /></svg></a>
   
    <a><svg class="w-8 h-8 mr-2 text-white hover:text-red-700" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 4.00894C13.0002 3.45665 12.5527 3.00876 12.0004 3.00854C11.4481 3.00833 11.0002 3.45587 11 4.00815L10.9968 12.0116C10.9966 12.5639 11.4442 13.0118 11.9965 13.012C12.5487 13.0122 12.9966 12.5647 12.9968 12.0124L13 4.00894Z" fill="currentColor" /><path d="M4 12.9917C4 10.7826 4.89541 8.7826 6.34308 7.33488L7.7573 8.7491C6.67155 9.83488 6 11.3349 6 12.9917C6 16.3054 8.68629 18.9917 12 18.9917C15.3137 18.9917 18 16.3054 18 12.9917C18 11.3348 17.3284 9.83482 16.2426 8.74903L17.6568 7.33481C19.1046 8.78253 20 10.7825 20 12.9917C20 17.41 16.4183 20.9917 12 20.9917C7.58172 20.9917 4 17.41 4 12.9917Z" fill="currentColor" /></svg></a>
  </div> 
</div>




<div class="w-66 bg-green-700">

  <div class="m-auto rounded-lg flex-none h-16 bg-green-70 flex p-1 flex-row justify-between w-60 items-left ">

    <div class="hover:bg-green-800 flex flex-col space-y-1 bg-green-700 w-60 h-4/5 m-auto rounded-lg  border-white border text-white items-center">

       <div class="m-auto text-lg">
          <a href="#"><strong> New Consultation</strong>
           
          </a>
       </div>
    </div>
  </div>
  
  <div class="flex flex-col justify-start space-y-1  items-center p-1 ">
  
      <a href="#"><div class="hover:bg-green-800 rounded-lg bg-green-700  h-10 w-60 border-white border items-center text-white">
        <div class="mt-1 ml-2 text-left ">test</div>
      </div></a>

      <a href="#"><div class="hover:bg-green-800 rounded-lg bg-green-700  h-10 w-60 border-white border items-center text-white">
        <div class="mt-1 ml-2 text-left ">test</div>
      </div></a>
      
      <a href="#"><div class="hover:bg-green-800 rounded-lg bg-green-700  h-10 w-60 border-white border items-center text-white">
        <div class="mt-1 ml-2 text-left ">test</div>
      </div></a>

      
  </div> 
</div>
<div class="flex flex-col bg-green-100 w-full ml-1 space-y-1"> 

  <div class="flex flex-col items-start h-5/6 w-full bg-green-200 border border-black rounded ">
   
      
    
  </div>

  <div class="flex flex-row bg-green-100 h-1/6 w-full space-x-4 items-center rounded border border-black ">
    <input class="rounded-full bg-green-600 h-4/6 ml-1 w-5/6  border text-white border-black border-4  text-center" type="text">
    <button class=" rounded-full h-4/6 w-1/6 bg-green-100 ">
    <svg class="hover:bg-green-600 m-auto bg-green-100 rounded w-10 h-10 text-black" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.8543 11.9741L16.2686 10.5599L12.0259 6.31724L7.78327 10.5599L9.19749 11.9741L11.0259 10.1457V17.6828H13.0259V10.1457L14.8543 11.9741Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M1 19C1 21.2091 2.79086 23 5 23H19C21.2091 23 23 21.2091 23 19V5C23 2.79086 21.2091 1 19 1H5C2.79086 1 1 2.79086 1 5V19ZM5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21Z" fill="currentColor" /></svg>
    </button>
  </div>
</div>

</body>
</html>
