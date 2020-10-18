<?php
  $this->load->view('adminpanel/headerview');
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

      <h3>Add Song</h3>
      <div id="msg" style="font-size: 12px; color: red; font-family: sans-serif;"></div>      
      <form id="addsong_form" autocomplete="off">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Singer</label>
          <textarea name="singer" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Poster <span style="font-size: 12px; color: red; font-family: sans-serif;">| jpeg | jpg | png |</span></label>
          <input type="file" name="poster" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Song <span style="font-size: 12px; color: red; font-family: sans-serif;">| mp3 | mp4 |</span></label>
          <input type="file" name="song" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" id="addsong" class="btn btn-primary">Submit</button>
      </form>
    </main>
  </div>
</div>

<?php
  $this->load->view('adminpanel/footerview');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#addsong').click(function(){
    var form = $('#addsong_form')[0];
    var data = new FormData(form);
    $.ajax({
      url: "<?= base_url().'admin/dashboard/addsong'; ?>",
      type: 'post',
      enctype: 'multipart/form-data',      
      data: data,
      processData: false,  
      contentType: false,
      cache: false,
      success: function(data){
        if(data=='success'){
          window.location="<?= base_url().'admin/dashboard'; ?>";
        } else{
          $('#msg').html(data);
        }
      },
      error: function(){
      }
    });
    return false;
  });
</script>