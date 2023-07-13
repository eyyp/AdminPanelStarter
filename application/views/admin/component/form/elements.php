
<?php 
    // type = Zorunlu text-search-email-url-tel-password-number-(datetime-local)-date-month-week-time-color-null 
    // for = Opsiyonel type
    // label = Opsiyonel labelverisi
    // value = Opsiyonel input value
    // placeholder = Opsiyonel input placeholder
    // message = Opsiyonel büyük punto message
    // caution = Opsiyonel küçük dikkat yazısı
    // situation = Opsiyonel danger-warning-success parametreleri ile inputu belirler 
    // size = Opsiyonel sm-lg inputun boyutunu belirler
    // selected = Opsiyonel selectde seçili elemanı belirtmek için 
    // name = Opsiyonel ama veri çekilemez kesinlikle eklenmelidir. eklenen elementin name'ni içerir
    // inputProps = Opsiyonel tüm propslar dizi olarak verilmelidir.
    // colorInput = Opsiyonel inputu color seçme türe çeker
    // title = title için
    // textLabel textLabel için
    ?>
<div class="form-group <?php echo $type == 'check' ? '' :'row'?><?php echo isset($situation) ?  " has-".$situation : ""; ?>">
    <h6 class="text-muted"><?php echo isset($title) ? $title :''?></h6>
    <p class="text-muted mb-3"><?php echo isset($textLabel) ? $textLabel :''?></p>
    <?php if(isset($label)) { ?><label for="<?php echo isset($type) ? $type.'-input' : '' ?>" class="<?php echo isset($label) ? "col-sm-2 col-form-label" :''; ?>"><?php echo isset($label) ? $label : ''; ?></label><?php }?>
    <div class="col-sm-10">
        <?php if(!isset($type)){ ?>
                <select <?php echo isset($required) ? 'required':''?> name="<?php echo isset($name) ? $name : '';?>" id="<?php echo isset($name) ? $name :''?>"class="custom-select">
                    <?php if(isset($selected)) { ?> <option selected><?php echo $selected ?></option> <?php }
                    foreach($value as $element){
                    ?>
                        <option value="<?php echo $element?>"><?php echo $element ?></option>
                    <?php } ?>
                </select><?php
            }else if($type == 'check'){ ?>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name ="<?php echo isset($name) ? $name : '' ?>" class="custom-control-input" id="<?php echo isset($name) ? $name:'' ?>" data-parsley-multiple="groups" data-parsley-mincheck="2">
                        <label class="custom-control-label" for="customCheck1"><?php echo isset($checkLabel) ? $checkLabel : ''; ?></label>
                    </div> 
            <?php }else{?>
                <input <?php echo isset($required) ? 'required':''?> class="form-control<?php echo isset($size) ? 'form-control-'.$size : ''; echo isset($situation) ? ' form-control-'.$situation : ''; ?>" name="<?php echo isset($name) ? $name : '';?>" type="<?php echo isset($type) ? $type : ''; ?>"  value="<?php echo isset($value) ? $value : ''; ?>"  placeholder="<?php echo isset($placeholder) ? $placeholder : ''; ?>" id="<?php echo isset($name) ? $name:'' ?>" <?php if(isset($inputProps)){foreach($inputProps as $prop){ echo $prop;}}?>>
     <?php  } ?>
        <div class="form-control-feedback"><?php echo isset($message) ? $message : ''; ?></div>
        <small class="form-text text-muted"><?php echo isset($caution) ? $caution : ''; ?></small>
    </div>
</div>