const searchBar1 = document.querySelector(".search input"),
searchIcon1 = document.querySelector(".search button"),
usersList1 = document.querySelector(".users-list");

searchIcon1.onclick = ()=>{
  searchBar1.classList.toggle("show");
  searchIcon1.classList.toggle("active");
  searchBar1.focus();
  if(searchBar1.classList.contains("active")){
    searchBar1.value = "";
    searchBar1.classList.remove("active");
  }
}

searchBar1.onkeyup = ()=>{
  let searchTerm = searchBar1.value;
  if(searchTerm != ""){
    searchBar1.classList.add("active");
  }else{
    searchBar1.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/search.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList1.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}

setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "php/users.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          if(!searchBar1.classList.contains("active")){
            usersList1.innerHTML = data;
          }
        }
    }
  }
  xhr.send();
}, 500);

