<?php


if (!function_exists("uniqueCode")) {
    function uniqueCode($limit)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }
}
if (!function_exists("getOnlyNameFromImage")) {
    function getOnlyNameFromImage($image)
    {
        $name = $image->getClientOriginalName();
        $filename = pathinfo($name, PATHINFO_FILENAME);
        return str_replace(' ', '-', $filename);
    }
}

if (!function_exists("uploadImage")) {
    function uploadImage($image, $path)
    {
        if ($image) {
            $fileName = getOnlyNameFromImage($image) . '_' . uniqueCode(9) . '.' . $image->extension();
            $filePath = 'blind_school_backend/' . $path . $fileName;
            try {
                // Ensure directory structure
                if (Storage::disk('s3')->put($filePath, file_get_contents($image), 'public')) {
                    return $fileName;
                } else {
                    throw new \Exception('Failed to upload the file to S3.');
                }
            } catch (\Exception $e) {
                Log::error('Image upload error: ' . $e->getMessage());
                return null; // Or return a default value or handle it as needed
            }
        } else {
            Log::warning('No image provided for upload.');
            return null; // Or return a default value or handle it as needed
        }
    }
}


if (!function_exists("uploadMultipleImage")) {
    function uploadMultipleImage($images, $path, $altText, $oldData)
    {
        $data = $oldData != null ? json_decode($oldData, true) : [];
        if ($data != [] && $altText != null) {
            foreach ($altText as $key => $text) {
                $data[$key]['alt_text'] = $text;
            }
        }
        $count = count($data);
        if ($images != null) {
            foreach ($images as $key => $image) {
                $data[$count + $key]['path'] = uploadImage($image, $path);
                $data[$count + $key]['alt_text'] = '';
            }
        }
        return json_encode($data);
    }
}
if (!function_exists("uploadImageAPI")) {
    function uploadImageAPI($image, $path)
    {
        if ($image != '') {
            $fileName = getOnlyNameFromImage($image) . '_' . uniqueCode(9) . "." . pathinfo($image, PATHINFO_EXTENSION);
            $fullPath = $path . $fileName;
            // Copy the file to the public folder
            if (file_exists($image)) {
                copy($image, $fullPath);
            }
            return $fileName;
        }
    }
}
if (!function_exists("uploadMultipleImagesAPI")) {
    function uploadMultipleImagesAPI($images, $path, $data)
    {
        if ($images != '') {
            foreach (json_decode($images) as $key => $image) {
                $data[$key]['path'] = uploadImageAPI($image['path'], $path);
                $data[$key]['alt_text'] = $image['alt_text'];
            }
            return $data;
        }
    }
}
if (!function_exists("removeImage")) {
    function removeImage($image, $path)
    {
        if (!empty($image) && file_exists(public_path($path . $image))) {
            unlink(public_path($path . $image));
        }
    }
}
if (!function_exists("removeMultipleImages")) {
    function removeMultipleImages($images, $path)
    {
        if (!empty($images)) {
            foreach ($images as $image) {
                if (!empty($image) && file_exists(public_path($path . $image))) {
                    unlink(public_path($path . $image));
                }
            }
        }
    }
}


if (!function_exists("formatDateTime")) {
    function formatDateTime($date)
    {
        return $date != '' ? date('d-m-Y h:i A', strtotime($date)) : '';
    }
}


if (!function_exists("formatDate")) {
    function formatDate($date)
    {
        return $date != '' ? date('d-m-Y', strtotime($date)) : '';
    }
}


