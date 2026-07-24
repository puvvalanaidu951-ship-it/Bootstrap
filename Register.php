<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
<style>
    .in-1{
            width: 100%;
            box-sizing: border-box;
            height: 50px;
             border-radius: 5px;
             border: 2px solid rgb(228, 225, 225);
             padding: 10px;
             margin-bottom: 5px;
        }
        .p-y{
            margin-top: 10px;
            font-size: 15px;
        }
        .h4-y{
            margin-top: 10px;
            color: rgb(207, 23, 23);
        }
</style>

     <?php include "nav.php"; ?>
    <div class="row w-100 " style="background-color: rgb(208, 31, 31);">
        <div class="col-sm-2   w-50 text-white" style="padding: 80px; ">
           <div class="row p-1">
                <h1 class="text-white fw-bold ">Become a Blood Donor</h1>
           </div>
           <div class="row p-1">
            <p style="color: aliceblue ;font-size:18px;">Join our community of life savers. Every donation can save up to 3 lives.</p>

           </div>
           <div class="row p-1">
            <div class="class col-sm-4 w-100 gap-5 d-flex flex-direction-row">
                <span><p>Verified Platform</p></span>
                <span><p>25,000+ Members</p></span>
                <span><p>Pan-India Network</p></span>
            </div>
             <div class="class col-sm-4"></div>
              <div class="class col-sm-4"></div>

           </div>
        </div>
         <div class="col-sm-2  p-5 w-50 ">
           
        </div>

    </div>
   
