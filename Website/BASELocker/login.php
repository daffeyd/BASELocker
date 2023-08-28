<!DOCTYPE html>
<html>

	<head>
		<title>LOGIN</title>
		<link rel="stylesheet" type="text/css" href="style_log.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<meta charset="utf-8" />
    	<meta property="twitter:card" content="summary_large_image" />
		<style data-tag="reset-style-sheet">
      		html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: sans-serif;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    	</style>
    	<style data-tag="default-style-sheet">
      		html {
        		font-family: Inter;
        		font-size: 16px;
      		}

      		body {
        		font-weight: 400;
        		font-style:normal;
        		text-decoration: none;
        		text-transform: none;
        		letter-spacing: normal;
        		line-height: 1.15;
        		color: var(--dl-color-gray-black);
        		background-color: var(--dl-color-gray-white);
      		}
    	</style>
	</head>


	<body>
		<div class="group20button-title">
            <span class="group20button-text14">
				<span>Login</span>
			</span>
            <span class="group20button-text16">
            	<span class="group20button-text17">
                	By signing in you are agreeing our
            	</span>
            	<span class="group20button-text18">
                	Term and privacy policy
            	</span>
            </span>
        </div>

		<div class="group20button-page-indicator">
            <span class="group20button-text02">
				<a class="daftar" href="daftar.php">Register</a>
			</span>
            <span class="group20button-text04">
				<a class="login" href="login.php">Login</a>
			</span>
        </div>

		<form class="ind" action="cekLogin.php" method="post">
			<!--<h2>LOGIN</h2>-->
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<?php if (isset($_GET['success'])) { ?>
				<p class="success"><?php echo $_GET['success']; ?></p>
			<?php } ?>
			<!--<label>Username</label>-->
			<div class="group20button-enter-email">
				<img
        			src="images/icbaselinepeopleoutline2121-wlow.svg"
        			alt="icbaselinepeopleoutline2121-wlow"
        			class="group21-icbaselinepeopleoutline"
      			/>
            	<span class="group20button-text06">
					<input type="text" name="username" placeholder="Username">
			  	</span>
			</div>
			<br>
			<!--<label>Password</label>-->
			<div class="group20button-enter-password">
				<img
        			src="images/lock2121-jkft.svg"
        			alt="lock2121-jkft"
        			class="group21-lock"
      			/>
				<span class="group20button-text12">
					<input type="password" name="password" placeholder="Password">
				</span>
			</div>
			<br>
			<div class="group20button-loginbtteng-hbutton">
				<button class="group20button-login-button" type="submit">
					<img
        				src="images/rectangle52121-kft-200h.png"
        				alt="Rectangle52121-kft-200h"
        				class="group21-rectangle5"
      				/>
					<span class="group21-text">
						Login
					</span>
				</button>
			</div>
			<!--<p>Belum memiliki akun?<a class="daftar" href="daftar.php">Daftar disini</a></p>-->
		</form>

		<div class="group21-logo">
			<img
      			src="images/dotpict2023031815360212162-1x8h-200w.png"
      			alt="dotpict2023031815360212162"
      			class="group21-dotpict202303181536021"
    		/>
    		<img
      			src="images/BASE.png"
      			alt="BASE"
      			class="group21-logobasefix1"
    		/>
        </div>

	</body>


</html>