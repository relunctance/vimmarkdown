<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/github-markdown-css/github-markdown.css">
<style>
	.markdown-body {
		box-sizing: border-box;
		min-width: 200px;
		max-width: 980px;
		margin: 0 auto;
		padding: 45px;
	}

	@media (max-width: 767px) {
		.markdown-body {
			padding: 15px;
		}
	}
</style>
<article class="markdown-body">
<?php

include './vendor/autoload.php';

$markfile = "./markdown/mark.md";

if (!file_exists($markfile)) {
	echo "not exists: $markfile";
	exit;
}

$text = file_get_contents($markfile);

use Michelf\MarkdownExtra;
$parser = new MarkdownExtra;
$parser->fn_id_prefix = "post22-";
$my_html = $parser->transform($text);
echo $my_html;

?>

</article>


