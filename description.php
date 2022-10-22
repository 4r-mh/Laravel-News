<?php



    if( !empty($_POST['submit_btn']) ) {
	    if( empty($_POST['text']) ) {
		    $error_message[] = 'コメントは必須です。';
	    }
	    if(mb_strlen($_POST['text']) > $limit) { 
		    $error_message[] = 'コメントは50文字以下です。';
		}
    
    }


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Laravel News 掲示板の作成">
    <title>Laravel News</title>
    <link rel="stylesheet" href="./boardstyle.css">
</head>
<body>
    <header class="header">
        <p><a href="/top.php" target="_blank" >Laravel News</a></p>
    </header>
    <section>
        <article>
            <h3 class="news_title"></h3>
            <p ></p>
        </article>
    <hr>
    </section>
    <section>
        <form method="POST" class="comment">
            <textarea name="text" class="comment_msg" rows="7" cols="22"></textarea>
            <input type="submit" name="submit_btn" class="comment_btn"  value="コメントを書く">
        </form>
        <?php if( !empty($error_message) ): ?>
	        <ul class="error_message">
		        <?php while( $error  = current( $error_message ) ) : ?>
			        <li><?php echo $error; ?></li>
                    <?php next( $error_message );?>
	            <?php endwhile; ?>
	        </ul>
        <?php endif; ?>
        <div class="comment_ed">
            
</div>
</section>
</body>
</html>