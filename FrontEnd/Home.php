<!DOCTYPE html>
<html>
    <head>
        <title>
            EComDemo
        </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
        
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        
           

      
    </head>
    <body >
         <!-- Header area -->
        <section>
            <div style="display:flex; padding:10px; background:#5DBB63">
                <h3>EComDemo</h3>
                <div style="display:flex; float:right">
                        <ul><a style="text-decoration:none" href="cart.php">Cart</a></ul>
                        <ul><a style="text-decoration:none" href="wishlist.php">Wishlist</a></ul>
                        <ul id="admin-name">username</ul>

                </div>
            </div>
            <section>
        <section id="banner">

        </section>

        <!-- Category Area -->
        <section style="margin:20px">
            <h3 >Shop by Category</h3>
            <div class="row" style="margin:20px" id="categories">
               
                
            </div>
        </section>  

        <section style="margin:200px">
        </section>
</body>
<script src="Controller/home.js"></script>

</html>