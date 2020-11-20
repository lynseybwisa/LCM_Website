@extends('layoutUser')
<style>

.carousel-item {
    height: 65vh;
    min-height: 350px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    margin-top: 150px;
}

.container p{
    color: black;
    font-size: 18px;
}
.display-4 {
    font-family: 'Source Serif Pro', serif
}

.lead {
    font-family: 'Source Serif Pro', serif
}


.font-weight-light {
    font-family: 'Source Serif Pro', serif
}
</style>


    <div id="indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#indicators" data-slide-to="0" class="active"></li>
            <li data-target="#indicators" data-slide-to="1"></li>
            <li data-target="#indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url(images/lcm4.jpg)">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Debate club</h3>
                    <p class="lead">Debate club participate in debate at srarehe boys</p>
                </div>
            </div> <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url(images/lcm8.jpg)">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Our girl guides</h3>
                    <p class="lead" style="color: rgb(10, 1, 1)">The Loreto Msongari girl guides pose a photo with the First lady</p>
                </div>
            </div> <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url(images/lcm10.jpg)">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Sports Day</h3>
                    <p class="lead">Girls during thr sports day</p>
                </div>
            </div>
        </div> <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#indicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div>



<section class="py-5">
    <div class="container">
        <h1 class="font-weight-light">Image Slider Two</h1>
        <p class="lead">Here you can write anything about the website. These are the sample pictures ,replace them and use your own. These pictures are taken from unsplash.</p>
        <p class="lead">Bacon ipsum dolor amet drumstick short loin ribeye sirloin ham spare ribs landjaeger, pig turducken meatball sausage. Salami cow shoulder pork loin. Meatloaf turducken andouille chuck beef ribs picanha. Filet mignon pastrami fatback ribeye leberkas shank boudin sirloin beef short ribs tail pig pork loin shoulder buffalo. Short ribs andouille swine chicken leberkas. Fatback sirloin pork belly turkey landjaeger corned beef biltong, buffalo bresaola strip steak brisket short loin salami.</p>
    </div>
</section>



<section class="py-5">
    <div class="container">
        <h1 class="font-weight-light">Image Slider Two</h1>
        <p class="lead">Here you can write anything about the website. These are the sample pictures ,replace them and use your own. These pictures are taken from unsplash.</p>
        <p class="lead">Bacon ipsum dolor amet drumstick short loin ribeye sirloin ham spare ribs landjaeger, pig turducken meatball sausage. Salami cow shoulder pork loin. Meatloaf turducken andouille chuck beef ribs picanha. Filet mignon pastrami fatback ribeye leberkas shank boudin sirloin beef short ribs tail pig pork loin shoulder buffalo. Short ribs andouille swine chicken leberkas. Fatback sirloin pork belly turkey landjaeger corned beef biltong, buffalo bresaola strip steak brisket short loin salami.</p>
    </div>
</section>
<script>
    $(function() {
        $(document).scroll(function() {
            var $nav = $("#mainNavbar");
            $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        });
    });
</script>
</body>
</html>

