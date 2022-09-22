<?php
    include '../component/sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">

    <div class="body d-flex justify-content-between">
        <h4>ADD LIST MOVIE</h4>
    </div>
    <hr>
        <table class="table">
            <div class="card-body">
            <form action="../process/addMovieProcess.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Genre</label>
                    <select class="form-select" aria-label="Default select example" name="genre" id="genre">
                        <option value="Acrion">Action</option>
                        <option value="Romance">Romance</option>
                        <option value="Horror">Horror</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Realese</label>
                    <input class="form-control" id="realese" name="realese">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Season</label>
                    <input class="form-control" id="season" name="season">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sypnopsis</label>
                    <input class="form-control" id="sypnopsis" name="sypnopsis">
                </div>
                <div class="d-grid gap-2">
                            <button style="background-color: black;" type="submit" class="btn btn-primary" name="add">Add List Movie</button>
                </div>
            </div>

        </table>
    


