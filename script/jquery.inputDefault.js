$(function(){
    var select_form = $('input:text,textarea'); //ѡ����Ҫ�����ʾ���ֵı�
    for(i=0;i<select_form.length;i++){          
        select_form.eq(i).val(select_form.eq(i).attr('fs')).css('color','#999');//���ñ���ֵΪһ������ֵΪ��fs����ֵ    
    }  
    select_form.focus(function(){   //��ý���
        if($(this).val()==$(this).attr('fs')){
          $(this).val('');
          $(this).css('color','#333');
        }    
    })
    select_form.blur(function(){    //ʧȥ����  
        if($(this).val()==''){
           $(this).val($(this).attr('fs'));
           $(this).css('color','#999');
        }
    })
})