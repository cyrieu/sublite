<style>
  panel.main {
    background: url('<?php echo $GLOBALS['dirpre']; ?>assets/gfx/how.jpg') no-repeat center center;
    background-size: cover;
    display: table;
    height: 150px;
  }
  panel.main .banner {
    padding: 30px 0;
  }
  panel.main .banner .tagline {
    color: #ffd800;
    font-size: 4em;
    text-transform: uppercase;
    text-shadow: 2px 2px #035d75;
    line-height: 1em;
    margin-bottom: 0.2em;
    font-family: 'BebasNeue', sans-serif;
    font-weight: bold;
  }
  panel.main .button {
    font-size: 1.5em;
    color: #035d75;
    text-transform: uppercase;
  }
  panel.main .button:hover {
    color: #fff;
  }
  panel.search {
    background: #efecdb;
    padding: 20px 0;
  }
</style>
<script>
  $(function() {
    $('.searchScroll').click(function() {
      scrollTo('.search');
    });
  });
</script>

<panel class="main">
  <div class="cell">
    <div class="banner">
      <div class="content">
        <div class="tagline">Job Search, Reorganized</div>
        <input type="button" class="button searchScroll" value="Search for Jobs" />
      </div>
    </div>
  </div>
</panel>
<panel class="search">
  <div class="content">
    <form method="get">
      <input type="hidden" id="recruiter" name="recruiter" value="<?php vecho('recruiter'); ?>" />

      <div class="form-slider"><label for="title">Job Title:</label><input type="text" id="title" name="title" value="<?php vecho('title'); ?>" /></div>

      <div class="form-slider"><label for="industrylabel" id="ilabel">Industry:</label>
      <input type="hidden" id="industrylabel">
      <select id="industry" name="industry">
        <?php vecho('industry', '<option selected="selected">{var}</option>'); ?>
        <?php
          // Process list of industries to make select form
          foreach (vget('industries') as $industry) {
            echo "<option>$industry</option>";
          }
        ?>
      </select></div>
      <script>
        function changeIndustryLabel(bool) {
          if (bool) {
            $('#ilabel').css('left', '-4.5em');
          } else {
            $('#ilabel').css('left', '0.5em;');
          }
        }
        $('#industry')
          .change(function() { changeIndustryLabel($(this).val().length > 0); })
          .ready(function() { changeIndustryLabel(<?php 
            if (strlen(vget('industry')) > 0) echo 'true';
            else echo 'false';
          ?>) });
      </script>

      <div class="form-slider"><label for="city">City:</label><input type="text" id="city" name="city" value="<?php vecho('city'); ?>" /></div>

      <div class="form-slider"><label for="company">Company:</label><input type="text" id="company" name="company" value="<?php vecho('company'); ?>" /></div>
      
      <?php vnotice(); ?>
      <input type="submit" name="search" value="Search" />
    </form>
  </div>
</panel>