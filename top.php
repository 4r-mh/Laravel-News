<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Laravel News 掲示板の作成-データベースの使用">
    <title>Laravel News</title>
    <link rel="stylesheet" href="boardstyle.css">
</head>
<body>
	<header class="header">
	<p><a href="/top.php" target="_blank" >Laravel News</a></p>
	<h1 class="header_title">さぁ、最新のニュースをシェアしましょう</h1>
	<?php if( !empty($error_message) ): ?>
		<ul class="error_message">
			<?php while( $error  = current( $error_message ) ) : ?>
				<li><?php echo $error; ?></li>
    			<?php next( $error_message );?>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
	<section>
		<form  method="POST" onsubmit="return confirm('投稿してよろしいですか？')">
			<div>
				<label class="title_title" for="title">タイトル：</label>
				<input type="text"  id="title" name="title" value=""></input>
			</div>
			<div>
				<label class="body_title" for="body">記事：</label>
				<textarea name="body" id="body" rows="10" cols="70"></textarea>
			</div>
			<input type="submit" name="submit_btn" value="投稿" class="submit_btn">
		</form>
	</section>
	<hr>
	<section>

        			<a href=>&body=">記事全文・コメントを見る</a>
	<!-- </form> -->
    		<hr>
				</article>
	</section>
</body>
</html>


