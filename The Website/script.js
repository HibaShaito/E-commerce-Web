/*Making our menu on ipads clickable and making close */
const bar=document.getElementById('bar');
const close=document.getElementById('close');
const nav =document.getElementById('navbar');

if(bar){
    bar.addEventListener('click',()=>{/*means add a function*/
        nav.classList.add('active');/*this will add class list to navbar of medium sized devices*/ 
    })
}
if(close){
    close.addEventListener('click',()=>{/*means if anyone click on our close */
        nav.classList.remove('active');/*this will remove class list from navbar of medium sized devices*/ 
    })
}
/*Login out*/
const forms = document.querySelector(".forms"),
pwShowHide = document.querySelectorAll(".eye-icon"),
links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
eyeIcon.addEventListener("click", () => {
  let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
  
  pwFields.forEach(password => {
      if(password.type === "password"){
          password.type = "text";
          eyeIcon.classList.replace("bx-hide", "bx-show");
          return;
      }
      password.type = "password";
      eyeIcon.classList.replace("bx-show", "bx-hide");
  })
  
})
})      

links.forEach(link => {
link.addEventListener("click", e => {
 e.preventDefault(); //preventing form submit
 forms.classList.toggle("show-signup");
})
})

