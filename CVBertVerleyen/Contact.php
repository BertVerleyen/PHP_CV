<?php

$title = 'Contact';

$content = '<div id="wrapper">
<header>
<div id="logo">
      <a href="#">
	    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ6VUnmxXaEqnaGVefuonZbTtvF8DwhXysRt7Qkvh7dPQP9qnZU3gGiowhy" alt="img cv"/>
	  </a>
</div>
</header>
<nav>
 <ul>
     <li><a href="index.php">Home</a></li>
	 <li><a href="About.php">About</a></li>
	 <li><a href="Projects.php">Projects</a></li>
	 <li class="active"><a href="Contact.php">Contact</a></li>
  </ul>
</nav>
<section id="contact">
  <article>
   <p>Mail to bert_verleyen@hotmail.com or fill in the form for more information:</p>
   <form action="mailto:bert_verleyen@hotmail.com" method="post">
     <label for="voornaam">First name: </label>
	 <input type="text" name="txtVoornaam" required/>
     <label for="naam">Last Name: </label>
	 <input type="text" name="txtNaam" required/>
     <label for="email">E-mail: </label>
	 <input type="email" name="txtEmail" required/>
	 <label for="beschrijving">Description: </label>
	 <textarea id="txtArea" rows="10" cols="70" name="txtBeschrijving"></textarea>
     <input type="submit" value="submit">
	</form>
  </article>	
</section>
<footer>
  <p>Generated with PHP</p>
  <div class="contactdata">
    <p class="contactname"><a class="url" href="#">Bert Verleyen</a><p>
    <p class="address">
       <span class="street-address">Braemstraat 86</span><br/>
	   <span class="postal-code">9050</span><br/>
	   <span class="city">Ghent</span><br/>
       <span class="region">East Flanders</span><br>
       <span class="country-name">Belgium</span>
    </p>
    <p class="tel">+320472077741</p>
   </div>
</footer>
</div>';

include 'Template.php';
?>
