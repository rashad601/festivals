<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="my.css">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("img/15040002973_d232e78077_b.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
<body>

<!-- Links (sit on top) -->
<div class="top">
  <div class="row padding black">
    <div class="col s3">
      <a href="#" class="button block orange">HOME</a>
    </div>
    <div class="col s3">
      <a href="#about" class="button block orange">ABOUT</a>
    </div>
    <div class="col s3">
      <a href="#menu" class="button block orange">MENU</a>
    </div>
    <div class="col s3">
      <a href="#where" class="button block orange">WHERE</a>
	  
    </div>
	
  </div>
</div>

<!-- Header with image -->
<header class="bgimg display-container grayscale-min" id="home">
  <!--<div class="display-bottomleft center padding-large hide-small">
    <span class="tag">Open from 6am to 5pm</span>
  </div>
  <div class="display-middle center">
    <span class="text-white" style="font-size:90px">the<br>Cafe</span>
  </div>
  <div class="display-bottomright center padding-large">
    <span class="text-white">15 Adr street, 5015</span>
  </div>-->
</header>

<!-- Add a background color and large text to the whole page -->
<div class="sand grayscale large">

<!-- About Container -->
<div class="container" id="about">
  <div class="content" style="max-width:700px">
    <h5 class="center padding-64"><span class="tag wide">THE FESTIVAL</span></h5>
    <p>A festival is an event ordinarily celebrated by a community and centering on some characteristic aspect of that community and its religion or cultures. It is often marked as a local or national holiday, mela, or eid. A festival constitutes typical cases of glocalization, as well as the high culture-low culture interrelationship.[1] Next to religion and folklore, a significant origin is agricultural. Food is such a vital resource that many festivals are associated with harvest time. Religious commemoration and thanksgiving for good harvests are blended in events that take place in autumn, such as Halloween in the northern hemisphere and Easter in the southern.</p>
    <p>Festivals often serve to fulfill specific communal purposes, especially in regard to commemoration or thanking to the gods and goddesses. Celebrations offer a sense of belonging for religious, social, or geographical groups, contributing to group cohesiveness. They may also provide entertainment, which was particularly important to local communities before the advent of mass-produced entertainment. Festivals that focus on cultural or ethnic topics also seek to inform community members of their traditions; the involvement of elders sharing stories and experience provides a means for unity among families.</p>
	 <a href="" >list</a>
    <div class="panel leftbar light-grey">
      <p><i>"The word "Festival" is public party , an organized set of events, such as plays or  musical performances, usually happening in one place, or a special day or period, usually in memory of a religious event, with its own social activities, food, or ceremonies"</i></p>
      <!--<p>Chef, Coffeeist and Owner: Liam Brown</p>-->
	 
    </div>
    <img src="img/collage.jpg" style="width:100%;max-width:1000px" class="margin-top">
  
  </div>
</div>

<!-- Menu Container -->
<div class="container" id="menu">
  <div class="content" style="max-width:700px">
 
    <h5 class="center padding-48"><span class="tag wide">THE MENU</span></h5>
  
    <div class="row center card padding">
      <a href="javascript:void(0)" onClick="openMenu(event, 'Eat');" id="myLink">
        <div class="col s6 tablink">Eat</div>
      </a>
      <a href="javascript:void(0)" onClick="openMenu(event, 'Drinks');">
        <div class="col s6 tablink">Drink</div>
      </a>
    </div>

    <div id="Eat" class="container menu padding-48 card">
      <h5>Bread Basket</h5>
      <p class="text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>
    
      <h5>Honey Almond Granola with Fruits</h5>
      <p class="text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
    
      <h5>Belgian Waffle</h5>
      <p class="text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
    
      <h5>Scrambled eggs</h5>
      <p class="text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
    
      <h5>Blueberry Pancakes</h5>
      <p class="text-grey">With syrup, butter and lots of berries 8.50</p>
    </div>

    <div id="Drinks" class="container menu padding-48 card">
      <h5>Coffee</h5>
      <p class="text-grey">Regular coffee 2.50</p><br>
    
      <h5>Chocolato</h5>
      <p class="text-grey">Chocolate espresso with milk 4.50</p><br>
    
      <h5>Corretto</h5>
      <p class="text-grey">Whiskey and coffee 5.00</p><br>
    
      <h5>Iced tea</h5>
      <p class="text-grey">Hot tea, except not hot 3.00</p><br>
    
      <h5>Soda</h5>
      <p class="text-grey">Coke, Sprite, Fanta, etc. 2.50</p>
    </div>  
    <img src="/img/coffeehouse2.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>

<!-- Contact/Area Container -->
<div class="container" id="where" style="padding-bottom:32px;">
  <div class="content" style="max-width:700px">
    <h5 class="center padding-48"><span class="tag wide">WHERE TO FIND US</span></h5>
    <p>Find us at some address at some place.</p>
    <img src="/img/map.jpg" class="image" style="width:100%">
    <p><span class="tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="input padding-16 border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="input padding-16 border" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="input padding-16 border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
      <p><input class="input padding-16 border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="button black" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="center light-grey padding-48 large">
  <p>Designed by student name</p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
