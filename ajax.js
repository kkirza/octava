d
$(function () {
	$('.sendFORM').submit(function (e) {
		e.preventDefault();
		var name_form = $(this).find("input[name=name]");
		var tel_form = $(this).find("input[name=tel]");
		var mail_form = $(this).find("input[name=mail]");
		var subj_form = $(this).find("textarea[name=subj]");
		name = name_form.val() ? name_form.val() : '';
		tel  =  tel_form.val() ? tel_form.val()  : '';
		mail = mail_form.val() ? mail_form.val() : '';
		subj = subj_form.val() ? subj_form.val() : '';
		

		ajax_load('send.php', { name: name, tel: tel, mail: mail, subj: subj }, function (r, k) {
			if (k == 200) {
				console.log(r)
				name_form.val('');
				tel_form.val('');
				mail_form.val('');
				subj_form.val('');
				
				$('.thankYou__MA').css({display: 'flex'});
				$('body').css({overflow: 'hidden'});

			}
			else {
				console.error(r)
			}
		})

	})
	$('.thankYou__MA__button, .thankYou__MA__close').click(function (){
		$('.thankYou__MA').css({display: 'none'});
		$('body').css({overflow: 'auto'});
		});
})



	
	