<main class="container mt-3">
    <section class="row">
      <div
        class="col-12 bg-dark text-white p-5 text-center d-flex flex-column align-items-center justify-content-center">
        <h2>Doctor GREEN</h2>
        <p>Has your green family member gone sick?<br><span>Don't worry!</span><br>Upload the snapshots of him and we
          will help you save him</p>

        <div class="d-flex text-center">
          <input type="file" name="uploadImage" id="uploadImage" accept=".png, .jpg, .jpeg" onchange="displayImage()">
        </div>

        <div class="row mt-3">
          <div class="box">
            <!-- Image Box to display the Uploaded image -->
            <img src="" alt="" id="image" width="224" height="224">
          </div>
        </div>
      </div>
    </section>
  </main>