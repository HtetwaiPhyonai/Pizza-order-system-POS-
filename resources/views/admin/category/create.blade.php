@extends('admin.layouts.app')

@section('title', 'Catergory Create page')

@section('content')
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                    <div class="header-wrap">
                        <h3 class="">Admin Deshboard Create Page</h3>

                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <form class="form-header" action="" method="POST">
                        <input class="au-input au-input--xl" type="text" name="search"
                            placeholder="Search for datas &amp; reports..." />
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <div class="row">
                        <div class="col-3 offset-8">
                            <a href="{{ route('category#list') }}"><button class="btn bg-dark text-white my-3">List</button></a>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">Category Form</h3>
                                </div>
                                <hr>
                                <form action="{{ route ('category#store') }}" method="post" novalidate="novalidate">
                                    @csrf
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Name 
                                            @error('name')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </label>
                                        <input id="cc-pament" name="name" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Seafood...">
                                    </div>

                                    <div>
                                        <button id="payment-button" type="submit"  class="btn btn-lg btn-info btn-block">
                                            <span id="payment-button-amount">Create</span>
                                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            <i class="fa-solid fa-circle-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>
@endsection