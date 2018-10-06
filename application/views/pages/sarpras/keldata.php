<div class="page-wrapper">
  <div class="container-fluid">



    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Kelola Data Sarana & Prasarana </h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Menu Admin</li>
          <li class="breadcrumb-item active">Kelola Data Sarana & Prasarana</li>
        </ol>
      </div>
    </div>





    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kelola Sarana & Prasarana</h4>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Data</span></a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tabtambahdata" role="tab" aria-expanded="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Tambah Data</span></a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
          <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
            <div class="p-20">

              <div class="row">
                <div class="col-lg-12">
                  <h2 class="card-title text-center">Data</h2>



                  <table id="table1" class=" table table-bordered table-responsive nowrap table-hover" style="width: 100%;">
                    <thead>
                      <tr>
                        <th class="all">ID</th>
                        <th class="all" style="width: 250px;">NAMA</th>
                        <th class="all">KELOMPOK</th>
                        <th class="all" style="width: 250px;">LATITUDE</th>
                        <th class="all" style="width: 250px;">LONGTITUDE</th>
                        <th class="all">LOKASI</th>
                        <th class="all">LUAS AREA</th>
                        <th class="">Nomor DSI :</th>
                        <th class="" style="width: 300px;">PENANGGUNG JAWAB :</th>
                        <th class="all" style="width: 50;">AKSI</th>
                        <th class="">JUMLAH SDM : </th>
                        <th class="">WAKTU JAGA OPERASIONAL : </th>
                        <th class="">PERANGKAT YANG TERPASANG : </th>
                        <th class="">LAMPU : </th>
                        <th class="">SOLAR CELL : </th>
                        <th class="">BATTERY : </th>
                      </tr>
                    </thead>

                    <tbody id="target">



            <?php
            foreach ($data as $r){ ?>
              <tr>
                <td><?= $r->id; ?></td>
                <td><?= $r->nama; ?></td>
                <td><?= $r->kelompok; ?></td>
                <td><?= $r->latitude; ?></td>
                <td><?= $r->longtitude; ?></td>
                <td><?= $r->lokasi; ?></td>
                <td><?= $r->luas_area; ?></td>
                <td><?= $r->nomordsi; ?></td>
                <td><?= $r->penanggung_jawab; ?></td>
                <td> <a href="#form" data-toggle="modal" class="btn btn-primary" data-toggle="modal" data-target="#modal_edit<?php echo $r->id;?>">Edit</a>
                  <a href="#form" data-toggle="modal" class="btn btn-danger">Delete</a>
                </td>
                <td><?= $r->jml_sdm; ?></td>
                <td><?= $r->wktjagaopl; ?></td>
                <td><?= $r->perangkat; ?></td>
                <td><?= $r->lampu; ?></td>
                <td><?= $r->solar_cell; ?></td>
                <td><?= $r->battery; ?></td>
              </tr>
            <?php } ?>

          </tbody>
        </table>


                                    <!-- ===== MODAL EDIT DATA ===== -->
              <!-- <?php
              // foreach($data->result_array() as $i):
              //     $dataid=$i['id'];
              //     $datanama=$i['nama'];
              //     $datakelompok=$i['kelompok'];
              //     $datalatitude=$i['latitude'];
              //     $datalongtitude=$i['longtitude'];
              //     $datalokasi=$i['lokasi'];
              //     $dataluas_area=$i['luas_area'];
              //     $datanomordsi=$i['nomordsi'];
              //     $datapenanggung_jawab=$i['penanggung_jawab'];
              //     $datajml_sdm=$i['jml_sdm'];
              //     $datawktjagaopl=$i['wktjagaopl'];
              //     $dataperangkat=$i['perangkat'];
              //     $datalampu=$i['lampu'];
              //     $datasolar_cell=$i['solar_cell'];
              //     $databattery=$i['battery'];
               ?>
               <div class="modal fade" id="modal_edit<?php //echo $dataid;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                       <h3 class="modal-title" id="myModalLabel">Edit Data</h3>
                     </div>

                     <form class="form-horizontal" method="post" action="<?php //echo base_url().'index.php/barang/edit_barang'?>">
                                     <div class="modal-body">

                                         <div class="form-group">
                                             <label class="control-label col-xs-3" >Kode Barang</label>
                                             <div class="col-xs-8">
                                                 <input name="kode_barang" value="<?php //echo $barang_id;?>" class="form-control" type="text" placeholder="Kode Barang..." readonly>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label class="control-label col-xs-3" >Nama Barang</label>
                                             <div class="col-xs-8">
                                                 <input name="nama_barang" value="<?php //echo $barang_nama;?>" class="form-control" type="text" placeholder="Nama Barang..." required>
                                             </div>
                                         </div>


                   </div>
                 </div>
               </div>
             <?php //endforeach;?> -->
                 <!--END MODAL EDIT DATA-->



      </div>
    </div> <!-- END DIV CLASS ROW -->


  </div>
</div>
<div class="tab-pane p-20" id="tabtambahdata" role="tabpanel" aria-expanded="false">

<form action="<?php echo base_url('adminmenu/tambahdata'); ?>" method="post">


  <div class="form-group row">
    <label for="inputnama" class="col-2 col-form-label">Nama</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : Pelampung Suar Bantu " name="nama" id="inputnama"required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Kelompok</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : Pelampung Suar" name="kelompok" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Latitude</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : -6.1194908" name="latitude" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Longtitude</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : 106.8624483" name="longtitude" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Lokasi</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : Jakarta" name="lokasi" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Luas Area</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : 1 Hektar" name="luasarea" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Nomor DSI</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : 123456" name="nomordsi" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Penanggung Jawab</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : Bapak Adit" name="penanggungjwb" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Jumlah SDM</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : 10 Pegawai" name="jmlsdm">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Waktu Jaga Operasional</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : 8 Jam" name="wktjagaopl">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Perangkat Yang Terpasang</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : " name="perangkat" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Jenis Lampu</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : Philips" name="lampu" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Solar Cell</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : " name="solarcell" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 col-form-label">Battery</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Contoh : ABC " name="battery" required>
    </div>
  </div>

  <div class="form-group row button-group">
    <div class="col-md-12">
      <button type="submit" class="btn btn-danger waves-effect waves-light pull-right" >Tambah</button>
    <button type="reset" class="btn btn-default waves-effect pull-right">Reset</button>
  </div>
  </div>


</form>
 </div> <!-- END TAB PANE TAMBAH DATA -->


</div>  <!-- END TAB CONTENT -->
</div> <!-- END CARD BODY -->
</div> <!-- END CARD -->







<!-- <div class="row">
<div class="col-lg-12 align-self-center">
<div class="card">
<div class="card-body">


</div>
</div>
</div>
</div> -->



</div><!-- END CONTAINER FLUID -->
</div> <!-- END PAGE WRAPPER -->
