@extends('layouts.master')

@section('contents')
<!-- login-section -->
<section class="login">
    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
            <h2 class="card-title fw-bold mb-1">Welcome to SFS Consultants</h2>
            <p class="card-text mb-2">Please sign-in to your account</p>
            <form class="auth-login-form mt-2" method="POST" novalidate="novalidate">
                <input type="hidden" name="csrfmiddlewaretoken"
                    value="ha689hnNGvjxfzg3uRxXH8s3J06aFlmUKuMNa6FZqxH6yjI0y2IcgiUWn7D61dZq">
                <input name="next" type="hidden" value="/en/accounts/dashboard/">
                <div class="mb-1">
                    <label for="login-username" class="form-label">Username/Email address</label>
                    <input type="text" class="form-control" id="login-username" name="username"
                        placeholder="Your username/email address" aria-describedby="login-username" tabindex="1"
                        autofocus="">
                </div>
                <div class="mb-1">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="login-password">Password</label>
                    </div>
                    <div class="input-group input-group-merge form-password-toggle">
                        <input type="password" class="form-control form-control-merge" id="login-password"
                            name="password" tabindex="2" placeholder="" aria-describedby="login-password">
                    </div>
                </div>
                <button class="btn btn-primary w-100 waves-effect waves-float waves-light" tabindex="4">Sign in</button>
            </form>
            <div class="mt-1">
                <a href="#" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title=""
                    data-bs-html="true"
                    data-bs-content="<a href='/en/contacts/create/' class='text-decoration-underline' target='_blank' rel='noopener noreferrer'>Contact us</a> to reset password."
                    data-bs-original-title="Forgot password?">
                    Forgot Password ?
                </a>
            </div>
            <div class="divider my-2">
                <div class="divider-text">or</div>
            </div>
            <p class="text-center mt-2">
                <span>New on our platform?</span>
                <a href="{{ url('register') }}">Apply here</a>
            </p>
        </div>
    </div>
</section>
<!-- login-section end -->
@endsection