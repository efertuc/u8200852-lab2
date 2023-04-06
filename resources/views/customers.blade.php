<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customers data</title>
</head>

<body>
    <div class="container mt-5">
        <div>
            <p>
                Filters
            </p>
            <form action="/customers" method="get">
                <label>Blocked?</label>
                <input type="checkbox" name="blocked" />
                <label>Email part</label>
                <input type="text" name="email" />
                <label>Phone</label>
                <input type="text" name="phone" />
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
        <table class="table table-bordered mb-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>Blocked?</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->surname }}</td>
                    <td>{{ $customer->blocked }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $customers->links() }}
        </div>
    </div>
</body>

</html>