<?php
    include '../component/sidebar.php';
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM movies WHERE id = '$id'");
    while($d = mysqli_fetch_array($query)){
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">

    <div class="body d-flex justify-content-between">
        <h4>EDIT LIST MOVIE</h4>
    </div>
    <hr>
        <table class="table">
            <div class="card-body">
            <form action="../process/editMovieProcess.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input class="form-control" id="name" name="name" value="<?php echo $d['name']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Genre</label>
                    <select class="form-select" aria-label="Default select example" name="genre" id="genre" value="<?php echo $d['genre']; ?>">
                        <option value="Acrion">Action</option>
                        <option value="Romance">Romance</option>
                        <option value="Horror">Horror</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Realese</label>
                    <input class="form-control" id="realese" name="realese" value="<?php echo $d['realese']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Season</label>
                    <input class="form-control" id="season" name="season" value="<?php echo $d['season']; ?>" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sypnopsis</label>
                    <input class="form-control" id="sypnopsis" name="sypnopsis" value="<?php echo $d['sypnopsis']; ?>">
                </div>
                </div>
                <div class="d-grid gap-2">
                            <button style="background-color: black;" type="submit" class="btn btn-primary" name="edit">Edit List Movie</button>
                </div>
            </div>
            </form>
            <?php
        }
        ?>
            </table>
            
        
    


