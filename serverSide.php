<!DOCTYPE html>
<html>

<head>
    <title>YouTube Converter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: url(https://media.istockphoto.com/vectors/blue-sky-with-white-clouds-background-border-of-clouds-simple-cartoon-vector-id1138179218?b=1&k=20&m=1138179218&s=170667a&w=0&h=maFDOrzJMxDJ7rvvKW5ddHcHdk_Q5sTisbWl_npHI-4=) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .converter-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background: linear-gradient(to bottom, #FF1493, #4169E1);
            /* Untuk mendukung browser yang lebih lama */
            background: -webkit-linear-gradient(top, #FF1493, #4169E1);
            background: -moz-linear-gradient(top, #FF1493, #4169E1);
            background: -o-linear-gradient(top, #FF1493, #4169E1);
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 20px;
        }

        @-webkit-keyframes float {
            0% {
                transform: translateZ(0);
            }

            50% {
                transform: translate3d(0, 7px, 0);
            }

            to {
                transform: translateZ(0);
            }
        }

        @keyframes float {
            0% {
                transform: translateZ(0);
            }

            50% {
                transform: translate3d(0, 7px, 0);
            }

            to {
                transform: translateZ(0);
            }
        }

        /* membuat container atau wadah dari scrollbar dengan lebar 20px  */
        ::-webkit-scrollbar {
            width: 0.5vw;
        }

        /* membuat background dari scrollbar */
        /* kasih warna transparan agar lebih estetik  */
        ::-webkit-scrollbar-track {
            background-color: transparent;
        }


        /* membuat styling pada batang atau bar scrollbar  */
        /* kita beri warna abu tua dengan lengkungan di sisi atas dan bawahnya  */
        ::-webkit-scrollbar-thumb {
            background-color: #d6dee1;
            border-radius: 20px;
            border: 100% solid transparent;
            background-clip: content-box;
        }

        /* warna akan berubah menjadi abu mudah saat kursor diarahkan  */
        ::-webkit-scrollbar-thumb:hover {
            background-color: #a8bbbf;
        }
    </style>
    <!-- Put the Library in your <head> tag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.3.2/iframeResizer.min.js"></script>
</head>

<body>
    <div class="container converter-container my-5">
        <div class="card shadow" style="border-radius: 20px;">
            <h4 class="text-center pt-4 px-3">YouTube to MP3, MP4, WEBM Converter</h4>
            <form method="POST" action="" class="my-4">
                <div class="form-group px-5">
                    <input type="text" name="youtube_url" id="youtubeUrl" class="form-control" placeholder="Enter YouTube URL" required>
                </div>
                <center><button type="submit" class="btn btn-primary">Convert</button></center>
            </form>
        </div>
        <div class="card shadow mt-4 px-3" style="border-radius: 20px;">
            <?php if (isset($_POST['youtube_url'])) : ?>
                <?php $youtubeUrl = $_POST['youtube_url'] ?>
                <iframe id="widgetApi" src="https://convert2mp3s.com/api/widget?url=<?php echo urlencode($youtubeUrl); ?>" width="100%" height="100%" allowtransparency="true" scrolling="no" style="border:none"></iframe>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        iFrameResize({
            log: false,
            minHeight: 400
        }, '#widgetApi')
    </script>
</body>

</html>