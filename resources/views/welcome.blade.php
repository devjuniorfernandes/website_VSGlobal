@extends('layouts.main')

@section('tile', 'VS Global - Pagina Inicial')

@section('content')
    <div class="bannerHeader">
        <div class="mainspace">
            <div class="padtop50"></div>
            <div class="padtop50"></div>
            <div class="texthBanner">
                <h1>Ligamos Angola com Canadá, México e Irlanda</h1>
                <br>
                <h3>A VS Global é uma prestadora oficial de processamento de serviços 
                    consulares independente e vistos do Canadá, México e Irlanda.</h3>
            </div>
            <div class="padtop50"></div>
            <div class="padtop50"></div>
            <div class="cardHome row row-cols-1 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pedido de Visto</h5>
                            <p class="card-text">Faça um agendamento online e fale connosco
                            </p>
                            <a href="/infovisa" class="btn btn-primary">Faça Agora</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Agendamento</h5>
                            <p class="card-text">Faça um agendamento online e fale connosco
                            </p>
                            <a href="/infovisa" class="btn btn-primary">Agendar
                                Agora</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Serviços Premium</h5>
                            <p class="card-text">Faça um agendamento online e fale connosco</p>
                            <a href="/premium" class="btn btn-primary">Conferir
                                Serviços</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padtop50"></div>
        </div>
    </div>
    <main>
        <div class="bannerpromo mainspace">
            <h1>Serviços de apoio administrativo a requerentes de vistos em Angola</h1>
        </div>
    </main>
@endsection
