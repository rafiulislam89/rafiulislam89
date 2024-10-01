<?php
require 'vendor/autoload.php'; // For Cloudinary

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

// Configure Cloudinary API
Configuration::instance([
    'cloud' => [
        'cloud_name' => 'dud9nxjgc',
        'api_key' => '943154556464637',
        'api_secret' => 'LQqRaxJoaAXIuSSgO2SYKDfnqac'],
    'url' => ['secure' => true]
]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $propertyName = $_POST['property_name'];
    $propertyLocation = $_POST['property_location'];

    if (isset($_FILES['property_image'])) {
        $image = $_FILES['property_image']['tmp_name'];

        // Upload image to Cloudinary
        $uploadedImage = (new UploadApi())->upload($image, [
            'folder' => 'property_images/'
        ]);

        // Get the image URL from the response
        $imageUrl = $uploadedImage['secure_url'];

        // Save property information along with the image URL in your database
        // Assuming you have a MySQL connection ($conn)
        $sql = "INSERT INTO properties (name, location, image_url) VALUES ('$propertyName', '$propertyLocation', '$imageUrl')";
        if (mysqli_query($conn, $sql)) {
            echo "Property uploaded successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>
