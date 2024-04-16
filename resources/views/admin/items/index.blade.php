
@extends('admin.master')

@section('title' ,'Items')
@section('items-active','active')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
          <h4 class="fw-bold py-3 mb-4 d-inline">البنود</h4>

                        <button
                          type="button"
                          class="btn btn-sm btn-primary mb-2 mx-4"
                          data-bs-toggle="modal"
                          data-bs-target="#createModal"
                        >
                          Add New
                        </button>

                      @livewire('admin.items.items-create')

        </div>

            <div class="card mb-4">
                @livewire('admin.items.items-data')

            </div>
            @livewire('admin.items.items-update')
            @livewire('admin.items.items-delete')
    </div>


@endsection
