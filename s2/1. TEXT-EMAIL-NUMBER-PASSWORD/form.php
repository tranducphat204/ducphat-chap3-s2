<form action="process.php" method="POST">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Enter Name">
        </div>
        <div class="col">
            <input type="number" name="number" class="form-control" placeholder="Enter number">
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="email" name="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="col">
            <input type="password" name="password" class="form-control" placeholder="Enter password">
        </div>
    </div>
    <div class="mb-3">
        <textarea placeholder="Enter message" name="message" class="form-control"></textarea>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>