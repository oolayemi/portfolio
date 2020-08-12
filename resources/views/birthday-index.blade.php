<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Olayemi</title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
</head>
<body class="">
<div class="row justify-content-center">
    <div class="main_container">
        <div class="align-self-center">
            <div class="page-title">
                <div style="text-align: center">
                    <h3>Happy Birthday Olayemi!</h3>
                </div>


            </div>


            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form action="{{route('birthday.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <p style="color: black; font-weight: bold; font-style: italic; text-align: center; font-size: 20px">Today is Olayemi's birthday. Send him a wish</p>
                                <span style="text-align: center" class="section">Personal Info</span>
                                <div class="field item form-group">
                                    <label for="name" class="col-form-label col-md-2 col-sm-3  label-align">Name<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6">
                                        <input class="form-control"
                                               data-validate-length-range="12"
                                               data-validate-words="2"
                                               name="name"
                                               id="name"
                                               placeholder="ex. Olayemi Olaomo"
                                               required="required" />
                                    </div>
                                </div>

                                <div class="field item form-group">
                                    <label for="email" class="col-form-label col-md-2 col-sm-3 label-align">email<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6">
                                        <input class="form-control"
                                               name="email"
                                               id="email"
                                               required="required"
                                               type="email"/>
                                    </div>
                                </div>

                                <div class="field item form-group">
                                    <label for="message"
                                           class="col-form-label col-md-2 col-sm-3  label-align">message<span
                                            class="required">*</span></label>
                                    <div class="col-md-10 col-sm-6">
                                            <textarea id="message"
                                                      class="form-control"
                                                      required="required"
                                                      name='message'></textarea>
                                    </div>
                                </div>
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{asset('vendors/validator/multifield.js')}}"></script>
<script src="{{asset('vendors/validator/validator.js')}}"></script>

<script>
    // initialize a validator instance from the "FormValidator" constructor.
    // A "<form>" element is optionally passed as an argument, but is not a must
    var validator = new FormValidator({ "events": ['blur', 'input', 'change'] }, document.forms[0]);
    // on form "submit" event
    document.forms[0].onsubmit = function (e) {
        var submit = true,
            validatorResult = validator.checkAll(this);
        console.log(validatorResult);
        return !!validatorResult.valid;
    };
    // on form "reset" event
    document.forms[0].onreset = function (e) {
        validator.reset();
    };
    // stuff related ONLY for this demo page:
    $('.toggleValidationTooltips').change(function () {
        validator.settings.alerts = !this.checked;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);
</script>

<!-- jQuery -->
<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
<!-- validator -->
<script src="{{asset('vendors/validator/validator.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('build/js/custom.min.js')}}"></script>
</body>
</html>
