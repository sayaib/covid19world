<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Covid-19 World</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
  </head>
  <body onload="fetch()">
    <!-- ***************************************** Navigation Bar ***************************** -->
    <nav class="navbar navbar-expand-lg navbar navbar navbar-light bg-light p-4">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sysmptoms">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#prevention">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>



    </ul>
  </div>
</nav>
<!-- **************************************** Header Part ********************************** -->
<div class="main_header">
<div class="row h-100">
  <div class="col-lg-6 col-md-6 col-12 order-lg-1 order-2">
<div class="lestside  w-100 h-100 d-flex justify-content-center align-items-center">
  <img src="images/corona-virus.gif" width="200" height="200" alt="corona-virus">
</div>
  </div>
  <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-1">
<div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
<h1 class="">Let's stay safe and fight against the Cor <span class="corona_rot"><img src="images/corona-icon.png" width="50" height="50" alt="o"></span> a Virus.</h1>
</div>
  </div>

</div>
</div>

<!-- ****************************************** Corona Latest Update **************************** -->

<section class="corona_update container-fluid">
<div class="mb-3">
  <h3 class="text-uppercase text-center live">covid-19 world live updates</h3>
</div>

<div class="table-responsive">
  <table class="table table-bordered table-dark table-striped text-center" id="tbval">
    <tr>
      <th>Country</th>
      <th>Total Confirmed</th>
      <th>Total Recovered</th>
      <th>Total Deaths</th>
      <th>New Confirmed</th>
      <th>New Deaths</th>
      <th>New Recovered</th>

    </tr>
  </table>

</div>

</section>

<!-- ***************************************** About Section ************************** -->

<div class="container-fluid sub_section pt-5 pb-5 " id="about">
<div class="section_header text-center mb-5 mt-4">
  <h1 class="">About COVID-19</h1>
  <div class="container">

  <div class="row pt-5">
    <div class="col-lg-6 col-md-6 col-12 p-2">
      <img src="images/about-corona.jpg" class="img-fluid about_corona" alt="about corona">
    </div>
    <div class="col-lg-6 col-md-6 col-12 p-2">
      <h2>What is COVID-19 (Corona-Virus)</h2>
      <p>Coronavirus disease (COVID-19) is an infectious
        disease caused by a newly discovered coronavirus.
        Most people who fall sick with COVID-19 will experience mild to moderate
           symptoms and recover without special treatment.</p>
      <p>The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales.
         These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.</p>
    </div>
  </div>

</div>

</div>
</div>

<!-- ******************************** Coronavirus Symptoms **************************** -->

<div class="container-fluid pt-5 pb-5" id="sysmptoms">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Coronavirus Symptoms</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/cough.png" height="120" width="120" class="img-fluid" alt="">
          <figcaption>cough</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/runny-nose.png" height="120" width="120" class="img-fluid" alt="">
          <figcaption>runny nose</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/fever.png" height="120" width="120" class="img-fluid" alt="">
          <figcaption>fever</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/cold.png" height="120" width="120" class="img-fluid" alt="">
          <figcaption>cold</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/tiredness.png" height="120" width="120" class="img-fluid" alt="">
          <figcaption>tiredness</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/difficulty-breathing.png" height="120" width="120" class="img-fluid" alt="">
          <figcaption>difficulty breathing (severe case)</figcaption>
        </figure>
      </div>
    </div>

  </div>
</div>

<!-- ******************************************* Prevention ******************************* -->

