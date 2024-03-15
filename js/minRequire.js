const baseurl = $("base").attr("href");

$(document).ready(function () {
    $(".IKalert").show();
    setTimeout(function () {
        $('#loading').hide();
    }, 700);
    setTimeout(function () {
        $(".IKalert").css("right", "10px");
        $(".IKalert").css("bottom", "30px");
        setTimeout(function () {
            $(".IKalert").css("right", "-300px");
            $(".IKalert").css("bottom", "-300px");
            setTimeout(function () {
                $(".IKalert").hide();
            }, 400)
        }, 2000);
    }, 300);
    $(".goLink").click(function(){
        var goLink = $(this).attr("name");
        window.location.href = goLink;
    });
    $(".goInLink").click(function(){
        var goLink = $(this).attr("name");
        window.location.href = baseurl + "/" + goLink;
    });
    $(".goInDeleteComplete").click(function(){
        var text = `
        Sayın kullanıcı, yapacağınız işlemin bir geri dönüşü olmayacaktır.
            Yapacağınız işleme devam etmek istediğinize emin misiniz ?`;
        if (confirm(text) == true) {
            var incomingLink = $(this).attr("name");
            window.location.href = baseurl + "/" + incomingLink;
        }
    });
    $(".goButton").click(function(){
        var goLink = $(this).attr("href");
        window.location.href = goLink;
    })
});
function goInLinkFuc(node){
    var goLink = $(node).attr("name");
    window.location.href = baseurl + "/" + goLink;
}

/* Alert */

function alertShow(text){
    $(".IKalert").remove();
    var data = `
        <div class="bg-success text-light IKalert">
            ` + text + `
        </div>
    `;
    $("body").append(data);
    $(".IKalert").show();
    setTimeout(function () {
        $(".IKalert").css("right", "10px");
        $(".IKalert").css("bottom", "30px");
        setTimeout(function () {
            $(".IKalert").css("right", "-300px");
            $(".IKalert").css("bottom", "-300px");
            setTimeout(function () {
                $(".IKalert").hide();
            }, 400)
        }, 3000);
    }, 500);
}
function alertShowPlus(text, colorTextBS5){
    $(".IKalert").remove();
    var data = `
        <div class="bg-` + colorTextBS5 + ` text-light IKalert">
            ` + text + `
        </div>
    `;
    $("body").append(data);
    $(".IKalert").show();
    setTimeout(function () {
        $(".IKalert").css("right", "10px");
        $(".IKalert").css("bottom", "30px");
        setTimeout(function () {
            $(".IKalert").css("right", "-300px");
            $(".IKalert").css("bottom", "-300px");
            setTimeout(function () {
                $(".IKalert").hide();
            }, 400)
        }, 3000);
    }, 500);
}

/* Extra Button */

  

/* Copy Button */

function copied(node){
    var getText = $(node).parent().siblings(".card-text").text();
    $("i[class='fa-solid fa-clipboard']").attr("class", "fa-regular fa-clipboard");
    $(".copyClassText").text("Kopyala");
    $(node).children("i").attr("class","fa-solid fa-clipboard");
    $(node).children(".copyClassText").text("Kopyalandı");
    navigator.clipboard.writeText(getText);
}