<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="title" content="">
    <meta name="google-site-verification" content="YtXPnlrcpC3iJphuNPKuVG6_aNaPgvdg2DAGb8_Q_pY" />
    <link href="/img/(200 × 200 px) 2.png" rel="shortcut icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Vikas Gupta</title>
</head>

<body>
    <!-- header section start -->
    <header>

        <div id="nav">
            <div class="logo hv">
                <img src="./img/(200 × 200 px) 2.png" alt="Erorr to load logo" width="100%" height="100%" />
            </div>
            <div class="option ac v-class">
                <ul>
                    <li><a href="#home">home</a></li>
                    <li> <a href="#about">about-myself</a></li>
                    <li><a href="#education">my qualification
                        </a></li>
                    <li> <a href="#contact">contact-me
                        </a></li>
                </ul>
            </div>
            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#home">home</a>
                <a href="#about">about-myself</a>
                <a href="#education">my qualification
                </a>
                <a href="#contact">contact-me
                </a>
            </div>

            <div id="main">
                <button class="openbtn" onclick="openNav()">☰</button>
            </div>
        </div>
    </header>
    <!-- end of header section -->

    
	<div class="content">
		<div class="kode-blog-style-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                        <div class="kode-contact-heading">
							<h4>Get in touch</h4>
							<span class="border-left"></span>
							
						</div>
						<div class="kode-contact-area col-md-12">
                             <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }                        
                        	?>				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <section class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">All Rights Reserved. © 2023 <a href="mailto:webdesigner844@gmail.com"
                            class="text-black">Vikas</a></p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="js/main.js"></script>
</body>

</html>