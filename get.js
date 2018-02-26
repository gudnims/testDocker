/**
 * Created by Gudni on 26-02-2018.
 */
function getNews(){

    $.ajax({
        method: "GET",
        url: "data.php",
        dataType: "json",
        success: function (response) {
            console.log(response);
        }
    });
}