<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $peticion?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $peticion?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="item" class="form-label">{{ __('Item') }}</label>
            <input type="text" name="item" class="form-control @error('item') is-invalid @enderror" value="{{ old('item', $peticion?->item) }}" id="item" placeholder="Item">
            {!! $errors->first('item', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad', $peticion?->cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="aprobado" class="form-label">{{ __('Aprobado') }}</label>
            <input type="text" name="aprobado" class="form-control @error('aprobado') is-invalid @enderror" value="{{ old('aprobado', $peticion?->aprobado) }}" id="aprobado" placeholder="Aprobado">
            {!! $errors->first('aprobado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="time" class="form-label">{{ __('Hora') }}</label>
            <input type="text" name="time" class="form-control @error('time') is-invalid @enderror" value="{{ old('time', $peticion?->time) }}" id="time" placeholder="Time">
            {!! $errors->first('time', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $peticion?->date) }}" id="date" placeholder="Date">
            {!! $errors->first('date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Crear Peticion') }}</button>
    </div>
</div>