@extends('adminlte::page')

@section('title', 'Cadastro de Concessionarias')

@section('content_header')


@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Concessionarias</h3>
        </div>
        <div class="card-body"s>
            <div class=" form-group">

                @if (isset($power_supplier->id))
                    <form method="post" action="{{ route('power-supplier.update', ['power_supplier' => $power_supplier->id]) }}">
                        @csrf
                        @method('PUT')
                    @else
                        <form method="post" action="{{ route('power-supplier.store') }}">
                            @csrf
                @endif

                <label for="power_supplier">Concessionária</label>
                <input type="text" class="form-control" id="power_supplier" name="power_supplier" placeholder=""
                    value="{{ $power_supplier->power_supplier ?? old('power_supplier') }}">
                @if ($errors->has('power_supplier'))
                    <span style="color: red;">
                        {{ $errors->first('power_supplier') }}
                    </span>
                @endif
                <br>

                <label>Status</label>
                <select class="form-control" name="is_active" id="is_active">
                    <option value="0" {{ @$power_supplier->is_active == 0 ? 'selected' : '' }}>Inativo
                    </option>
                    <option value="1" {{ @$power_supplier->is_active == 1 ? 'selected' : '' }}>Ativo
                    </option>
                </select>
                @if ($errors->has('is_active'))
                    <span style="color: red;">
                        {{ $errors->first('is_active') }}
                    </span>
                @endif
                <br>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{ route('power-supplier.index') }}" type="button" class="btn btn-secondary">Voltar</a>
        </div>
        </form>

    </div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
    <script src="{{ asset('vendor/jquery/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.maskMoney.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        f

        $(document).ready(function() {

            

        });
    </script>
@stop