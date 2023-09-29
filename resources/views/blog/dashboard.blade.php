<x-app-layout>
  <x-slot name="header">
    <div class="fixed-top">
      <x-navigation />
    </div>
  </x-slot>

  <section>
    <div class="row d-flex justify-content-center mx-4 mt-5">
        <div class="fw-bold col-3">
            <h1 class="fw-bold mb-0">Your <br>dashboard </h1>
            <p>Let's see how far you made it.</p>
            <input type="image" src="{{ asset('/assets/archived-button.svg') }}" class="btn-primary mb-1 ms-auto" alt=""  />
            <input type="image" src="{{ asset('/assets/create-button.svg') }}" class="btn-primary mb-1 ms-auto" alt="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" />
        </div>
        <div class="col-4">
            <x-dashboard-card :value="'1.231.312'">
                Total post you've created
            </x-dashboard-card>
        </div>
        <div class="col-4">
            <x-dashboard-card :value="'1.231.312'">
                Total post you've achieved
            </x-dashboard-card>
        </div>
    </div>
  </section>
  <section>
        <div class='row justify-content-center mx-4 mt-5'>
            <div class='col-4'>
                <x-search-box />
            </div>
            <div class='col-5'>
                <hr class="mt-3 mb-4">
            </div>
            <div class='col-2 mt-2'>
                <h5>
                    <b>All of your posts</b>
                </h5>
            </div>
        </div>
    </section>
    <section class="d-flex justify-content-center mx-5">
        <x-dashboard-table :postDatas='$postDatas' />
    </section>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">                
                <form method="POST" action="{{ route('postData') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <h2 class="fw-bold">Title</h2>
                            <input type="text" name="title" class="form-control" placeholder="The title belongs here">
                            <h2 class="fw-bold">Content</h2>
                            <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Lorem ipsum dolor sit amet"></textarea>
                            <h2 class="">Image</h2>
                            <img src="" alt="" id="imageDisplay" width="auto" height="140px">
                            <input type="file" name="image" class="form-control-file" id="imageInput" onchange="loadimgae(event)">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
