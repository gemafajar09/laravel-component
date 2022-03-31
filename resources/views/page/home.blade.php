<x-app-layout title="Home" judul="Home">
    <x-custom.card>
        <x-slot name="title">
            Data Peserta
        </x-slot>
        <x-slot name="button">
            <x-custom.button class="primary" type="button" nama="Tambah Data"></x-custom.button>
        </x-slot>
        <x-custom.table :header="['No','Nama','Alamat','Aksi']">
            <tr>
                <td>1</td>
                <td>Gema</td>
                <td>Padang</td>
                <td></td>
            </tr>
        </x-custom.table>

    </x-custom.card>
</x-app-layout>
