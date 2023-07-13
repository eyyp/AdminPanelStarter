<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Input Masks</h4>
                <p class="sub-title">Input masks can be used to force the user to enter data conform a specific format. Unlike validation, the user can't enter any other key than the ones specified by the mask.
                </p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-4">
                            <form action="#">
                                <?php $this->load->view(component('form','mask'),['span'=>'e.g "999-99-999-9999-9"','mask'=>'99-9999999','label'=>'Tax ID'])?>
                                <div class="form-group">
                                    <label>ISBN 1</label>
                                    <input type="text" placeholder="" data-mask="999-99-999-9999-9" class="form-control">
                                    <span class="font-13 text-muted">e.g "999-99-999-9999-9"</span>
                                </div>
                                <div class="form-group">
                                    <label>ISBN 2</label>
                                    <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control">
                                    <span class="font-13 text-muted">999 99 999 9999 9</span>
                                </div>
                                <div class="form-group">
                                    <label>ISBN 3</label>
                                    <input type="text" placeholder="" data-mask="999/99/999/9999/9" class="form-control">
                                    <span class="font-13 text-muted">999/99/999/9999/9</span>
                                </div>
                                <div class="form-group">
                                    <label>IPV4</label>
                                    <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control">
                                    <span class="font-13 text-muted">192.168.110.310</span>
                                </div>
                                <div class="form-group mb-0">
                                    <label>IPV6</label>
                                    <input type="text" placeholder="" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="form-control">
                                    <span class="font-13 text-muted">4deg:1340:6547:2:540:h8je:ve73:98pd</span>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="p-4">
                            <form action="#">

                                <div class="form-group">
                                    <label>Tax ID</label>
                                    <input type="text" placeholder="" data-mask="99-9999999" class="form-control">
                                    <span class="font-13 text-muted">99-9999999</span>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                    <span class="font-13 text-muted">(999) 999-9999</span>
                                </div>
                                <div class="form-group">
                                    <label>Currency</label>
                                    <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control">
                                    <span class="font-13 text-muted">$ 999,999,999.99</span>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" placeholder="" data-mask="99/99/9999" class="form-control">
                                    <span class="font-13 text-muted">dd/mm/yyyy</span>
                                </div>
                                <div class="form-group mb-0">
                                    <label>Date 2</label>
                                    <input type="text" placeholder="" data-mask="99-99-9999" class="form-control">
                                    <span class="font-13 text-muted">dd-mm-yyyy</span>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->