let griplines = document.querySelector('.griplines');
let userContainer =  document.querySelector('.userContainer');
let logo = document.querySelector('.logo');
let gripcount =0 ;
document.addEventListener('click', function(outside){

if(griplines.contains(outside.target)){
    griplines.style.transform = 'translateX(-20rem)';
    userContainer.style.transform = 'translateX(-20rem)';
    logo.style.transform = 'translateX(2rem)';

    gripcount++;
    console.log(gripcount);
}
    if(gripcount > 1){
        userContainer.style.transform = 'translateX(0rem)';
        griplines.style.transform = 'translateX(0rem)';
         logo.style.transform = 'translateX(85rem)';



        gripcount = 0;
    }
    
    

})

























