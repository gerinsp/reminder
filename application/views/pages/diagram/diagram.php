<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Diagram</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Diagram</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="content pb-5">
        <div class="container-fluid">
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div
                            class="card border-left-primary shadow h-100 py-2"
                    >
                        <div class="card-body">
                            <div
                                    class="row no-gutters align-items-center"
                            >
                                <div class="col mr-2">
                                    <div
                                            class="text-xs font-weight-bold text-success text-uppercase mb-1"
                                    >
                                        Sudah Lapor
                                    </div>
                                    <div
                                            class="h5 mb-0 font-weight-bold text-gray-800"
                                    >
                                        <?= $lapor[0] ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-check-circle fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div
                            class="card border-left-success shadow h-100 py-2"
                    >
                        <div class="card-body">
                            <div
                                    class="row no-gutters align-items-center"
                            >
                                <div class="col mr-2">
                                    <div
                                            class="text-xs font-weight-bold text-danger text-uppercase mb-1"
                                    >
                                        Belum Lapor
                                    </div>
                                    <div
                                            class="h5 mb-0 font-weight-bold text-gray-800"
                                    >
                                        <?= $lapor[1] ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-times-circle fa-2x text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div
                            class="card border-left-success shadow h-100 py-2"
                    >
                        <div class="card-body">
                            <div
                                    class="row no-gutters align-items-center"
                            >
                                <div class="col mr-2">
                                    <div
                                            class="text-xs font-weight-bold text-warning text-uppercase mb-1"
                                    >
                                        Sudah Makan
                                    </div>
                                    <div
                                            class="h5 mb-0 font-weight-bold text-gray-800"
                                    >
                                        <?= $makan[0] ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-utensils fa-2x text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div
                            class="card border-left-success shadow h-100 py-2"
                    >
                        <div class="card-body">
                            <div
                                    class="row no-gutters align-items-center"
                            >
                                <div class="col mr-2">
                                    <div
                                            class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                                    >
                                        Belum Makan
                                    </div>
                                    <div
                                            class="h5 mb-0 font-weight-bold text-gray-800"
                                    >
                                        <?= $makan[1] ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-utensils fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <form action="<?= base_url('diagram/index') ?>" method="post" class="mb-0">
                                <div class="form-row">
                                    <div class="form-group col-md-5 mb-0">
                                        <input value="<?= $min ?>" type="date" id="min" name="min" class="form-control form-control-sm" placeholder="Tanggal Awal">
                                    </div>
                                    <div class="form-group col-md-5 mb-0">
                                        <input value="<?= $max ?>" type="date" id="max" name="max" class="form-control form-control-sm" placeholder="Tanggal Akhir">
                                    </div>
                                    <div class="form-group col-md-2 mb-0">
                                        <button type="submit" class="btn btn-sm btn-success" id="btn-filter">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 d-flex justify-content-center mt-5">
                                    <div style="width: 300px; height: 300px;">
                                        <canvas id="chart-lapor"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center mt-5">
                                    <div style="width: 300px; height: 300px;">
                                        <canvas id="chart-makan"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>