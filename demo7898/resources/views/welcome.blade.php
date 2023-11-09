<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/locales/bootstrap-datepicker.th.min.js"></script>
<style>
    .container{
        margin:auto;
        max-width:500px;
    }
    a{
        color: #A6CE38;
        font-weight: 600;
        font-size: 17px;
        line-height: 1.8;
    }
</style>
<script>
    jQuery(document).ready(function($){
        jQuery.fn.datepicker.defaults.language = 'th';
        jQuery('#datepicker').datepicker({
          autoclose: true,
          todayHighlight: true
        }).datepicker('update', new Date());
    });
</script>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="form-group">
        <div class="input-group date">
          <strong><span style="color: red; font-size: large;">ตัวอย่าง</span></strong><br><br>
          <strong>เลือกวันที่:</strong> <input id="datepicker" class="datepicker"><br><br>
          <a href="https://dooplearn.com/bootstrap-datepicker-thai/">รายละเอียดเพิ่มเติมคลิกที่นี่</a>
      </div>
    </div>
  </div>
</div>
