<x-app-layout>
    <x-slot name="header">
        <div class="fixed-top nav-shadow">
            <x-navigation />
        </div>
    </x-slot>
    <div class="container-fluid">
        <section class="mx-5 mt-5" id="featured-posts">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body px-5 py-5-">                        
                            <img src="{{ $post->image ?? asset('/assets/bg1.png') }}" class="img-fluid rounded-end" alt="..." style="height:380px">
                            <h2 class="card-title fw-bold">Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, libero ratione rem commodi dolores dignissimos natus accusantium consequuntur illum quasi aliquam alias consequatur velit magnam necessitatibus cumque voluptates facilis qui ducimus nobis optio deleniti itaque, rerum omnis? Nam eaque nobis reiciendis voluptates ea, est harum tenetur voluptatibus iste aspernatur dolorem ut aperiam quae at et adipisci itaque error optio exercitationem quisquam praesentium a ad sit! Neque deserunt provident velit illo nostrum explicabo, ipsum, obcaecati sint tempora iste unde quae praesentium vero suscipit. Reiciendis saepe itaque velit aut architecto minus eius fugit, corporis, sapiente incidunt delectus deserunt. Voluptas autem natus necessitatibus.</p>
                            <a href="/detail" class="text-dark"><h3>Read More</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <h2 class="fw-bold">See More Article :</h2>
                    </div>
                    <div class="row">
                        <div class="card" style="width: 100%;">                
                            <img src="{{ $post->image ?? asset('/assets/bg1.png') }}" class="img-fluid rounded-end" alt="..." style="height:280px">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="fw-bold"><b>Title</b></h1>
                                    </div>
                                    <div class="col mt-3 ms-4">
                                        <a href="/detail" class="text-dark"><h3>Read More</h3></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card" style="width: 100%;">                
                            <img src="{{ $post->image ?? asset('/assets/bg1.png') }}" class="img-fluid rounded-end" alt="..." style="height:280px">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="fw-bold"><b>Title</b></h1>
                                    </div>
                                    <div class="col mt-3 ms-4">
                                        <a href="detail" class="text-dark"><h3>Read More</h3></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- <section class="mx-5 mt-5" id="featured-posts">
        <div class="row g-0">
            <div class="col-3">
                <h3><b>For your further reading</b></h3>
            </div>
            <div class="col-9 ps-4">
                <hr id='hr-landing'>
            </div>
        </div>
        <div class="row row-cols-3 mt-2 gx-5 gy-2 bg-body-tertiary">
        @foreach($furtherPosts as $post)
            <div class="col-4">
                <x-further-reading-card :post='$post' />
            </div>
        @endforeach
        </div>
    </section> -->
</x-app-layout>