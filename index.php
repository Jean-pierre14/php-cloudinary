<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    use Cloudinary\Cloudinary;
    use Cloudinary\Transformation\Resize;

    $cloudinary = new Cloudinary(
        [
            'cloud' => [
                'cloud_name' => 'duetomqjz',
                'api_key'    => '678377753892168',
                'api_secret' => '9YOIvJmJPV23Ji17dCM3on1-RUI',
            ],
        ]
    );

    $cloudinary->uploadApi()->upload(
        'https://upload.wikimedia.org/wikipedia/commons/a/ae/Olympic_flag.jpg',
        ['public_id' => 'olympic_flag']
    );

    $cloudinary->image('olympic_flag')->resize(Resize::fill(100, 150))->toUrl();

?>