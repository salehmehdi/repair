

$(document).ready(function () {
    var $searchInput = $(".js-searchInput");
    var $searchResults = $(".js-searchResults");

    var debounceTimeout;

    $searchInput.keyup(function () {
        clearTimeout(debounceTimeout); // Önceki gecikmeyi iptal et
        debounceTimeout = setTimeout(function () {
            var searchTerm = $searchInput.val().trim();

            if (searchTerm === "") {
                $searchResults.empty();
                return;
            }

            $.ajax({
                url: '/search/listing',  
                method: "GET",
                data: { searchTerm: searchTerm  },
                dataType: "json",
                success: function (response) {
                    var resultsHtml = "";
                    
                    $.each(response, function (index, product ) {
                       resultsHtml += "<li><a href='/product/show/" +product.id+ "'>" + product.title + "</a></li>";
                    });
                    $searchResults.html(resultsHtml);
                },
                error: function (xhr, status, error) {
                    console.error("Ajax error:", status, error);
                }
            });
        }, 300);
    });



    $(".small-img").click(function() {
        var smallimg = $(this).attr("src");
        var fullimg = $(".imagebox")[0];
        fullimg.src = smallimg;
        console.log(smallimg)

    });

    $(".add-to-cart").click(function() {
        var productId = $(this).data("product-id");
        
        $.ajax({
            url: "/cart/store/{productId}", 
            method: 'GET',
            data: { product_id:productId },
            dataType: 'json',
            success: function(response) {
                console.log(response.message); 
            },
            error: function(xhr, status, error) {
                console.error("AJAX Hatası:", status, error);
            }
        });
    });
    
    
    
    
});


