<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Validation type</h4>
                <p class="sub-title">Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.</p>

                <form class="" action="#">
                <?php 
                        $this->load->view(component('form','elements'),[
                            'name'=>'tet',
                            'label'=>'label',
                            'type'=>'text',
                            'inputProps'=>['min="6"','max="100"'],
                            'placeholder'=>'place holder',
                        ]) ?>
                    <?php 
                        $this->load->view(component('form','elements'),[
                            'name'=>'check',
                            'type'=>'check',
                            'checkLabel' => 'check-Label'
                        ]) ?> 
                    
                    <div class="form-group mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Validation type</h4>
                <p class="sub-title">Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.</p>

                <form class="" action="#">
                <?php 
                        $this->load->view(component('form','elements'),[
                            'name'=>'tet',
                            'label'=>'label',
                            'type'=>'text',
                            'inputProps'=>['min="6"','max="100"'],
                            'placeholder'=>'place holder',
                        ]) ?>
                    <?php 
                        $this->load->view(component('form','elements'),[
                            'name'=>'check',
                            'type'=>'check',
                            'checkLabel' => 'check-Label'
                        ]) ?> 
                    
                    <div class="form-group mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->