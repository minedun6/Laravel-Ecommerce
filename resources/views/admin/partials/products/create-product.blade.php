{!! Form::model($product, ['route' => 'admin.products.store', 'class' => 'form-horizontal']) !!}

  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
      <label class="col-md-4 control-label">Product Name :</label>

      <div class="col-md-6">
          <input type="text" class="form-control" name="title" value="{{ old('title') }}">

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
          <input type="text" class="form-control" name="price" value="{{ old('price') }}">

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
          <textarea class="form-control" name="description" value="{{ old('description') }}"></textarea>
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
          <input type="text" class="form-control" name="qty" value="{{ old('qty') }}">

          @if ($errors->has('qty'))
              <span class="help-block">
                  <strong>{{ $errors->first('qty') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
      <button type="submit" class="btn btn-primary"> <i class="fa fa-save fa-fw"></i> Save</button>
    </div>
  </div>

  {!! Form::close() !!}
