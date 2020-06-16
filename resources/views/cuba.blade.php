<h1>Hello</h1>

@foreach ($keretaVariasi as $i => $item)
    {{ $i+1 . ' [ID:' . $item->id . '] - ' . $item->keretaModel->keretaBuatan->buatan . ' ' . $item->keretaModel->model . ' ( ' . $item->keretaTransmisi->transmisi . ' / ' . $item->keretaWarna->warna . ' - ' . $item->keretaCat->cat . ' ) ' }}
    <br>
@endforeach
