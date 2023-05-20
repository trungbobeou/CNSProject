$(document).ready(function () {
    var valuerecordcheck;
    $('#btnaddDomain').prop('disabled', true);
    $("#domainForm").validate({
        rules: {
            inputDomain: {
                required: true,
                minlength: 5,
            },
            inpuUsername: {
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
                required: "Vui lòng nhập tên Record",
                minlength: "Tối thiểu 5 kí tự",
            },
            inpuUsername: {
                required: "Vui lòng nhập giá trị Record",
                minlength: "Tối thiểu 5 kí tự"
            },
            inputPassword: {
                required: "Vui lòng nhập giá trị Record",
                minlength: "Tối thiểu 5 kí tự"
            }
        }
    });

    $("#sltTypeRecord").on("change", function () {
        $("#inputValueRecord").val("");
        $("#txtTypeRecord").val($("#sltTypeRecord option:selected").text());
        if ($("#sltTypeRecord option:selected").text() == "A") {
            $("#inputValueRecord").inputmask({
                alias: "ip",
                greedy: false,
                onincomplete: function () {
                    valuerecordcheck = false
                },
                oncomplete: function () {
                    valuerecordcheck = true
                }
            });
        }
        else if ($("#sltTypeRecord option:selected").text() == "AAAA") {
            $("#inputValueRecord").inputmask({
                alias: "ip",
                greedy: false,
                onincomplete: function () {
                    valuerecordcheck = false
                },
                oncomplete: function () {
                    valuerecordcheck = true
                }
            });
        }
        else if ($("#sltTypeRecord option:selected").text() == "CNAME") {
            $("#inputValueRecord").inputmask({
                mask: "*{1,}.a{1,}",
                greedy: false,
                onincomplete: function () {
                    valuerecordcheck = false
                },
                oncomplete: function () {
                    valuerecordcheck = true
                }
            });
        }
        else if ($("#sltTypeRecord option:selected").text() == "MX") {
            $("#inputValueRecord").inputmask({
                mask: "*{1,}.a{1,}",
                greedy: false,
                onincomplete: function () {
                    valuerecordcheck = false
                },
                oncomplete: function () {
                    valuerecordcheck = true
                }
            });
        }
        else if ($("#sltTypeRecord option:selected").text() == "NS") {
            $("#inputValueRecord").inputmask({
                mask: "*{1,}.a{1,}",
                greedy: false,
                onincomplete: function () {
                    valuerecordcheck = false
                },
                oncomplete: function () {
                    valuerecordcheck = true
                }
            });
        }
        else {
            $("#inputValueRecord").inputmask({
                mask: "",
                onincomplete: function () {
                    valuerecordcheck = false
                },
                oncomplete: function () {
                    valuerecordcheck = true
                }
            });
        }
        checkvalidForm();
    })
    $("#sltTypeRecord select").text("A").change();

    $("input").on("change", function () {
        console.log(valuerecordcheck);
        checkvalidForm();
    })

    $(".editbtn").on("click", function () {
        valuerecordcheck = true;
        $("#btnupdateDNS").show();
        $("#btnaddDNS").hide();
        $("#txtIdRecord").val($(this).closest('tr').find(".idRecord").text());
        $("#inputNameRecord").val($(this).closest('tr').find(".nameRecord").text());
        var typeSelectText = $(this).closest('tr').find(".typeRecord").text();
        $("#sltTypeRecord").val(typeSelectText).change();
        $("#inputValueRecord").val($(this).closest('tr').find(".valueRecord").text());
        $("#inputTTL").val($(this).closest('tr').find(".ttlRecord").text());
        checkvalidForm();
    })

    function checkvalidForm() {
        if ($("#dnsForm").valid() && valuerecordcheck == true) {
            $('#btnaddDNS').prop('disabled', false)
            $('#btnupdateDNS').prop('disabled', false)
        } else {
            $('#btnaddDNS').prop('disabled', true);
            $('#btnupdateDNS').prop('disabled', true);
        }
    }

    $(".deleteDNS").on("click", function(){
        var idRecord = $(this).closest('tr').find(".idRecord").text()
        const baseUrl = 'dnsproject';
        window.location.href=`${window.location.origin}/${baseUrl}?action=deleteRecord&idRecord=${idRecord}`;
        return;
    })
})

