<?php 
    include "inc/header.php";
    include_once 'controller/teams/teams_sql.php';
    $data = SelectData('settings','');
    $row = $data->fetch_object();
?> 

<div class="container-fluid flex-grow-1 container-p-y"> 
    <div class="row">
        <div class="col-10"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> Our Team</h3></div>
        <div class="col-2"><h3 class="bg-white text-center p-3 text-uppercase text-info"><button onclick="add_team('views/teams/add.php')" class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></button></h3></div>
    </div>
        <!-- logo -->       
    <div class="row">
        <div class="col-md-12" id="team">
        </div>    
    </div><!-- row -->
</div>


<!-- popup -->
<script> 
    // view
    setInterval( function(){
        $("#team").load("views/teams/team_view.php");
    },1000);


    //add
    function add_team(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#client").html(data);
                $("#dataModal").modal("show");
            },
        });
    }

    //edit
    function team_edit(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#client").html(data);
                $("#dataModal").modal("show");
            },
        });
    }


    //delete
    function team_delete(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {                            
            },
        });
    }

</script>



<!-- Modal for client -->
<div class="modal fade" id="dataModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" id="client">

    </div>
  </div>
</div>


<?php include 'inc/footer.php';?>