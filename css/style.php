<style media="screen">
html{
  scroll-behavior: smooth;
}
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Mulish', sans-serif;
}

/* ******************************** responsive mobile view **************************** */
@media only screen and (max-width: 980px) {
  body {

  }
  p{
    font-size: 23px;
  }
  .navbar-brand{
    font-size: 2.5rem;
  }
  .nav-link{
    font-size: 1.8rem;
    text-align: center;
  }
  .about_corona{
    padding-top: 14rem;
  }
}

.nav_style{
  background-color: #a29bfe;
}
.nav_style a{
  color: white;
}
.live{
  font-size: 2.3rem;
  padding-bottom: 1.3rem;
}


.main_header{
  height: 450px;
margin: 0 auto;
width: 80%;
}

.rightside h1{
  text-align: center;
  font-size: 2.5rem;
}

.corona_rot img{
  animation: coronarotate 3s linear infinite;
}
@keyframes coronarotate {
  0% {transform: rotate(0);}
  100% {transform: rotate(360deg);}
}

/*
****************** corona update ************* */

.corona_update{
  margin: 0 0 30px 0;
}
.corona_update h3{
  color: #ff7675;
}
.corona_update h1{
  font-size: 1.5rem;
  padding: 10px;
  text-align: center;
}
/*
************************* About Section ************************* */

.sub_section{
  background-color: #fdfafa;
}



/* ***************************** Footer *************************** */

footer{
  background-color: #a29bfe;
}
.footer_style p{
  margin-bottom: 0;
}
.fab{
  color: #000000;
  padding: 1rem;
}
.sourcecode{
  color: grey;
  text-decoration: none;
}
.sourcecode:hover{
  color: #fff;
}
.copyright{
  color: #000000;
}

#myBtn{
  display: none;
  position: fixed;
  bottom: 30px;
  right: 40px;
  z-index: 99;
  border: none;
  outline: none;
  background-color:  #ff7675;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 25px;
}
#myBtn:hover{
  background: #606060;
}


</style>
