<x-app-layout>
  <x-slot name="header">
    <div class="fixed-top">
      <x-navigation />
    </div>
  </x-slot>

  <section>
    <div class="row d-flex justify-content-center mx-4 mt-5">
        <div class="fw-bold col-3">
            <h1 class="fw-bold mb-0"><b>Dashboard</b></h1>
    </div>
  </section>
  <div class="card">
    <div class="card-body">
        <section>
            <div class='row justify-content-center mx-4 mt-5'>
                <div class='col-4'>
                    <x-search-box />
                </div>
                <div class='col-5'>
                    <hr class="mt-3 mb-4">
                </div>
                <div class='col-2 mt-2'>
                    <button class="btn btn-outline-dark" data-toggle="modal" data-target="#createModal">Create</button>
                </div>
            </div>
            <section class="d-flex justify-content-center mx-5">
                <x-dashboard-table :posts='$posts' />
            </section>
        </section>
    </div>
  </div>
</x-app-layout>