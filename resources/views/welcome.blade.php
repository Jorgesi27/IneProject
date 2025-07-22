@extends('templates.master')
@section('content-center')

    <!-- LAYOUT: CENTER -->
    <div class="container">
      <div class="container-fluid" style="margin-top:30px">
        <div class="row">
          <h5>Zapatillas en oferta</h5>
          <!-- BLOCK: LEFT(Nike) -->
          <div class="col-sm-2"> <!-- col-sm-3 means three out of twelve columns -->
            <div class="card card-body bg-light" >
              <a href="#"><img src="img/nikeblancas.png" class="rounded" style= "height: 150px; width: 100px;"></a>
              <p class="card-text">55€</p>
            </div>
            <div class="card card-body bg-light">
              <a href="#"><img src="img/NikeDunkLow.png" class="rounded" style= "height: 150px; width: 100px;"></a>
              <p class="card-text">80€</p>
            </div>
          </div>

          <!-- BLOCK: CENTER(Adidas) -->
          <div class="col-sm-2"> <!-- col-sm-7 means seven out of twelve columns -->
            <div class="card card-body bg-light">
              <a href="#"><img src="img/AdidasForumLow.png" class="rounded" style= "height: 150px; width: 100px;"></a>
              <p class="card-text">120€</p>
            </div>
            <div class="card card-body bg-light">
              <a href="#"><img src="img/AdidasSuperstar.png" class="rounded" style= "height: 150px; width: 100px;"></a>
              <p class="card-text">90€</p>
            </div>   
          </div>

          <!-- BLOCK: RIGHT(Puma) -->
          <div class="col-sm-2"> <!-- col-sm-2 means two out of twelve columns -->
            <div class="card card-body bg-light">
              <a href="#"><img src="img/PumaShuffle.png" class="rounded" style= "height: 150px; width: 100px;"></a>
              <p class="card-text">60€</p>
            </div>
            <div class="card card-body bg-light">
              <a href="#"><img src="img/PumaFutureRiderNewCore.png" class="rounded" style= "height: 150px; width: 100px;"></a>
              <p class="card-text">100€</p>
            </div>    
          </div>
        </div>
      </div>
@endsection
@section('content-right')
      <!-- BLOCK: Lo más vendido -->
      <div class="col-sm-2" style="margin: 30px;"> <!-- col-sm-3 means three out of twelve columns -->
        <div class="card card-body bg-success" style="align-items:center;">
          <h5 class="card-title">Lo más vendido en Converse</h5>
          <a href="#"><img src="img/Converse1.png" class="rounded" style= "height: 120px; width: 80px;"></a>
          <a href="#"><img src="img/Converse2.png" class="rounded" style= "height: 120px; width: 80px;"></a>
          <a href="#"><img src="img/Converse3.png" class="rounded" style= "height: 120px; width: 80px;"></a>
          <a href="#" class="btn btn-light">Ver más</a>
        </div>
      </div>
    </div>
@endsection
