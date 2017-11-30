@extends('layouts.application')

@section('content')
<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper">
    <!-- Search for small screen -->
    <div class="header-search-wrapper grey hide-on-large-only">
        <i class="mdi-action-search active"></i>
        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">DASHBOARD</h5>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!--start container-->
<div class="container">
    <!--card stats start-->
    <div id="card-stats" class="section">
        <p> Veja abaixo os dados do sistema em tempo real.</p>
        <div class="row">
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content  green white-text">
                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Painéis Operando</p>
                        <h4 class="card-stats-number">1</h4>
                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 100% <span class="green-text text-lighten-5"> do sistema</span>
                        </p>
                    </div>
                    <div class="card-action  green darken-2">
                        <div id="clients-bar" class="center-align"></div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content purple white-text">
                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Valor Economizado</p>
                        <h4 class="card-stats-number">R$ 123,45</h4>
                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 95% <span class="purple-text text-lighten-5">aproximado</span>
                        </p>
                    </div>
                    <div class="card-action purple darken-2">
                        <div id="sales-compositebar" class="center-align"></div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content blue-grey white-text">
                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Energia Gerada</p>
                        <h4 class="card-stats-number">123 kWh/mês</h4>
                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">aproximado</span>
                        </p>
                    </div>
                    <div class="card-action blue-grey darken-2">
                        <div id="profit-tristate" class="center-align"></div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content deep-purple white-text">
                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Crédito Utilizado</p>
                        <h4 class="card-stats-number">R$ 140,00</h4>
                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> R$ 900,00 <span class="deep-purple-text text-lighten-5">gerados no mês</span>
                        </p>
                    </div>
                    <div class="card-action  deep-purple darken-2">
                        <div id="invoice-line" class="center-align"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--card stats end-->
</div>
@endsection