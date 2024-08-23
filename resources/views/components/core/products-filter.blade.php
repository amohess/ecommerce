<div class="container my-0 mb-3">
    <div class="card" style="background-color: #e2e3e5;">
        <div class="card-body">
            <form action="" method="GET">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <b><label for="sort">Sort By:</label></b>
                            <select class="form-control" id="sort" name="sort">
                                <option>All</option>
                                <option value="title_asc">Title (A-Z)</option>
                                <option value="price_asc">Price - Low to High</option>
                                <option value="price_desc">Price - High to Low</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <b><label for="rating">Prices (Greater Than):</label></b>
                            <select class="form-control" id="rating" name="greater_than">
                                <option value="0">All</option>
                                <option value="300">Greater Than 300</option>
                                <option value="600">Greater Than 600</option>
                                <option value="1000">Greater Than 1000</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <b><label for="max_price">Prices (Lower Than):</label></b>
                            <select class="form-control" id="max_price" name="lower_than">
                                <option value="0">All</option>
                                <option value="300">Lower Than 300</option>
                                <option value="600">Lower Than 600</option>
                                <option value="1000">Lower Than 1000</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button class="btn btn-black">Apply</button>
                            <a href="{{ route('store.index') }}" class="btn btn-dark">Clear</a>

                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
