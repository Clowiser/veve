@extends('template')

@section('titre')
    Articles
@endsection

@section('contenu')




<div class="container-fluid d-flex justify-content-center">
    <div class="row mt-5">
        <div class="col-sm-4">
            <div class="card"> <img src="{{URL::asset('img/gemme.png') }}" class="card-img-top" width="100%">
                <div class="card-body pt-0 px-0">
                    <div class="d-flex flex-row justify-content-between mb-0 px-3"> <small class="text-muted mt-1">STARTING AT</small>
                        <h6>&dollar;22,495&ast;</h6>
                    </div>
                    <hr class="mt-2 mx-3">
                    <div class="d-flex flex-row justify-content-between px-3 ">
                        <div class="d-flex flex-column"><span class="text-muted">Fuel Efficiency</span><small class="text-muted">L/100KM&ast;</small></div>
                        
                    </div>
                    
                    <div class="mx-3 mb-2"><a href="{{url('/product/1')}}" class="btn btn-outline-primary btn-block"><small>BUILD & PRICE</small></a></div> <small class="d-flex justify-content-center text-muted">*Legal Disclaimer</small>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card"> <img src="{{URL::asset('img/gemme.png') }}" class="card-img-top" width="100%">
                <div class="card-body pt-0 px-0">
                    <div class="d-flex flex-row justify-content-between mb-0 px-3"> <small class="text-muted mt-1">STARTING AT</small>
                        <h6>&dollar;22,495&ast;</h6>
                    </div>
                    <hr class="mt-2 mx-3">
                    <div class="d-flex flex-row justify-content-between px-3">
                        <div class="d-flex flex-column"><span class="text-muted">Fuel Efficiency</span><small class="text-muted">L/100KM&ast;</small></div>
                        
                    </div>
                    
                    
                    <div class="mx-3 mb-2"><a href="{{url('/product/2')}}" class="btn btn-outline-primary btn-block"><small>BUILD & PRICE</small></a></div> <small class="d-flex justify-content-center text-muted">*Legal Disclaimer</small>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card"> <img src="{{URL::asset('img/gemme.png') }}" class="card-img-top" width="100%">
                <div class="card-body pt-0 px-0">
                    <div class="d-flex flex-row justify-content-between mb-0 px-3"> <small class="text-muted mt-1">STARTING AT</small>
                        <h6>&dollar;22,495&ast;</h6>
                    </div>
                    <hr class="mt-2 mx-3">
                    <div class="d-flex flex-row justify-content-between px-3">
                        <div class="d-flex flex-column"><span class="text-muted">Fuel Efficiency</span><small class="text-muted">L/100KM&ast;</small></div>
                        
                    </div>
                    
                    <div class="mx-3 mb-2"><a href="{{url('/product/3')}}" class="btn btn-outline-primary btn-block"><small>BUILD & PRICE</small></a></div> <small class="d-flex justify-content-center text-muted">*Legal Disclaimer</small>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div class = "d-flex flex-row">
    
    <div class="d-flex justify-content-center container mt-5">
        <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
            <div class="about-product text-center mt-2"><img src= "{{URL::asset('img/gemme.png') }}" width="300">
                <div>
                    <h4>Pack gemme x300</h4>
                </div>
            </div>
            <div class="stats mt-2">
                <div class="d-flex justify-content-between p-price"><span>Gemmes</span><span>250 €</span></div>
            </div>
            <div class="d-flex justify-content-center total font-weight-bold mt-4 "><a href="{{ url('/product/1') }}"> En savoir plus </a></div>
        
        </div>
    </div>
    <div class="d-flex justify-content-center container mt-5">
        <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
            <div class="about-product text-center mt-2"><img src= "{{URL::asset('img/gemme.png') }}" width="300">
                <div>
                    <h4>Pack gemme x625</h4>
                </div>
            </div>
            <div class="stats mt-2">
                <div class="d-flex justify-content-between p-price"><span>Gemmes</span><span>500 €</span></div>
            </div>
            <div class="d-flex justify-content-center total font-weight-bold mt-4 "><a href="{{ url('/product/1') }}"> En savoir plus </a></div>
        
        </div>
    </div>
    <div class="d-flex justify-content-center container mt-5">
        <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
            <div class="about-product text-center mt-2"><img src= "{{URL::asset('img/gemme.png') }}" width="300">
                <div>
                    <h4>Pack gemme x1300</h4>
                </div>
            </div>
            <div class="stats mt-2">
                <div class="d-flex justify-content-between p-price"><span>Gemmes</span><span>1000 €</span></div>
            </div>
            <div class="d-flex justify-content-center total font-weight-bold mt-4 "><a href="{{ url('/product/1') }}"> En savoir plus </a></div>
        
        </div>
    </div>

</div>   --}}
@endsection
