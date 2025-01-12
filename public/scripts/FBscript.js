/*Written by Mathew Chebet*/


/*Start of find books page*/
const search_by_genre = document.getElementById("search_genre"); // genre checkbox
const search_by_title = document.getElementById("search_title"); // title checkbox
const criteria_error= document.getElementById("criteria_error");
const search_bar= document.getElementById("search_bar");
const search_error= document.getElementById("search_error");

function searchResult(){
    let isValid = true;
    // Checks if there is any content in the search bar.
    if(search_bar.value == ""){
        search_error.innerText= "Field cannot be empty.";
        isValid= false;//Cancel form submission.
    }

    //Checks if one of the search criteria are checked.
    if((search_by_genre.checked === true && search_by_title.checked === true)){
        criteria_error.innerText= "Please choose a maximum of one of the search criteria options";
        isValid = false;//Cancel form submission.
    }
    else if ((search_by_genre.checked === false && search_by_title.checked === false)){
        search_by_title.checked=true;
    }
    else {
        criteria_error.innerText= "";
    }
    
    return isValid;

}

search_by_genre.addEventListener("change",() =>{
    if (search_by_genre.checked === true || search_by_title.checked === true){
        criteria_error.innerText= "";
    }

});

search_by_title.addEventListener("change",() =>{
        if (search_by_genre.checked === true || search_by_title.checked === true){
            criteria_error.innerText= "";
        }
});

const hamburger = document.getElementById('hamburger');
const navBar = document.getElementById('nav_bar');

// Toggle the navbar on hamburger click
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active'); // Toggle the 'active' class on the hamburger
    navBar.classList.toggle('active'); // Toggle the 'active' class on the navbar
});
