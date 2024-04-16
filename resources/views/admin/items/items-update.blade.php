
     <!-- Modal -->
     <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Edit Item </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <form wire:submit.prevent='submit'>
                              <div class="modal-body">
                                <div class="row">
                                <div class="col-md-6 mb-0">
                                    <label  class="form-label">الاسم</label>
                                    <input type="text"  class="form-control" placeholder="Enter Name" wire:model='name' />
                                   @error('name')
                                  <span class="text-danger">{{$message}}</span>
                                   @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label  class="form-label">الكود</label>
                                    <input type="text" class="form-control" placeholder="Enter Name"  wire:model='code' />
                                          @error('code')
                                  <span class="text-danger">{{$message}}</span>
                                   @enderror
                                </div>
                                </div>

                                   <div class="row">

                                  <div class="col-md-6 mb-3">
                                      <label  class="form-label">البند التابع له</label>
                                            <select class="form-select"  wire:model='follow_item_id'>
                                                <option value="">اختر</option>
                                            @foreach($ids as $id => $name)
                                                    <option value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                            </select>
                                    {{-- <label  class="form-label">البند التابع له</label>
                                    <input type="text"  class="form-control" placeholder="Enter Name" wire:model='follow_item_id'/> --}}
                                      @error('follow_item_id')
                                  <span class="text-danger">{{$message}}</span>
                                   @enderror
                                  </div>


                                  <div class="col-md-6 mb-3">
                                    <label  class="form-label"> طريقة احتسابه</label>
                                    <input type="text"  class="form-control" placeholder="Enter Name" wire:model='calc_fl'/>
                                          @error('calc_fl')
                                  <span class="text-danger">{{$message}}</span>
                                   @enderror
                                  </div>
                                </div>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">Submit </button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>

