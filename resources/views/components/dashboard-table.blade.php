<table class="mt-4 table thead-border table-rounded fs-5" style="width:94%;">
    <thead>
        <tr class="align-middle">
            <th width="58%" scope="col">Title</th>
            <th width="14%" scope="col">Total Visitor</th>
            <th width="14%" scope="col">Total Comment</th>
            <th width="14%" scope="col">Engagement Rate</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($postDatas as $postData)
        <tr>
            <td>
                <img src="{{ $postData->image }}" alt="{{ $postData->title }}"  onerror="this.style.display='none'">
                {{ $postData->title }}
                {{ $postData->image }}
            </td>
            <td>{{ $postData->visitors }}</td>
            <td>{{ $postData->comment }}</td>
            <td>{{ $postData->engagement }}</td>
        </tr>
        @endforeach

    </tbody>
</table>