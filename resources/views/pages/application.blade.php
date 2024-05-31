@extends('layouts.app')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header border-bottom">
            <h3 class="card-title">Custom Validation</h3>
        </div>
        <div class="card-body">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <label for="validationCustom011">First name</label>
                        <input type="text" class="form-control" id="validationCustom011" value="Mark" required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <label for="validationCustom12">Last name</label>
                        <input type="text" class="form-control" id="validationCustom12" value="Otto" required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <label for="validationCustom13">City</label>
                        <input type="text" class="form-control" id="validationCustom13" required>
                        <div class="invalid-feedback">Please provide a valid city.</div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <label for="validationCustom14">State</label>
                        <select class="form-select" id="validationCustom14" data-placeholder="select state" required>
                            <option label="Choose"></option>
                            <option>New york</option>
                            <option>USA</option>
                            <option>Berlin</option>
                            <option>Manchester</option>
                            <option>Flynn</option>
                        </select>
                        <div class="invalid-feedback">Please select a valid state.</div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-3">
                        <label for="validationCustom15">Zip</label>
                        <input type="number" class="form-control" id="validationCustom15" required>
                        <div class="invalid-feedback">Please provide a valid zip.</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="ckbox">
                        <input type="checkbox" id="invalidCheck3" required>
                        <span class="text-13">I agree terms and conditions</span>
                    </label>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection