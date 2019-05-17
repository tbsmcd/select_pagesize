rcmail.addEventListener('init', function(){
    val = $('#rcmfd_mail_pagesize').val();
    $('#rcmfd_mail_pagesize').replaceWith('<select id="rcmfd_mail_pagesize_select" name="_mail_pagesize"><option value="20">20</option><option value="50">50</option></select>');
    $('#rcmfd_mail_pagesize_select').val(val);
});