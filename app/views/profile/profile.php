<?php require '../app/views/layouts/header.php';?>

<div class="settings-header">
  <h3>Account Settings</h3>
  <div class="left-icon-box">
    <a href="home-page-admin.html"><img src="icon/left-icon.svg" /></a>
  </div>
</div>

<div class="account-container">
  <div class="account-tab">
    <div class="selected-tab">
      <h4>My Profile</h4>
    </div>
    <a href="home-page-admin.html"><h4 class="sign-out">Sign Out</h4></a>
  </div>
  <div class="profile-info">
    <h4>My Profile</h4>

    <div class="profile-1">
      <div class="profile-name">
        <img src="icon/profile1.svg" alt="profile" class="profile-pic" />
        <div class="profile-role">
          <h5>Adam Marallo</h5>
          <p>Team Leader</p>
          <p>Hinckley, Leicestershire</p>
        </div>
      </div>

      <div class="edit-box">
        <p class="edit-word">Edit</p>
        <img src="icon/edit-icon.svg" alt="edit icon" class="edit-icon" />
      </div>
    </div>

    <div class="profile-2">
      <div class="row-1">
        <h3>Personal Information</h3>

        <div class="edit-box">
          <p class="edit-word">Edit</p>
          <img src="icon/edit-icon.svg" alt="edit icon" class="edit-icon" />
        </div>
      </div>

      <div class="profile-columns">
        <div class="column-1">
          <h6>FIRST NAME</h6>
          <p>Adam</p>
          s

          <h6>EMAIL ADDRESS</h6>
          <p>adam@gmail.com</p>

          <h6>BIO</h6>
          <p>Team Leader</p>
        </div>

        <div class="column-2">
          <h6>LAST NAME</h6>
          <p>Marallo</p>

          <h6>PHONE</h6>
          <p>+44 98765 4321</p>
        </div>
      </div>
    </div>

    <div class="profile-3">
      <div class="row-1">
        <h3>Address</h3>

        <div class="edit-box">
          <p class="edit-word">Edit</p>
          <img src="icon/edit-icon.svg" alt="edit icon" class="edit-icon" />
        </div>
      </div>

      <div class="profile-columns">
        <div class="column-1">
          <h6>COUNTRY</h6>
          <p>United Kingdom</p>

          <h6>POSTCODE</h6>
          <p>LE10 0FF</p>
        </div>

        <div class="column-2">
          <div class="column-2">
            <h6>CITY</h6>
            <p>Hinckley, Leicestershire</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require '../app/views/layouts/footer.php';?>
