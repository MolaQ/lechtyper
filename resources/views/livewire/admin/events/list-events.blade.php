<div>
    <div class="row g-2 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">{{ __('Match events') }}</h2>
        </div>
    </div>

<div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-12 col-md-auto">
                <input wire:model.live.debounce.400ms="search" class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-12 col-md-auto d-flex">
                <button class="btn btn-primary me-4 my-2" type="button" data-bs-toggle="modal" data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-plus me-2"></span>{{__('Add new event')}}</button>
            </div>
</div>
          








    


    
    
    <div class="modal fade" id="addDealModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addDealModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-100 p-6">
          <div class="modal-header border-0 p-0 mb-2">
            <h3 class="mb-0">{{__('Match events')}}</h3>
            <button class="btn btn-sm btn-phoenix-secondary" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times text-danger"></span></button>
          </div>
          <div class="modal-body px-0">
            <div class="row g-4">
              <div class="col-lg-12">
                <div class="mb-4">
                  <label class="text-1000 fw-bold mb-2">{{__('Home team')}}
                    <button class="btn btn-link p-0 ms-3"><span class="fa-solid fa-plus me-1"></span><span>Add new</span></button>
                  </label>
                  <select class="form-select">
                    <option>Select</option>
                    <option>Buy One Get One Free</option>
                    <option>Clearance sale</option>
                    <option>Bundle deals</option>
                    <option>Free shipping</option>
                    <option>Loyalty programs</option>
                    <option>Limited-time offers</option>
                    <option>Refer-a-friend discounts</option>
                    <option>Seasonal sales</option>
                    <option>Membership discounts</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="text-1000 fw-bold mb-2">{{__('Away team')}}
                    <button class="btn btn-link p-0 ms-3"><span class="fa-solid fa-plus me-1"></span><span>Add new</span></button>
                  </label>
                  <select class="form-select">
                    <option>Select</option>
                    <option>Financial</option>
                    <option>Marketplace</option>
                    <option>Travel</option>
                    <option>E-commerce</option>
                    <option>Cloud Computing</option>
                  </select>
                </div>

                <div>
                  <div class="row g-3">
                    <div class="col-6">
                      <label class="text-1000 fw-bold mb-2">{{__('Home')}}</label>
                        <input class="form-control" type="text" placeholder="{{__('Home score')}}" />
                    </div>
                    <div class="col-6">
                      <label class="text-1000 fw-bold mb-2">{{__('Away')}}</label>
                        <input class="form-control" type="text" placeholder="{{__('Away score')}}" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer border-0 pt-6 px-0 pb-0">
            <button class="btn btn-link text-danger px-3 my-0" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            <button class="btn btn-primary my-0">Create Deal</button>
          </div>
        </div>
      </div>
    </div>

    
    <div wire:ignore>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Livewire.on('openAddModal', function () {
                // Tutaj możesz wywołać kod, który otwiera modal
                // Możesz użyć jQuery lub JavaScript do pokazania modala
                $('#addDealModal').modal('show');
            });
        });
    </script>
</div>
</div>
