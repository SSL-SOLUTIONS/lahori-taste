@extends('layouts.website')
@section('content')

<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
<div class="container">
    <h1 class="text-center">Payment Details</h1>
    <div class="row">
        <div style="border: 2px solid rgba(238, 238, 238, 1); margin-bottom: 10px;" class="col-md-6 offset-md-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading">
                    <h3 class="panel-title">Payment Details</h3>
                </div>
                <div class="panel-body">
                    @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif
                    <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf

                        <div class="form-row row">
                            <div class="col-md-12 form-group required">
                                <label class="control-label">Name on Card</label>
                                <input class="form-control" type="text" name="name_on_card">
                            </div>
                        </div>

                        <div class="form-row row">
                            <div class="col-md-12 form-group card required">
                                <label class="control-label">Card Number</label>
                                <input autocomplete="off" class="form-control card-number" type="text" name="card_number">
                            </div>
                        </div>

                        <div class="form-row row">
                            <div class="col-md-4 form-group cvc required">
                                <label class="control-label">CVC</label>
                                <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" type="number" maxlength="4" name="card_cvc">
                            </div>
                            <div class="col-md-4 form-group expiration required">
                                <label class="control-label">Expiration Month</label>
                                <input class="form-control card-expiry-month" placeholder="MM" type="number" maxlength="2" name="card_expiry_month">
                            </div>
                            <div class="col-md-4 form-group expiration required">
                                <label class="control-label">Expiration Year</label>
                                <input class="form-control card-expiry-year" placeholder="YYYY" type="number" maxlength="4" name="card_expiry_year">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">${{ $totalPrice }}
                                    Pay Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {

        /*------------------------------------------
        --------------------------------------------
        Stripe Payment Code
        --------------------------------------------
        --------------------------------------------*/

        var $form = $(".require-validation");

        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        /*------------------------------------------
        --------------------------------------------
        Stripe Response Handler
        --------------------------------------------
        --------------------------------------------*/
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];

                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
@endsection