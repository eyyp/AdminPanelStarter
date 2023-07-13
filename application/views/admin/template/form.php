<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view(component('base','head')); ?>
    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <?php $this->load->view(component('base','tabBar')); ?>
            <?php $this->load->view(component('base','leftSideBar')); ?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <?php $this->load->view(component('menu','pageTitleBox')) ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title"><?php echo isset($cardTitle) ? $cardTitle : ''?></h4>
                                        <p class="sub-title"><?php echo isset($cardParagraf) ? $cardParagraf : ''?></p>
                                        <?php $this->load->view(pages($pagesFile,$mainContant))?>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <?php $this->load->view(component('base','footer'))?>
            </div>
        </div>
        <?php $this->load->view(component('base','scriptsAdd'))?>
    </body>
</html>