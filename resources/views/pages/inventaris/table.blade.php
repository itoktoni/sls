<x-layout>

    <x-card>

        <x-form method="GET" action="{{ moduleRoute('getTable') }}">
            <x-filter toggle="Filter" :fields="$fields" />
        </x-form>

        <x-form method="POST" action="{{ moduleRoute('getTable') }}">

            <x-action>
                <x-button type="submit" label="Sort" name="sort" />
            </x-action>

            <div class="container">
                <div class="table-responsive" id="table_data">
                    <table class="table table-bordered table-striped overflow">
                        <thead>
                            <tr>
                                <th width="9" class="center">
                                    <input class="btn-check-d" type="checkbox">
                                </th>
                                <th class="text-center column-action">{{ __('Action') }}</th>
                                @foreach($fields as $value)
                                    <th {{ Template::extractColumn($value) }}>
                                        @if($value->sort)
                                            @sortablelink($value->code, __($value->name))
                                            @else
                                                {{ __($value->name) }}
                                            @endif
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $table)
                                <tr>
                                    <td>
                                        <input type="checkbox" class="checkbox" name="code[]"
                                            value="{{ $table->field_primary }}">
                                    </td>
                                    <td class="col-md-2 text-center column-action">
                                        <x-crud :model="$table" />
                                    </td>
                                    <td>{{ $table->field_code }}</td>
                                    <td>{{ $table->field_is_kalibrator }}</td>
                                    <td>{{ $table->field_is_asset }}</td>
                                    <td>{{ $table->has_type->field_name ?? '' }}</td>
                                    <td>{{ $table->has_brand->field_name ?? '' }}</td>
                                    <td>{{ $table->has_instansi->field_name ?? '' }}</td>
                                    <td>{{ $table->has_location->field_name ?? '' }}</td>
                                    <td>{{ $table->has_name->field_name ?? '' }}</td>
                                    <td>{{ $table->field_description }}</td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <x-pagination :data="$data" />
            </div>

        </x-form>

    </x-card>

</x-layout>