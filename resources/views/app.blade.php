@extends('main')
@section('content')
<main id="main">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        
        <div class="containertext mt-4">
                <div class="container">
                    <div class="row">
                        <div class="slad col-md-6 offset-md-6 text-md-right text-center mt-4">
                                <h1>Restaurante El Playa</h1>
                                <p class="d-none d-md-block">Somos un restaurante comprometido con nuestros clientes, 
                                    ofreciendo platillos de calidad con el mejor sabor, ademas de 
                                    ofrecer un buen trato y servicio de calidad.
                                </p>
                        </div>
                    </div>
                </div>

        </div>
      </div>

</main>
   <!--Menu--> 
   <section id="Menu">
    <div class="container-fluid mt-4" id="especialidades">
          <div class="row">
            <div class="col-lg-12 ">
                <h2 >Especialidades</h2>
            </div>
          </div>
          
            <div class="row">


              <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card" >
                    <img src="img/Platillos/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Mil amores &nbsp; &nbsp;  &nbsp; $240</h5>
                      <p class="card-text">lomo de atún,
                        cebolla,
                        aguacate,
                        tomate,
                        zumo de limas y
                        Cilantro 
                        sal </p>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
                    </div>
                  </div>
            </div>
              
              <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card" >
                    <img src="img/Platillos/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Ceviche &nbsp; &nbsp;  &nbsp; $180</h5>
                      <p class="card-text">Jugo de limon, cebolla morada,
                        pepino, salsa de chile serrano y pescado blanco
                      </p>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
                    </div>
                  </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="card" >
                  <img src="img/Platillos/3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Coctel de camaron  &nbsp; $170</h5>
                    <p class="card-text">Piledo mediano o grande el grande
                     con poco de ceviche cocido o curtido
                    </p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
                  </div>
                </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card" >
                <img src="img/Platillos/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Molcajete camaron $170</h5>
                  <p class="card-text"> Rico molcajete de camarones cocidos en salsa verde,
                    pescado y pepino
                  </p>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
                </div>
              </div>
        </div>
     </div>
        </div>

  
        <div class="cont2 container-fluid mt-4" id="camarones">
          <div class="row">
            <div class="col-lg-12" >
               <h2>Camarones al gusto</h2> 
            </div>
          </div>
          
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="card" >
                  <img src="img/Platillos/5.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Camaron tradicional $240</h5>
                    <p class="card-text">Camarones bañados en salsa tradicional, pepino, cebolla
                    y pimienta.</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
                  </div>
                </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card" >
                <img src="img/Platillos/16.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Camaron verduras $210</h5>
                  <p class="card-text">Camarones cocidos acompañados de ensalada y salsa de la casa </p>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
                </div>
              </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="card" >
              <img src="img/Platillos/18.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Camaron spagueti $190</h5>
                <p class="card-text">Camarones cocidos acompañados de sopa blanca y un toque de salsa verde.</p>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
              </div>
            </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card" >
            <img src="img/Platillos/20.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Camaron infierno $220</h5>
              <p class="card-text">Camarones bañados en salsa picosa y pimienta</p>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
            </div>
          </div>
    </div>
          </div>
      </div>

        <div class="cont3 container-fluid mt-4" id="pulpo">
          <div class="row">
            <div class="col-lg-12">
              <h2>Pulpo al gusto</h2>
            </div>
          </div>
          <div class="row">

            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="card" >
                  <img src="img/Platillos/p3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">pulpo a la plancha $260</h5>
                    <p class="card-text">Pulpo a la plancha pidelo en termino medio o al gusto acompañalo con verdura o ensalada</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
                  </div>
                </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card" >
                <img src="img/Platillos/p4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">pulpo tropical G $190</h5>
                  <p class="card-text">Pulpo acompañado de frutas tropicales y aderozo al gusto, pidelo con aderezo de tu preferencia</p>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
                </div>
              </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 mb-4" >
          <div class="card" >
              <img src="img/Platillos/p7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">pulpo cocido $200</h5>
                <p class="card-text"> Pulpo cocido acompañalo con verduras o ensalada ademas de una porcion de sopa de arroz</p>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
              </div>
            </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card" >
            <img src="img/Platillos/p4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">pulpo tropical ch $120</h5>
              <p class="card-text"> Pulpo acompañado de frutas tropicales y aderozo al gusto, pidelo con aderezo de tu preferencia</p>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
            </div>
          </div>
    </div>
   </div>
   <div class="row">
    <div class="col-12 col-md-6 col-lg-3 mb-4">
      <div class="card" >
          <img src="img/Platillos/4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">pulpo tradicional $120</h5>
            <p class="card-text"> Pulpo acompañado de de salsa blanca, veduras y porciones de frutas</p>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
          </div>
        </div>
  </div>

  <div class="col-12 col-md-6 col-lg-3 mb-4">
    <div class="card" >
        <img src="img/Platillos/p1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">pulpo al ajillo $100</h5>
          <p class="card-text"> Pulpo acompañado con una salsa especial de la casa y porciones de verduras</p>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
        </div>
      </div>
