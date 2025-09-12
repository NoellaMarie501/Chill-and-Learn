const numberInput=document.querySelector(".number")
const btn=document.querySelector(".btn")
const value=document.querySelector(".value")
btn.addEventListener("click",()=>{
    const number=parseInt(numberInput.value)
    value.innerHTML="";
    let result;
    if(number % 2===0){
        result ="Even"
    }else{
        result= "Odd"
    }
    value.textContent=result;
})
