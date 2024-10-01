<!-- upload_property.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Property</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10 bg-white p-8 shadow-lg rounded">
        <h1 class="text-2xl font-bold mb-6">Upload Your Property</h1>
        <form action="upload_property_process.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="property_name" class="block text-gray-700 font-medium mb-2">Property Name:</label>
                <input type="text" id="property_name" name="property_name" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="property_location" class="block text-gray-700 font-medium mb-2">Location:</label>
                <input type="text" id="property_location" name="property_location" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="property_image" class="block text-gray-700 font-medium mb-2">Upload Property Image:</label>
                <input type="file" id="property_image" name="property_image" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload Property</button>
        </form>
    </div>
</body>
</html>
