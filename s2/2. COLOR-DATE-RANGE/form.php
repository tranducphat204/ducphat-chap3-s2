
<form action="process.php" method="POST">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="color" name="color" class="form-range">
        </div>
        <div class="col">
            <input type="range" name="number" class="form-range" max="100" min="1">
        </div>
    </div>
    <div class="mb-3">
        <input type="date" name="date" class="form-control">
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>