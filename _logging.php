<div class="modal fade" id="loggingModal" tabindex="-1" aria-labelledby="loggingModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loggingModalLabel" style="color: black;">Login into Codebook</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/forums/child/_handlelogin.php" method="post">
        <div class="modal-body">
          <div class="mb-3">
            <label for="loginEmail" class="form-label" style="color: black;">Email address</label>
            <input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp" placeholder="Enter Your email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone.</div>
          </div>
          <div class="mb-3">
            <label for="loginPass" class="form-label" style="color: black;">Password</label>
            <input type="password" class="form-control" id="loginPass" name="loginPass" placeholder="Enter Your Password">
          </div>
          <button type="submit" class="btn btn-warning w-100">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>