<?php
    $pageTitle = 'Home - TNT Events Inc.';
 
    include('includes/header.html.php');

        $_SESSION['A2_2'] = $_POST['A2_2'];
        $_SESSION['A3_2'] = $_POST['A3_2'];
        $_SESSION['A4_2'] = $_POST['A4_2'];
        $_SESSION['B2_2'] = $_POST['B2_2'];
        $_SESSION['B3_2'] = $_POST['B3_2'];
        $_SESSION['B4_2'] = $_POST['B4_2'];

        // personal info
        $vendorOption = $_SESSION['vendor-choice-1'];
        $vendorOption2 = $_SESSION['vendor-choice-2'];
        $company = $_SESSION['company-name'];
        $address = $_SESSION['address'];
        $address2 = $_SESSION['address-line-2'];
        $city = $_SESSION['city'];
        $state = $_SESSION['state'];
        $zip = $_SESSION['zip-code'];
        $phone = $_SESSION['phone'];
        $fax = $_PSOT['fax'];
        $emergencyNumber = $_SESSION['emergency'];
        $email = $_SESSION['email'];
    
        // sponsor info
        $rep = $_SESSION['rep-name'];
        $productDescriptionSpon = $_SESSION['product-description-sponsor'];
        
        // exhibitor info
        $name = $_SESSION['exhibitor-name'];
        $website = $_SESSION['website'];
        $requests = $_SESSION['special-requests'];
        $prodDesc = $_SESSION['product-description'];
        $length = $_SESSION['length'];
        $width = $_SESSION['width'];
        $height = $_SESSION['height'];
    
        // car info
        $autoTag = $_SESSION['auto-tag'];
        $vehicleState = $_SESSION['auto-state'];
        $vehicleType = $_SESSION['vehicle-type'];
        $vehicleColor = $_SESSION['vehicle-color'];
    
        // event info
        $eventDate = $_SESSION['select-event-1'];
        $eventDate2 = $_SESSION['select-event-2'];

        
        $a2_1 = $_SESSION['A2_1'];
        $a3_1 = $_SESSION['A3_1'];
        $a4_1 = $_SESSION['A4_1'];
        $b2_1 = $_SESSION['B2_1'];
        $b3_1 = $_SESSION['B3_1'];
        $b4_1 = $_SESSION['B4_1'];
        $a2_2 = $_SESSION['A2_2'];
        $a3_2 = $_SESSION['A3_2'];
        $a4_2 = $_SESSION['A4_2'];
        $b2_2 = $_SESSION['B2_2'];
        $b3_2 = $_SESSION['B3_2'];
        $b4_2 = $_SESSION['B4_2'];

        // echo $a2_1 . '<br>' . $a3_1 . '<br>' . $a4_1 . '<br>' . $b2_1 . '<br>' . $b3_1 . '<br>' . $b4_1 . '<br>' . $a2_2 . '<br>' . $a3_2 . '<br>' . $a4_2 . '<br>' . $b2_2 . '<br>' . $b3_2 . '<br>' . $b4_2;

    
?>
<main>
    <?php 
        // echo $A1;
        // echo $eventDate;
        // var_dump($_SESSION);
    ?>
    <h1>Registration Complete</h1>
    <div class="confirmation-content">
        <div id="confirmation-information">
            <p>Booth Number: <span class="purple-text"><?= $A1 ?></span></p>
            <p>Event Date(s): <span class="purple-text"><?= $eventDate . '</span><br><span class="purple-text">' . $eventDate2 ?: '</span>' ?></span></p>
        </div>
        <div class="button-container">
            <a href="index.php" class="button purple">Return Home</a>
            <button class="button purple" id="add-to-calendar">Add to Calendar</button>
        </div>
    </div>
</main>
<?php 
    include('includes/footer.html.php');
?>