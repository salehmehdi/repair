$(document).ready(function() {
    $("#searchInput").keyup(function() {
        var searchTerm = $(this).val(); 
        
        $.ajax({
           /* url: "{{ route('search') }}", */
            url: "/search/listing",
            method: "GET",
            data: { searchTerm: searchTerm },
            dataType: "json",
            success: function(response) {
                $("#searchResults").html(response); 
            }
        });
    });
});
