<?php
require("required_page.php");
$page = "publicbot"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="./table/assets/img/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Fresh Bootstrap Table by Creative Tim</title>

    <meta
            content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
            name="viewport"
    />

    <!-- my css  -->
    <link rel="stylesheet" href="./css/main.css" />

    <!-- font awesome  -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />

    <!-- Start Table Meterial  -->
    <!-- Canonical SEO -->
    <link
            rel="canonical"
            href="https://www.creative-tim.com/product/fresh-bootstrap-table"
    />



    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
            href="./table/assets/css/fresh-bootstrap-table.css"
            rel="stylesheet"
    />



    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>
</head>
<body>
<!-- navbar  -->
<?php require_once('components/Navbar.php') ?>

<div class="Wrapper">
    <!-- Side Menu  -->
    <?php require_once("components/SideMenu.php"); ?>

    <div class="RightSide">
        <h1 class="my-3 Pl_20 h3">Available Bots For You</h1>

        <div class="WrapperTables" >
            <div class="fresh-table full-color-azure PosRel NewBgTable">
                <i class="fa-solid fa-circle-info InfoIcon" id="InfoIcon"></i>
              <div class="WhiteAreaTable CloseWhiteArea" id="WhiteAreaTable"><span id="TextInfoTable" >Hello, me , you , sep , trump </span><i class="fa-solid fa-xmark CloseWhiteTable" id="CloseWhiteTable"></i></div>
              
                <!--
                  Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
                  Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
                -->

                <table id="fresh-table" class="table">
                    <thead>
                    <th data-field="id">ID</th>
                    <th data-field="name" data-sortable="true">Bot Name</th>
                    <th data-field="name" data-sortable="true">Language</th>
                    <th data-field="salary" data-sortable="true">Access</th>
                    <th data-field="country" data-sortable="true">Keywords  </th>
                    <th
                            data-field="actions"
                            data-formatter="operateFormatter"
                            data-events="operateEvents"
                    >
                        Actions
                    </th>
                    </thead>
                    <tbody>
                    <?php
                    foreach (selectQuery_fc_bots("access='public'") as $bot){
                        ?>
                        <tr>
                            <td><?= $bot['id'] ?></td>
                            <td><?= $bot['bot_name'] ?></td>
                            <td><?= $bot['lang'] ?></td>
                            <td><?= $bot['access'] ?> </td>
                            <td><?= $bot['tags'] ?> <button class="MoreBtn" onclick="OpenWhiteArea()">More</button></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</body>
<script type="text/javascript">
    var $table = $("#fresh-table");

    window.operateEvents = {
        "click .like": function (e, value, row, index) {
            alert("You click like icon, row: " + JSON.stringify(row));
            console.log(value, row, index);
        },
        "click .edit": function (e, value, row, index) {
            alert("You click edit icon, row: " + JSON.stringify(row));
            console.log(value, row, index);
        },
        "click .remove": function (e, value, row, index) {
            $table.bootstrapTable("remove", {
                field: "id",
                values: [row.id],
            });
        },
    };

    function operateFormatter(value, row, index) {
        return [
            '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
            '<i class="fa fa-heart"></i>',
            "</a>",
            '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
            '<i class="fa fa-edit"></i>',
            "</a>",
            '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
            '<i class="fa fa-remove"></i>',
            "</a>",
        ].join("");
    }

    $(function () {
        $table.bootstrapTable({
            classes: "table table-hover table-striped",
            toolbar: ".toolbar",

            search: true,
            showRefresh: true,
            showToggle: true,
            showColumns: true,
            pagination: true,
            striped: true,
            sortable: true,
            pageSize: 8,
            pageList: [8, 10, 25, 50, 100],

            formatShowingRows: function (pageFrom, pageTo, totalRows) {
                return "";
            },
            formatRecordsPerPage: function (pageNumber) {
                return pageNumber + " rows visible";
            },
        });
    });


</script>

<script>
    (function (i, s, o, g, r, a, m) {
        i["GoogleAnalyticsObject"] = r;
        (i[r] =
            i[r] ||
            function () {
                (i[r].q = i[r].q || []).push(arguments);
            }),
            (i[r].l = 1 * new Date());
        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
    })(
        window,
        document,
        "script",
        "//www.google-analytics.com/analytics.js",
        "ga"
    );

    ga("create", "UA-46172202-1", "auto");
    ga("send", "pageview");
</script>
<!-- js  -->
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
></script>
<script src="./js/side.js"></script>
<script src="./js/PublicBot.js"></script>

</html>
