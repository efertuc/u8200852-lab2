<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer {{$customer_u->id}}</title>
</head>

<body>
    <div class="container mt-5">
        <table class="table table-bordered mb-4">
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Blocked?</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $customer_u->id }}</td>
                    <td>{{ $customer_u->name }}</td>
                    <td>{{ $customer_u->surname }}</td>
                    <td>{{ $customer_u->blocked }}</td>
                    <td>{{ $customer_u->phone }}</td>
                    <td>{{ $customer_u->email }}</td>
                    <td>{{ $customer_u->created_at }}</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered mb-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Street</th>
                    <th>House</th>
                    <th>Floor</th>
                    <th>Flat</th>
                    <th>Code</th>
                    <th>Added at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer_u->addressu as $address)
                <tr>
                    <td>{{ $address->id }}</td>
                    <td>{{ $address->name_usr }}</td>
                    <td>{{ $address->city }}</td>
                    <td>{{ $address->street}}</td>
                    <td>{{ $address->house}}</td>
                    <td>{{ $address->floor }}</td>
                    <td>{{ $address->flat }}</td>
                    <td>{{ $address->intercom_code }}</td>
                    <td>{{ $address->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
    </div>
</body>

</html>