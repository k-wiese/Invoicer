@extends('layouts.app')

@section('content')
        <!-- Contact Section-->
        <section class="masthead page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Add new invoice</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            {{csrf_field()}}
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="number" type="text" placeholder="Invoice Number" data-sb-validations="required" name="number" />
                                <label for="name">Number</label>
                                <div class="invalid-feedback" >A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="date" type="text" placeholder="Date" data-sb-validations="Enter Date" name="date"/>
                                <label for="email">Date</label>
                                <div class="invalid-feedback" >Date is required.</div>
                                <div class="invalid-feedback" >Date is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="total" name="total" type="text" placeholder="Invoice total" data-sb-validations="required" />
                                <label for="phone">Total</label>
                                <div class="invalid-feedback" >Total is not valid.</div>
                            </div>
                          
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Add new invoice</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection