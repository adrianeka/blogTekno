<table class="mt-4 table table-rounded fs-5" style="width: 94%;">
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-start">
                        <img src="{{ $post->image ?? asset('/assets/bg1.png') }}" class="img-fluid rounded-end" alt="..." style="height: 100px; width: 100px">
                        <div class="ms-3">
                            <span>{{ $post->title ?? "Title's post belongs here" }}</span>
                            <br>
                            <small>Published 11 August 2023</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <input type="image" src="{{ asset('assets/trash.svg') }}" class="btn-primary mx-1 control-buttons" />
                        <input type="image" src="{{ asset('assets/view.svg') }}" class="btn-primary mx-2 control-buttons" />
                        <input type="image" src="{{ asset('assets/setting.svg') }}" class="btn-primary mx-1 control-buttons" />
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
