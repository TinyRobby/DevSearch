baseURL=document.URL;
function search() {
    let search_bar = document.getElementById("searchbar").value;
    console.log(search_bar);
    window.location.replace(`${baseURL}?search=${search_bar}`);
}