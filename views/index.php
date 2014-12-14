<style>
  panel.main {
    background: url('assets/gfx/main.jpg') no-repeat top center;
    background-size: cover;
    background-position: center -50px;
    /*background-attachment: fixed;*/
    display: table;
    height: 90%;
    padding-bottom: 0;
  }
  panel.main .banner {
    padding: 30px 0;
    background: rgba(0, 0, 0, 0.5);
  }
  panel.main .banner .tagline {
    color: #ffd800;
    font-size: 4em;
    text-transform: uppercase;
    text-shadow: 2px 2px #035d75;
    line-height: 1em;
    margin-bottom: -0.2em;
    font-family: 'BebasNeue', sans-serif;
    font-weight: bold;
  }
  panel.main .banner .slogan {
    color: #fff;
    line-height: 4em;
    letter-spacing: 1px;
  }
  panel.main .registerlogin {
    font-size: 1.5em;
    color: #035d75;
    text-transform: uppercase;
    box-shadow: 2px 2px 0px #035d75;
  }
  panel.main .registerlogin:hover {
    color: #fff;
  }
  panel.main .banner .switch {
    color: #ffd800;
  }
  panel.why .whys {
    width: 100%;
    text-align: center;
  }
  panel.why incell {
    display: inline-block;
    width: 200px;
    text-align: center;
  }
  panel.why .whyimg {
    width: 200px;
    height: 200px;
    border-radius: 100px;
    background: #abcdef no-repeat center center;;
    background-size: 150%;
    position: relative;
    overflow: hidden;
    margin-bottom: 15px;
  }
  panel.why .whyimg1 { background-image: url('assets/gfx/why1.jpg'); }
  panel.why .whyimg2 { background-image: url('assets/gfx/why2.jpg'); }
  panel.why .whyimg3 { background-image: url('assets/gfx/why3.jpg'); }
  panel.why .whyroll {
    width: 100%;
    height: 100%;
    background: rgba(30, 80, 95, 0.8);
    display: table;
    color: #fff;
    opacity: 0;
    transition: all 0.1s ease-in-out;
    border-radius: 50%;
    font-size: 1em;
  }
  panel.why .whyroll:hover {
    opacity: 1;
  }
  panel.why .whyroll .cell {
    padding: 20px;
  }
  panel.why .whytext {
    text-transform: uppercase;
    font-size: 0.8em;
    font-weight: 700;
    line-height: 1.1em;
  }
  panel.how {
    background: url('assets/gfx/how.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
    min-height: 300px;
  }
  panel.how .headline {
    color: #ffd800;
  }
  panel.how .steps {
    width: 100%;
    border-spacing: 10px;
    border-collapse: separate;
  }
  panel.how .step {
    background: #fff;
    -webkit-transform: skew(10deg);
     -moz-transform: skew(10deg);
       -o-transform: skew(10deg);
    height: 3em;
    padding: 10px;
    cursor: pointer;
    font-weight: 700;
    width: 20%;
  }
  panel.how .step table {
    -webkit-transform: skew(-10deg);
     -moz-transform: skew(-10deg);
       -o-transform: skew(-10deg);    
  }
  panel.how .step.active {
    background: #ffd800;
  }
  panel.how .step.active .bignum {
    color: #035d75;
  }
  panel.how .bignum {
    font-size: 2em;
    color: #ffd800;
  }
  panel.how .steptext {
    text-align: left;
    padding-left: 10px;
  }
  panel.how .desc {
    text-align: left;
    background: rgba(255, 216, 0, 0.8);
    padding: 20px 40px;
    display: none;
    font-size: 1em;
  }
</style>

<script>
  $(function() {
    function scrollTo(q) {
      $('html, body').finish().animate({
        scrollTop: $(q).offset().top
      }, 200);
    }
    function getStep(q) {
      return parseInt($(q).find('.bignum').html());
    }
    var step = null;
    $('panel.how .step').hover(function() {
      $(this).addClass('active');
    }, function() {
      if (step != getStep(this)) {
        $(this).removeClass('active');
      }
    }).click(function() {
      scrollTo(this);
      if (step == getStep(this)) {
        $(this).removeClass('active');
        step = null;
        $('.desc').slideUp(200, 'easeInOutCubic');
      } else {
        $('panel.how .step').removeClass('active');
        $(this).addClass('active');
        step = getStep(this);
        $('.desc').each(function() {
          if ($(this).attr('num') == step)
            $(this).slideDown(200, 'easeInOutCubic');
          else
            $(this).slideUp(200, 'easeInOutCubic');
        });
      }
    })
  });
</script>

<panel class="main">
  <div class="cell">
    <div class="banner">
      <div class="content">
        <div class="tagline">Student Recruitment, Reimagined.</div>
        <div class="slogan">Attract the New Generation Talent with your Company's Unique Personality.</div>
        <a href="loginregister.php">
          <input type="button" class="registerlogin" value="Register / Log In" />
        </a>
        <div class="switch"><a href="http://sublite.net">switch to STUDENT</a></div>
      </div>
    </div>
  </div>
</panel>
<panel class="why">
  <div class="content">
    <headline style="color: #000;">Why Choose Us?</headline>
    <table class="whys"><tr>
      <td class="whycell"><incell>
        <div class="whyimg whyimg1">
          <div class="whyroll"><div class="cell">Our network includes 3500 students from 350 universities and is growing everyday.</div></div>
        </div>
        <div class="whytext">Access a growing network of talented university students.</div>
      </incell></td>
      <td class="whycell"><incell>
        <div class="whyimg whyimg2">
          <div class="whyroll"><div class="cell">Students can discover qualities about your company that they cannot find elsewhere.</div></div>
        </div>
        <div class="whytext">Showcase the personality of your company</div>
      </incell></td>
      <td class="whycell"><incell>
        <div class="whyimg whyimg3">
          <div class="whyroll"><div class="cell">Each posting will attract the right match for your company.</div></div>
        </div>
        <div class="whytext">Design a candid and creative job description</div>
      </incell></td>
    </tr></table>
  </div>
</panel>
<panel class="how">
  <div class="content">
    <headline style="color: #ffd800">How It Works</headline>
    <table class="steps"><tr>
      <td class="step"><table><tr>
        <td class="bignum">1</td>
        <td class="steptext">Recruiter Registration</td>
      </tr></table></td>
      <td class="step"><table><tr>
        <td class="bignum">2</td>
        <td class="steptext">Company Profile</td>
      </tr></table></td>
      <td class="step"><table><tr>
        <td class="bignum">3</td>
        <td class="steptext">Job Listing</td>
      </tr></table></td>
      <td class="step"><table><tr>
        <td class="bignum">4</td>
        <td class="steptext">Data Analysis</td>
      </tr></table></td>
      <td class="step"><table><tr>
        <td class="bignum">5</td>
        <td class="steptext">Direct Contact</td>
      </tr></table></td>
    </tr></table>
    <div class="desc" num="1">Start by registering an account with your name, company and email address. Once your account is confirmed, you will be brought to your dashboard, where you can view weekly stats, send messages and edit the company profile and internship listings.</div>
    <div class="desc" num="2">Create a profile for your company by filling out our Company Profile Questionnaire. We will transform your answers into an attractive page of descriptions, pictures, and videos that showcase the personality of your company.</div>
    <div class="desc" num="3">Create internship listings for your company by filling out our Internship Listing Questionnaire. These listings are linked to your company profile and are easily searchable by students. </div>
    <div class="desc" num="4">You can view important stats about your company profile and internship listings on your dashboard, such as the number of times an internship listing has been viewed. You can use these metrics measure and improve the performance of your listings.</div>
    <div class="desc" num="5">Connect with our growing network of students directly through our internal messaging system!</div>
  </div>
</panel>