<div class="container-fluid sub_section pt-5 pb-5" id="prevention">
  <div class="section_header text-center mb-5 mt-4">
    <h1>6 Steps Prevention Against Coronavirus</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="images/hand-wash.png" height="90" width="90" class="img-fluid" alt="">

            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Wash your hand regularly for 20 seconds, with soap and water or alcohol-based hand rub</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="images/face-mask.png" height="90" width="90" class="img-fluid" alt="">

            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="images/social-distancing.png" height="90" width="90" class="img-fluid" alt="">

            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Avoid close contact (1 meter or 3 feet) with unwell people</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="images/stay-home.png" height="90" width="90" class="img-fluid" alt="">

            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Stay home and self-isolate from others in the household if you feel unwell</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="images/news.png" height="90" width="90" class="img-fluid" alt="">

            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Stay informed by watching the news & follow the recommended practices</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="images/fever-cough.png" height="90" width="90" class="img-fluid" alt="">

            </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>If you have a fever, cough and difficulty breathing seek medical care early</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<!-- *************************************** Contact Us ************************************** -->

<div class="container-fluid pt-5 pb-5" id="contact">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Contact Us ASAP</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">

        <form action="" method="POST">
          <div class="form-group">
            <label >Username</label>
            <input type="name" class="form-control" name="username" placeholder="name" autocomplete="off" required>
          </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Phone No.</label>
    <input type="number" class="form-control" name="phone" placeholder="phone" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label for="">Select Symptoms</label> <br>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
      <label class="custom-control-label" for="customcheckbox1">Cold</label>

    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
      <label class="custom-control-label" for="customcheckbox2">Fever</label>

    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
      <label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>

    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="weak">
      <label class="custom-control-label" for="customcheckbox4">Fleeing Weak</label>

    </div>

  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="massage"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

      </div>

    </div>

  </div>
</div>
<!-- *********************************** Top Cursor ***************************************** -->

<div class="container scrolltop float-right pr-5">
  <i class="fas fa-arrow-circle-up fa-2x" onclick="topFunction()" id="myBtn"></i>

</div>

<!-- *************************************** footer ***************************************** -->

<footer class="mt-5 pb-5 pt-5">
  <div class="footer_style text-white text-center container-fluid">
    <a href="#" target="blank" class="sourcecode">Designed & Built by Sayaib Sarkar</a>

<div class="">
  <a href="https://github.com/sayaib" target="blank"><i class="fab fa-github fa-2x"></i></a>
  <a href="https://in.linkedin.com/in/sayaib-sarkar-847b3b169" target="blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
  <a href="https://www.sayaibsarkar.ml/" target="blank"><i class="fab fa-chrome fa-2x"></i></a>
</div>
<p class="copyright">Language: en | Copyright © 2020, COVID-19, Sayaib Sarkar. All rights reserved.</p>




  </div>

</footer>


<script type="text/javascript">



//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


function fetch(){
  jQuery.get("https://api.covid19api.com/summary",
function (data){
  // console.log(data['Countries'].length);
  var tbval = document.getElementById('tbval');

  for(var i=1; i<(data['Countries'].length); i++){
    var x = tbval.insertRow();

    x.insertCell(0);
    tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
    tbval.rows[i].cells[0].style.background = '#79a3b1';
    tbval.rows[i].cells[0].style.color = '#000000';
    tbval.rows[i].cells[0].style.fontWeight = "900";

    x.insertCell(1);
    tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
    tbval.rows[i].cells[1].style.background = '#d0e8f2';
    tbval.rows[i].cells[1].style.color = '#000000';

    x.insertCell(2);
    tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
    tbval.rows[i].cells[2].style.background = '#d0e8f2';
    tbval.rows[i].cells[2].style.color = '#000000';

    x.insertCell(3);
    tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
    tbval.rows[i].cells[3].style.background = '#d0e8f2';
    tbval.rows[i].cells[3].style.color = '#000000';

    x.insertCell(4);
    tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
    tbval.rows[i].cells[4].style.background = '#d0e8f2';
    tbval.rows[i].cells[4].style.color = '#000000';

    x.insertCell(5);
    tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];
    tbval.rows[i].cells[5].style.background = '#d0e8f2';
    tbval.rows[i].cells[5].style.color = '#000000';

    x.insertCell(6);
    tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewRecovered'];
    tbval.rows[i].cells[6].style.background = '#d0e8f2';
    tbval.rows[i].cells[6].style.color = '#000000';






  }
}
)
}

</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>
</html>
