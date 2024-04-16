<div>
    <div class="table-responsive text-nowrap">

        <div class="mb-3">
            <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
        </div>

            @if(count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>الكود</th>
                        <th>البند التابع له</th>
                        <th>طريقة احتسابة في القائمة المجمعه</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach ($data as $record )
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$record->name}}</strong></td>
                        <td>{{$record->code}}</td> 
                        <td>{{ optional($record->following)->name }}</td>
                        <td>{{$record->calc_fl}}</td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {{$data->links()}}
            @else
            <span class="text-danger" > NO RESULTS FOUND </span>
            @endif

    </div>
</div>
