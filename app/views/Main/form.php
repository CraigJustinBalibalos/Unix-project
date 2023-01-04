<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form</title>
  <!-- <link rel="stylesheet" href="/style/style.css" />
  <link rel="stylesheet" href="/style/styleForForm.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="icon" type="image/x-icon" href="/app/images/favicon.png" />
</head>

<body>
  <div class="container">
    <?php include "header.php" ?>
    <div id="container2">
      <legend style="font-weight:bold; font-size:130%;"><i class="bi bi-info-circle-fill"></i> Student's Info </legend>
      <form action="#">
        <div>
          <fieldset class="personalInfo">
            <label for="studentId">Student ID</label><br />
            <input type="text" id="studentId" name="studentId" placeholder="Enter your student ID (only digits)" />
            <br />
            <label for="firstName">Firstname</label><br />
            <input type="text" id="firstName" name="firstName" placeholder="Firstname" />
            <br />
            <label for="lastName">Lastname</label><br />
            <input type="text" id="lastName" name="lastName" placeholder="Lastname" />
          </fieldset>
        </div>
        <div class="userReg">
          <fieldset class="doubleColumn">
            <div class="left-input-box">
              <label for="userName">Username</label>
              <input type="text" id="userName" name="userName" placeholder="Username" />
            </div>
            <div class="right-input-box">
              <label for="password">Password</label>
              <input type="text" id="password" name="password" placeholder="Password" />
            </div>
          </fieldset>
          <fieldset class="doubleColumn2">
            <div class="left-input-box">
              <label for="dateOfBirth">Date of birth</label>
              <input type="text" id="dateOfBirth" name="dateOfBirth" placeholder="yyyy-mm-dd" />
            </div>
            <div class="right-input-box">
              <label for="courses">Courses</label>
              <select name="courses" id="courses" multiple>
                <option value="--">--</option>
                <option value="Maths">Maths</option>
                <option value="Physics">Physics</option>
                <option value="Chemistry">Chemistry</option>
              </select>
            </div>
          </fieldset>
          <fieldset class="radioBoxes">
            <label for="selectCampus" class="boldLabel">Select campus:</label>
            <div>
              <input type="radio" id="slaval" name:"campus">
              <label for="slaval">Laval</label>

              <input type="radio" id="smon" name:"campus">
              <label for="smon">Montreal</label>

              <input type="radio" id="slong" name:"campus">
              <label for="slong">Longueuil</label>
            </div>
          </fieldset>
          <fieldset class="radioBoxes">
            <label for="selectCampus" class="boldLabel">Select Schedule Preference:</label>
            <div>
              <input type="radio" id="sMorning" name:"schedule">
              <label for="sMorning" style="margin-right: 80px">Morning classes</label>

              <input type="radio" id="sEvening" name:"schedule">
              <label for="sEvening" style="margin-right: 80px">Evening classes</label>

              <input type="radio" id="sBtB" name:"schedule">
              <label for="sBtB" style="margin-right: 80px">Back-to-back classes</label>

              <input type="radio" id="sNoPref" name:"schedule">
              <label for="sNoPref" style="margin-right: 80px">No Preference</label>
            </div>
          </fieldset>
          <h3><i class="bi bi-telephone-fill"> </i>Contact</h3>
          <hr class="formDivider">
          <fieldset class="doubleColumn3">
            <div class="left-input-box">
              <label for="email">Email</label>
              <input type="text" id="dateOfBirth" name="dateOfBirth" placeholder="john@example.com" />
            </div>
            <div class="right-input-box">
              <label for="favColor">Favorite color</label>
              <input type="color" id="favColor" name="favColor" placeholder="" />
            </div>
            <div class="right-input-box">
              <div class="centered-input-box">
                <label for="phone">Phone #</label>
                <input type="text" id="phone" name="phone" placeholder="(514) 999-9999" />
              </div>
            </div>
          </fieldset>
          <h3><i class="bi bi-person-lines-fill"></i> Address</h3>
          <hr class="formDivider">
          <fieldset class="personalInfo">
            <label for="street">Street</label><br />
            <input type="text" id="street" name="street" placeholder="Street name" />
            <br />
            <label for="city">City</label><br />
            <input type="text" id="city" name="city" placeholder="City" />
            <fieldset class="doubleColumn4">
              <div class="left-input-box">
                <label for="province">Province</label>
                <input type="text" id="province" name="province" placeholder="Province" />
              </div>
              <div class="right-input-box">
                <label for="postalCode">Postal Code</label>
                <input type="text" id="postalCode" name="postalCode" placeholder="A1A 1A1" />
              </div>
            </fieldset>
            <fieldset class="comments">
              <label for="comments">Comments:</label> <br>
              <textarea name="comments" id="comments" cols="120" rows="7"></textarea>
            </fieldset>
            <fieldset class="buttons">
              <button type="reset" style="background-color:red; border-color:red; color:white;height: 30px;border-radius: 5px;">Reset</button>
              <button type="submit" style="background-color:blue; border-color:blue; color:white;height: 30px;border-radius: 5px">Submit</button>
            </fieldset>

            <hr class="formDivider">
            <p>&copy; Internet | student</p>
        </div>
        <!--User reg div-->
      </form>
    </div>
    <?php include "footer.php" ?>
  </div>
</body>

</html>