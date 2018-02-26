
<div id="content" class="site-content">


  <div class="container">
    <div class="content-left-wrap col-md-12">
      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <article id="post-26" class="post-26 page type-page status-publish hentry">
            <div class="entry-content">

              <div class="row">
                <div class="section-header">
                  <h2>
                    Student Application
                  </h2>
                  <div class="section-legend">
                    Sub Title
                  </div>
                </div>

              <p>
                Some type of application paragraph?
              </p>


              <form class="form-horizontal" method="post" action="/studentAppProcessor.php">
                <hr />
                <h3>Student Information</h3>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentFname">First Name:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="studentFname" placeholder="First Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentLname">Last Name:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="studentLname" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentEmail">Student Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="studentEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentPhone">Student Phone:</label>
                  <div class="col-sm-10">
                  <input type="tel" class="input-medium bfh-phone" id="studentPhone" data-country="US" placeholder="(123) 123-1234">
                  </div>
                </div>

                <hr />
                <h3>Parent Information</h3>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="parentFname">First Name:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="parentFname" placeholder="First Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="parentLname">Last Name:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="parentLname" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="parentEmail">Parent Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="parentEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="parentPhone">Parent Phone:</label>
                  <div class="col-sm-10">
                  <input type="tel" class="input-medium bfh-phone" id="parentPhone" data-country="US" placeholder="(123) 123-1234">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="parentAdditional">Other:</label>
                  <div class="col-sm-10">
                    <textarea type="comment" class="form-control" id="parentAdditional" rows="5" placeholder="Additional parental contact information."></textarea>
                  </div>
                </div>

                <hr />
                <h3>Student Academics</h3>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentSchool">Student School:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="studentSchool" placeholder="School Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentGrade">Highest grade completed by student:</label>
                  <div class="col-sm-10">
                    <select name="cars" class="form-control" id="studentGrade">
                      <option value="7">7th</option>
                      <option value="8">8th</option>
                      <option value="9">Freshman</option>
                      <option value="10">Sophmore</option>
                      <option value="11">Junior</option>
                      <option value="12">Senior</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentRobotics">Robotics Experience:</label>
                  <div class="col-sm-10">
                    <textarea type="comment" class="form-control" id="studentRobotics" rows="5"
                    placeholder="If you have done robotics before, please describe your previous robotics experience including format (Junior FLL, FLL, FTC, FRC, Vex, other) and duration (semester, week, day-camp)."></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentCommitments">Other Commitments:</label>
                  <div class="col-sm-10">
                    <textarea type="comment" class="form-control" id="studentCommitments" rows="5"
                    placeholder="Please describe your other activities and commitments (sports, work, groups) and activities during the Fall, Summer and Spring.  Spring (January through April) is competition season, and the team is active as a 4H Club year-round."></textarea>
                  </div>
                </div>

                <hr />
                <h3>Student Questions</h3>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentReference">How did you hear about MetalCow Robotics?</label>
                  <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="studentreference" rows="3"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentRole">What primary role are you applying for?</label>
                  <div class="col-sm-10">
                    <select name="cars" class="form-control" id="studentRole">
                      <option value="build"
                        <? if ($_GET['role']=="build"): ?>selected<? endif; ?>
                      >Build and Manufacturing</option>
                      <option value="cad"
                        <? if ($_GET['role']=="cad"): ?>selected<? endif; ?>
                      >Computer Aided Design (CAD)</option>
                      <option value="code"
                        <? if ($_GET['role']=="code"): ?>selected<? endif; ?>
                      >Control Systems and Code</option>
                      <option value="business"
                        <? if ($_GET['role']=="business"): ?>selected<? endif; ?>
                      >Business Adminstration</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentSkills">What skills and talents will you bring to the team?</label>
                  <div class="col-sm-10">
                    <textarea type="comment" class="form-control" id="studentSkills" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentExpectations">What do you expect to gain from the experience of being on MetalCow?</label>
                  <div class="col-sm-10">
                    <textarea type="comment" class="form-control" id="studentExpectations" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="studentInteresting">Tell us something interesting about yourself!</label>
                  <div class="col-sm-10">
                    <textarea type="comment" class="form-control" id="studentInteresting" rows="5"></textarea>
                  </div>
                </div>

                <button type="submit" class="btn btn-default green-btn">Submit Application</button>


              </form>

            </div><!-- .entry-content -->
          </article><!-- #post-## -->
        </main><!-- #main -->
      </div><!-- #primary -->
    </div><!-- .content-left-wrap -->







  </div><!-- .container -->




          <!-- Service Tabs -->
          <div class="container">

          </div>


</div><!-- .site-content -->
