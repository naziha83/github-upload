<div id="accordion-default">
    <div class="card border-top-grey-300 border-top-2">
        <div class="card-header bg-white header-elements-inline" >
            <p class="card-title font-weight-semibold text-uppercase text-grey-600"><b>Kronologi Permohonan </b></p>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse" href="#accordion-kronologi"></a>
                </div>
            </div>
        </div>
        <div id="accordion-kronologi" class="collapse" data-parent="#accordion-default">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 15%">Tarikh</th>
                                <th style="width: 35%">Nama</th>
                                <th style="width: 45%">Catatan</th>
                                <th style="width: 5%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kjbStatusTindakan as $item)
                                <tr>
                                    {{-- <td>{{ $item->created_at->formatLocalized('%d %B %Y') }}</td> --}}
                                    <td>{{ $item->created_at->isoFormat('D MMMM YYYY') }}</td>
                                    <td><b>{{ $item->user->name }}</b><br>({{ $item->user->getRoleNames()->first() }}) </td>
                                    <td>
                                        <b class="text-uppercase">{{ $item->statusPermohonan->keterangan }}</b>
                                        <br><p style="white-space: pre-wrap;">{{ $item->catatan }}</p>
                                    </td>
                                    @if ($loop->last)
                                        <td><div class="list-icons text-teal-800"><i class="icon-pushpin" data-popup="tooltip" title="Status Semasa"></i></div></td>
                                    @else
                                        <td></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
