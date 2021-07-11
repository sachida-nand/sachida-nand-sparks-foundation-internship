const navtoggle = ()=>{
   const nav = document.querySelector('.nav-links');
   const burger = document.querySelector('.burger');


   burger.addEventListener("click",()=>{
       nav.classList.toggle('active');
       burger.classList.toggle('active');
   })
}
navtoggle();

function deletee(){
   var confirm =  confirm("Are you sure want to delete this customers");
   console.log(confirm);
}

// deletee.addEventListener('click',function(){
//     confirm("Are you sure want to delete this customers");
// });