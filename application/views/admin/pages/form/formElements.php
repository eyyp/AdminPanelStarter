<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Textual inputs</h4>
                <p class="sub-title">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>
                <?php
                $errorMessage = 'Error message'; 
                $situation = isset($errorMessage) ? 'warning' :'';
                $this->load->view(component('form','input'),[
                    'name'=>'inputHorizontalDnger',
                    'type'=>'text',
                    'for'=>'id',
                    'label'=>'Deneme',
                    'value'=>'ggdfgfd',
                    'placeholder'=>'placeholder',
                    'message'=>$errorMessage,
                    'caution'=>'Bu bir messagedir',
                    'situation'=>'danger',
                ]); 
                $this->load->view(component('form','input'),[
                    'name'=>'snameÖrnek',
                    'type'=>'password',
                    'label'=>'Deneme',
                    'placeholder'=>'asdfsdaf',
                    'caution'=>'Bu bir messagedir',
                ]);
                $this->load->view(component('form','select'),[
                    'name'=>'selected',
                    'label'=>'Deneme',
                    'value'=>['options 1','options 2','options 3'],
                    'placeholder'=>null,
                    'message'=>'',
                    'caution'=>'Bu bir messagedir',
                    'situation'=>'danger',
                    'reminding'=>'',
                    'size'=>'lg',
                    'selected'=>'bu seçili gelsin',
                ]);
                $this->load->view(component('form','check',[
                    'name'=>'name',
                    'checkLabel'=>'asfasgds',
                    'id'=>'ch'
                ]));
                    ?>
                    
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->