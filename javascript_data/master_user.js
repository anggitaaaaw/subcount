
    function new_user(){
      full_name = $('#full_name').val();
      username = $('#username').val();
      password = $('#password').val();
      hak_akses = $('#hak_akses').val();
      status = $('#status').val();
     
      $.post('<?php echo site_url('User');?>/new_user',{ 'fullname' : full_name, 'username' : username, 'password' : password, 'hak_akses' : hak_akses, 'status' : status},
        function(data){ 
        console.log(data);

        if(data == 1){
            alert('User Berhasil ditambah');
            location.reload();
        }else{
            alert('User Gagal ditambah');
            location.reload();

        }
        });
    
    }