</div>

<div class="col-12 col-md-6 col-lg-3 mb-4">
  <div class="card" >
      <img src="img/Platillos/pp.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Brochetas de pulpo $120</h5>
        <p class="card-text"> 3 brochetas de pulpo a la plancha acompañadas de salsa</p>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
      </div>
    </div>
</div>

<div class="col-12 col-md-6 col-lg-3 mb-4">
<div class="card" >
    <img src="img/Platillos/p6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">pulpo cocido $123</h5>
      <p class="card-text"> Pulpo cocido acompañado de cebolla morada y brocoli</p>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
    </div>
  </div>
</div>
   </div>
</div>

        <div class="cont4 container-fluid mt-4 mb-4" id="bebidas">
          <div class="row">
              <div class="col-lg-12">
                <h2>Bebidas</h2>
              </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="card" >
                  <img src="img/Platillos/10.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Naranajada &nbsp; &nbsp; $60</h5>
                    <p class="card-text">Pide jugo de naranja natural, individual o jarra</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
                  </div>
                </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card" >
                <img src="img/Platillos/21.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Liminada &nbsp; &nbsp; $60</h5>
                  <p class="card-text"> Pide Limonada natural o mineral, individual o jarra</p>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
                </div>
              </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="card" >
              <img src="img/Platillos/7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Michelada &nbsp; &nbsp; $70</h5>
                <p class="card-text">Pide michelada con tu cerveza preferida y tomala fria</p>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
              </div>
            </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card" >
            <img src="img/Platillos/22.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">cóctel &nbsp; &nbsp; $90</h5>
              <p class="card-text">Pide tu coctel mediano o grane y tomalo frio</p>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
            </div>
          </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6 col-lg-3 mb-4">
      <div class="card" >
          <img src="img/Platillos/b5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vino &nbsp; &nbsp; $160</h5>
            <p class="card-text">Pide dos copas de vino</p>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
          </div>
        </div>
  </div>

  <div class="col-12 col-md-6 col-lg-3 mb-4">
    <div class="card" >
        <img src="img/Platillos/b6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Vino tinto&nbsp; &nbsp; $160</h5>
          <p class="card-text">Pide dos copas de vino tinto</p>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
        </div>
      </div>
</div>

<div class="col-12 col-md-6 col-lg-3 mb-4">
  <div class="card" >
      <img src="img/Platillos/b7.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Batido Jugo verde   $50</h5>
        <p class="card-text">Pide jugo de batido verde, individual o jarra</p>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
      </div>
    </div>
</div>

<div class="col-12 col-md-6 col-lg-3 mb-4">
<div class="card" >
    <img src="img/Platillos/b8.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Té &nbsp; &nbsp; $60</h5>
      <p class="card-text">Pide té de limon fio o caliente</p>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="button" class="btn btn-light">Ordenar</button>
    </div>
  </div>
</div>
  </div>
</div>          
</section>
 



@endsection

