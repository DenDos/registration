(function () {

    var app = {

        initialize: function () {
            this.modules();
            this.setUpListeners();
        },

        modules: function () {

        },

        setUpListeners: function () {
            $('form').on('submit', app.submitForm);
            $('form').on('keydown', 'input', app.removeError);

        },

        submitForm: function (e) {
            var form = $(this),
                submitBtn = form.find('button[type="submit"]');
            if (app.validateForm(form) == false) return false;

            var str = form.serialize();
            $.ajax({
                url: '/control.php',
                type: 'post',
                data: str
            }).done(function () {
                console.log('OK');
            }).fail(function () {
                console.log("ERR");
            }).always(function () {
                console.log('al');
            });
        },

        validateForm: function (form) {
            var inputs = form.find('input');
            var valid = true;

            inputs.tooltip('destroy'); 
            $.each(inputs, function (index,  val) {
                var input = $(val),
                    val = input.val(),
                    formGroup = input.closest(".tool"),
                    label = input.parents('label').text().toLocaleLowerCase(),
                    textError = 'Введите ' + label;
                if (val.length === 0) {
                    formGroup.addClass('has-error').removeClass('has-success');

                    input.tooltip({
                        trigger: 'manual',
                        placement: 'bottom',
                        title: textError
                    }).tooltip('show');

                    valid = false;

                } else {

                    formGroup.addClass('has-success').removeClass('has-error');
                }


            });
            return valid;
        },

        removeError: function () {
            $(this).tooltip('destroy').parents('label').removeClass('has-error');
        }



    }

    app.initialize();

}());