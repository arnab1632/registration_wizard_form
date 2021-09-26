<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="test.css">

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                <form id="regForm">
                    <div class="all-steps" id="all-steps">
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                    <div class="tab">
                        <div class="counter">
                            <p>1/3</p>
                        </div>
                        <p>Please fill with your details</p>
                        <input type="text" placeholder="First Name" id="formfname" class="inputs" oninput="this.className = ''" name="fname">
                        <input type="text" placeholder="Last Name" id="formlname" class="inputs" oninput="this.className = ''" name="lname">
                        <span id="email-error"></span>
                        <input type="text" placeholder="Your Email" class="inputs" id="formemail" oninput="this.className = ''" name="email" onkeyup='checkEmail();'>
                        <select name="country" id="formcountry" class="inputs" onselect="this.className = ''">
                            <option >Your Country</option>
                            <option value="Asia">Asia</option>
                            <option value="Australia">Australia</option>
                            <option value="Europe">Europe</option>
                            <option value="North America">North America</option>
                            <option value="South America">South America</option>
                        </select>
                        <input type="checkbox" id="t&c" name="t&c" class="inputs">
                        <label for="t&c"> Please accept our <a href="#">Terms & conditons</a></label>
                        <hr>
                    </div>

                    <div class="tab">
                        <div class="counter">
                            <p>2/3</p>
                        </div>
                        <p>Please provide your account details</p>
                        <input type="text" placeholder="Username" id="formuname" class="inputs" oninput="this.className = ''" name="uname" >
                        <input type="password" placeholder="Password" id="formpass" class="inputs" oninput="this.className = ''" name="pass" onkeyup='check();'>
                        <input type="password" placeholder="Confirm Password" id="formcpass" class="inputs" oninput="this.className = ''" name="cpass" onkeyup='check();'>
                        <span id="pass-error"></span>
                        <hr>
                    </div>

                    <div class="tab">
                        <div class="counter">
                            <p>3/3</p>
                        </div>
                        <p>Summary</p>
                        <div class="heading">
                            <span>1</span>
                            <p>Personal Details<p>
                        </div>
                        <div class="alldetails">
                            <div class="details">
                                <p>First Name: </p>
                                <span id="fname"></span>
                            </div>
                            <div class="details">
                                <p>Last Name: </p>
                                <span id="lname"></span>
                            </div>
                            <div class="details">
                                <p>Email: </p>
                                <span id="email"></span>
                            </div>
                            <div class="details">
                                <p>Country: </p>
                                <span id="country"></span>
                            </div>
                        </div>
                        <hr>
                        <div class="heading">
                            <span>2</span>
                            <p>Account Details<p>
                        </div>
                        <div class="alldetails">
                            <div class="details">
                                <p>Username: </p>
                                <span id="uname"></span>
                            </div>
                            <div class="details">
                                <p>Password: </p>
                                <span id="password"></span>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="thanks-message text-center" id="text-message">
                        <img src="thanks.png" width="100">
                        <h3>Thanks for your information!</h3>
                        <span>Your information has been saved!</span>
                    </div>

                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="test.js"></script>

</body>

</html>