<section class="register-form-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="register-card card border-0 shadow-lg">
                    <div class="card-header bg-white border-0 text-center py-4">
                        <h3 class="mb-2">Create Your Account</h3>
                        <p class="text-muted mb-0">Join our community of life savers</p>
                    </div>

                    <div class="card-body p-5">

                        <form method="POST" action="registration.php" class="needs-validation" novalidate id="registerForm">
                            
                            
                            <div class="form-section mb-5">
                                <h5 class="section-title text-primary mb-4">
                                    <i class="bi bi-person-gear me-2"></i>Account Type
                                </h5>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="account-type-card">
                                            <input type="radio" class="btn-check" name="role" id="role_donor"
                                                   value="donor" checked>
                                            <label class="btn btn-outline-danger w-100 p-4" for="role_donor">
                                                <i class="bi bi-heart fs-2 mb-2 d-block"></i>
                                                <h6>Donor (Donate Blood)</h6>
                                                <small class="text-muted">I want to donate blood and help save lives</small>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="account-type-card">
                                            <input type="radio" class="btn-check" name="role" id="role_recipient"
                                                   value="recipient">
                                            <label class="btn btn-outline-primary w-100 p-4" for="role_recipient">
                                                <i class="bi bi-search-heart fs-2 mb-2 d-block"></i>
                                                <h6>User (Request Blood)</h6>
                                                <small class="text-muted">I want to find blood donors when needed</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="form-section mb-4">
                                <h5 class="section-title text-primary mb-3">
                                    <i class="bi bi-person me-2"></i>Personal Information
                                </h5>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label required">Full Name</label>
                                        <input type="text" class="form-control form-control-lg" id="name" name="name"
                                               value="" required>
                                        <div class="invalid-feedback">Please provide your full name.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label required">Email Address</label>
                                        <input type="email" class="form-control form-control-lg" id="email" name="email"
                                               value="" required>
                                        <div class="invalid-feedback">Please provide a valid email address.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="phone" class="form-label required">Phone Number</label>
                                        <input type="tel" class="form-control form-control-lg" id="phone" name="phone"
                                               placeholder="10 digits" pattern="[0-9]{10}"
                                               value="" required>
                                        <div class="invalid-feedback">Please provide a valid 10-digit phone number.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="date_of_birth" class="form-label required">Date of Birth</label>
                                        <input type="date" class="form-control form-control-lg" id="date_of_birth" name="date_of_birth"
                                               value="" required>
                                        <div class="invalid-feedback">Please provide your date of birth.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="gender" class="form-label required">Gender</label>
                                        <select class="form-select form-select-lg" id="gender" name="gender" required>
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your gender.</div>
                                    </div>

                                    <div class="col-md-6" id="blood-group-field">
                                        <label for="blood_group" class="form-label required">Blood Group</label>
                                        <select class="form-select form-select-lg" id="blood_group" name="blood_group" required>
                                            <option value="">Select Blood Group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your blood group.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Location Information -->
                            <div class="form-section mb-4">
                                <h5 class="section-title text-primary mb-3">
                                    <i class="bi bi-geo-alt me-2"></i>Location Information
                                </h5>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="state" class="form-label required">State</label>
                                        <select class="form-select form-select-lg" id="state" name="state" required>
                                            <option value="">Select State</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Ladakh">Ladakh</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your state.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="district" class="form-label required">District</label>
                                        <input type="text" class="form-control form-control-lg" id="district" name="district"
                                               placeholder="Enter district"
                                               value="" required>
                                        <div class="invalid-feedback">Please provide your district.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="city" class="form-label required">City</label>
                                        <input type="text" class="form-control form-control-lg" id="city" name="city"
                                               placeholder="Enter city"
                                               value="" required>
                                        <div class="invalid-feedback">Please provide your city.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="area" class="form-label">Area/Locality</label>
                                        <input type="text" class="form-control form-control-lg" id="area" name="area"
                                               placeholder="Enter area or locality"
                                               value="">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="text" class="form-control form-control-lg" id="pincode" name="pincode"
                                               placeholder="6 digits" pattern="[0-9]{6}" maxlength="6"
                                               value="">
                                        <div class="invalid-feedback">Please provide a valid 6-digit pincode.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Security Information -->
                            <div class="form-section mb-4">
                                <h5 class="section-title text-primary mb-3">
                                    <i class="bi bi-shield-lock me-2"></i>Security Information
                                </h5>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="password" class="form-label required">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg" id="password" name="password"
                                                   placeholder="Min 6 characters" minlength="6" required>
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                <i class="bi bi-eye" id="passwordIcon"></i>
                                            </button>
                                        </div>
                                        <div class="invalid-feedback">Password must be at least 6 characters long.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="confirm_password" class="form-label required">Confirm Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg" id="confirm_password" name="confirm_password"
                                                   placeholder="Confirm your password" required>
                                            <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                                                <i class="bi bi-eye" id="confirmPasswordIcon"></i>
                                            </button>
                                        </div>
                                        <div class="invalid-feedback">Passwords must match.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="terms-section mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms_accepted" name="terms_accepted" required>
                                    <label class="form-check-label" for="terms_accepted">
                                        I agree to the
                                        <a href="/terms.php" target="_blank" class="text-decoration-none">Terms and Conditions</a>
                                        and
                                        <a href="/privacy.php" target="_blank" class="text-decoration-none">Privacy Policy</a>
                                    </label>
                                    <div class="invalid-feedback">You must accept the terms and conditions.</div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                                    <span class="btn-text">
                                        <i class="bi bi-person-plus me-2"></i>Create Account
                                    </span>
                                    <span class="spinner-border spinner-border-sm d-none ms-2" id="submitSpinner"></span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer bg-light text-center py-4">
                        <p class="mb-0">
                            Already have an account?
                            <a href="/login.php" class="text-decoration-none fw-bold">Login here</a>
                        </p>
                        <div class="mt-2">
                            <a href="/" class="text-muted text-decoration-none">
                                <i class="bi bi-arrow-left me-1"></i>← Back to Homepage
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  


   </div>
   <script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registerForm');
    const submitBtn = document.getElementById('submitBtn');
    const submitSpinner = document.getElementById('submitSpinner');
    const btnText = submitBtn.querySelector('.btn-text');

    // Password visibility toggles
    setupPasswordToggle('togglePassword', 'password', 'passwordIcon');
    setupPasswordToggle('toggleConfirmPassword', 'confirm_password', 'confirmPasswordIcon');

    // Phone number formatting
    const phoneInput = document.getElementById('phone');
    phoneInput.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '').substring(0, 10);
    });

    // Pincode formatting
    const pincodeInput = document.getElementById('pincode');
    pincodeInput.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '').substring(0, 6);
    });

    // Role change handling
    const roleInputs = document.querySelectorAll('input[name="role"]');
    const bloodGroupField = document.getElementById('blood-group-field');
    const bloodGroupSelect = document.getElementById('blood_group');

    roleInputs.forEach(input => {
        input.addEventListener('change', function () {
            if (this.value === 'donor') {
                bloodGroupField.style.display = 'block';
                bloodGroupSelect.required = true;
            } else {
                bloodGroupField.style.display = 'none';
                bloodGroupSelect.required = false;
                bloodGroupSelect.value = '';
            }
        });
    });

    // Trigger role change on page load
    const checkedRole = document.querySelector('input[name="role"]:checked');

    if (checkedRole) {
        checkedRole.dispatchEvent(new Event('change'));
    }

    // Form validation
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity() || !passwordsMatch()) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            // Show loading state
            submitBtn.disabled = true;
            btnText.classList.add('d-none');
            submitSpinner.classList.remove('d-none');
        }

        form.classList.add('was-validated');
    });

    // Password matching validation
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');

    function checkPasswordMatch() {
        if (
            confirmPasswordInput.value &&
            passwordInput.value !== confirmPasswordInput.value
        ) {
            confirmPasswordInput.setCustomValidity('Passwords do not match');
        } else {
            confirmPasswordInput.setCustomValidity('');
        }
    }

    passwordInput.addEventListener('input', checkPasswordMatch);
    confirmPasswordInput.addEventListener('input', checkPasswordMatch);

    function passwordsMatch() {
        return passwordInput.value === confirmPasswordInput.value;
    }
});

function setupPasswordToggle(buttonId, inputId, iconId) {
    const button = document.getElementById(buttonId);
    const input = document.getElementById(inputId);
    const icon = document.getElementById(iconId);

    if (button && input && icon) {
        button.addEventListener('click', function () {
            const type =
                input.getAttribute('type') === 'password'
                    ? 'text'
                    : 'password';

            input.setAttribute('type', type);

            if (type === 'password') {
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            } else {
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            }
        });
    }
}
</script>
    <?php include "footer.php"; ?>
