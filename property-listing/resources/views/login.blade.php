@include('nav.header')


<div class="container">
    <div class="login">
        <div class="row">
            <div class='col-12 text-center'>
                <div class="logo">
                    
                </div>
                <h5>Login to your account</h5>
                <span>Or create an account now <a href="{{ url('signup') }}">Sign Up</a></span>
            </div>
            <form class='col-12'>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Password">
                </div>

                <div class="form-group row">
                    <div class="col-7">
                        <label class="form-check-label" for="invalidCheck">
                            <a href="#">Forgot your password?</a>
                        </label>
                    </div>
                    <div class="col-5">
                        <a href="{{ url('/') }}" class="btn btn-primary btn-sm" type="submit">LOG IN</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>