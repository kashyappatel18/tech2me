jQuery(document).ready(function(){
    jQuery('#plan_id').change(function(){
        var plan_id=jQuery(this).val();
        //alert(prod_id);
        if(plan_id!=""){
            jQuery.ajax({
                url:base_url+'plan/getRate',
                type:'POST',
                data:'plan_id='+plan_id,
                success:function(data){
                    jQuery('#price').val(data);
                    //alert(cust_id);
                }
            });
        }

    });
});