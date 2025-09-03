<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .page-title {
            margin: 20px 0;
            font-weight: bold;
            text-align: center;
        }
        .table thead {
            background-color: #0d6efd;
            color: #fff;
        }
        .table tbody tr:hover {
            background-color: #f1f5ff;
        }
        .search-bar {
            max-width: 500px;
            margin: auto;
        }
        .action-btns a {
            margin-right: 8px;
        }
    </style>
</head>
<body>

<div class="container mt-4">

    <!-- Search Form -->
    <form method="GET" action="{{ url('/products') }}" class="mb-4">
        <div class="input-group search-bar">
            <input type="text" name="search" value="{{ request('search') }}"
                   class="form-control" placeholder="🔍 Search by name or code">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <!-- Create Button -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ url('/product/create') }}" class="btn btn-success">
            ➕ Create Product
        </a>
    </div>

    <!-- Title -->
    <h2 class="page-title">📦 Product List</h2>

    <!-- Table -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-striped table-hover text-center mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Quantity</th>
                        <th>Price (৳)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $mahfuz_product)
                        <tr>
                            <td>{{ $mahfuz_product->title }}</td>
                            <td>{{ $mahfuz_product->quantity }}</td>
                            <td>{{ number_format($mahfuz_product->price, 2) }}</td>
                            <td class="action-btns">
                                <a href="{{ url('products/edit/'.$mahfuz_product->id) }}" class="btn btn-sm btn-warning">
                                    ✏️ Edit
                                </a>
                                <a href="{{ url('products/delete/'.$mahfuz_product->id) }}"
                                   onclick="return confirm('Are you sure you want to delete this product?')"
                                   class="btn btn-sm btn-danger">
                                    🗑️ Delete
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-3 d-flex justify-content-center">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
