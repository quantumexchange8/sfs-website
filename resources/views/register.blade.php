@extends('layouts.master')

@section('contents')
<!-- register-section -->
<section class="register">
    <div class="entry-content-wrapper clearfix">
        <header class="entry-content-header"></header>
        <div class="entry-content" itemprop="text">
            <h2 class="card-title fw-bold mb-1">Welcome to SFS Consultants</h2>
            <p class="card-text mb-2">Please fill in below form to create your account</p>
            <div class="wrapper">
                <form class="signup-form form" method="post" action="/register/new-account/#jump"
                    enctype="multipart/form-data" novalidate="">

                    <div class="form-row first_name">
                        <div class="form-label">
                            <label for="user_first_name1">First Name:*</label>
                            <span class="cc-error">First Name Required</span>
                        </div>
                        <input type="text" name="user_first_name" id="user_first_name1" class="form-input" value=""
                            required="">
                    </div>
                    <div class="form-row last_name">
                        <div class="form-label">
                            <label for="user_last_name1">Last Name:*</label>
                            <span class="cc-error">Last Name Required</span>
                        </div>
                        <input type="text" name="user_last_name" id="user_last_name1" class="form-input" value=""
                            required="">
                    </div>
                    <div class="form-row custom_field registered_account_title">
                        <div class="form-label">
                            <label for="registered_account_title1">Registered account title:</label>
                            <span class="cc-error">Registered account title is not valid</span>
                        </div>
                        <input type="text" name="registered_account_title" id="registered_account_title1"
                            class="form-input " value="">
                    </div>

                    <div class="form-row custom_field telephone">
                        <div class="form-label">
                            <label for="telephone1">Telephone:*</label>
                            <span class="cc-error">Telephone is Required</span>
                        </div>
                        <input type="text" name="telephone" id="telephone1" class="form-input " value="" required="">
                    </div>

                    <div class="form-row custom_field fax">
                        <div class="form-label">
                            <label for="fax1">Fax:</label>
                            <span class="cc-error">Fax is not valid</span>
                        </div>
                        <input type="text" name="fax" id="fax1" class="form-input " value="">
                    </div>

                    <div class="form-row custom_field bank_account_location_e_g_united_states_hong_kong">
                        <div class="form-label">
                            <label for="bank_account_location_e_g_united_states_hong_kong1">Primary Bank account
                                location e.g. United States, Hong Kong:</label>
                            <span class="cc-error">Primary Bank account location e.g. United States, Hong Kong is
                                not
                                valid</span>
                        </div>
                        <input type="text" name="bank_account_location_e_g_united_states_hong_kong"
                            id="bank_account_location_e_g_united_states_hong_kong1" class="form-input " value="">
                    </div>

                    <div class="form-row custom_field bank_account_name">
                        <div class="form-label">
                            <label for="bank_account_name1">Primary Bank account name:</label>
                            <span class="cc-error">Primary Bank account name is not valid</span>
                        </div>
                        <input type="text" name="bank_account_name" id="bank_account_name1" class="form-input "
                            value="">
                    </div>

                    <div class="form-row custom_field bank_account_number">
                        <div class="form-label">
                            <label for="bank_account_number1">Primary Bank account number:</label>
                            <span class="cc-error">Primary Bank account number is not valid</span>
                        </div>
                        <input type="text" name="bank_account_number" id="bank_account_number1" class="form-input "
                            value="">
                    </div>

                    <div class="form-row custom_field bank_sort_code">
                        <div class="form-label">
                            <label for="bank_sort_code1">Primary Bank sort code:</label>
                            <span class="cc-error">Primary Bank sort code is not valid</span>
                        </div>
                        <input type="text" name="bank_sort_code" id="bank_sort_code1" class="form-input " value="">
                    </div>

                    <div class="form-row username">
                        <div class="form-label">
                            <label for="user_login1">Username:*</label>
                            <span class="cc-error">Invalid Username</span>
                        </div>
                        <input type="text" name="user_login" id="user_login1" class="form-input" value="" required="">
                    </div>
                    <div class="form-row email">
                        <div class="form-label">
                            <label for="user_email1">Email:*</label>
                            <span class="cc-error">Invalid Email</span>
                        </div>
                        <input type="email" name="user_email" id="user_email1" class="form-input" value="" required="">
                    </div>

                    <div class="form-row password">
                        <div class="form-label">
                            <label for="user_password1">Password:*</label>
                            <span class="cc-error">Invalid Password</span>
                        </div>
                        <input type="password" name="user_password" id="user_password1"
                            class="password-field form-control form-text required password-processed" value=""
                            required="">
                    </div>

                    <div class="form-row password_confirm">
                        <div class="form-label">
                            <label for="user_password_confirm1">Password Confirmation:*</label>
                            <span class="cc-error">Password Confirmation Doesn't Match</span>
                        </div>
                        <input type="password" name="user_password_confirm" id="user_password_confirm1"
                            class="password-confirm form-control form-text required" value="" required="">
                    </div>


                    <div class="form-row password-strength-area">
                        <span class="password-strength-display nopass">Password Strength</span>

                        <span>&nbsp;<small><em>Password must be "Strong" or stronger</em></small></span>

                        <input type="hidden" name="pass-strength" class="pass-strength" value="0">
                    </div>

                    <input type="hidden" name="coupon_code" value="">

                    <div class="form-row tos">
                        <span class="cc-error">It is mandatory to read this</span>
                        <label for="agree_to_tos1" class="checkbox-field form-input" required="">
                            <input type="checkbox" name="agree_to_tos" id="agree_to_tos1" required="" value="">
                            <a href="/disclaimer/" target="_blank" rel="noopener noreferrer">I have read and agree
                                to the Terms Of Service</a>*
                        </label>
                    </div>

                    <div class="form-submit">
                        <button class="btn btn-primary w-100 waves-effect waves-float waves-light"
                            tabindex="4">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- register-section end -->
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // Function to validate the form on submission
        $('.signup-form').on('submit', function (event) {
            var formHasErrors = false;

            // Check each input field for validation
            $('.form-row input, .form-row select').each(function () {
                var input = $(this);
                var error = $(this).closest('.form-row').find('.cc-error');

                if (input.prop('required') && input.val().trim() === '') {
                    error.show();
                    formHasErrors = true;
                } else {
                    error.hide();
                }
            });

            // Checkbox validation
            var agreeToTOS = $('#agree_to_tos1').is(':checked');
            var tosError = $('.form-row.tos .cc-error');

            if (!agreeToTOS) {
                tosError.show();
                formHasErrors = true;
            } else {
                tosError.hide();
            }

            // Show or hide the form-has-errors message based on the formHasErrors flag
            if (formHasErrors) {
                $('.form-has-errors').show();
                event.preventDefault();
            } else {
                $('.form-has-errors').hide();
            }
        });

        // Function to hide error messages when the input/select value changes
        $('.form-row input, .form-row select').on('input', function () {
            var error = $(this).closest('.form-row').find('.cc-error');
            if ($(this).prop('required') && $(this).val().trim() !== '') {
                error.hide();
            }
        });

        // Checkbox change event to hide the error on check
        $('#agree_to_tos1').on('change', function () {
            var tosError = $('.form-row.tos .cc-error');
            if ($(this).is(':checked')) {
                tosError.hide();
            }
        });
    });
</script>
@endsection