<?php

return [
    /*
    |--------------------------------------------------------
    | AK授权
    |--------------------------------------------------------
    */
    'access_id'     => env('ALIYUN_APP_ACCESS_KEY'),
    'access_secret'    => env('ALIYUN_APP_ACCESS_SECRET'),
    /*
    |--------------------------------------------------------
    | 调试开启
    |--------------------------------------------------------
    */
    'debug'         => env('ALIYUN_OSS_DEBUG', false),
    /*
    |--------------------------------------------------------
    | bucket存储空间
    |--------------------------------------------------------
    */
    'bucket'        => env('ALIYUN_OSS_BUCKET'),
    /*
    |--------------------------------------------------------
    | 外网节点或自定义外部域名
    |--------------------------------------------------------
    */
    'endpoint'      => env('ALIYUN_OSS_ENDPOINT'),
    /*
    |--------------------------------------------------------
    | 内网节点
    |--------------------------------------------------------
    */
    'endpointInternal' => env('ALIYUN_OSS_ENDPOINT_INTERNAL'),
    /*
    |--------------------------------------------------------
    | CDN域名
    |--------------------------------------------------------
    */
    'isCName'   => env('ALIYUN_OSS_ENABLE_CNAME', false),
    'cdnDomain' => env('ALIYUN_OSS_CDN_DOMAIN', ''),
    /*
    |--------------------------------------------------------
    | TCP协议，true为https，false为http
    |--------------------------------------------------------
    */
    'ssl' => env('ALIYUN_OSS_ENABLE_SSL', false),
    /*
    |--------------------------------------------------------
    | 上传目录
    |--------------------------------------------------------
    */
    'videoDir' => env('ALIYUN_OSS_VIDEO_DIR', 'uploads/videos'),
    'videoFrameDir' => env('ALIYUN_OSS_VIDEO_FRAME_DIR', 'uploads/videoframes'),
    'imageDir' => env('ALIYUN_OSS_IMAGE_DIR', 'uploads/images'),
    'audioDir' => env('ALIYUN_OSS_AUDIO_DIR', 'uploads/audio'),
    'postDir' => env('ALIYUN_OSS_POST_DIR', 'uploads/posts'),
    'qrcodeDir' => env('ALIYUN_OSS_QRCODE_DIR', 'uploads/qrcode'),
    /*
    |--------------------------------------------------------
    | 上传大小限制，单位B
    |--------------------------------------------------------
    */
    'imageUploadMaxSize' => env('ALIYUN_OSS_IMAGE_UPLOAD_MAX_SIZE', 10485760),
    'videoUploadMaxSize' => env('ALIYUN_OSS_VIDEO_UPLOAD_MAX_SIZE', 104857600),
    'audioUploadMaxSize' => env('ALIYUN_OSS_VIDEO_AUDIO_MAX_SIZE', 52428800),
    /*
    |--------------------------------------------------------
    | 直传回调地址
    |--------------------------------------------------------
    */
    'imageUploadCallback' => env('ALIYUN_OSS_IMAGE_UPLOAD_CALLBACK', 'http://uw7v4adaao.shhttp.cn/oss/callback/image'),
    'audioUploadCallback' => env('ALIYUN_OSS_AUDIO_UPLOAD_CALLBACK', 'http://uw7v4adaao.shhttp.cn/oss/callback/audio'),
    'videoUploadCallback' => env('ALIYUN_OSS_VIDEO_UPLOAD_CALLBACK', 'http://uw7v4adaao.shhttp.cn/oss/callback/video'),
];
