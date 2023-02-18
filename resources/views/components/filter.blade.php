@props([
    'fields' => [],
    'toggle' => '',
    ])

    @php

        $fields = collect($attributes->get('fields', $fields));
        $total = count($fields);
        $col = 'col';
        if($total > 5){
        $col = (12 / $total);
        }

        $show = isset($_GET['search']) ? true : false;
        $show_toggle = $show ? 'collapse show' : 'collapse';

        $attributes = $attributes->class([
        'container',
        ])->merge([

        ]);
    @endphp

    <div {{ $attributes }}>
        <div class="{{ $show_toggle }}" id="{{ $toggle }}">

        @if($total > 4)
            @foreach($fields->chunk(4) as $chunk)
                <div class="row">
                    @foreach($chunk as $value)
                        <x-form-input prepend="{{ $value->name }}" :label=false col="{{ 12 / count($chunk) }}"
                            name="{{ $value->code }}" />
                    @endforeach
                </div>
            @endforeach
        @else
        <div class="row">
            @foreach($fields as $value)
                <x-form-input prepend="{{ $value->name }}" :label=false col="{{ 12 / count($fields) }}"
                    name="{{ $value->code }}" />
            @endforeach
        </div>
        @endif

        </div>

        <div class="row">
            <x-form-select col="6" name="filter" :label=false prepend="Pencarian"
                :options="$fields->pluck('name', 'code')" />
            <x-form-input col="6" placeholder="Pencarian..." :label=false icon="search" toggle="{{ $toggle }}" name="search" />
        </div>
    </div>
