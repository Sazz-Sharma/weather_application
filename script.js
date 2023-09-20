let stack = document.getElementById('stack');
stack.addEventListener('click', function(){
    document.getElementById('weekpanel').classList.toggle('none')
    stack.classList.toggle('normal');
})


const api_key = "7a75e0b1e45067b2b3f1792be43e1e10";
const def_lon = -1.5391039;
const def_lat = 53.9921491;


async function weatherFetch(lon, lat, city){
    const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${api_key}`);
    const json_response = await response.json();
    // console.log(json_response);
    return json_response
    // changeData(json_response);
};

const regionNames = new Intl.DisplayNames(
  ['en'], {type: 'region'}
);

function changeData(arg){

    document.getElementById('city').innerHTML = arg.name;
    try{
      document.getElementById('country').innerHTML = regionNames.of(arg.sys.country);
    }
    catch(error){
      document.getElementById('country').innerHTML = arg.sys.country;
    }
    document.getElementById('temp').innerHTML = Math.ceil(arg.main.temp) - 273 + "°C";
    document.getElementById('remarks').innerHTML = arg.weather[0].description
    document.getElementById('presval').innerHTML = arg.main.pressure + " hPa"
    document.getElementById('windval').innerHTML = arg.wind.speed + " m/s"
    document.getElementById('humidval').innerHTML = arg.main.humidity + "%"
    document.getElementById('behenkelode').src = `https://openweathermap.org/img/wn/${arg.weather[0].icon}@2x.png`
}

weatherFetch(def_lon, def_lat, city)
  .then(data => {
    changeData(data);
    const localobject = JSON.stringify(data);
    localStorage.setItem("harrogate", localobject);
  });

async function cityPos(city_name){
  try{
    const response = await fetch(`https://api.openweathermap.org/geo/1.0/direct?q=${city_name}&limit=1&appid=${api_key}`)
    const json_response = await response.json()
    return json_response;
  }catch(error){
    const localItem = localStorage.getItem(city_name);
    localobject = JSON.parse(localItem);
    console.log(localobject);
    return localobject
    
  }
};
function main(){

  const searchVal = document.getElementById("search-txt").value
  cityPos(searchVal).then(data =>{
    try{
    let lon = data[0].lon
    let lat = data[0].lat
    weatherFetch(lon, lat, searchVal).then(data =>{
        const localobject = JSON.stringify(data);
        localStorage.setItem(searchVal, localobject)
        changeData(data)
    })
  }catch(error){
    changeData(data);
  }
  })

//   const backgroundId = {"2":"https://images.unsplash.com/photo-1431440869543-efaf3388c585?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80", 
//   "3":"https://images.unsplash.com/photo-1576234699886-7eb7f11aecb7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" , 
//   "5": "https://images.unsplash.com/photo-1600697230088-4992c83b2804?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80",
//   "6": "https://images.unsplash.com/photo-1418985991508-e47386d96a71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80",
//   "8": "https://images.unsplash.com/photo-1501630834273-4b5604d2ee31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80",
//   "7": "https://plus.unsplash.com/premium_photo-1670428617194-11ad37e484d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=775&q=80"

// }
    // cityPos(searchVal).then(data => {
    //   const lon = data[0].lon
    //   const lat = data[0].lat
    //   weatherFetch(lon, lat).then(data => {
    //     const weather_id = String(data.weather[0].id)[0]
    //     const icon_id = data.weather[0].icon
        // console.log(icon_id)
        // document.getElementById('weather-card').style.cssText = `background: url(https://openweathermap.org/img/wn/${icon_id}@2x.png) no-repeat;`
        // document.querySelector('body').style.cssText = `background: url(${backgroundId[weather_id]}) no-repeat;`
        // console.log(weather_id)
        // console.log(backgroundId[weather_id])
        // console.log(backgroundId[2])
    //   })
    // })




}

document.getElementById('search-btn').addEventListener('click', ()=>{
    console.log(document.getElementById('search-txt').value)
  main() 
})

document.getElementById("search-box").addEventListener('keyup', (e)=>{
  if(e.key == "Enter"){
    document.getElementById('search-btn').click();

  }
})

function clock(){
    let current = new Date()
    let day = current.getDate()
    let month = current.getUTCMonth()
    let hours = current.getHours()
    let minutes = current.getMinutes()
    // let seconds = current.getSeconds()
    // console.log(hours, minutes);

    const month_string = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    if (hours < 10 && minutes < 10 ){
        document.getElementById('time').textContent = `0${hours}:0${minutes}`
    }
    else if (hours < 10 && minutes >= 10 ){
        document.getElementById('time').textContent = `0${hours}:${minutes}`
    }
    else if (hours >= 10 && minutes < 10 ){
        document.getElementById('time').textContent = `${hours}:0${minutes}`
    }
    else{
        document.getElementById('time').textContent = `${hours}:${minutes}`
    }
   
    document.getElementById('date').textContent = `${day} ${month_string[month]}`   
}

function loader(){
    clock();
    window.setInterval("clock()", 1);
}


