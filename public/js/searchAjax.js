
$(document).ready(function () {

    $('.search-box input[type="search"]').on("keyup input", function () {

        var inputVal = $(this).val();

        var resultDropdown = $(this).siblings(".result");

        if (inputVal.length) {

            $.get("SearchAjax.php", {
                term: inputVal
            }).done(function (data) {

                resultDropdown.html(data);

            });

        } else {

            resultDropdown.empty();

        }
    });

    $(document).on("click", ".result p", function () {

        $(this).parents(".search-box").find('input[type="search"]').val($(this).search());

        $(this).parent(".result").empty();

    });

});
