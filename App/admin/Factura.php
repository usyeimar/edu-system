<?php
require_once("./template/HeaderAdmin.php");
?>

<body>
  <div class="d-flex" id="content-wrapper">

    <?php
    require_once("./template/SidebarAdmin.php");
    ?>
    <div class="w-100">

      <?php
      require_once("./template/NavBarAdmin.php");
      ?>

      <!-- Page Content -->
      <div id="content" class="bg-grey w-100">

        <section class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-8">
                <h1 class="font-weight-bold mb-0">Factura</h1>
                <p class="lead text-muted">Revisa la última información</p>
              </div>

            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-11 my-1">
                <div class="card rounded-0">
                  <div class="card-body">
                    <section>
                      <div class="shadow p-3 mb-4 bg-body rounded">
                        <section>
                         
                           
                              <div>
                                <h1><i class="fas fa-wallet"></i> Mis Facturas</h1>
                                <p>Pulsa el boton de + parar agregar registros.</p>
                              </div>
                            
                            <div class="row">
                              <div class="col-md-12">
                                <div class="tile">
                                  <section class="invoice">
                                    <div class="row mb-4">
                                      <div class="col-6">
                                        <h2 class="page-header"><i class="fa fa-globe"></i> EduSystem</h2>
                                      </div>
                                      <div class="col-6">
                                        <h5 class="text-right">Date: 01/01/2016</h5>
                                      </div>
                                    </div>
                                    <div class="row invoice-info">
                                      <div class="col-4">From
                                        <address><strong>EduSystem.</strong><br>518 Akshar Avenue<br>Gandhi Marg<br>New Delhi<br>Email: hello@vali.com</address>
                                      </div>
                                      <div class="col-4">To
                                        <address><strong>John Doe</strong><br>795 Folsom Ave, Suite 600<br>San Francisco, CA 94107<br>Phone: (555) 539-1037<br>Email: john.doe@example.com</address>
                                      </div>
                                      <div class="col-4"><b>Invoice #007612</b><br><br><b>Order ID:</b> 4F3S8J<br><b>Payment Due:</b> 2/22/2014<br><b>Account:</b> 968-34567</div>
                                    </div>
                                    <div class="row">
                                      <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                          <thead>
                                            <tr>
                                              <th>ID</th>
                                              <th>Curso</th>
                                              <th>Fecha De Pago</th>
                                              <th>Description</th>
                                              <th>Subtotal</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>1</td>
                                              <td>The Hunger Games</td>
                                              <td>455-981-221</td>
                                              <td>El snort testosterone trophy driving gloves handsome</td>
                                              <td>$41.32</td>
                                            </tr>
                                            <tr>
                                              <td>1</td>
                                              <td>City of Bones</td>
                                              <td>247-925-726</td>
                                              <td>Wes Anderson umami biodiesel</td>
                                              <td>$75.52</td>
                                            </tr>
                                            <tr>
                                              <td>1</td>
                                              <td>The Maze Runner</td>
                                              <td>545-457-47</td>
                                              <td>Terry Richardson helvetica tousled street art master</td>
                                              <td>$15.25</td>
                                            </tr>
                                            <tr>
                                              <td>1</td>
                                              <td>The Fault in Our Stars</td>
                                              <td>757-855-857</td>
                                              <td>Tousled lomo letterpress</td>
                                              <td>$03.44</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                    <div class="row d-print-none mt-2">
                                      <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                                    </div>
                                  </section>
                                </div>
                              </div>
                            </div>
                         
                        </section>

                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



      </div>
      </section>
    </div>
  </div>
  </div>

  </div>
  </div>
  </section>

  </div>

  </div>
  </div>

  <?php
  require_once("./template/FooterAdmin.php");
  ?>