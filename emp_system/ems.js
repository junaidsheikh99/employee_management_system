const nav = document.querySelector('.sidebar')
fetch('/sidebar.html')
.then(res=>res.text())
.then(data=>{
     nav.innerHTML=data
})   





