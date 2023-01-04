$('#calculate').on('click', function (){
    var amount = parseInt($('#amount').val());
    var term = parseInt($('#term').val());
    var rate = parseInt($('#rate').val());
    var monthly_rate = rate/1200;
    var annuity = (Math.pow((monthly_rate+1), term)*monthly_rate)/((Math.pow((monthly_rate+1), term))-1);
    var monthly_payment = annuity*amount;
    var total_amount = Math.ceil(monthly_payment*term);
    var total_rate = total_amount-amount;
    $('#results').html('' +
        '<table class="overcraft-table" style="width:40%">\n' +
        '    <tr class="tr tr2">\n' +
        '        <th>Ümumi ödəniləcək məbləğ</th>\n' +
        '        <td>'+total_amount+' AZN</td>\n' +
        '    </tr>\n' +
        '    <tr class="tr2">\n' +
        '        <th>Faiz məbləği</th>\n' +
        '        <td>'+total_rate+' AZN</td>\n' +
        '    </tr>\n' +
        '    <tr class="tr tr2">\n' +
        '        <th>Aylıq ödəniş</th>\n' +
        '        <td>'+monthly_payment.toFixed(2)+' AZN</td>\n' +
        '    </tr>\n' +
        '</table>' +
        '');
});
