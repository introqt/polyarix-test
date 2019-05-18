$(document).ready(function() {
  $('#dollars').keyup(function() {
    const dollars = $(this).val();
    const uahInput = $('#uah');
    const uahHidden = $('#uah-equivalent');

    const path = 'https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11';
    $.ajax({
          url: path,
          type: 'GET',
          success: function(result) {
            const uah = dollars * result[0].buy;
            uahInput.val(uah.toFixed(2));
            uahHidden.val(uah.toFixed(2));
          },
        },
    );
  });
});
