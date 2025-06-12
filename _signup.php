<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="signupModalLabel" style="color: black;">Sign Up for codeBook</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/forums/child/_handlesignup.php" method="post">
        <div class="modal-body">
          <div class="mb-3">
            <label for="First Name" class="form-label" style="color: black;">Full Name</label>
            <input type="text " class="form-control" id="firstname" name="firstname" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
            <label for="Mobile Number" class="form-label" style="color: black;">Mobile Number</label>
            <input type="Mobile Number" class="form-control" id="number" name="number" placeholder="Enter your mobile number" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color: black;">Email address</label>
            <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp" placeholder="abc123@gmail.com">
            <div id="emailHelp" class="form-text" required>We'll never share your email with anyone.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black;">Password</label>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="*********">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black;">Confirm Password</label>
            <input type="password" class="form-control" id="cpass" name="cpass" placeholder="*********">
          </div>
          <button type="submit" class="btn btn-warning w-100">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>