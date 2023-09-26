<div>
        <div class="mb-9">
          <div class="row g-2 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Customers</h2>
            </div>
          </div>

            <div class="table-responsive">
                <table class="table table-sm mb-0">
                  <thead>
                    <tr>
                      <th class="sort align-middle pe-5" scope="col" data-sort="customer" style="width:10%;">{{ __('user name') }}</th>
                      <th class="sort align-middle pe-5" scope="col" data-sort="email" style="width:20%;">{{ __('screen name') }}</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="total-orders" style="width:10%">ORDERS</th>
                      <th class="sort align-middle text-end ps-3" scope="col" data-sort="total-spent" style="width:10%">TOTAL SPENT</th>
                      <th class="sort align-middle ps-7" scope="col" data-sort="city" style="width:25%;">CITY</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="last-seen" style="width:15%;">LAST SEEN</th>
                      <th class="sort align-middle text-end pe-0" scope="col" data-sort="last-order" style="width:10%;min-width: 150px;">LAST ORDER</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../../../apps/e-commerce/landing/profile.html">
                            <div class="avatar avatar-m"><img class="rounded-circle" src="{{ $user->profile_image_url }}" alt="{{ $user->name }}" />
                            </div>
                            <p class="mb-0 ms-3 text-1100 fw-bold">{{ $user->name }}</p>
                          </a></td>
                        <td class="email align-middle white-space-nowrap pe-5">{{ $user->screen_name }}</td>
                        <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">89</td>
                        <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 23987</td>
                        <td class="city align-middle white-space-nowrap text-1000 ps-7">Budapest</td>
                        <td class="last-seen align-middle white-space-nowrap text-700 text-end">{{ $user->created_at->diffForHumans() }}</td>
                        <td class="last-order align-middle white-space-nowrap text-700 text-end">{{ $user->updated_at->diffForHumans() }}</td>
                      </tr>
                    @endforeach


                  </tbody>
                </table>


        </div>

</div>
