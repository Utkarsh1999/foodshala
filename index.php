<?php
    include('./layouts/navbar.php');
?>

<main>
    <div class="jumbotron jumbotron-fluid">
        <div class="container container-fluid">
            <h1>Explore Delicious delcacies!!</h1>
        </div>
    </div>

    


    <!-- Menu Item Card Holder start -->
    <div class="container container-fluid row">
    <?php
        $fetch_all_fooditem_query = "select * from food_items";
        $res=mysqli_query($conn,$fetch_all_fooditem_query);
        while($foodItem = mysqli_fetch_assoc($res)){
    ?>
    
    <!-- card start -->
        <div class="container col-md-4 mt-2">
            <div class="card">
                <!-- <img src="./assets/img/restro.jpg" class="card-img-top" alt="..."> -->
                <div class="card-img-top" style="background-image: url('assets/img/<?=$foodItem['image'] ?>')"></div>
                <div class="card-body">
                    <h4 class="text-capitalize"><?=$foodItem['name'] ?> | Veg/Non-Veg</h4>
                    <?php
                     $fetch_restroname_using_rid = "select * from restaurant where rid=".$foodItem['rid'];
                     $restroRes=mysqli_query($conn,$fetch_restroname_using_rid);
                     $restroName=mysqli_fetch_assoc($restroRes);
                    ?>
                    <small><?=$restroName['name'] ?></small>
                        <p class="card-text text-small">Rs. 200/-</p>
                        <ul class="list-group list-group-flush">
                            <!-- <li class="list-group-item">Rs. 200/-</li> -->
                            <li class="list-group-item"><?=$restroName['name'] ?>, <?=$restroName['city'] ?></li>
                            <a href="" class="btn btn-danger" name="orderbtn" value=<?=$foodItem['iid'] ?> >Order Now</a>    
                        </ul>
                        
                </div>
            </div>
        </div>
        <!-- card end -->
        <?php
        }
    ?>
        

    </div>
    <!-- Menu Item Card Holder end -->
</main>

<?php
    include('./layouts/footer.php');
?>