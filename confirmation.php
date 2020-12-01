<?php
    $pageTitle = 'Home - TNT Events Inc.';
 
    include('includes/header.html.php');

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

        $_SESSION['A1'] = $_POST['A1'];
        $A1 = $_SESSION['A1'];
    
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
            <p>Event Date: <span class="purple-text"><?= $eventDate ?></span></p>
        </div>
        <div class="button-container">
            <a href="index.php" class="button purple">Return Home</a>
        </div>
    </div>
</main>
<?php 
    include('includes/footer.html.php');
?>