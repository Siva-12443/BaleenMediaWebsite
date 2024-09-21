<?php
include('include/top.php');
?>
<style>
	 /* =================================================================================banner css */
.service-banner{
    background-image: linear-gradient(#f1eafe, #e0cefd, #c4a6fb);
    padding-top:30px;
            border:0px;
}
.service-banner h1 {
    font-family: "Poppins", sans-serif;
    text-align: left;
    font-size: 30px;
    font-weight: 600;
    border-bottom: 2px solid black;
    padding-bottom: 10px;
    margin-bottom: 20px;
}
.service-banner p{
    font-size:13px; 
            font-weight:bold;
            font-family: "Nunito", sans-serif;
            text-align:justify;
            line-height:1.4;
            color:#3d3d3d;
}

@media (min-width: 1000px){
    .row1{
    display:flex;
   align-items:center;
   justify-content:center;
}
.service-banner h1{
    font-family: "poppins", sans-serif;
    text-align:left;
    font-size: 60px;
    font-weight:600;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:20px;
}
.service-banner p{
    font-size:20px;
            font-weight:bold;
            font-family: "Nunito", sans-serif;
            text-align:justify;
            line-height:1.6;
            color:#3d3d3d;
}

}

.wave{
    width:100%;
}
/* =================================================================================banner css end*/

/* =================================================================================service-about css*/
.service-about-bg{
	background:#ede3fd;
	display:flex;
	flex-direction:column;
	justify-content:center;
	align-items:center;
	padding-bottom:20px;
}
.service-about-bg p{
	font-size:18px;
	font-weight:550;
	padding:0px 20px;
	font-family:nunito;
	color:black;
}
.service-about-bg span{
	font-family: "Gloria Hallelujah", cursive;
    font-weight: 600;
    font-style: italic;
    font-size: 18.5px;
	
}

.We-work-with-bg{
	background:#fffbf5;
}

.section-padding{
    zoom:40%;
}
.We-work-with-bg .smp {
margin-bottom:20px;
width:100%;
border-radius:10px;
border:1px solid;
}
.smp img{
	border-radius:9px;
	width:100%;
}




@media (min-width:1000px){
    .section-padding{
    zoom:150%;
}  
}
@media (min-width: 580px) {
    .section-padding{
    zoom:160%;
}  
}
</style>
<!-- ==========================banner ================================-->
<section class="service-banner"> 
<div class="container">
    <div class="row1">
        <div class="col-md-6">
            <h1>Bus shelter Advertisement</h1>
            <p>We are here to provide you the best Bus shelter Advertisement.</p>
        </div>
        <div class="col-md-6">
            <img src="assets/images/busstop.png" alt="" class="img-fluid pb-5 pt-5">
        </div>
    </div>
</div>
<img src="assets/images/wave1.png" class="wave"> 
 </section>
 <!-- ============================================================================================================================================= -->
 <div class="empty-space" style="height:50px; background-image: linear-gradient(white,#ede3fd);"></div>
<section class="service-about-bg">
<h2 style="font-size: 40px; font-family:Montserrat;  padding:20px 0px;">Why Bus shelter Ads?</h2>
<p>Bus shelter advertising is a powerful way to reach diverse people on the move cost-effectively. Our bus shelter advertising solutions offer prime location opportunities to reach your target audience.</p>
<br>
<p><span>Get your brand well known and remarkable by Bus shelter Advertisement.</span></p>
</section>
 <!-- =========================================================================================================================================== -->
<section class="We-work-with-bg">
<h2 style="font-size: 40px; font-family:Montserrat;  padding:30px 0px;">Sample Ads</h2>  
<div class="container">
	<div class="row">
		<!-- card1 -->
		<div class="col-md-4">
			<div class="smp">
				<img src="assets/images/service cards/Bus-Shelter-1.jpg" alt="" class="img-fluid">
			</div>
		</div>
        <!-- card2 -->
		<div class="col-md-4">
			<div class="smp">
				<img src="assets/images/service cards/Bus-Shelter-2.jpg" alt="" class="img-fluid">
			</div>
		</div>
        <!-- card3 -->
		<div class="col-md-4">
			<div class="smp">
				<img src="assets/images/service cards/Bus-Shelter-3.jpg" alt="" class="img-fluid">
			</div>
		</div>
		
	</div>
</div>
</section>


<div class="empty-space" style="height:100px; background-image: linear-gradient(#fffbf5, #f8f9fa);"></div>
<?php
include('include/footer.php');
?>