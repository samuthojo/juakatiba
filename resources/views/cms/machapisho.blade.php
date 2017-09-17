<div class="row">
    <p class="login-box-msg" style="font-size: large; color: #000000;">MACHAPISHO YA KATIBA</p>
    <div class="col-lg-12 col-xs-12">
        <button type="button" style="float: left;" class="btn btn-small btn-success" onclick="add_form('machapisho')">ongeza chapisho</button>
        <table id="chapishoTable" class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">s/n. <span class="column-sorter"></span></th>
                <th scope="col">Lugha <span class="column-sorter"></span></th>
                <th scope="col">Kichwa <span class="column-sorter"></span></th>
                <th scope="col">Mchapishaji <span class="column-sorter"></span></th>
                <th scope="col">Tarehe <span class="column-sorter"></span></th>
                <th scope="col">Action<span class="column-sorter"></span></th>
            </tr>
            </thead>
            <tbody>
            
            @if(count($machapisho)>0)

                @foreach($machapisho as $details)
                    @php
                      $pdf = $details['pdf'];
                      $id = $details['id'];
                    @endphp
                    <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $details['type'] }}</td>
                    <td> {{ $details['title'] }}</td>
                    <td> {{ $details['author'] }}</td>
                    <td> {{ $details['date'] }}</td>

                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-yellow" onclick="form_edit('machapisho',{{ $details['id'] }})" style="border: none; background-color: #ffffff; color: darkred;"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-yellow" onclick="form_delete('machapisho',{{ $details['id'] }})" style="border: none; background-color: #ffffff;"><i class="fa fa-trash"></i></button>
                            <a class="btn btn-yellow" href="{{ url('api/download_chapisho_pdf/'. $pdf) }}" style="border: none; background-color: #ffffff;">Download</a>
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
        $('#chapishoTable')
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
