<!doctype html>
<html>
<head>
    <style>
        body {
            background-color: #000;
            font-size: 2em;
        }

        .album {
            background-color: #000;
            color: #fff;
            float: left;
            width: 400px;
            padding: 5px;
            border: 5px #fff inset;
        }

        .albumText {
            color: #f0f;
        }

        .artistText {
            color: #0ff;
        }
    </style>
</head>

<body>
    <br><br>
    <?php
        //read contents until the end
        if ($dir = opendir('.')) {
            while (false !== ($artist = readdir($dir))) {
                if (in_array($artist, ['.', '..'])) {
                    continue;
                }

                if (is_dir($artist) == false) {
                    echo null;
                }

                if (is_dir($artist)) {
                    if ($thisdir = opendir($artist)) {
                        while (false !== ($album = readdir($thisdir))) {
                            if (in_array($album, ['.', '..'])) {
                                continue;
                            }

                            $artwork = glob("{$artist}/{$album}/*.JPG")[0];
                            ?>
                                <div id="<?= $album ?>" class="album">
                                    <a href="<?= "{$artist}/{$album}/track_list.php" ?>" class="albumText">
                                        <img height="400" width="400" src="<?= $artwork ?>"></img><br>
                                        <?= $album ?>
                                    </a><br>
                                    By <span class="artistText"><?= $artist ?></span>
                                </div>
                            <?php
                        }
                    }
                    closedir($thisdir);
                }
            }
            closedir($dir);
        }
    ?>
</body>
</html>
