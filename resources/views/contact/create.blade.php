<form action="{{ route('contact.store') }}" method="POST" class="text-dark">
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="name">Name</label>
        <div class="col-sm-8">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
        </div>
        <div>{{ $errors->first('name') }}</div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="email">Email</label>
        <div class="col-sm-8">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        </div>
        <div>{{ $errors->first('email') }}</div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" for="phone">Phone Number</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" required>
        </div>
        <div>{{ $errors->first('phone') }}</div>
    </div>
    <div class="form-group">
        <label class="col-sm m-0 p-0 col-form-label" for="description">What Are You Looking For?</label>
        <div class="col-sm m-0 p-0">
            <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div>{{ $errors->first('description') }}</div>
    </div>
    @csrf
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mt-2">Send</button>
    </div>
</form>
