<hmtl>
    <head>
        <title>Upload Form</title>
    </head>
    <body>
        <?php 
            if(isset($error)) echo $error;
            echo form_open_multipart('watermark/upload');
        ?>
        <input type="file" name="userfile" size="20" />
        <br /><br />
        <input type="submit" value="upload" />
        </form>
        <div>
            <?php 
                if(isset($upload_data)){
                    ?>
                    <img src="<?php echo base_url(); ?> uploads/<?php $upload_data;?>" />
                    <?php
                }
            ?>
        </div>
    </body>
</hmtl>