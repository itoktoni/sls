<x-layout>
    <x-card>
        <x-form :model="$model">
            <x-action form="form" />

            @bind($model)

            <x-form-input col="3" type="date" name="kalibrasi_tanggal_kalibrasi" />
            <x-form-select col="9" class="search" name="kalibrasi_id_inventaris" :options="$inventaris" />

            @endbind

        </x-form>
    </x-card>
</x-layout>
