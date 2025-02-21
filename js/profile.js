function profileLoad() {
    $.post("database/Profile.php",
            {userProfile: 'getUserDetails'},
            function (e) {
                $.each(e, function (index, table_row) {
                    //alert(table_row.image_path);
                    if (table_row.image_path == '') {

                    } else {
                        $("#profileimgLoad").attr("src", "database/upload/" + table_row.image_path);
                    }
                    $('#staticFullname').val(table_row.fullname);
                    $('#staticNIC').val(table_row.nic);
                    $('#staticDOB').val(table_row.dob);
                    $('#staticAddress1').val(table_row.address1);
                    $('#staticAddress2').val(table_row.address2);
                    $('#staticAddress3').val(table_row.address3);
                    $('#staticPosition').val(table_row.type);
                    $('#staticTelephoneno1').val(table_row.telephone_no);
                    $('#staticEmail').val(table_row.email);
                });
            }, "json");
}

///////////////////////////////profile load search by ID///////////////////////

function profileLoadSearch(searchID) {

    var selectbyID = $('#searchID').val();

    $.post("database/Profile.php",
            {userProfile: 'getUserDetailsbyID', key: selectbyID},
            function (e) {
                $.each(e, function (index, table_row) {
                    //alert(table_row.image_path);
                    if (table_row.image_path == '') {

                    } else {
                        $("#profileimgLoad").attr("src", "database/upload/" + table_row.image_path);
                    }
                    $('#staticFullname').val(table_row.fullname);
                    $('#staticNIC').val(table_row.nic);
                    $('#staticDOB').val(table_row.dob);
                    $('#staticAddress1').val(table_row.address1);
                    $('#staticAddress2').val(table_row.address2);
                    $('#staticAddress3').val(table_row.address3);
                    $('#staticPosition').val(table_row.type);
                    $('#staticTelephoneno1').val(table_row.telephone_no);
                    $('#staticEmail').val(table_row.email);
                });
            }, "json");
}

//////////////////////////////view image////////////////////////////////////
// get categorized images
function get_categorized_images() {
//alert("kk");
    var imageID = $('#searchImageID').val();
    var tableDatarow = '<tr>';
    var product_image = 'aa';
    $.post("database/imageuploaddb.php", {userProfile: 'select_images', key1: imageID}, function (tableData) {


        $.each(tableData, function (index, tblValue) {

            tableDatarow += "<td><img  src='database/upload/" + tblValue.image_path +
                    "' class='img-thumbnail ' ></td>";

            if (((index + 1) % 3) === 0) {

                tableDatarow += "</tr><tr>";
            }

        });

        tableDatarow += "</tr>";
        $('#tbl_profileimage').html('').append(tableDatarow);
//mouse hover
        $('.mouse_hover').mouseenter(function () {
            // alert($(this).val());
////##image modal start
//                    var p_img_details = $(this).val();
//                    $('#products_image_modal').modal('show');
//                    $('#products_image_modal').on('shown.bs.modal', function (e) {
////                alert("nn");
//
//                        //  begin  of load product detail to modal
//
//                        $.post("models/products_sql.php", {products: 'select_by_Id_image_modal', key1: p_img_details},
//                                function (Data) {
//                                    if (Data === undefined || Data.length === 0 || Data === null) {
//
//                                    } else {
//
//                                        $.each(Data, function (index, DataView) {  // #####$.each##### get data from there(db) to here and then view
//                                            $('#p_id').html('').append(DataView.product_id);
////                                $('#product_mod_type').val(DataView.product_type);
//                                            $('#p_name').html('').append(DataView.product_name);
////                                $('#product_mod_image').val(DataView.product_image);
//                                            $('#p_qty').html('').append(DataView.product_quantity);
////                                $('#product_mod_unit_price').val(DataView.product_unit_price);
//                                            $('#p_image').html('').append("<img class='img-fluid mx-auto d-block' src='images/" + DataView.product_image + "'>");
//                                            $('#details_more').html('').append("<a href = 'more_details_of_product.php?p_id=" + DataView.product_id + "' > VIEW MORE </a>");
//
//
//
//                                        });
//                                    }
//
//
//
//
//                                }, "json");
//
//
//
//                        //end  of load product detail to modal
//                    });
//
////##image modal end            
//

        });
    }, "json");

}


