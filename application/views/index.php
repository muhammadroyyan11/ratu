  <main id="main">

    <!-- ======= Solution Us Section ======= -->
    <section id="solution" class="solution">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Temukan Solusi Anda</h2>
          <p>Anda dapat menemukan solusi atas permasalahan anda disini</p>
        </div>

        <div class="row justify-content-center">
          <?php
          if (!$this->session->has_userdata('login_session')) :
          ?>
            <!-- SOP KEBAKARAN -->
            <div class="card col-lg-4 col-md-6" style="width: 18rem;">
              <img src="<?php echo base_url('assets/img/stowage.jpeg') ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Smart Stowage Plan</h5>
                <a href="<?= base_url('stowage') ?>" class="btn btn-danger">See Details</a>
              </div>
            </div>
            <div class="card col-lg-4 col-md-6" style="width: 18rem;">
              <img src="<?php echo base_url('assets/img/solution/s1.png') ?>" class="card-img-top" alt="s1">
              <div class="card-body">
                <h5 class="card-title">SOP Kebakaran</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#sopKebakaran">
                  See Details
                </a>

                <!-- Modal -->
                <div class="modal fade" id="sopKebakaran" tabindex="-1" aria-labelledby="sopKebakaranLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header btn-danger">
                        <h5 class="modal-title" id="sopKebakaranLabel">SOP Kebakaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row justify-content-center">
                          <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                            <a style="text-align: center; color: black;" href="SOP/timbul_api">
                              <b>Munculnya Api</b><br>
                              <img src="<?php echo base_url('assets/img/SOP/sop1.png') ?>" style="width: 12rem; height: 8rem;">
                            </a>
                          </div>
                          <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                            <a style="text-align: center; color: black;" href="SOP/air_masuk">
                              <b>Air Memasuki Ruangan</b><br>
                              <img src="<?php echo base_url('assets/img/SOP/sop2.png') ?>" style="width: 12rem; height: 8rem;">
                            </a>
                          </div>
                          <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                            <a style="text-align: center; color: black;" href="SOP/man_overboard">
                              <b>Man Overboard</b><br>
                              <img src="<?php echo base_url('assets/img/SOP/sop3.png') ?>" style="width: 12rem; height: 8rem;">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
      <?php else : ?>
        <!-- SOP KEBAKARAN -->
        <div class="card col-lg-4 col-md-6" style="width: 18rem;">
          <img src="<?php echo base_url('assets/img/stowage.jpeg') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Smart Stowage Plan</h5>
            <a href="<?= base_url('stowage') ?>" class="btn btn-danger">See Details</a>
          </div>
        </div>
        <div class="card col-lg-4 col-md-6" style="width: 18rem;">
          <img src="<?php echo base_url('assets/img/solution/s1.png') ?>" class="card-img-top" alt="s1">
          <div class="card-body">
            <h5 class="card-title">SOP Kebakaran</h5>
            <!-- Button trigger modal -->
            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#sopKebakaran">
              See Details
            </a>

            <!-- Modal -->
            <div class="modal fade" id="sopKebakaran" tabindex="-1" aria-labelledby="sopKebakaranLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header btn-danger">
                    <h5 class="modal-title" id="sopKebakaranLabel">SOP Kebakaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row justify-content-center">
                      <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                        <a style="text-align: center; color: black;" href="SOP/timbul_api">
                          <b>Munculnya Api</b><br>
                          <img src="<?php echo base_url('assets/img/SOP/sop1.png') ?>" style="width: 12rem; height: 8rem;">
                        </a>
                      </div>
                      <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                        <a style="text-align: center; color: black;" href="SOP/air_masuk">
                          <b>Air Memasuki Ruangan</b><br>
                          <img src="<?php echo base_url('assets/img/SOP/sop2.png') ?>" style="width: 12rem; height: 8rem;">
                        </a>
                      </div>
                      <div class="card col-lg-4 col-md-6" style="width: 14rem;">
                        <a style="text-align: center; color: black;" href="SOP/man_overboard">
                          <b>Man Overboard</b><br>
                          <img src="<?php echo base_url('assets/img/SOP/sop3.png') ?>" style="width: 12rem; height: 8rem;">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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