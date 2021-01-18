<main class="container-fluid">
    <div class="row">
      <!-- Filtro -->
      <section class="col-md-3 pt-5">
        <form id="form-filter">
          <hr class="my-4" />
          <div class="form-group">
            <label class="font-weight-bold">Tipo de inmueble:</label>
            <select class="custom-select" name="hou_inm">
              <option selected value="vivienda">Vivienda</option>
              <option value="obra nueva">Obra nueva</option>
              <option value="terrenos">Terrenos</option>
            </select>
          </div>
          <hr class="my-4" />
          <div class="form-group">
            <label class="font-weight-bold" style="display: block;">Precio</label>
            <select class="custom-select" style="width: 100px;" name="hou_min_price">
              <option selected>MIN</option>
              <option value="100.000" selected>100.000</option>
              <option value="150.000">150.000</option>
              <option value="200.000">200.000</option>
              <option value="250.000">250.000</option>
              <option value="300.000">300.000</option>
              <option value="350.000">350.000</option>
              <option value="400.000">400.000</option>
              <option value="450.000">450.000</option>
              <option value="500.000">500.000</option>
            </select>
            <select class="custom-select" style="width: 100px;" name="hou_max_price">
              <option selected>MAX</option>
              <option value="150.000">150.000</option>
              <option value="200.000">200.000</option>
              <option value="250.000">250.000</option>
              <option value="300.000">300.000</option>
              <option value="350.000">350.000</option>
              <option value="400.000">400.000</option>
              <option value="450.000">450.000</option>
              <option value="500.000">500.000</option>
            </select>
          </div>
          <hr class="my-4" />
          <div class="form-group">
            <label class="font-weight-bold">Tipo de vivienda</label>
            <div class="form-check">
              <input id="pisos" class="form-check-input-T" type="checkbox" value="piso" id="defaultCheck1" name="hou_viv" checked/>
              <label class="form-check-label" for="defaultCheck1">
                Pisos
              </label>
            </div>

            <div class="form-check">
              <input id="adosados" class="form-check-input-T" type="checkbox" value="adosado" id="defaultCheck2" name="hou_viv"/>
              <label class="form-check-label" for="defaultCheck2">
                Adosados
              </label>
            </div>
            <div class="form-check">
              <input id="chalets" class="form-check-input-T" type="checkbox" value="chalet" id="defaultCheck2" name="hou_viv"/>
              <label class="form-check-label" for="defaultCheck3">
                Chalets
              </label>
            </div>
            <div class="form-check">
              <input id="rusticas" class="form-check-input-T" type="checkbox" value="casas rustica" id="defaultCheck2" name="hou_viv"/>
              <label class="form-check-label" for="defaultCheck4">
                Casas rústicas
              </label>
            </div>
          </div>

          <div id="fecha-publicacion" class="form-group">
            <label class="font-weight-bold">Fecha de publicación</label>
            <div class="form-check">
              <input id="indiferente" class="form-check-input-F" type="radio" name="fecha_pub" value="-1" checked />
              <label class="form-check-label" for="exampleRadios1">
                Indiferente
              </label>
            </div>
            <div class="form-check">
              <input id="h48" class="form-check-input-F" type="radio" name="fecha_pub" value="24x2" />
              <label class="form-check-label" for="exampleRadios2">
                Últimas 48 horas
              </label>
            </div>
            <div class="form-check">
              <input id="sem1" class="form-check-input-F" type="radio" name="fecha_pub" value="24x7" />
              <label class="form-check-label" for="exampleRadios2">
                La última semana
              </label>
            </div>
            <div class="form-check">
              <input id="mes1" class="form-check-input-F" type="radio" name="fecha_pub" value="24x31" />
              <label class="form-check-label" for="exampleRadios2">
                El último mes
              </label>
            </div>
          </div>

          <div style="text-align: center;">
            <button id="filtro" type="button" class="btn btn-warning" style="width: 180px;" >
              Buscar
            </button>
          </div>
        </form>
      </section>
  
      <!-- Listado de casas -->
      <section class="col-md-9">
        <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Casas</a></li>
            <li class="breadcrumb-item"><a href="#">Mallorca</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Marratxí
            </li>
          </ol>
        </nav>
      
        <div class="tab-content" id="myTabContent">
          <!-- Listado Casas comprar -->
          <div class="tab-pane fade show active" id="list-comprar" role="tabpanel" aria-labelledby="home-tab">
            <!-- Campo ordenación -->
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Ordernado por:</label>
              <div class="col-sm-10">
                <select name="order" class="form-control mb-3 w-25" id="">
                  <option value="MR" selected="selected">Más recientes</option>
                  <option value="B">Precio más bajo</option>
                  <option value="A">Pecio más alto</option>
                  <option value="R">Relevancia</option>
                </select>
              </div>
            </div>
          
          <div id="house_container_comprar">
              @yield('house_container_comprar')
          </div>
          
          <div class="tab-pane fade" id="list-alquilar" role="tabpanel" aria-labelledby="profile-tab">
            <div id="house_container_alquilar">@yield('house_container_alquilar')</div>
          </div>

      </section>
    </div>
  </main>