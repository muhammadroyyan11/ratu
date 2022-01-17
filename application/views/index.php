  <main id="main">

    <!-- ======= Solution Us Section ======= -->
    <section id="solution" class="solution">
      <div class="container">

        <?php
        if (!$this->session->has_userdata('login_session')) :
        ?>
          <div class="section-title" data-aos="fade-up">
            <h2>Temukan Solusi Anda</h2>
            <p>Anda dapat menemukan solusi atas permasalahan anda disini</p>
          </div>

          <div class="row justify-content-center">
            <div class="card col-lg-4 col-md-6" style="width: 18rem;">
              <img src="<?php echo base_url('assets/img/stowage.jpeg') ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Smart Stowage Plan</h5>
                <a href="<?= base_url('stowage') ?>" class="btn btn-danger">See Details</a>
              </div>
            </div>

            <!-- PENANGANAN KEBAKARAN -->
            <div class="card col-lg-4 col-md-6" style="width: 18rem;">
              <img src="<?php echo base_url('assets/img/solution/s2.png') ?>" class="card-img-top" alt="s2">
              <div class="card-body">
                <h5 class="card-title">Penanganan Kebakaran</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#penKebakaran">
                  See Details
                </a>

                <!-- Modal -->
                <div class="modal fade" id="penKebakaran" tabindex="-1" aria-labelledby="penKebakaranLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header btn-danger">
                        <h5 class="modal-title" id="penKebakaranLabel">Penanganan Kebakaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row justify-content-center">
                          <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                            <a style="text-align: center; color: black;" href="pen_keb/klsA">
                              <b>Kebakaran Kelas A</b><br>
                              <img src="<?php echo base_url('assets/img/klsA.png') ?>" style="width: 12rem; height: 8rem;">
                            </a>
                          </div>
                          <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                            <a style="text-align: center; color: black;" href="pen_keb/klsB">
                              <b>Kebakaran Kelas B</b><br>
                              <img src="<?php echo base_url('assets/img/klsB.png') ?>" style="width: 12rem; height: 8rem;">
                            </a>
                          </div>
                          <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                            <a style="text-align: center; color: black;" href="pen_keb/klsC">
                              <b>Kebakaran Kelas C</b><br>
                              <img src="<?php echo base_url('assets/img/klsC.png') ?>" style="width: 12rem; height: 8rem;">
                            </a>
                          </div>
                          <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                            <a style="text-align: center; color: black;" href="pen_keb/klsD">
                              <b>Kebakaran Kelas D</b><br>
                              <img src="<?php echo base_url('assets/img/klsD.png') ?>" style="width: 12rem; height: 8rem;">
                            </a>
                          </div>
                          <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                            <a style="text-align: center; color: black;" href="pen_keb/klsK">
                              <b>Kebakaran Kelas K</b><br>
                              <img src="<?php echo base_url('assets/img/klsK.png') ?>" style="width: 12rem; height: 8rem;">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card col-lg-4 col-md-6" style="width: 18rem;">
              <img src="<?php echo base_url('assets/img/solution/s4.png') ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Muster List</h5>
                <a href="muster" class="btn btn-danger">See Details</a>
              </div>
            </div>
            <div class="card col-lg-4 col-md-6" style="width: 18rem;">
              <img src="<?php echo base_url('assets/img/solution/s5.png') ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">About Us</h5>
                <a href="about" class="btn btn-danger">See Details</a>
              </div>
            </div>
          </div>
        <?php elseif (is_admin()) : ?>
          <div class="section-title" data-aos="fade-up">
            <h2>Klik untuk melihat data</h2>
          </div>
          <div class="row justify-content-center">
            <div class="card col-lg-4 col-md-6" style="width: 18rem;">
              <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-person-square card-img-top" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
              </svg>
              <div class="card-body">
                <h5 class="card-title">Data User</h5>
                <a href="<?= base_url('data/user_account') ?>" class="btn btn-danger">See Details</a>
              </div>
            </div>
            <div class="card col-lg-4 col-md-6" style="width: 18rem;">
              <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-file-earmark-bar-graph-fill card-img-top" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm.5 10v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z" />
              </svg>
              <div class="card-body">
                <h5 class="card-title">Data Umum Kapal User</h5>
                <a href="<?= base_url('data/data_umum') ?>" class="btn btn-danger">See Details</a>
              </div>
            </div>
            <div class="card col-lg-4 col-md-6" style="width: 18rem;">
              <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-truck card-img-top" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
              </svg>
              <div class="card-body">
                <h5 class="card-title">Data Manifest Kargo User</h5>
                <a href="<?= base_url('data/manif_kargo') ?>" class="btn btn-danger">See Details</a>
              </div>
            </div>
          </div>
      </div>
    <?php else : ?>
      <div class="section-title" data-aos="fade-up">
        <h2>Temukan Solusi Anda</h2>
        <p>Anda dapat menemukan solusi atas permasalahan anda disini</p>
      </div>

      <div class="row justify-content-center">
        <div class="card col-lg-4 col-md-6" style="width: 18rem;">
          <img src="<?php echo base_url('assets/img/stowage.jpeg') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Smart Stowage Plan</h5>
            <a href="<?= base_url('stowage') ?>" class="btn btn-danger">See Details</a>
          </div>
        </div>

        <!-- PENANGANAN KEBAKARAN -->
        <div class="card col-lg-4 col-md-6" style="width: 18rem;">
          <img src="<?php echo base_url('assets/img/solution/s2.png') ?>" class="card-img-top" alt="s2">
          <div class="card-body">
            <h5 class="card-title">Penanganan Kebakaran</h5>
            <!-- Button trigger modal -->
            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#penKebakaran">
              See Details
            </a>

            <!-- Modal -->
            <div class="modal fade" id="penKebakaran" tabindex="-1" aria-labelledby="penKebakaranLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header btn-danger">
                    <h5 class="modal-title" id="penKebakaranLabel">Penanganan Kebakaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row justify-content-center">
                      <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                        <a style="text-align: center; color: black;" href="pen_keb/klsA">
                          <b>Kebakaran Kelas A</b><br>
                          <img src="<?php echo base_url('assets/img/klsA.png') ?>" style="width: 12rem; height: 8rem;">
                        </a>
                      </div>
                      <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                        <a style="text-align: center; color: black;" href="pen_keb/klsB">
                          <b>Kebakaran Kelas B</b><br>
                          <img src="<?php echo base_url('assets/img/klsB.png') ?>" style="width: 12rem; height: 8rem;">
                        </a>
                      </div>
                      <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                        <a style="text-align: center; color: black;" href="pen_keb/klsC">
                          <b>Kebakaran Kelas C</b><br>
                          <img src="<?php echo base_url('assets/img/klsC.png') ?>" style="width: 12rem; height: 8rem;">
                        </a>
                      </div>
                      <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                        <a style="text-align: center; color: black;" href="pen_keb/klsD">
                          <b>Kebakaran Kelas D</b><br>
                          <img src="<?php echo base_url('assets/img/klsD.png') ?>" style="width: 12rem; height: 8rem;">
                        </a>
                      </div>
                      <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                        <a style="text-align: center; color: black;" href="pen_keb/klsK">
                          <b>Kebakaran Kelas K</b><br>
                          <img src="<?php echo base_url('assets/img/klsK.png') ?>" style="width: 12rem; height: 8rem;">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-lg-4 col-md-6" style="width: 18rem;">
          <img src="<?php echo base_url('assets/img/solution/s3.png') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Input Data</h5>
            <!-- Button trigger modal -->
            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#inputData">
              See Details
            </a>
            <!-- Modal -->
            <div class="modal fade" id="inputData" tabindex="-1" aria-labelledby="inputDataLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header btn-danger">
                    <h5 class="modal-title" id="inputDataLabel">Input Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row justify-content-center">
                      <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                        <a style="text-align: center; color: black;" href="input/data_umum">
                          <b>Data Umum Kapal</b><br>
                          <img src="<?php echo base_url('assets/img/input1.jpeg') ?>" style="width: 12rem; height: 8rem;">
                        </a>
                      </div>
                      <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                        <a style="text-align: center; color: black;" href="input/manif_kargo">
                          <b>Manifest Kargo</b><br>
                          <img src="<?php echo base_url('assets/img/input2.jpeg') ?>" style="width: 12rem; height: 8rem;">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="card col-lg-4 col-md-6" style="width: 18rem;">
          <img src="<?php echo base_url('assets/img/solution/s4.png') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Muster List</h5>
            <a href="muster" class="btn btn-danger">See Details</a>
          </div>
        </div>
        <div class="card col-lg-4 col-md-6" style="width: 18rem;">
          <img src="<?php echo base_url('assets/img/solution/s5.png') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">About Us</h5>
            <a href="about" class="btn btn-danger">See Details</a>
          </div>
        </div>
      </div>
    <?php
        endif;
    ?>
    </div>
    </section>

  </main><!-- End #main -->