@extends('layouts.app')
@section('content')
<section id="hero"  style="background-image: url('{{ asset('app-assets/images/banner2.jpg')}}');" >
        <div class="container">
            <div class="content-center">
                <h1 class="margintop-lg">Aprende a tu ritmo</h1>
                <p>Estudia cualquier tema en cualquier momento. Elige ahora entre miles de cursos impartidos por expertos.Crea una biblioteca para tu carrera y crecimiento personal</p>
                <a href="#" class="btn btn-secondary margintop-sm">Registrate<i class="icon ion-md-arrow-dropright-circle colorDark"></i></a>
            </div>
        </div>
    </section>

    <section id="team" class="bgLightGrey">
        <div class="container">
            <div class="content-center">
                <h2>Nuestros Instructores</h2>
             
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="member-container">
                        <div class="member-details">
                            <h5>Michelle B. Rowe</h5>
                            <span>Creative director</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-instagram"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                            </ul>
                        </div>
                        <img src="{{ asset('app-assets/images/member-01.jpg')}}" class="img-fluid" alt="member 1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="member-container">
                        <div class="member-details">
                            <h5>Veronica D. Martin</h5>
                            <span>Lead designer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-instagram"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                            </ul>
                        </div>
                        <img src="{{ asset('app-assets/images/member-02.jpg')}}" class="img-fluid" alt="member 2">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="member-container">
                        <div class="member-details">
                            <h5>Richard A. Hair</h5>
                            <span>Lead developer</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-instagram"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                            </ul>
                        </div>
                        <img src="{{ asset('app-assets/images/member-03.jpg')}}" class="img-fluid" alt="member 3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 margintop-sm">
                    <h3>Quieres ser instructor? <b>Comunicate con nosotros.</b></h3>
                    <p>Si quieres ser instrutor y ofrecer tus cursos envianos tus datos de contacto y te responderemos con la informacion que necesites.</p>
                </div>
                <div class="col-md-6 margintop-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Compañia">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" class="form-control" id="" placeholder="Numero de telefono (optional)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="btn success full-width">Enviar contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


 
@endsection