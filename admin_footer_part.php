        </div>
    </div>


    <!-- Modal HTML embedded directly into document -->
    <div id="modalform" class="modal">       
            <div id="client-details" class="client-details"></div>
    </div>



    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <!-- jQuery Modal -->
    <script src="jquery.modal.min.js"></script>


    <script>
        $(document).ready(function(){
            //date picker
            $("#appointmentdate").datepicker();

            $(".vwdetails").click(function(){                
                var getID=$(this).attr("id");
                // alert(getID);
                $.ajax({
                    type: 'post',
                    url: 'selectdata_by_id.php',
                    data: {
                        'id' : getID
                    },
                    success: function(res){
                        $("#client-details").html(res);
                    }
                });
                $(".dta-hide").css("display","none");  
                $('#modalform').modal();                
            }); 
           
           
        });



        $(document).on("click","#update_status",function(){
            $(".dta-default-status").css("display","none");
            $(".dta-edit-buttons").css("display","revert");
            $(".dta-edit-status").css("display","revert");
           
        });

        $(document).on("click",".btn-cancel", function(){
            $(".dta-default-status").css("display","revert");
            $(".dta-hide").css("display","none");
        });

        $(document).on("change","#appointmentstatus",function(e){
             //date picker
             $("#appointmentdate").datepicker();

            let a=this.value;
            if(a==2){
                $(".dta-edit-date").css("display","revert");
                $(".dta-edit-time").css("display","revert");
            }else{
                $(".dta-edit-date").css("display","none");
                $(".dta-edit-time").css("display","none");
            }
        });

        $(document).on("click",".btn-update",function(){
            let a=$("#appointmentstatus :selected").val();
            let b=$('#appointmentdate').val();
            let c=$('#appointmenttime :selected').val();
            let d=$('#txtID').val();

            // alert(a + ' - ' + b + ' - ' + c + ' - ' + d);
            if(a==1){
                $.ajax({
                    type: 'post',
                    url: 'update_status.php',
                    data:{
                        'status_num':a,
                        'id':d
                    },                
                    success:function(res){
                        alert("\n Updated successfully. \n\n This will reload the page to take effect the changes made.");
                        location.reload();
                    }    
                });
            }else if(a==2){
                $.ajax({
                    type: 'post',
                    url: 'update_status_reschedule.php',
                    data:{
                        'status_num':a,
                        'id':d,
                        'newdate':b,
                        'newtime':c
                    },                
                    success:function(res){
                        alert("\n Updated successfully. \n\n This will reload the page to take effect the changes made.");
                        location.reload();
                    }    
                });
            }else if(a==3){
                $.ajax({
                    type: 'post',
                    url: 'update_status.php',
                    data:{
                        'status_num':a,
                        'id':d
                    },                
                    success:function(res){
                        alert("\n Updated successfully. \n\n This will reload the page to take effect the changes made.");
                        location.reload();
                    }    
                });
            }else{
                $.ajax({
                    type: 'post',
                    url: 'update_status.php',
                    data:{
                        'status_num':a,
                        'id':d
                    },                
                    success:function(res){
                        alert("\n Updated successfully. \n\n This will reload the page to take effect the changes made.");
                        location.reload();
                    }       
                });
            }

        });

        
    </script>
</body>
</html>