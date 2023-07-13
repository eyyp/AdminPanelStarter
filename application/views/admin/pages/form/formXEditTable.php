<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Inline Example</h4>
                <p class="sub-title">This library allows you to create editable elements on your page. It can be used with any engine (bootstrap, jquery-ui, jquery only) and includes both popup and inline modes. Please try out demo to see how it works.</p>
                <?php $this->load->view(component('tables','XEdit'),[
                    'titles'=>['deneme1','deneme2','deneme3','deneme4']
                    ]); ?>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->