@extends('layouts.app2')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">விண்ணப்பதாரர் விவரங்கள்</h3>
            </div>
            <div class="card-body">
                <form class="needs-validation" name="contact-form" novalidate>
                    <!-- Child Information -->
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="childFirstName">குழந்தையின் பெயர்<i style="color: red;"> *</i></label>
                            <input type="text" class="form-control" id="childFirstName" name="childFirstName" required>
                            <div class="invalid-feedback">குழந்தையின் பெயரை வழங்கவும்.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="childLastName">பெற்றோர்/பாதுகாவலர் பெயர்<i style="color: red;"> *</i></label>
                            <input type="text" class="form-control" id="childLastName" name="childLastName" required>
                            <div class="invalid-feedback">பெற்றோர்/பாதுகாவலர் பெயரை வழங்கவும்.</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="childDOB">பிறந்த திகதி<i style="color: red;"> *</i></label>
                            <input type="date" class="form-control" id="childDOB" name="childDOB" required>
                            <div class="invalid-feedback">குழந்தையின் பிறந்த தேதியை வழங்கவும்.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="childGender">பாலினம்<i style="color: red;"> *</i></label>
                            <select class="form-control" id="childGender" name="childGender" required>
                                <option value="" disabled selected>தேர்வு செய்யவும்...</option>
                                <option value="ஆண்">ஆண்</option>
                                <option value="பெண்">பெண்</option>
                            </select>
                            <div class="invalid-feedback">குழந்தையின் பாலினத்தைத் தேர்ந்தெடுக்கவும்.</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="parentEmail">மின்னஞ்சல்</label>
                            <input type="email" class="form-control" id="parentEmail" name="parentEmail">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="parentPhone">தொலைபேசி எண்<i style="color: red;"> *</i></label>
                            <input type="tel" class="form-control" id="parentPhone" name="parentPhone" required>
                            <div class="invalid-feedback">தொலைபேசி எண்ணை வழங்கவும்.</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="parentCountry">நாடு</label>
                            <input type="text" class="form-control" id="parentCountry" name="parentCountry" value="இலங்கை" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="parentDistrict">மாவட்டம்</label>
                            <input type="text" class="form-control" id="parentDistrict" name="parentDistrict" value="யாழ்ப்பாணம்" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">வாழும் பகுதி<i style="color: red;"> *</i></label>
                        <ul>
                            <li class="select-client">
                                <select class="form-control select2-style1" name="livingArea" id="livingArea" required>
                                    <option value="" disabled selected>தேர்வு செய்யவும்...</option>
                                    <option value="வட்டுக்கோட்டை">வட்டுக்கோட்டை</option>
                                    <option value="அராலி">அராலி</option>
                                    <option value="சங்கானை">சங்கானை</option>
                                    <option value="சுழிபுரம்">சுழிபுரம்</option>
                                    <option value="மூளாய்">மூளாய்</option>
                                </select>
                                <div class="invalid-feedback">வாழும் பகுதியை தேர்ந்தெடுக்கவும்.</div>
                            </li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <label class="ckbox">
                            <input type="checkbox" id="agreeTerms" name="agreeTerms" required>
                            <span class="text-13">நான் விதிகள் மற்றும் நிபந்தனைகளை ஒப்புக்கொள்கிறேன்<i style="color: red;"> *</i></span>
                            <div class="invalid-feedback">சமர்ப்பிக்கும் முன் நீங்கள் ஒப்புக்கொள்ள வேண்டும்.</div>
                        </label>
                    </div>
                    <input class="btn btn-primary" type="submit" value="விண்ணப்பத்தை சமர்ப்பிக்கவும்">
                    <!-- <button class="btn btn-primary" type="submit">விண்ணப்பத்தை சமர்ப்பிக்கவும்</button> -->
                </form>
            </div>
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