<?php

require_once('./class/Product.class.php');

$product = new Product();

// Set product details

$product->set('pid',$_POST['pid']);
$product->set('name', $_POST['name']);
$product->set('price', $_POST['price']);
$product->set('brand', $_POST['brand']);
$product->set('desc', $_POST['desc']);
$product->set('category', $_POST['category']);
$product->set('sub_category', $_POST['sub_category']);
$product->set('quantity',$_POST['quantity']);


// Function to handle file uploads
function handleFileUpload($file, $fieldName, $product, $existingImage = null) {
    if ($file['error'] == 0) {
        // Define the allowed file types
        $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg', 'image/webp'];
        $fileType = $file['type'];
        $fileSize = $file['size'];

        // Validate the file type
        if (in_array($fileType, $allowedTypes)) {
            // Validate the file size (maximum 1 MB)
            if ($fileSize <= 1024 * 1024) {
                // Generate a unique name for the file
                $uniqueName = uniqid('', true);
                $originalName = basename($file['name']);
                $imageName = $uniqueName . '-' . $originalName;

                // Move the file to the desired directory
                $targetPath = '../images/' . $imageName;
                if (move_uploaded_file($file['tmp_name'], $targetPath)) {
                    // Set the image name in the product object
                    $product->set($fieldName, $imageName);
                } else {
                    return "Failed to move uploaded file!";
                }
            } else {
                return "Error, file size exceeds 1 MB!";
            }
        } else {
            return "Invalid file type!";
        }
    } else {
        // If no file was uploaded, use the existing image
        if ($existingImage) {
            $product->set($fieldName, $existingImage);
        }
    }

    return null; // No error
}

// Handle file uploads
$imageErrors = [];
$imageErrors[] = handleFileUpload($_FILES['featured_img'], 'featured_img', $product, $_POST['existing_img']);


// Save the product
$product->Edit();

// Display errors if there are any
foreach ($imageErrors as $error) {
    if ($error) {
        echo $error;
    }
}

?>
