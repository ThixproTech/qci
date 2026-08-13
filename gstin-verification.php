<?php
include "./inc/qci-header.php"
?>


<!-- =========================================================
     MAIN REGISTRATION AREA
========================================================= -->
<main class="qci-registration-wrapper">

    <!-- =====================================================
         LEFT INFORMATION PANEL
    ====================================================== -->
    <aside class="qci-registration-sidebar">

        <div class="qci-sidebar-content">

            <h2>Nominee Registration</h2>

            <div class="qci-title-line"></div>

            <p class="qci-sidebar-description">
                Registration is open only for authorized nominees.
                Please ensure that your GSTIN is available with QCI
                before proceeding.
            </p>


            <!-- Illustration -->
            <div class="qci-sidebar-illustration">

                <div class="qci-document-icon">
                    <div class="qci-doc-avatar"></div>
                    <div class="qci-doc-line qci-doc-line-one"></div>
                    <div class="qci-doc-line qci-doc-line-two"></div>
                    <div class="qci-doc-line qci-doc-line-three"></div>
                    <div class="qci-doc-line qci-doc-line-four"></div>
                </div>

                <div class="qci-shield">

                    <div class="qci-shield-person">
                        <div class="qci-person-head"></div>
                        <div class="qci-person-body"></div>
                    </div>

                </div>

                <div class="qci-check-circle">✓</div>

                <div class="qci-dot-pattern">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>


            <!-- Registration Process -->
            <div class="qci-process">

                <h3>Registration Process</h3>


                <div class="qci-process-item qci-process-active">

                    <div class="qci-process-number">1</div>

                    <div class="qci-process-content">
                        <h4>GSTIN Verification</h4>
                        <p>
                            Enter your GSTIN for validation
                            against the authorized list.
                        </p>
                    </div>

                </div>


                <div class="qci-process-item">

                    <div class="qci-process-number">2</div>

                    <div class="qci-process-content">
                        <h4>Nominee Details</h4>
                        <p>
                            Provide nominee and
                            organization details.
                        </p>
                    </div>

                </div>


                <div class="qci-process-item">

                    <div class="qci-process-number">3</div>

                    <div class="qci-process-content">
                        <h4>Email Verification</h4>
                        <p>
                            Verify your email address
                            to confirm registration.
                        </p>
                    </div>

                </div>


                <div class="qci-process-item">

                    <div class="qci-process-number">4</div>

                    <div class="qci-process-content">
                        <h4>Credentials</h4>
                        <p>
                            Login credentials will be sent
                            to your registered email ID.
                        </p>
                    </div>

                </div>

            </div>


            <!-- Help Box -->
            <div class="qci-help-box">

                <h3>Need Help?</h3>

                <p>
                    If you face any issues during registration,
                    please contact our support team.
                </p>

                <div class="qci-help-row">
                    <span class="qci-help-icon">✉</span>
                    <span>support@qcin.org</span>
                </div>

                <div class="qci-help-row">
                    <span class="qci-help-icon">♧</span>

                    <div>
                        <strong>0120-XXX-XXXX</strong>
                        <small>(Mon - Fri : 09:30 AM to 06:00 PM)</small>
                    </div>
                </div>

            </div>

        </div>

    </aside>


    <!-- =====================================================
         FORM AREA
    ====================================================== -->
    <section class="qci-registration-form-area">


        <!-- =================================================
             STEPPER
        ================================================== -->
        <div class="qci-stepper">

            <div class="qci-step qci-step-active">
                <div class="qci-step-circle">1</div>
                <span>GSTIN Verification</span>
            </div>

            <div class="qci-step-line"></div>

            <div class="qci-step">
                <div class="qci-step-circle">2</div>
                <span>Nominee Details</span>
            </div>

            <div class="qci-step-line"></div>

            <div class="qci-step">
                <div class="qci-step-circle">3</div>
                <span>Organization Details</span>
            </div>

            <div class="qci-step-line"></div>

            <div class="qci-step">
                <div class="qci-step-circle">4</div>
                <span>Verify &amp; Submit</span>
            </div>

        </div>


        <!-- =================================================
             INFORMATION ALERT
        ================================================== -->
        <div class="qci-info-alert">

            <div class="qci-info-icon">i</div>

            <div>
                <strong>
                    Please enter your GSTIN to check your eligibility.
                    Your GSTIN will be verified
                </strong>

                <strong>
                    against the list of authorized nominees provided by QCI.
                </strong>
            </div>

        </div>


        <!-- =================================================
             GSTIN SECTION
        ================================================== -->
        <section class="qci-form-section">

            <h2>GSTIN Verification</h2>

            <div class="qci-form-group qci-gstin-group">

                <label>
                    GSTIN <span>*</span>
                </label>

                <div class="qci-gstin-row">

                    <div class="qci-input-with-icon">

                        <span class="qci-input-icon">♜</span>

                        <input
                            type="text"
                            placeholder="Enter 15 digit GSTIN"
                            maxlength="15">

                    </div>

                    <button type="button" class="qci-primary-btn">
                        Validate GSTIN
                    </button>

                </div>

                <small>
                    Enter your organization's GSTIN to proceed.
                </small>

            </div>

        </section>


        <div class="qci-section-divider"></div>


        <!-- =================================================
             NOMINEE DETAILS
        ================================================== -->
        <section class="qci-form-section">

            <h2>Nominee Details</h2>

            <div class="qci-form-grid">


                <!-- Full Name -->
                <div class="qci-form-group">

                    <label>
                        Full Name (As per PAN) <span>*</span>
                    </label>

                    <input
                        type="text"
                        placeholder="Enter full name">

                </div>


                <!-- Email -->
                <div class="qci-form-group">

                    <label>
                        Email Address <span>*</span>
                    </label>

                    <input
                        type="email"
                        placeholder="Enter email address">

                </div>


                <!-- Designation -->
                <div class="qci-form-group">

                    <label>
                        Designation <span>*</span>
                    </label>

                    <input
                        type="text"
                        placeholder="Enter designation">

                </div>


                <!-- PAN -->
                <div class="qci-form-group">

                    <label>
                        PAN Number <span>*</span>
                    </label>

                    <input
                        type="text"
                        placeholder="Enter PAN number">

                </div>


                <!-- Mobile -->
                <div class="qci-form-group">

                    <label>
                        Mobile Number <span>*</span>
                    </label>

                    <div class="qci-phone-row">

                        <select>
                            <option>+91</option>
                        </select>

                        <input
                            type="text"
                            placeholder="Enter mobile number">

                    </div>

                </div>


                <!-- Alternate Mobile -->
                <div class="qci-form-group">

                    <label>
                        Alternate Mobile Number
                    </label>

                    <div class="qci-phone-row">

                        <select>
                            <option>+91</option>
                        </select>

                        <input
                            type="text"
                            placeholder="Enter alternate number">

                    </div>

                </div>


                <!-- Password -->
                <div class="qci-form-group">

                    <label>
                        Password <span>*</span>
                    </label>

                    <div class="qci-password-input">

                        <input
                            type="password"
                            placeholder="Create password">

                        <button type="button">◉</button>

                    </div>

                    <small>
                        Minimum 8 characters with uppercase, lowercase,
                        number and special character.
                    </small>

                </div>


                <!-- Confirm Password -->
                <div class="qci-form-group">

                    <label>
                        Confirm Password <span>*</span>
                    </label>

                    <div class="qci-password-input">

                        <input
                            type="password"
                            placeholder="Confirm password">

                        <button type="button">◉</button>

                    </div>

                </div>

            </div>

        </section>


        <div class="qci-section-divider"></div>


        <!-- =================================================
             ORGANIZATION DETAILS
        ================================================== -->
        <section class="qci-form-section">

            <h2>Organization Details</h2>

            <div class="qci-form-grid">


                <!-- Organization -->
                <div class="qci-form-group">

                    <label>
                        Organization / Entity Name <span>*</span>
                    </label>

                    <input
                        type="text"
                        placeholder="Enter organization name">

                </div>


                <!-- State -->
                <div class="qci-form-group">

                    <label>
                        State <span>*</span>
                    </label>

                    <select class="qci-normal-select">

                        <option value="">Select state</option>
                        <option>Delhi</option>
                        <option>Maharashtra</option>
                        <option>Gujarat</option>
                        <option>Karnataka</option>
                        <option>Uttar Pradesh</option>

                    </select>

                </div>


                <!-- Address -->
                <div class="qci-form-group">

                    <label>
                        Address <span>*</span>
                    </label>

                    <textarea
                        placeholder="Enter complete address"></textarea>

                </div>


                <!-- City + PIN -->
                <div class="qci-organization-right">

                    <div class="qci-form-group">

                        <label>
                            City <span>*</span>
                        </label>

                        <input
                            type="text"
                            placeholder="Enter city">

                    </div>

                    <div class="qci-form-group">

                        <label>
                            PIN Code <span>*</span>
                        </label>

                        <input
                            type="text"
                            placeholder="Enter PIN code">

                    </div>

                </div>

            </div>


            <!-- =================================================
                 DECLARATION
            ================================================== -->
            <div class="qci-declaration">

                <label class="qci-checkbox-wrapper">

                    <input type="checkbox">

                    <span class="qci-custom-checkbox"></span>

                    <span class="qci-declaration-text">

                        I hereby declare that the information provided above
                        is true and correct to the best of my knowledge.
                        <br>

                        I agree to abide by the guidelines and terms &
                        conditions of QCI.

                        <br>

                        <a href="#">Terms &amp; Conditions</a>

                    </span>

                </label>

            </div>


            <!-- =================================================
                 FORM ACTIONS
            ================================================== -->
            <div class="qci-form-actions">

                <button
                    type="button"
                    class="qci-cancel-btn">
                    Cancel
                </button>

                <a
                    href="./nominee-details.php"
                    class="qci-submit-btn">
                    Send OTP
                    <span>→</span>
                </a>

            </div>

        </section>

    </section>

</main>

<?php
include "./inc/qci-footer.php"
?>