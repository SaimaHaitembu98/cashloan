<!DOCTYPE html>
<html>

<head>
    @include('home.css')
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->

        <!-- end header section -->
        <!-- slider section -->
        <style>
            .Maintitle {
                font-size: 20px;
                text-align: center;
                margin-top: 0;
                font-family: Roboto;
                font-weight: 500;
            }
        </style>


        <x-guest-layout>
            <form name="Applyform" class="Applyform" method="POST" action="{{ route('register') }} " id="">
                @csrf
                <div class="row">



                    <div class="ApplyNow" id="apply-now">
                        <h2 class="Maintittle">Apply Now</h2>
                        <p class="Note">Please submit the following information and one of our agents will get in
                            touch with you as soon as possible.</p>

                    </div>
                    <div class="col-xs-12 col-md-5 paddingApply">
                        <input id="name" name="name" class="form-control" placeholder="Name" type="text">
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <input id="surname" name="surname" class="form-control" placeholder="Surname" type="text">
                    </div>

                    <div class="col-xs-12 col-md-5 paddingApply">
                        <input id="loan" name="loan" class="form-control" placeholder="Loan Amount"
                            type="text">
                    </div>

                    <div class="col-xs-12 col-md-7">
                        <input id="months" name="months" class="form-control"
                            placeholder="Installments (1 / 3 Months)" type="text">
                    </div>
                    <div class="col-xs-12 col-md-5 paddingApply">
                        <input id="nationality" name="nationality" class="form-control" placeholder="Nationality"
                            type="text" value="">
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <input id="id" name="id" class="form-control" placeholder="ID / Passport nr">
                    </div>
                    <div class="col-xs-12 col-md-5 paddingApply">
                        <input id="phone" name="phone" class="form-control" placeholder="Cellphone"
                            type="text">
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <input id="email" name="email" class="form-control" placeholder="Email" type="text">
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <label for="bankStatements">Upload: 3 Month's Bank Statements</label>
                        <input type="file" id="bankStatements" name="bankStatements" class="form-control"
                            accept=".pdf, .jpg, .jpeg, .png">
                    </div>

                    <div class="col-xs-12 col-md-12">
                        <label for="idOrPassportCopy">Upload: Photocopy of ID or Passport</label>
                        <input type="file" id="idOrPassportCopy" name="idOrPassportCopy" class="form-control"
                            accept=".pdf, .jpg, .jpeg, .png">
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <label for="payslip">Upload: Payslip</label>
                        <input type="file" id="payslip" name="payslip" class="form-control"
                            accept=".pdf, .jpg, .jpeg, .png">
                    </div>

                    <div class="col-xs-12 text-center">
                        <button class="Submit" type="submit" id="submit">Submit</button>
                    </div>
                </div>

    </div>
    </form>
    </x-guest-layout>













</body>

</html>
