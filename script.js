baseURL=document.URL;
function search() {
    let search_bar = document.getElementById(searchbar);
    console.log(search_bar);
    window.location.replace(`${baseURL}?search=${search_bar}`);
}