
$(document).ready(function() {
    $(".js-searchInput").keyup(function() {
        var searchTerm = $(this).val(); 
        
        $.ajax({
            url: '/search/listing',  
            method: "GET",
            data: { searchTerm: searchTerm  },
            dataType: "json",
            success: function(response) {
                var resultsHtml = ""; 
                
                $.each(response, function(index, product) {
                    resultsHtml += "<li>" + product.title + "</li>";
                });
                
                $(".js-searchResults").html(resultsHtml); 
            }
        });
    });
});




