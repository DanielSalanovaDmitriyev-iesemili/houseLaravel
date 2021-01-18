@extends('layouts.plantilla')
@section('user')

@endsection
@section('house_container_comprar')
    @foreach ($houses as $house)
    <div class="card house mb-3">
        <div class="row no-gutters">
          <div class="col-md-4"> <img src="{{$house->hou_img}}" class="card-img" alt="..." /></div>
          <div class="col-md-8">
            <div class="card-body">
              <a href="{{route('show', $house->hou_id)}}"><h5 class="card-title">{{$house->hou_title}}</h5></a>
              <div class="row">
                <p class="card-text col-md-8">
                  {{$house->hou_description}}
                </p>
                <p class="col-md-4 text-right">
                <span class="price d-block">{{$house->hou_price}}</span>
                  <button type="button" class="btn btn-secondary" style="font-size:14px">
                    <i class="fas fa-bell"></i>
                    Avísame si baja
                  </button>
                </p>
              </div>
              <p class="card-text p-0 m-0">
                <small class="text-muted">{{$house->hou_ofe}}</small> 
                <small class="text-muted">{{$house->hou_date}}</small>
                <small class="text-muted">{{$house->hou_venta}}</small>
              </p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    {{$houses->links('vendor.pagination.bootstrap-4')}}
@endsection

