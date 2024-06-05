<?php 
    require "./layout/header.php";
    require "./controllers/contact.php";
?>
    <h1>Contact</h1>
    <!--div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-12 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus earum corporis odit cupiditate suscipit, pariatur vel magni non reiciendis, harum odio saepe. Mollitia temporibus quos itaque totam alias quibusdam vitae.</div>
            </div>
            <div class="row">
                <div class="col-12 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda sequi dolore, autem, totam quidem vitae magnam beatae, facilis error eveniet dolor. Quis vel rerum vitae nostrum vero quam ducimus hic.</div>
            </div>
        </div>
        <div class="col-6">
        <div class="row">
                <div class="col-12 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic maxime qui odit, at explicabo autem maiores amet quibusdam unde labore, fugiat quasi recusandae impedit mollitia laboriosam. Odio minima ratione fugit.</div>
            </div>
            <div class="row">
                <div class="col-12 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic maxime qui odit, at explicabo autem maiores amet quibusdam unde labore, fugiat quasi recusandae impedit mollitia laboriosam. Odio minima ratione fugit.</div>
            </div>
        </div>
        <div class="col-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic maxime qui odit, at explicabo autem maiores amet quibusdam unde labore, fugiat quasi recusandae impedit mollitia laboriosam. Odio minima ratione fugit.</div>
    </div-->

    <form action="./controllers/contact.php" method="POST">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <label for="name">Name</label>
                        <input type="text"name="name" class="form-control">
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-6">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-12">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control"></textarea>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Send</button>
                        <button type="reset" class="btn btn-danger">clean</button>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </form>
<?php
    require "./layout/footer.php";
?>