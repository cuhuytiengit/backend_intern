<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

<script>
    function changePage1(page) {
        // lấy page size từ select
        $pageSize = $("#page_size").val();
        $.ajax({
            method: "GET",
            url: "http://localhost:8080/backend_intern/index.php/home/organics_products?page=" + page + "&&pageSize=" + $pageSize
            // data: { name: "John", location: "Boston" }
        })
        .done(function( data ) {
            $("#product-list-sale-page-1").html(data);
        });
    }
</script>