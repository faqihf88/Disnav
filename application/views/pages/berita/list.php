<div class="page-wrapper">
	<div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Dashboard</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>


    <div class="row">
      <?php
      function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
      }
      foreach ($data->result_array() as $i) :
        $id=$i['berita_id'];
        $judul=$i['berita_judul'];
        $image=$i['berita_image'];
        $isi=$i['berita_isi'];
        ?>
        <div class="col-lg-8 col-md">
         <div class="card">
          <div class="card-body">
           <div class="row">
            <div class="col-12">
             <div itemprop="text" class="entry-content">
              <h2><?php echo $judul;?></h2><hr/>
              <img src="<?php echo base_url().'assets/images/'.$image;?>" class="img-fluid">
              <?php echo limit_words($isi,30);?><a href="<?php echo base_url().'berita/tampilanberita/'.$id;?>"> Selengkapnya ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach;?>

<div class="col-lg-4 col-md-5">
  <div class="card">
    <div class="card-body">
      <div class="col-12">
       <form class="form-inline">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0 text-center" type="submit">Search</button>
       </form><br>
       <aside id="recent-posts-2" class="widget widget_recent_entries">
        <h2 class="widget-title">Berita Terbaru</h2>
        <ul>
          <li>
            <a href="#!">Indonesia dan Singapura Selenggarakan Latihan Bersama Simulasi Uji Coba (TABLETOP EXERCISE) Penanganan Kecelakaan Kapal Penyeberangan</a>
          </li>
          <li>
            <a href="#!">Tiga Negara Pantai Bekerjasama Dalam Pemeliharaan Sarana Bantu Navigasi Pelayaran di Selat Malaka dan Singapura</a>
          </li>
          <li>
            <a href="#!">Serah Terima Jabatan Pejabat Struktural</a>
          </li>
          <li>
            <a href="#!">PNBP VTS Batam Tahun 2017 Tembus Rp. 9 Miliar</a>
          </li>
          <li>
            <a href="#!">Serah Terima 6 Unit Kapal Negara Kenavigasian Kelas I</a>
          </li>
        </ul>
      </aside>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>