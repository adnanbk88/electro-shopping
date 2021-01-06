const DateText = document.getElementById("DATE")
function getDate(){
    const date = new Date()
    const heure = date.getHours()
    const minute = date.getMinutes()
    const secondes = date.getSeconds()
    DateText.innerText = `${heure} : ${minute} : ${secondes} AM `

}
getDate()
setInterval(()=> {
    getDate()

},1000)