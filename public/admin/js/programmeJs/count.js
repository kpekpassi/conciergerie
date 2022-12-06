
const minute= 60
const heure= 60 * minute
const jours= 24 * heure

function refreshcount() {
    const count=document.querySelector('#count')
    const lauchdata=Date.parse(count.dataset.time)/1000
    const diff = lauchdata - Date.now()/1000

    const cal={
        days: Math.floor(diff / jours),
        hours: Math.floor(diff % jours / heure),
        minutes: Math.floor(diff % heure / minute),
        seconds: Math.floor(diff % minute)
    }

    // jours
    document.querySelector('.jours').innerText=cal.days
    if (cal.days < 10) {
        document.querySelector('.jours').innerText='0'+cal.days
    }
    if(cal.days <= 0){
        document.querySelector('.jours').innerText='00'
    }
    
    
    // heures
    document.querySelector('.heures').innerText=cal.hours
    if (cal.hours < 10) {
        document.querySelector('.heures').innerText='0'+cal.hours
    }
    if(cal.hours <=0){
        document.querySelector('.heures').innerText='00'
    }

    // minutes
    document.querySelector('.minutes').innerText=cal.minutes
    if (cal.minutes < 10) {
        document.querySelector('.minutes').innerText='0'+cal.minutes
    }
    if(cal.minutes <= 0){
        document.querySelector('.minutes').innerText='00'
    }

    // secondes
    document.querySelector('.secondes').innerText=cal.seconds
    if (cal.seconds < 10) {
        document.querySelector('.secondes').innerText='0'+cal.seconds
    }
    if(cal.seconds <= 0){
        document.querySelector('.secondes').innerText='00'
    }

    

}

window.setInterval(refreshcount, 1000)