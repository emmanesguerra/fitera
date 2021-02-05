@include('nav.header')


<div class="container">
    <div class="signup">
        <div class="row">
            <div class='col-12 text-center'>
                <div class="logo">

                </div>
                <h5>Create your account</h5>
                <span>Reserve your digital advertising space and reach your target audience</span>
            </div>
            <form class='col-12'>
                <div class="form-group row">
                    <div class="col-6 pr-0">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Company">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            By clicking Sign In, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>
                        </label>
                    </div>
                </div>
                <div class="form-group mb-0 pb-0">
                    <button class="btn btn-primary btn-sm mb-2" type="submit">SIGN UP</button>
                    <a href="{{ url('login') }}" class="btn btn-default btn-sm" type="submit">LOG IN</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>