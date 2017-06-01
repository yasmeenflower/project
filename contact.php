<?php 
	include 'head.php';
?>
                         <div id="banner"> 

                         <img src="banner3.png" width ="960" height="300"/>
                 <div class="form" >
                 <h1 class="p">Contact us</h1>
			      
	<p class="p">If you want to register to our institute you can fill this form and send to us</p>
                      <form	  action='contact.php' method='POST'>
<pre>
First Name  : <input type="text" name="firstname">   Second Name : <input type="text" name="secondname"><br>
<input type ="radio" name="gender" value ="Male" checked > Male  <input type ="radio" name="gender" value ="Female" checked > Female <br>
Company     : <input	type="text"	name="Company"	/>   E-mail      : <input	type="text"	name="E-mail"	/><br>
phone       : <input	type="text"	name="phone"	/>   House_Number: <input	type="text"	name="phone"	/><br/>
City        : <input	type="text"	name="City"/>   Country     :	<input	type="text"	name="Country"/><br>
Postcode    : <input	type="text"	name="Postcode"	/>   Your_Address: <input	type="text"	name="Address"/><br> 
Comment       <textarea name='comment' id='commment'></textarea>


<input	type="submit"	value="Send">   <input	type="reset"	value="Reset">	


 </pre>  
                 </form><br>
                


                         <div class="side-bar">
 
 	                       <img class="contact"src="co1.png"width ="300"  height="300"/> 

			                     </div>

                                  <div class="side-bar2">
 
 	                       <img class="contact"src="co2.png"width ="300"  height="300"/> 

			                     </div>

                                  <div class="side-bar3">
 
 	                       <img class="contact"src="co3.png"width ="300"  height="300"/> 

			                     </div>




			
                 
                         
						<?php 
							include 'footer.php'
						?>
    </body>

</html>