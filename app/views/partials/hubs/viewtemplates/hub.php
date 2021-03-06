<viewtemplate name="hub">
  <panel class="banner" style="background-image: url('{banner}');">
    <content>
      <name>{name}</name>
    </content>
  </panel>

  <panel id="joinpanel">
    <content>
      <button class="joinhub">Join Hub</button>
    </content>
  </panel>
  <panel id="myhubpanel">
    <content>
      <button class="myhub">Set as Default Hub</button>
    </content>
  </panel>

  <panel class="tabs">
    <content class="nopadding">
      <tab for="forum" class="focus">
        Forum
      </tab><tab for="meetups">
        Meet-Ups
      </tab><tab for="members">
        Members (<membercount>0</membercount>)
      </tab><tab for="createmeetup" style="display: none;">
        Create Meet-Up
      </tab>
    </content>
  </panel>

  <panel class="tabframe" name="forum">
    <content>
      Introduce yourself to the other interns in your area, recommend a restaurant or attraction, write a review for your city, or post anything else you would like to share!
      <!-- <subtabs>
        <subtab type="recent" class="focus">Most Recent</subtab> | <subtab type="popular">Most Popular</subtab>
      </subtabs> -->
      <div class="thread" for="">
        <div class="reply">
          Write your post:
          <form>
            <textarea name="text"></textarea>
            <right><button>Share</button></right>
          </form>
        </div>
      </div>
      <div class="postsframe" type="recent"><div class="posts"></div></div>
      <div class="postsframe" type="popular"><div class="posts"></div></div>
    </content>
  </panel>
  <panel class="tabframe" name="meetups">
    <content>
      <button id="createmeetup">Create a Meet-Up</button>
      <br /><br />
      <div class="meetups"></div>
    </content>
  </panel>
  <panel class="tabframe" name="createmeetup">
    <content>
      <headline>Create a Meet-Up</headline>
      <form>
        <div class="error"></div>
        Title:
        <input type="text" name="title" />
        Start Date:
        <input class="datepicker" type="text" name="startdate" />
        Start Time:
        <input class="timepicker" type="text" name="starttime" />
        End Date:
        <input class="datepicker" type="text" name="enddate" />
        End Time:
        <input class="timepicker" type="text" name="endtime" />
        Location Name:
        <input type="text" name="locationname" />
        Location Address:
        <input type="text" name="address" />
        Description:
        <textarea name="description"></textarea>
        Upload a banner:
        <?php
          vpartial('s3single', array(
            's3name' => 'banner',
            's3title' => 'What would you like your banner image to be?*'
          ));
        ?>
        <div class="error"></div>
        <right><button>Create</button></right>
      </form>
    </content>
  </panel>
  <panel class="tabframe" name="members">
    <content>
      <subtabs><membercount>0</membercount> Members</subtabs>
      <div class="members"></div>
    </content>
  </panel>
</viewtemplate>