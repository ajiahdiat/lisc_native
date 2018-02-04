<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/retina-1.1.0.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/ekko-lightbox.min.js"></script>

<!--[if lt IE 10]>
    <script src="assets/js/placeholder.js"></script>
<![endif]-->
			<script>
				var d = new Date();
				d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
				var expires = "expires="+d.toUTCString();
				function checkCookie(lang){
					var name = "lang=";
					var decodedCookie = decodeURIComponent(document.cookie);
					if(decodedCookie.includes(lang)) return true;
					else return false;						
				}
				function chgLangId(){
					var c = checkCookie("id");
					if(!c){
						document.cookie = "lang=id;" + expires + ";path=/;";
						window.location.reload();
					}
				}
				function chgLangEn(){
					var c = checkCookie("en");
					if(!c){
						document.cookie = "lang=en;" + expires + ";path=/;";
						window.location.reload();
					}
				}
				function contact(msg) {
					if	(msg == 1){
						var x = document.getElementById("msg")
							y = document.getElementById("reg");
						x.style.display = "block";
						y.style.display = "none";
					}else{
						var x = document.getElementById("msg")
							y = document.getElementById("reg");
						y.style.display = "block";
						x.style.display = "none";
					}
				}
				$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
			</script>