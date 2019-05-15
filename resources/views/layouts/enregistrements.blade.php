@include('includes.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('includes.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Enregistrements</h1>
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                    </div>

                    <!-- Content Row -->
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <!--          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                                  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->

                        <!-- DataTales Example -->
                        <div class="card shadow mb-">

                            <div class="card-body">
                                <div class="table">
                                    <table class="table table-bordered" id="dataTable" width="100%" >
                                        <thead>
                                            <tr>
                                                <th>Séquence</th>
                                                <th>Circuit autonome</th>
                                                <th>Run</th>
                                                <th>Date début</th>
                                                <th>Date fin</th>
                                                <th>Durée du run</th>
                                                <th>Total</th>
                                                <th>Test Recyclage</th>
                                                <th>Test delta Température</th>
                                                <th>Test delta Pression</th>
                                                <th>Validation globale</th>
                                                <th>Alarme</th>
                                                <th>Check</th>
                                                <th>Commentaires</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i = 0; $i < 100; $i++)
                                            <tr>
                                                <td>n°1</td>
                                                <td>Pasto stand</td>
                                                <td>n°8</td>
                                                <td>13/05/2019</td>
                                                <td>14/05/2019</td>
                                                <td>1 jour</td>
                                                <td>250</td>
                                                <td>ok</td>
                                                <td>ok</td>
                                                <td>ok</td>
                                                <td>ok</td>
                                                <td>ok</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>ok</td>
                                            </tr>
                                            @endfor
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('includes.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    @include('includes.bottom_scripts')
    <!-- Page level custom scripts -->
    <script type="text/javascript" charset="utf8" src="/dataTables/datatables-demo.js"></script>
    <script type="text/javascript" charset="utf8" src="\dataTables\DataTables-1.10.18\js\jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="/DataTables/FixedHeader-3.1.4/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="/DataTables/Responsive-2.2.2/js/dataTables.responsive.min.js"></script>
    <!-- Page level plugins DataTables -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>





</body>

</html>


