<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', ]) !!}
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', ]) !!}
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('user_id', 'Userid:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control', ]) !!}
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tag_list','Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>


<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')
    <script type="text/javascript">
        $('#tag_list').select2({
            placeholder: 'Choose a tag'
        });
    </script>
@endsection