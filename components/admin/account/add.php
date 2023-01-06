          <!-- Content wrapper -->
          <div class="content-wrapper">
            <div class="container">
                  <div class="card" style="margin-top:20px; margin-bottom:50px">
                        <div class="card-body p-5">
                        <div class="d-flex justify-content-between">
                        <h4 class="pb-3">Autentikasi / Setting Akun / <strong>Tambah Akun</strong></h4>
                              <a href="akun.php">
                              Close <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
</svg>
                              </a>
                              </div>
                              <form id="formAuthentication" class="mb-3" action="" method="POST">
              <div class="mb-3">
                  
                  <div class="row">
                        <div class="col-6">
                        <label for="email" class="form-label">First Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="fname"
                    name="fname"
                    placeholder="First Name"
                  />
                        </div>
                        <div class="col-6">
                        <label for="email" class="form-label">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="lname"
                    name="lname"
                    placeholder="Last Name"
                  />
                        </div>
                  </div>
                  
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Gender</label>
                        <select class="form-select" id="exampleFormControlSelect1" name="gender" aria-label="Default select example">
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                        </select>
                      </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Phone Number</label>
                  <input
                    type="text"
                    class="form-control"
                    name="telp"
                    placeholder="Phone Number"
                  />
                </div>  
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Email"
                  />
                </div>
                
                
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="Password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                
                <div class="mb-3">
                  <button name="submit" class="btn btn-danger d-grid w-100" type="submit">Tambah</button>
                </div>
              </form>
                        </div>
                  </div>
            </div>
