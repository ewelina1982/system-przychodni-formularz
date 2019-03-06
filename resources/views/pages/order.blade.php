@extends('main')
@section('content')

    <div class="container-fluid bcolor">
        <div class="row">
            <div class="col text-center">
                <h3>Zamawianie recept</h3>
                <p>Drogi Pacjencie prosimy o wypełnienie wszystkich pól. <u>Ilość wypisanych leków zawsze po 2 opakowania</u></u>. <i>Odbiór recepty na drugi dzień roboczy.</i></p>
                <p><i>PACJĘCIE JEŻELI SAM NIE MOŻESZ ODEBRAĆ RECEPTY WYDRUKUJ UPOWAŻNIENIE I DAJ OSOBIE KTÓRA TĄ RECEPTĘ BĘDZIE ODBIERAŁA <a class="service text-danger" href="{{asset('upowaznienie.docx')}}">UPOWAŻNIENIE</a></i></p>
            </div>
        </div>
    </div>

    @if(session('message'))
        <div class="container-fluid bcolor">
            <div class="row">
                <div class="col text-center">
        <div class="alert-success alerts">
        {{session('message')}}
        </div>
                </div>
            </div>
        </div>
    @endif

{{--@if(count($errors)>0)--}}
    {{--<ul>--}}
        {{--@foreach($errors->all() as $error)--}}
            {{--<li>{{$error }}</li>--}}
            {{--@endforeach--}}
    {{--</ul>--}}
    {{--@endif--}}

    <div class="container-fluid bcolor">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{url('/order')}}" id="order">
                    {{csrf_field()}}
                    <div class="form-group w-50">
                        <label for="name">Imię<span>*</span></label>
                        <input type="text" name="name" class="form-control clear" id="name"  placeholder="Imię">
                        <p class="hide text-danger name">Nie poprawne imię lub jego brak</p>
                    </div>
                    <div class="form-group w-50">
                        <label class="mt-2" for="surname">Nazwisko<span>*</span></label>
                        <input type="text" name="surname" class="form-control clear" id="surname"  placeholder="Nazwisko">
                        <p class="hideSurname text-danger name">Nie poprawne nazwisko lub jego brak</p>
                    </div>
                    <div class="data form-group w-50">
                        <label class="mt-2" for="data">Podaj datę urodzenia<span>*</span></label>
                        <input type="text" name="data" class="form-control clear" id="data" placeholder="Podaj datę yyyy-mm-dd">
                        <p class="hideData text-danger name">Nie poprawna data urodzenia lub jej brak</p>
                    </div>
                    <div class="form-group w-50">
                        <label class="mt-2" for="drug">Podaj leki<span>*</span></label>
                        <textarea type="text" name="drug" class="form-control clear" id="drug" placeholder="Podaj leki"></textarea>
                        <p class="hideDrug text-danger name">Brak nazwy leków</p>
                    </div>
                    <p class="mt-2 info">Informujemy, że wszystkie państwa dane będą przetwarzane tylko przez Indywidualna Praktykę Lekarską ul.Słowackiego 7 82-300 Elbląg</p>
                    <div class="g-recaptcha" data-sitekey="6LcehIcUAAAAAKAGh1RiMIIsj7jsE6N_MH5uBLR2"></div>
                    <button type="submit" id="sendBtn" class="btn btn-primary sendBtn mt-3 mb-2">Wyślij</button>
                    {{--<button type="submit" id="clearBtn" class="btn clearBtn mt-3 mb-2">Wyczyść</button>--}}
                </form>

            </div>
        </div>
    </div>

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src={{asset('js/script.js')}}></script>
@endsection