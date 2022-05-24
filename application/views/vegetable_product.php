<script>
    function changePage(page)
 {
        $.ajax({
            method: "GET",
            url: "http://localhost:8080/backend_intern/index.php/home/products?page=" + page
            // data: { name: "John", location: "Boston" }
        })
        .done(function( data ) {
            $("#product-list-sale-page-1").html(data);
        });
    }
</script>

