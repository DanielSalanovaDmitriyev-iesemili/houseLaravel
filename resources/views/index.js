

init();
let houseArr = [];
 function init () {
    fetch("http://localhost/houseLaravel/public/create")
    .then(result => result.json())
    .then(data => {
        for (let house of data){
          houseArr.push(house);
        }
        printHouse(data);
    })
}


function printHouse ( houses ){
    let containerAlquilar = document.getElementById("house_container_alquilar");
    let containerComprar = document.getElementById("house_container_comprar");
    let container = null;
    containerAlquilar.innerHTML = "";
    containerComprar.innerHTML = "";
    for (house of houses){
        if(house.hou_venta == "alquilar"){
            container = containerAlquilar;
        }else{
            container = containerComprar;
        }
        container.innerHTML += `
        <div class="card house mb-3">
        <div class="row no-gutters">
          <div class="col-md-4"> <img src="${house.hou_img}" class="card-img" alt="..." /></div>
          <div class="col-md-8">
            <div class="card-body">
            
              <h5 class="card-title">${house.hou_title}</h5>
              <div class="row">
                <p class="card-text col-md-8">
                  ${house.hou_description}
                </p>
                <p class="col-md-4 text-right">
                  <span class="price d-block">${house.hou_price}</span>
                  <button type="button" class="btn btn-secondary" style="font-size:14px">
                    <i class="fas fa-bell"></i>
                    Avísame si baja
                  </button>
                </p>
              </div>
              <p class="card-text p-0 m-0">
                <small class="text-muted">${house.hou_ofe}</small> |
                <small class="text-muted">${house.hou_date}</small>
              </p>
            </div>
          </div>
        </div>
      </div>
        `
    }
}

document.getElementById("filtro").addEventListener("click", () => {
  const form = document.getElementById('form-filter');
  let viv = checkedBoxViv();
  let date = checkedBoxDate();
  let [hou_inm, hou_min_price, hou_max_price, hou_viv, fecha_pub ] = form.elements;
  hou_viv.value = viv;
  fecha_pub.value = date;
  let data = {"inm": hou_inm.value, "min": hou_min_price.value, "max": hou_max_price.value, "viv": hou_viv.value, "date": fecha_pub.value};
  filtrar(data);
})

function filtrar(data){
  let filtroInm = houseArr.filter(house => house.hou_inm == data.inm );
  console.log(filtroInm);
  if(filtroInm.length > 0){
    let filtroPrice = filtroInm.filter(house => house.hou_price >= data.min && house.hou_price <= data.max);
    console.log(filtroPrice);

    if(filtroPrice.length > 0){
        let filtroViv = filtroPrice.filter(house => house.hou_viv == data.viv );
        console.log(filtroViv);

        if(filtroViv.length > 0){
          let filtroDate = filtroViv.filter(house => house.hou_date == data.date );
          console.log(filtroDate);
          
          if(filtroDate.length > 0){
            printHouse(filtroDate);
          }else{
            printHouse(filtroViv);
          }
        }
        else{
          printHouse(filtroPrice);
        }
    }else{
      printHouse(filtroInm);
    }
  }else{
    printHouse(houseArr);
  }
}

function checkedBoxViv(){
  let value = document.querySelectorAll('.form-check-input-T');
  console.log(value);
  value.forEach(option => {
      if(option.checked == true){
          return option.value;
      }
  });
}

function checkedBoxDate(){
  let value = document.querySelectorAll('.form-check-input-F');
  console.log(value);
  value.forEach(option => {
      if(option.checked == true){
          return option.value;
      }
  });
}