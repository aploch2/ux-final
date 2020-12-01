<?php
    $pageTitle = 'Account Registration - TNT Events Inc.';
 
    include('includes/header.html.php');
?>
<main>
    <div class="register-content">
        <h2>Register a New Account</h2>
        <form action="registration.php" method="post" name="register" id="account-register-form">
            <?php 
            /* TODO 
                name
                email
                password
                confirm password
                address
                city
                state
                zip
                phone number
                
            */
            ?>
            <label for="name">Name<br>
                <input type="text" name="name" class="text-input" required>
            </label><br>
            <label for="email">Email<br>
                <input type="email" name="email" class="text-input" required>
            </label><br>
            <div id="password-flex">
                <label for="password">Password<br>
                    <input type="password" name="password" class="text-input" required>
                </label><br>
                <label for="password-confirm">Confirm Password<br>
                    <input type="password" name="password-confirm" class="text-input" required>
                </label><br>
            </div>
            <label for="address">Address<br>
                <input type="text" name="address" class="text-input" required>
            </label><br>
            <label for="address-line-2">Address Line 2<br>
                <input type="text" name="address-line-2" class="text-input">
            </label><br>
            <div id="city-state-zip">
                <label for="city">City<br>
                    <input type="text" name="city" class="text-input" required>
                </label><br>
                <label for="state">State<br>
                    <select name="state" class="input-select" id="state" required>
                        <option selected disabled hidden>Select State</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </label><br>
                <label for="zip">Zip<br>
                    <input type="text" name="zip" class="text-input" required>
                </label><br>
            </div>
            <label for="phone">Phone Number<br>
                <input type="tel" name="phone" class="text-input" required>
            </label>
            <div class="button-container">
                <button class="button purple">Create Account</button>
            </div>
        </form>
    </div>
</main>
<?php 
    include('includes/footer.html.php');
?>