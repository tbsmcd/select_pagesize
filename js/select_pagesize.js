rcmail.addEventListener('init', function () {
    const val = $('#rcmfd_mail_pagesize').val();
    const sel = $('<select>').attr('id', 'rcmfd_mail_pagesize_select').attr('name', '_mail_pagesize');
    $('#rcmfd_mail_pagesize').replaceWith(sel);
    $.each(rcmail.env.pagesize_options, function (i, v) {
        let op = $('<option>').val(v).text(v);
        $('#rcmfd_mail_pagesize_select').append(op);
    })
    $('#rcmfd_mail_pagesize_select').val(val);
});