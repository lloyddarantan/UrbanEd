<?php
require 'database/profile_process.php';
?>

<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="assets/css/profile.css">
        <link rel="stylesheet" href="assets/css/modals/modal.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="page-feature">
                <div class="page-divider"></div>
        </div>

        <div class="page-header">
            <nav class="nav-header">
            <a href="index.php">HOME</a>
                <i class="fas fa-angle-right arrow"></i>
                <a href="scholarships.php"><span class="blue-text">PROFILE</span></a>
            </nav>
        </div>
        <div class="grid">

          <div class="card">
        <div class="header-flex">
          <h1>Account Details</h1>
          <div class="header-buttons">
<!-- Edit Button -->
            <button class="edit-btn" id="editBtn">
              <i class="fas fa-edit"></i> Edit
            </button>

<!-- Delete Button -->
            <!-- <button type="button" class="delete-btn" id="deleteBtn" title="Delete Account">
              <i class="fas fa-trash"></i>
            </button> -->
          </div>
        </div>

        <form id="profileForm" action="database/update_profile.php" method="POST">
          <div>
            <label>First Name</label>
            <input type="text" name="firstname" value="<?php echo htmlspecialchars($users['firstname']); ?>" readonly class="input-field">
          </div>

          <div>
            <label>Last Name</label>
            <input type="text" name="lastname" value="<?php echo htmlspecialchars($users['lastname']); ?>" readonly class="input-field">
          </div>

          <div>
            <label>Email</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($users['email']); ?>" readonly class="input-field">
          </div>

          <div>
            <label>Phone Number</label>
            <input type="text" name="contactno" value="<?php echo htmlspecialchars($users['contactno']); ?>" readonly class="input-field">
          </div>

          <div>
            <label>Date of Birth</label>
            <input type="date" name="birthdate" value="<?php echo htmlspecialchars($users['birthdate']); ?>" readonly class="input-field">
          </div>

          <div>
            <label>Address</label>
            <textarea name="address" rows="2" readonly class="input-field"><?php echo htmlspecialchars($users['address']); ?></textarea>
          </div>

          <div class="btn-container">
<!-- save changes -->
            <button type="button" class="btn" id="saveBtn" style="display:none;">Save Changes</button>

<!-- delete acc -->
            <button type="button" class="btn" id="deleteBtn" style="display:none;">Delete Account</button>
<!-- signout             -->
            <button type="button" class="btn" id = "signOutBtn">Sign Out </button>
          </div>
        </form>
      </div>

      <div class="right-column">
        <div class="card profile-info">
          <div class="avatar">
          </div>
          <div class="name"><?php echo htmlspecialchars($users['firstname'] . ' ' . $users['lastname']); ?></div>
          <div class="details">Student | ID: 123456789</div>
        </div>

        <div class="card">
          <h2>Current Status</h2>
          <dl>
            <div class="status-item">
              <dt>School Enrolled:</dt>
              <dd>USLS</dd>
            </div>
            <div class="status-item">
              <dt>ID Number:</dt>
              <dd>123456789</dd>
            </div>
            <div class="status-item">
              <dt>Year:</dt>
              <dd>4th Year</dd>
            </div>
            <div class="status-item">
              <dt>Program:</dt>
              <dd>BS Information Tech</dd>
            </div>
            <div class="status-item">
              <dt>Scholarship:</dt>
              <dd class="green">Full Grant</dd>
            </div>
          </dl>
        </div>

        <!-- Scholarship Status -->
        <div class="card">
          <h2>Scholarship Status</h2>
          <dl>
            <div class="status-item">
              <dt>Latest Disbursement:</dt>
              <dd>Cash / Cheque</dd>
            </div>
            <div class="status-item">
              <dt>Academic Year:</dt>
              <dd>A.Y. 2025–2026</dd>
            </div>
          </dl>
          <div class="note">Next disbursement is scheduled for Q4 2025.</div>
        </div>
      </div>
    </div>

    <?php require 'account/modals/delete.php'; ?>
    <?php require 'account/modals/logout.php'; ?>
    <?php require 'account/modals/update.php'; ?>
    <script src = "assets/javascript/profile.js"></script>
    </body>
    
</html>