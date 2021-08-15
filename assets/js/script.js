$(document).ready(function() {

    $(".result").on("click", function() {

        var url = $(this).attr("href");
        var id = $(this).attr("data-linkId");

        if (!id) {
            alert("data-linkId attribute not found");
        }

        increaseLinkClicks(id, url);

        return false;
    });

});

function increaseLinkClicks(linkId, url) {

    $.post("ajax/updateLinkCount.php", { linkId: linkId })
        .done(function(result) {
            if (result != "") {
                alert(result);
                return;
            }
            window.location.href = url;
        });

}