
     <!-- Modal -->
<div class="modal fade" id="delteModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Delete Item </h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                            <form wire:submit.prevent='submit'>
                            <div class="modal-body">
                                @if ($item && $item->hasFollowers())
                                    <p class="text-danger">This item cannot be deleted because it has followers.</p>
                                @else
                                    <p>Are you sure you want to delete this item?</p>
                                @endif
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary" @if ($item && $item->hasFollowers()) disabled @endif>Delete </button>
                            </div>
                            </form>
                            </div>
                        </div>

</div>

