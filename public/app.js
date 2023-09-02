

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

    

    //----İmage Slider----//
    $(".small-img").click(function() {
        var smallimg = $(this).attr("src");
        var fullimg = $(".imagebox")[0];
        fullimg.src = smallimg;
        console.log(smallimg)

    });


    //---Adding the Product to the Basket--//

    $(".add-to-cart").click(function() {
        var productId = $(this).data("product-id");
        var quantity =$("#quantity").val();
        $.ajax({
            url: "/cart/store/"+productId, 
            method: 'GET',
            data: { product_id:productId ,
                    quantity:quantity
            },
            dataType: 'json',
            success: function(response) {
               if(response.success){
                alert(response.message)
               }else{
                alert("Ürün Sepete Eklenmedi")
               }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Hatası:", status, error);
            }
        });
    });
    
   
    
});


