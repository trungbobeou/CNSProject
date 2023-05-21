$(document).ready(function(){
    $("#inputDomain").inputmask({
        mask: "*{1,}.a{1,}",
        greedy: false,
        onincomplete: function () {
            valuerecordcheck = false
        },
        oncomplete: function () {
            valuerecordcheck = true
        }
    });
    $("#domainForm").validate({
        rules: {
            inputDomain: {
                required: true,
                minlength: 5,
            },
            inputUsername: {
                required: true,
                minlength: 5
            },
            inputPassword: {
                required: true,
                minlength: 5
            }

        },
        messages: {
            inputDomain: {
                required: "Vui lòng nhập tên Domain",
                minlength: "Tối thiểu 5 kí tự",
            },
            inputUsername: {
                required: "Vui lòng nhập Username",
                minlength: "Tối thiểu 5 kí tự"
            },
            inputPassword: {
                required: "Vui lòng nhập Password",
                minlength: "Tối thiểu 5 kí tự"
            }
        }
    });

    $("input").on("input", function () {
        checkvalidFormDomain();
    });

    function checkvalidFormDomain() {
        if ($("#domainForm").valid() && valuerecordcheck) {
            $('#btnaddDomain').prop('disabled', false)
        } else {
            $('#btnaddDomain').prop('disabled', true);
        }
    };
})