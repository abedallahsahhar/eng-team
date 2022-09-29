
<script src= '<?php echo base_url()."jquery/TASKS.js"?>' type="text/javascript" ></script>

<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <br>
        <br>
        <br>
        <input type="hidden"  id="user_id" value='<?php $name = $this->session->userdata('CARDID'); echo $name; ?>'>

        <div class="container">
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h4 class="card-label"  style="    margin-right: 18px;">المهام
                        </h4>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table style="    font-weight: bold;"  class="table table-striped table-bordered dom-jQuery-events dataTable" ID="get_tasks">

                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
        </div></div></div>