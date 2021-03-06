
<div id="content" class="site-content">


  <div class="container">
    <div class="content-left-wrap col-md-12">
      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <article id="post-26" class="post-26 page type-page status-publish hentry">
            <div class="entry-content">

              <div class="row">
                <div class="section-header">
                  <h2>Student Application</h2>
                  <div class="section-legend">
                    Sub Title
                  </div>
                </div>
                <div class="row">
                  <p>
                    Some type of application paragraph?  Does it need this?
                  </p>
                </div>
              <form class="form-horizontal" method="post" action="/studentAppProcessor.php">
              <div class="row">

                <div class="col-md-6">
                  <div class="col-md-12"><h3>Student Information</h3></div>
                  <div class="form-group col-md-12">
                    <label class="control-label" for="studentFname">First Name:</label>
                    <input type="text" class="form-control" id="studentFname" name="studentFname" placeholder="First Name" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="control-label" for="studentLname">Last Name:</label>
                    <input type="text" class="form-control" id="studentLname" name="studentLname" placeholder="Last Name" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="control-label" for="studentEmail">Student Email:</label>
                    <input type="email" class="form-control" id="studentEmail" name="studentEmail" placeholder="Email" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="control-label" for="studentPhone">Student Phone:</label>
                    <input type="tel" class="input-medium bfh-phone" id="studentPhone" name="studentPhone" data-country="US" placeholder="(123) 123-1234" required>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="col-md-12"><h3>Parent Information</h3></div>
                  <div class="form-group col-md-12">
                    <label class="control-label" for="parentFname">First Name:</label>
                    <input type="text" class="form-control" id="parentFname" name="parentFname" placeholder="First Name" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="control-label" for="parentLname">Last Name:</label>
                    <input type="text" class="form-control" id="parentLname" name="parentLname" placeholder="Last Name" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="control-label" for="parentEmail">Parent Email:</label>
                      <input type="email" class="form-control" id="parentEmail" name="parentEmail" placeholder="Email" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="control-label" for="parentPhone">Parent Phone:</label>
                    <input type="tel" class="input-medium bfh-phone" id="parentPhone" name="parentPhone" data-country="US" placeholder="(123) 123-1234" required>
                  </div>
                </div>

              </div>


              <div class="row">
                <div class="col-md-12"><h3>Student Academics</h3></div>
                <div class="form-group col-md-12">
                  <label class="control-label" for="studentSchool">Student School:</label>
                  <input type="text" class="form-control" id="studentSchool" name="studentSchool" placeholder="School Name" style="width:15em;" required>
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label" for="studentGrade">Highest grade completed by student:</label>
                  <select class="form-control" id="studentGrade" name="studentGrade" style="width:10em;" required>
                    <option value="7">7th</option>
                    <option value="8">8th</option>
                    <option value="9">Freshman</option>
                    <option value="10">Sophmore</option>
                    <option value="11">Junior</option>
                    <option value="12">Senior</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label" for="studentRobotics">Robotics Experience:</label>
                    <textarea type="comment" class="form-control" id="studentRobotics" name="studentRobotics" rows="5"
                    placeholder="If you have done robotics before, please describe your previous robotics experience including format (Junior FLL, FLL, FTC, FRC, Vex, other) and duration (semester, week, day-camp)." required></textarea>
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label" for="studentCommitments">Other Commitments:</label>
                    <textarea type="comment" class="form-control" id="studentCommitments" name="studentCommitments" rows="5"
                    placeholder="Please describe your other activities and commitments (sports, work, groups) and activities during the Fall, Summer and Spring.  Spring (January through April) is competition season, and the team is active as a 4H Club year-round." required></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12"><h3>Student Questions</h3></div>
                <div class="form-group col-md-12">
                  <label class="control-label" for="studentReference">How did you hear about MetalCow Robotics?</label>
                  <textarea type="text" class="form-control" id="studentReference" name="studentReference" rows="3" required></textarea>
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label" for="studentRole">What primary role are you applying for?</label>
                    <select class="form-control" id="studentRole" name="studentRole">
                      <option value="build"
                      <? $role = "build";
                      if (isset($_GET['role'])=="build") $role=$_GET['role'];
                      ?>

                    <? if ($role=="build"): ?>selected<? endif; ?>
                      >Build and Manufacturing</option>
                      <option value="cad"
                    <? if ($role=="cad"): ?>selected<? endif; ?>
                      >Computer Aided Design (CAD)</option>
                      <option value="code"
                    <? if ($role=="code"): ?>selected<? endif; ?>
                      >Control Systems and Code</option>
                      <option value="business"
                    <? if ($role=="business"): ?>selected<? endif; ?>
                      >Business Adminstration</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                  <label class="control-label" for="studentSkills">What skills and talents will you bring to the team?</label>
                  <textarea type="comment" class="form-control" id="studentSkills" name="studentSkills" rows="5" required></textarea>
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label" for="studentExpectations">What do you expect to gain from the experience of being on MetalCow?</label>
                  <textarea type="comment" class="form-control" id="studentExpectations" name="studentExpectations" rows="5" required></textarea>
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label" for="studentInteresting">Tell us something fun or interesting about yourself!</label>
                  <textarea type="comment" class="form-control" id="studentInteresting" name="studentInteresting" rows="5" required></textarea>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-default green-btn">Submit Application</button>
                </div>

              </form>

            </div><!-- .entry-content -->
          </article><!-- #post-## -->
        </main><!-- #main -->
      </div><!-- #primary -->
    </div><!-- .content-left-wrap -->

  </div><!-- .container -->


</div><!-- .site-content -->
