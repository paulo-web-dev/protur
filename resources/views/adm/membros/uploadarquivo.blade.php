@extends('assets.adm.header')

@section('content')
 <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
           Cadastrar Membro
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-12 xxl:col-span-12 tab-content">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i data-feather="x" class="w-4 h-4"></i>
                    </button>
                </div>
            @endforeach
            <form action="{{ route('upload-csv') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Campo para o upload do arquivo CSV -->
                <div class="mt-5">
                    <label for="csv_file">Selecione um arquivo CSV:</label>
                    <input type="file" name="csv_file" id="csv_file" accept=".csv" required>
                </div>

                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Upload CSV</button>
                </div>
            </form>
        </div>
    </div>
@endsection
