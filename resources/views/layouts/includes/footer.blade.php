<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-2">
                <div class="foot-box">
                    <h6>QUICK LINKS</h6>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foot-box">
                    <h6>LEGAL STUFF</h6>
                    <ul>
                        <li>Terms of use</li>
                        <li>Cookies</li>
                        <li>Privacy Policy</li>
                        <li>Security Policy</li>
                        <li>Money back Guarantee</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foot-box">
                    <h6>OUR LOCATIONS</h6>
                    <ul>
                        <li>Boston</li>
                        <li>Chicago</li>
                        <li>London</li>
                        <li>Los Angeles</li>
                        <li>New York</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="subscribe">
                    <h6>SUBSCRIBE</h6>
                    <form class="form-inline" action="booking.html">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <input type="email" class="form-control subscribe-form" id="inlineFormInputGroup" placeholder="Enter your email">
                            <button type="submit" class="input-group-addon subscribe-btn"><span class="pe-7s-angle-right"></span></button>
                        </div>
                    </form>
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <a href="#">&copy; 2016 Cleanly. All rights reserved</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--//END FOOTER -->

<!-- jQuery, Bootstrap JS. -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset ('app-assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset ('app-assets/js/popper.min.js')}}"></script>
<script src="{{asset ('app-assets/js/bootstrap.min.js')}}"></script>
<!-- Slick JS -->
<script src="{{asset ('app-assets/js/slick.min.js')}}"></script>
<!-- Date Picker JS -->
<script src="{{asset ('app-assets/js/datepicker.min.js')}}"></script>
<script src="{{asset ('app-assets/js/script.js')}}"></script>
<script>
    $(document).ready(function() {
        $('input[type=radio][name=selector]').change(function() {
            $('#ttype').text($(this).data('name'));
            document.getElementById("htype").value = $(this).data('name');
        });

        $('input[type=radio][name=selector1]').change(function() {
            $('#tfrequency').text($(this).data('name'));
            document.getElementById("hfrequency").value = $(this).data('name');

        });

        $('#address').change(function (){
            $('#taddress').text($(this).val() + ', ' + $('#zip').val());
        });

        // $("#hours").on("input", function(){
        //     $('#thours').text($(this).value + 'Hours');
        //     alert($(this).value);
        // });

        $('input[type=radio][name=selector2]').change(function(){
            $('#thour').text(' @ ' + $(this).data('name'));
            document.getElementById("hhour").value = $(this).data('name');
        });

        $('#date').change(function () { //Your date picker input
            var eventDate = $('#date').val();
            var dateElement = eventDate.split("/");
            var dateFormat = dateElement[2]+'-'+dateElement[0]+'-'+dateElement[1];
            var date = new Date(dateFormat+'T10:00:00Z'); //To avoid timezone issues
            var weekday = ["Sun.", "Mon.", "Tue.", "Wed.", "Thu.", "Fri.", "Sat."];
            var day = weekday[date.getDay()];
            $('#tdate').text(day + ' ' + $('#date').val());
        });
    });

    let ccNumberInput = document.querySelector('.cc-number-input'),
        ccNumberPattern = /^\d{0,16}$/g,
        ccNumberSeparator = " ",
        ccNumberInputOldValue,
        ccNumberInputOldCursor,

        ccExpiryInput = document.querySelector('.cc-expiry-input'),
        ccExpiryPattern = /^\d{0,4}$/g,
        ccExpirySeparator = "/",
        ccExpiryInputOldValue,
        ccExpiryInputOldCursor,

        ccCVCInput = document.querySelector('.cc-cvc-input'),
        ccCVCPattern = /^\d{0,3}$/g,

        mask = (value, limit, separator) => {
            var output = [];
            for (let i = 0; i < value.length; i++) {
                if ( i !== 0 && i % limit === 0) {
                    output.push(separator);
                }

                output.push(value[i]);
            }

            return output.join("");
        },
        unmask = (value) => value.replace(/[^\d]/g, ''),
        checkSeparator = (position, interval) => Math.floor(position / (interval + 1)),
        ccNumberInputKeyDownHandler = (e) => {
            let el = e.target;
            ccNumberInputOldValue = el.value;
            ccNumberInputOldCursor = el.selectionEnd;
        },
        ccNumberInputInputHandler = (e) => {
            let el = e.target,
                newValue = unmask(el.value),
                newCursorPosition;

            if ( newValue.match(ccNumberPattern) ) {
                newValue = mask(newValue, 4, ccNumberSeparator);

                newCursorPosition =
                    ccNumberInputOldCursor - checkSeparator(ccNumberInputOldCursor, 4) +
                    checkSeparator(ccNumberInputOldCursor + (newValue.length - ccNumberInputOldValue.length), 4) +
                    (unmask(newValue).length - unmask(ccNumberInputOldValue).length);

                el.value = (newValue !== "") ? newValue : "";
            } else {
                el.value = ccNumberInputOldValue;
                newCursorPosition = ccNumberInputOldCursor;
            }

            el.setSelectionRange(newCursorPosition, newCursorPosition);

            highlightCC(el.value);
        },
        highlightCC = (ccValue) => {
            let ccCardType = '',
                ccCardTypePatterns = {
                    amex: /^3/,
                    visa: /^4/,
                    mastercard: /^5/,
                    disc: /^6/,

                    genric: /(^1|^2|^7|^8|^9|^0)/,
                };

            for (const cardType in ccCardTypePatterns) {
                if ( ccCardTypePatterns[cardType].test(ccValue) ) {
                    ccCardType = cardType;
                    break;
                }
            }

            let activeCC = document.querySelector('.cc-types__img--active'),
                newActiveCC = document.querySelector(`.cc-types__img--${ccCardType}`);

            if (activeCC) activeCC.classList.remove('cc-types__img--active');
            if (newActiveCC) newActiveCC.classList.add('cc-types__img--active');
        },
        ccExpiryInputKeyDownHandler = (e) => {
            let el = e.target;
            ccExpiryInputOldValue = el.value;
            ccExpiryInputOldCursor = el.selectionEnd;
        },
        ccExpiryInputInputHandler = (e) => {
            let el = e.target,
                newValue = el.value;

            newValue = unmask(newValue);
            if ( newValue.match(ccExpiryPattern) ) {
                newValue = mask(newValue, 2, ccExpirySeparator);
                el.value = newValue;
            } else {
                el.value = ccExpiryInputOldValue;
            }
        };

    ccNumberInput.addEventListener('keydown', ccNumberInputKeyDownHandler);
    ccNumberInput.addEventListener('input', ccNumberInputInputHandler);

    ccExpiryInput.addEventListener('keydown', ccExpiryInputKeyDownHandler);
    ccExpiryInput.addEventListener('input', ccExpiryInputInputHandler);
</script>
</body>

</html>
