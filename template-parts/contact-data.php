<?php
$address = get_option("lawyer_address");
$phone = get_option("lawyer_phone");
$mobile1 = get_option("lawyer_mobile1");
$mobile2 = get_option("lawyer_mobile2");
$email1 = get_option("lawyer_email_1");
$email2 = get_option("lawyer_email_2");
?>

<?php
if (!empty($address)) {
?>
    <p class="info-address animation" data-animation="slide-top" data-delay="0s">
        <span class="fas fa-map-marker-alt"></span>
        <?php echo $address; ?>
    </p>
<?php
}
?>

<?php
if (!empty($phone)) {
?>
    <p class="info-address animation" data-animation="slide-top" data-delay="0s">
        <span class="fas fa-phone-alt"></span>
        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
    </p>
<?php
}
?>

<?php
if (!empty($mobile1)) {
?>
    <p class="info-address animation" data-animation="slide-top" data-delay="0s">
        <span class="fas fa-mobile-alt"></span>
        <a href="tel:<?php echo $mobile1; ?>"><?php echo $mobile1; ?></a>
    </p>
<?php
}
?>

<?php
if (!empty($email1)) {
?>
    <p class="info-address animation" data-animation="slide-top" data-delay="0s">
        <span class="far fa-envelope"></span>
        <a href="mailto:<?php echo $email1; ?>"><?php echo $email1; ?></a>
    </p>
<?php
}
?>
<?php
if (!empty($email2)) {
?>
    <p class="info-address animation" data-animation="slide-top" data-delay="0s">
        <span class="far fa-envelope"></span>
        <a href="mailto:<?php echo $email1; ?>"><?php echo $email2; ?></a>
    </p>
<?php
}
?>