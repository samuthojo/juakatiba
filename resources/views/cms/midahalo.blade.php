<div class="row">
    <p class="login-box-msg" style="font-size: large; color: #000000;">MIDAHALO</p>
    <div class="col-lg-12 col-xs-12">
        <button type="button" style="float: left;" class="btn btn-small btn-success" onclick="add_form('midahalo')">ongeza mdahalo</button>
        <table id="midahaloTable" class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">s/n. <span class="column-sorter"></span></th>
                <th scope="col">Lugha <span class="column-sorter"></span></th>
                <th scope="col">Date <span class="column-sorter"></span></th>
                <th scope="col">Action<span class="column-sorter"></span></th>
            </tr>
            </thead>
            <tbody>

            @if(count($midahalo)>0)

                @foreach($midahalo as $details)
                  @php
                    $id = $details['id'];
                  @endphp
                    <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $details['type'] }}</td>
                    <td> {{ $details['date'] }}</td>

                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-yellow" onclick="form_edit('midahalo',{{ $details['id'] }})" style="border: none; background-color: #ffffff; color: darkred;"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-yellow" onclick="form_delete('midahalo',{{ $details['id'] }})" style="border: none; background-color: #ffffff;"><i class="fa fa-trash"></i></button>
                            <button type="button" class="btn btn-yellow" onclick="view_midahalo_details({{ $details['id'] }})" style="border: none; background-color: #ffffff;">view more</i></button>
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
        $('#midahaloTable')
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
