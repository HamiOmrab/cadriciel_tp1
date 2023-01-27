@extends('layouts.app')
@section('title', 'Ajouter étudient')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="display-one mt-5">
  <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Ajouter un étudient</h2>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->
                
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center m-2">
        <div class="col-6">
            <div class="card">
            <form method="post">
                    @csrf
                    <div class="card-header">
                        Formulaire
                    </div>
                    <div class="card-body">
                        <div class="control-group col-12">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="email">email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="phone">phone</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="adresse">adresse</label>
                            <input type="text" id="adresse" name="adresse" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="date_de_naissance">date de naissance</label>
                            <input type="text" id="date_de_naissance" name="date_de_naissance" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Ajouter" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection