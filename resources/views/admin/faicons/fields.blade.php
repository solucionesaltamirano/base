<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::text('value', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Categoryfaicon Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoryfaicon_id', 'Categoryfaicon Id:') !!}
    {!! Form::number('categoryfaicon_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('faicons.index') }}" class="btn btn-default">Cancel</a>
</div>
