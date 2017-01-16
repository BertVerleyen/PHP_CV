<?php

$title = 'Home CV online';
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
     <li class="active"><a href="index.php">Home</a></li>
	 <li><a href="About.php">About</a></li>
	 <li><a href="Projects.php">Projects</a></li>
	 <li><a href="Contact.php">Contact</a></li>
  </ul>
  <div class="clearfix"></div>
</nav>
<section id="greeting">
<article>
      <p>Hi, pleased to meet ye, I\'m Bert</p>
</article>
</section>


<div class="profilepic">
     <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/2/005/062/3c2/06dc712.jpg" alt="profielfoto"/>
</div>

<div class="clearfix"></div>
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
