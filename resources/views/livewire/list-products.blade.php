<div >
    <div>
        <input type="text" wire:model.live.debounce.500ms="search"  placeholder="Search...">
        <!-- Debugging the search term -->
    <p>Current Search: {{ $search }}</p>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Piezas por caja</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td><input type="checkbox" value="{{ $product->id }}" wire:model="selectedProducts"></td>
                        <td>{{ $product->product_code2 }}</td>
                        <td>{{ $product->nameProduct }}</td>
                        <td>{{ $product->boxPieces }}</td>
                        <td>
                            @php
                                $onErrorImage = "https://massivehome.com.mx/productos-webp/".$product->Img;
                            @endphp
                            <img src="https://massivehome.com.mx/images/productos-webp/{{ $product->ImgWebp }}" alt="{{ $product->nameProduct }}" width="100" onerror="this.onerror=null;this.src='{{$onErrorImage}}';">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $products->links() }}
        </div>
    </div>

</div>
