<?php
include 'lib/Database.php';
include 'config/config.php';
include 'helpers/Format.php';


$db = new Database();
$format = new Format();

?>


<!DOCTYPE html>
<html>

<head>
	<?php
        if (isset($_GET['pageid'])) {
            $pageid = $_GET['pageid'] ;
            $query = "SELECT * FROM tbl_page WHERE id = '$pageid'";
            $page = $db->select($query);
            if ($page) {
                while ($result = $page->fetch_assoc()) {
                    ?>
			<title><?php echo $result['name']; ?> | <?php echo TITLE; ?></title>
	<?php
                }
            }
		} elseif (isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "SELECT * FROM tbl_post WHERE id ='$id'";
			$posts = $db->select($query);
			if($posts){
				while($result = $posts->fetch_assoc()){ ?>
					<title><?php echo $result['title']; ?> | <?php echo TITLE; ?></title>
				<?php 
				}
			}
		} else { ?>
			<title><?php echo $format->title(); ?> | <?php echo TITLE; ?></title>
	<?php
		} 
	?>

		<meta name="language" content="English">
		<meta name="description" content="It is a website about education">
		<meta name="keywords" content="blog,cms blog">
		<meta name="author" content="Delowar">
		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="style.css">
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({
					effect: 'random',
					slices: 10,
					animSpeed: 500,
					pauseTime: 5000,
					startSlide: 0, //Set starting Slide (0 index)
					directionNav: false,
					directionNavHide: false, //Only show on hover
					controlNav: false, //1,2,3...
					controlNavThumbs: false, //Use thumbnails for Control Nav
					pauseOnHover: true, //Stop animation while hovering
					manualAdvance: false, //Force manual transitions
					captionOpacity: 0.8, //Universal caption opacity
					beforeChange: function() {},
					afterChange: function() {},
					slideshowEnd: function() {} //Triggers after all slides have been shown
				});
			});
		</script>
		<script>
			$(document).ready(function() {
			load_data();

			function load_data(query) {
				$.ajax({
					url: "search.php",
					method: "post",
					data: {
						query: search
					},
					success: function(data) {
						$('#result').html(data);
					}
				});
			}

			$('#search_text').keyup(function() {
				var search = $(this).val();
				if (search != '') {
					load_data(search);
				} else {
					load_data();
				}
			});
		});
	</script>

</head>

<body>
<?php 
		$query = "SELECT * From tbl_slogan WHERE id='1'";
		$getResult = $db->select($query);
			if ($getResult) {
				while ($result = $getResult->fetch_assoc()) {
?>
	<div class="headersection templete clear">
		<a href="#">
			<div class="logo">
				<img src="admin/<?php echo $result['logo']; ?>"
				 alt="Logo" />
				<h2><?php echo $result['title']; ?>
				</h2>
				<p><?php echo $result['slogan']; ?>
				</p>
			</div>
			<?php
        }
    }
?>

		</a>

		<?php
        $query = "SELECT * FROM tbl_social WHERE id = '1'";
        $social = $db->select($query);
            if ($social) {
                while ($result = $social->fetch_assoc()) {
                    ?>
		<div class="social clear">
			<div class="icon clear">
				<a href="<?php echo $result['facebook']; ?>"
				 target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo $result['twitter']; ?>"
				 target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo $result['linkedin']; ?>"
				 target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="<?php echo $result['googleplus']; ?>"
				 target="_blank"><i class="fa fa-google-plus"></i></a>
			</div>

			<?php
                }
            }?>


			<div class="searchbtn clear">
				<form action="search.php" method="post">
					<input type="text" name="search" id="search_text" placeholder="Search keyword..." />
					<input type="submit" name="submit" value="Search" />
				</form>
			</div>
		</div>
	</div>
	<div class="navsection templete">
		<ul>
			<li><a 
			<?php 
			 $path = $_SERVER['SCRIPT_FILENAME'];
			 $currentpage = basename($path , '.php');
			 if($currentpage == 'index'){
				echo "id='active'";		   
			}
			?>
			
			
			 href="index.php">Home</a></li>
			<?php
                $query = "SELECT * FROM tbl_page";
                $pages = $db->select($query);
                if ($pages) {
                    while ($page = $pages->fetch_assoc()) {
                        ?>
			<li><a 
			<?php 
				if(isset($_GET['pageid']) && $_GET['pageid'] == $page['id']){
					echo "id='active'";
				}
			?>
			href="page.php?pageid=<?php echo $page['id']; ?>"><?php echo $page['name']; ?></a>
			</li>

			<?php
                    }
                }
            ?>
			<li><a
			<?php 
			 if($currentpage == 'contact'){
				echo "id='active'";		   
			}
			?>
			
			 href="contact.php">Contact</a></li>
		</ul>
	</div>