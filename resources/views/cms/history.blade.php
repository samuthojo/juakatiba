<div class="row">
    <p class="login-box-msg" style="font-size: large; color: #000000;">HISTORIA YA KATIBA</p>
    <div class="col-lg-12 col-xs-12">
        <button type="button" style="float: left;" class="btn btn-small btn-success" onclick="add_form('history')">ongeza historia</button>
        <table id="historyTable" class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">s/n. <span class="column-sorter"></span></th>
                <th scope="col">Title <span class="column-sorter"></span></th>
                <th scope="col">Year <span class="column-sorter"></span></th>
                <th scope="col">Description <span class="column-sorter"></span></th>
                <th scope="col">Action<span class="column-sorter"></span></th>
            </tr>
            </thead>
            <tbody>

            @if(count($history)>0)

                @foreach($history as $details)
                   <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $details['title'] }} </td>
                    <td> {{ $details['date'] }} </td>
                    <td> {!! $details['description'] !!} </td>

                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-yellow" onclick="form_edit('history',{{ $details['id'] }})" style="border: none; background-color: #ffffff; color: darkred;"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-yellow" onclick="form_delete('history',{{ $details['id'] }})" style="border: none; background-color: #ffffff;"><i class="fa fa-trash"></i></button>
                        </div>
                    </td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>
    </div>

</div>
<script>
    $(document).ready(function () {
        $('#historyTable')
            .dataTable({
                iDisplayLength: 8,
                oLanguage: {
                    sSearch: 'search:',
                    sZeroRecords: 'No  results found ',
                    oPaginate: {
                        sNext: '<i class="fa fa-arrow-right"></i>',
                        sPrevious: '<i class="fa fa-arrow-left"></i>'
                    }
                },
                bLengthChange: false,
                sDom: "<'row-fluid' <'span4'l> <'span8'f> > rt <'row-fluid' <'span12'p> >"
            });
        $('#exampleDT_length select').select2({
            minimumResultsForSearch: 6,
            width: "off"
        });

    });
</script>
