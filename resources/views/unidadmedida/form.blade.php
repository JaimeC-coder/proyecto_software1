<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idUnidadmedida') }}
            {{ Form::text('idUnidadmedida', $unidadmedida->idUnidadmedida, ['class' => 'form-control' . ($errors->has('idUnidadmedida') ? ' is-invalid' : ''), 'placeholder' => 'Idunidadmedida']) }}
            {!! $errors->first('idUnidadmedida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('umednombre') }}
            {{ Form::text('umednombre', $unidadmedida->umednombre, ['class' => 'form-control' . ($errors->has('umednombre') ? ' is-invalid' : ''), 'placeholder' => 'Umednombre']) }}
            {!! $errors->first('umednombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>