<?php
    $pageTitle = 'Registration - TNT Events Inc.';
 
    include('includes/header.html.php');

     // personal info
     $_SESSION['vendor-choice'] = $_POST['vendor-choice'];
     $_SESSION['company-name'] = $_POST['company-name'];
     $_SESSION['address'] = $_POST['address'];
     $_SESSION['address-line-2'] = $_POST['address-line-2'];
     $_SESSION['city'] = $_POST['city'];
     $_SESSION['state'] = $_POST['state'];
     $_SESSION['zip'] = $_POST['zip'];
     $_SESSION['phone'] = $_POST['phone'];
     $_PSOT['fax'] = $_PSOT['fax'];
     $_SESSION['emergency'] = $_POST['emergency'];
     $_SESSION['email'] = $_POST['email'];
 
     // sponsor info
     $_SESSION['rep-name'] = $_POST['rep-name'];
     $_SESSION['product-description-sponsor'] = $_POST['product-description-sponsor'];
     
     // exhibitor info
     $_SESSION['name'] = $_POST['name'];
     $_SESSION['website'] = $_POST['website'];
     $_SESSION['special-requests'] = $_POST['special-requests'];
     $_SESSION['product-description'] = $_POST['product-description'];
     $_SESSION['length'] = $_POST['length'];
     $_SESSION['width'] = $_POST['width'];
     $_SESSION['height'] = $_POST['height'];
 
     // car info
     $_SESSION['auto-tag'] = $_POST['auto-tag'];
     $_SESSION['auto-state'] = $_POST['auto-state'];
     $_SESSION['vehicle-type'] = $_POST['vehicle-type'];
     $_SESSION['vehicle-color'] = $_POST['vehicle-color'];
 
     // event info
    //  $_SESSION['event-date-1'] = $_POST['event-date-1'];
     $_SESSION['select-event-2'] = $_POST['select-event-2'];
     $eventDate = $_SESSION['event-date-1'];
     $email = $_SESSION['email'];
     $name = $_SESSION['name'];
     $address = $_SESSION['address'];
     $address2 = $_SESSION['address-line-2'];
     $city = $_SESSION['city'];
     $state = $_SESSION['state'];
     $zip = $_SESSION['zip'];
     $phone = $_SESSION['phone'];
    // $eventDate = $_POST['event-date'];
    // echo $eventDate;
    // echo $name;
