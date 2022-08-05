<?php include 'db_connect.php' ?>
<?php 
include 'nav.php';
// include('./header.php'); 
 ?>
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/DataTables/datatables.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<style>
.modal-dialog.large {
    width: 80% !important;
    max-width: unset;
  }
  .modal-dialog.mid-large {
    width: 50% !important;
    max-width: unset;
  }
</style>
    <!--  Services Section Start -->
	<section id="services">
		<div class="services container">
			<div class="service-top">
				<h1 class="section-title">Financing Options</h1>
				<p>There are three number of financing options we offer</p>
			</div>
			<div class="service-bottom">
				<div class="service-item">
					
                <h2>3 Marla</h2>
                <p><i>Price of House</i> : 3.5 Million <br />
                    <i>Maximum Loan Size</i> : 2.7 Million <br />
                    <i>Loan Tenor</i> : 5/10/20 Years <br />
                    <i>Pricing</i> : 3% for first 5 years & <br>
                    5% for next years
                </p>
				</div>
				<div class="service-item">
					
                <h2>05 Marla</h2>
                <p><i>Price of House</i> : 4.0 Million <br />
                    <i>Maximum Loan Size</i> : 3.0 Million <br />
                    <i>Loan Tenor</i> : 5/10/20 Years <br />
                    <i>Pricing</i> : 5% for first 5 years & <br>
                    7% for next years
                </p>
				</div>
				<div class="service-item">
					
                <h2>10 Marla</h2>
                <p><i>Price of House</i> : 6.0 Million <br />
                    <i>Maximum Loan Size</i> : 5.0 Million <br />
                    <i>Loan Tenor</i> : 5/10/20 Years <br />
                    <i>Pricing</i> : 7% for first 5 years & <br>
                    9% for next years
                </p>
				</div>
			</div>
		</div>
	</section>
    <section >
        <div class='btn-apply'>
            <?php
                // session_start();
                if(isset($_SESSION['login_id'])){
                    if ($_SESSION['login_id']) {
                        ?>
                        <button class="applyLoan" type="button" id="new_borrower">Apply Now</button>
                        <?php
                        } else {}
                    } else{
                        ?>
                        <?php
                    }
            ?>
        </div>
    </section>
    <!-- Modal  -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
        <div class="modal fade" id="confirm_modal" role='dialog'>
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirmation</h5>
                    </div>
                    <div class="modal-body">
                        <div id="delete_content"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="uni_modal" role='dialog'>
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
	<?php include 'footer.php' ?>
</body>
    <script>
        window.start_load = function(){
            $('body').prepend('<di id="preloader2"></di>')
        }
        window.end_load = function(){
            $('#preloader2').fadeOut('fast', function() {
                $(this).remove();
            })
        }
        
        window.uni_modal = function($title = '' , $url='',$size=""){
        start_load()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size)
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
                    }
                    $('#uni_modal').modal('show')
                    end_load()
                }
            }
        })
    }
    window.alert_toast= function($msg = 'TEST',$bg = 'success'){
      $('#alert_toast').removeClass('bg-success')
      $('#alert_toast').removeClass('bg-danger')
      $('#alert_toast').removeClass('bg-info')
      $('#alert_toast').removeClass('bg-warning')

    if($bg == 'success')
      $('#alert_toast').addClass('bg-success')
    if($bg == 'danger')
      $('#alert_toast').addClass('bg-danger')
    if($bg == 'info')
      $('#alert_toast').addClass('bg-info')
    if($bg == 'warning')
      $('#alert_toast').addClass('bg-warning')
    $('#alert_toast .toast-body').html($msg)
    $('#alert_toast').toast({delay:2000}).toast('show');
  }
    // $('#borrower-list').dataTable()
	$('#new_borrower').click(function(){
		uni_modal("New borrower","manage_borrower.php",'mid-large')
	})
    
    </script>
	
