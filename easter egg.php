
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Toggle</title>
</head>
<body>

<?php
// Define the paths for the two images
$image1_path = 'lamp.png';
$image2_path = 'eastereggdeandonker.jpeg';

// Check if the image switch parameter is set
$imageSwitched = isset($_GET['imageSwitched']) ? $_GET['imageSwitched'] : false;
?>

<script>
    // JavaScript function to toggle between the two images
    function toggleImage() {
        var imgElement = document.getElementById('toggleImage');

        // Check the current image source
        if (imgElement.src.includes('lamp.png')) {
            // Switch to the second image
            imgElement.src = 'eastereggdeandonker.jpeg';
        } else {
            // Switch back to the first image
            imgElement.src = 'lamp.png';
        }
    }
</script>

<!-- Display the image and add an onclick event to toggle the image -->
<img id="toggleImage" src="<?php echo $imageSwitched ? $image2_path : $image1_path; ?>" onclick="toggleImage()" alt="Toggle Image">

</body>
</html>
