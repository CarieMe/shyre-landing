
 
<x-livewire-tables::bs5.table.cell>
    {{ $row->name }}
</x-livewire-tables::bs5.table.cell>

<x-livewire-tables::bs5.table.cell>
    {{ $row->state->name }}
</x-livewire-tables::bs5.table.cell>

<x-livewire-tables::bs5.table.cell>
    <div class="justify-content-center d-flex">
    <a title="{{ __('messages.common.edit') }}"
       class="btn px-1 text-primary fs-3 city-edit-btn" data-id="{{$row->id}}">
        <i class="fa-solid fa-pen-to-square"></i>
    </a>
    <a href="javascript:void(0)" data-id="{{ $row->id }}" title="{{ __('messages.common.delete') }}"
       class="btn px-1 text-danger fs-3 city-delete-btn">
        <i class="fa-solid fa-trash"></i>
    </a>
    </div>
</x-livewire-tables::bs5.table.cell>
