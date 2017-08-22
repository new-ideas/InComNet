@include('store.category.sub_category_common')
<script>
    $('#page_num').on('click', 'a', function () {
        var url = $(this).attr('href');
        $('#view-data').load(url);
        return false;
    });
    $('.view-cat-table').dataTable({
        paginate: false,
        info: false,
        sort: false
    });
</script>