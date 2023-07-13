<?php $this->load->view(component('charts','startTopContant')) ?>
                        <div class="row">
                            <?php $this->load->view(component('charts','salesStatistic')) ?>
                            <?php $this->load->view(component('charts','trendsMonthly'))?>
                        </div>
                        <div class="row">
                            <?php $this->load->view(component('charts','latestMessages')) ?>
                            <?php $this->load->view(component('charts','recentActivity')) ?>
                            <?php $this->load->view(component('charts','socialBar')) ?>
                        </div>
                        <div class="row">
                            <?php $this->load->view(component('charts','latestProjects')) ?>
                            <?php $this->load->view(component('charts','latestProjects2')) ?>
                        </div>