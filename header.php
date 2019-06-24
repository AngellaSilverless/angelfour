<?php
/**
 * Header
 *
 * @package angelfour
 */

?>
<!doctype html>
<?php
	$url = explode('/',$_SERVER['REQUEST_URI']);
	$dir = $url[1] ? $url[1] : 'home';
?>

<html <?php language_attributes(); ?> class="<?php echo $dir ?>">  

<head>

<meta charset="UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Angel & Four</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"><!-- Font Awesome CDN-->
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<link rel="preconnect" href="https://use.typekit.net/lvp3olv.css"  rel="stylesheet" >
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="background"></div>
	
	<div class="shadow-people">
		<?php get_template_part('inc/img/shadow', 'people');?>
	</div>

    <div id="page" class="site-wrapper">

    <main><!--closes in footer.php-->