?>
<main class="registration-content">
    <?php 
        // echo $eventDate;
        // if ($eventDate == null) {
        //     echo 'empty';
        // }
    ?>
    <h1>Event Registration</h1>

    <form action="confirmation.php" method="post" name="registration" class="registration-form booth" id="registration-form">
        <!-- <select name="date-selection" id="date-section">
            <option value="<?php $eventDate ?>" selected><?= $eventDate ?: 'Select an Event' ?></option>
            <option value="January 21st">January 21st</option>
        </select>
        <input type="text" name="name">
        <input type="text" name="address">
        <input type="submit" value="continue to booth selection"> -->
        <div id="step-personal">
            <h2>Step 1: <span class="purple-text">Personal Information</span></h2>
            <section class="personal-info">
                <div class="vendor-select">
                    <div class="vendor-select-left">
                        <p>I am a:</p>
                        <p class="small-text">(Check all that apply)</p>
                    </div>
                    <div class="vendor-select-right">
                        <input type="checkbox" name="vendor-choice-1" id="Exhibitor" value="Exhibitor" onclick="next1()">
                        <label for="Exhibitor">Exhibitor</label>
                        <br>
                        <input type="checkbox" name="vendor-choice-2" id="Sponsor" value="Sponsor" onclick="next1()">
                        <label for="Sponsor">Sponsor</label>
                    </div>
                </div>
                <label for="company-name" class="input-label">Company Name:</label><br>
                <input type="text" name="company-name" class="text-input"><br>
                <label for="address" class="input-label">Address: <span class="required">*</span></label><br>
                <?php 
                    if ($address != null){
                        echo '<input type="text" name="address" class="text-input" value="' . $address . '"><br>';
                    } else {
                        echo '<input type="text" name="address" class="text-input"><br>';
                    }
                ?>
                <label for="address-line-2" class="input-label">Address Line 2:</label><br>
                <?php 
                    if ($address2 != null){
                        echo '<input type="text" name="address-line-2" class="text-input" value="' . $address2 . '"><br>';
                    } else {
                        echo '<input type="text" name="address-line-2" class="text-input"><br>';
                    }
                ?>
                <div class="city-state-zip">
                    <div class="input-container city-container">
                        <label for="city" class="input-label">City: <span class="required">*</span></label><br>
                        <?php 
                            if ($city != null){
                                echo '<input type="text" name="city" class="text-input" value="'. $city . '">';
                            } else {
                                echo '<input type="text" name="city" class="text-input">';
                            }
                        ?>
                        
                    </div>
                    <div class="input-container state-container">
                        <label for="state" class="input-label">State: <span class="required">*</span></label><br>
                        <?php 
                            if ($state != null){
                                echo '<select name="state" class="input-select">
                                <option value="' . $state . '" selected disabled hidden>' . $state . '</option>
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
                            </select>';
                            } else {
                                echo '<select name="state" class="input-select">
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
                            </select>';
                            }
                        ?>
                        
                    </div>
                    <div class="input-container zip-container">
                        <label for="Zip Code" class="input-label">Zip Code: <span class="required">*</span></label><br>
                        <?php 
                            if ($zip != null){
                                echo '<input type="text" name="zip-code" class="text-input" value="' . $zip . '">';
                            } else {
                                echo '<input type="text" name="zip-code" class="text-input">';
                            }
                        ?>
                    </div>
                </div>
                <div class="city-state-zip">
                    <div class="input-container phone-container">
                        <label for="phone" class="input-label">Phone Number: <span class="required">*</span></label><br>
                        <?php 
                            if ($phone != null){
                                echo '<input type="phone" name="phone" class="text-input" value="' . $phone . '">';
                            } else {
                                echo '<input type="phone" name="phone" class="text-input">';
                            }
                        ?>
                    </div>
                    <div class="input-container fax-container">
                        <label for="fax" class="input-label">Fax:</label><br>
                        <input type="phone" name="fax" class="text-input">
                    </div>
                </div>
                <div class="input-container emergency-container">
                        <label for="emergency" class="input-label">Emergency Number: <span class="required">*</span></label><br>
                        <input type="phone" name="emergency" class="text-input">
                </div>
                <div class="input-container email-container">
                        <label for="email" class="input-label">Email: <span class="required">*</span></label><br>
                        <?php 
                            if($email != null){
                                echo '<input type="email" name="email" class="text-input" value="' . $email . '">';
                            } else {
                                echo '<input type="email" name="email" class="text-input">';
                            }
                        ?>
                </div>
            </section>
            <!-- <div class="button-container">
                <button id="next-1" class="button green next" disabled>Continue to Next Step</button>
            </div> -->
        </div>
        <div id="step-sponsor">
            <h2>Step 2: <span class="purple-text">Sponsor Information</span></h2>
            <section id="sponsor-information">
                <label for="rep-name" class="input-label">Rep. Name: <span class="required">*</span></label><br>
                <input type="text" name="rep-name" class="text-input" id="rep-name" onclick="next2()"><br>
                <label for="product-description-sponsor" class="input-label">Product Description: <span class="required">*</span></label><br>
                <textarea name="product-description-sponsor" class="text-input" id="product-description-sponsor"></textarea>
            </section>
        </div>
        <div id="step-exhibitor">
            <h2>Step 3: <span class="purple-text">Exhibitor Information</span></h2>
            <section id="exhibitor-information">
                <label for="exhibitor-name" class="input-label">Exhibitor Name: <span class="required">*</span></label><br>
                <?php 
                    if($name != null){
                        echo '<input type="text" name="exhibitor-name" class="text-input" id="exhibitor-name" value="' . $name . '"><br>';
                    } else {
                        echo '<input type="text" name="exhibitor-name" class="text-input" id="exhibitor-name"><br>';
                    }
                ?>
                
                <label for="website" class="input-label">Website: <span class="required">*</span></label><br>
                <input type="text" name="website" class="text-input" id="website"><br>
                <label for="special-requests" class="input-label">Any Special Requests:</label><br>
                <textarea name="special-requests" class="text-input" id="special-requests"></textarea>
                <h3>Exhibitor Product Information</h3>
                <label for="product-description" class="input-label">Product Description: <span class="required">*</span></label><br>
                <textarea name="product-description" class="text-input" id="product-desciption"></textarea>
                <h4>Size of Display:</h4>
                <div class="l-w-h">
                    <div class="l-w-h-container">
                        <label for="length" class="input-label">Length: <span class="required">*</span></label><br>
                        <input type="text" name="length" class="text-input" id="length"><br>
                    </div>
                    <div class="l-w-h-container">
                        <label for="width" class="input-label">Width: <span class="required">*</span></label><br>
                        <input type="text" name="width" class="text-input" id="width"><br>
                    </div>
                    <div class="l-w-h-container">
                        <label for="height" class="input-label">Height: <span class="required">*</span></label><br>
                        <input type="text" name="height" class="text-input" id="height"><br>
                    </div>
                </div>
                <h3>Exhibitor Car Information</h3>
                <div class="car-info-row1">
                    <div class="car-row1-left">
                        <label for="auto-tag" class="input-label">Auto Tag: <span class="required">*</span></label><br>
                        <input type="text" name="auto-tag" class="text-input" id="auto-tag"><br>
                    </div>
                    <div class="car-row1-right">
                        <label for="auto-state" class="input-label">State: <span class="required">*</span></label><br>
                        <select name="auto-state" class="input-select" id="auto-state">
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
                    </div>
                </div>
                <div class="car-info-row2">
                    <div class="car-row2-left">
                        <label for="vehicle-type" class="input-label">Vehicle Type: <span class="required">*</span></label><br>
                        <input type="text" name="vehicle-type" class="text-input" id="vehicle-type"><br>
                    </div>
                    <div class="car-row2-right">
                        <label for="vehicle-color" class="input-label">Color: <span class="required">*</span></label><br>
                        <input type="text" name="vehicle-color" class="text-input" id="vehicle-color"><br>
                    </div>
                </div>
            </section>
            <!-- <div class="button-container">
                <button id="back1" class="button green next">Back a Step</button>
                <button id="next2" class="button green next" disabled>Continue to Next Step</button>
            </div> -->
        </div>
        <div id="step-event">
            <h2>Step 3: <span class="purple-text">Select an Event</span></h2>
            <section id="event-information">
                <label for="select-event-1" class="input-label">Select An Event: <span class="required">*</span></label><br>
                <select name="select-event-1" class="input-select" id="select-event-1">
                    <?php 
                        if($eventDate === null){
                            echo '<option selected disabled hidden>Select an Event</option>';
                        } else {
                            echo '<option value="' . $eventDate . '" selected >'  . $eventDate . '</option>';
                        }

                        if($eventDate != 'December 6th'){
                            echo '<option value="December 6th">December 6th</option>';
                        }
                    ?>
                    <option value="January 22nd">January 22nd</option>
                </select>
                <select name="select-event-2" class="input-select" id="select-event-2">
                    <option selected disabled hidden>Select an Event</option>
                    <option value="January 22nd">January 22nd</option>
                </select>
                <div id="add-event">
                    <p>Add an Event:</p>
                    <p class="button green" id="add-event-button">+</p>
                </div>
            </section>
            <div class="button-container">
                <input type="submit" id="to-booth-selection" class="button green next" value="Finish Registration">
            </div>
        </div>
    </form>
</main>
<?php 
    include('includes/footer.html.php');
?>