<!-- Modal -->
@foreach($inventories as $inventory)
<div class="modal fade" id="view-{{$inventory->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Product Information</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Product Name: </h3> <p>{{$inventory->name}}</p>
                <h3>Description: </h3> <p>{{$inventory->description}}</p>
                <h3>Brand: </h3> <p>{{$inventory->brand}}</p>
                <h3>SKU: </h3> <p>{{$inventory->sku}}</p>
                <h3>Category: </h3> <p>{{$inventory->category}}</p>
                <h3>Unit Cost: </h3> <p>{{$inventory->unit_cost}}</p>
                <h3>Mark Up: </h3> <p>{{$inventory->mark_up}}</p>
                <h3>Sale Price: </h3> <p>{{$inventory->sale_price}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endforeach