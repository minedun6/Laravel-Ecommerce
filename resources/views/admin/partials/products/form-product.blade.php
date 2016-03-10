<div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}" xmlns:http="http://www.w3.org/1999/xhtml">
    <label class="col-md-4 control-label">Product Code :</label>

    <div class="col-md-6">
        {!! Form::text('code', null, ['class' => 'form-control']) !!}

        @if ($errors->has('code'))
            <span class="help-block">
                  <strong>{{ $errors->first('code') }}</strong>
              </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Product Category :</label>

    <div class="col-md-6">
        {!! Form::select('category_id', App\Category::pluck('name','id'), null ,['class' => 'form-control']) !!}

        @if ($errors->has('category_id'))
            <span class="help-block">
                  <strong>{{ $errors->first('category_id') }}</strong>
              </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Product Name :</label>

    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}

        @if ($errors->has('title'))
            <span class="help-block">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Product Price :</label>

    <div class="col-md-6">
        {!! Form::text('price', null, ['class' => 'form-control']) !!}

        @if ($errors->has('price'))
            <span class="help-block">
                  <strong>{{ $errors->first('price') }}</strong>
              </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Product Description :</label>

    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => "5"]) !!}

        @if ($errors->has('description'))
            <span class="help-block">
                  <strong>{{ $errors->first('description') }}</strong>
              </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('qty') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Quantity :</label>

    <div class="col-md-6">
        {!! Form::text('qty', null, ['class' => 'form-control qty']) !!}

        @if ($errors->has('qty'))
            <span class="help-block">
                <strong>{{ $errors->first('qty') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Product Photo :</label>

    <div class="col-md-6">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                <?php $photo = !is_null($product->img) ? 'uploads/'.$product->img : "http://placehold.it/200x150" ?>
                {!! Html::image($photo, $product->title) !!}
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail"
                 style="max-width: 200px; max-height: 150px;"></div>
            <div>
                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span
                            class="fileinput-exists">Change</span>{!! Form::file('img') !!}</span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
        </div>

        @if ($errors->has('img'))
            <span class="help-block">
                  <strong>{{ $errors->first('img') }}</strong>
              </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button id="create-product" type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Save</button>
    </div>
</div>