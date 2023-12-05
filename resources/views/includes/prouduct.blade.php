<h1 style="text-align: center">Products Table</h1>

@auth<button class="button button3"><a href="/newproduct">Add New Products</a></button>@endauth

<table>
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>

        @auth
        <th>Update</th>
        <th>Delete</th>
        @endauth
      </tr>
    </thead>

    <tbody>
        @foreach ( $data as $id =>$product )
      <tr>
        <td >{{ $product->name }}</td>
        <td >{{ $product->quantity }}</td>
        <td >{{ $product->price }}</td>
        @auth
        <td><button class="button button1"><a href="{{ route ('update.page',$product->id) }}">Update</button></td>
        <td><button class="button button2"><a href="{{ route ('delete.user',$product->id) }}">Delete</a></button></td>
        @endauth
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="paginate">
    {{ $data->links() }}
  </div>
  