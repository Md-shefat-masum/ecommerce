<div class="custom-control custom-checkbox d-inline">
    <input type="checkbox" class="delete-checkbox custom-control-input" id="horizontalCheckbox{{$action->id}}" value="{{ $action->id }}">
    <label class="custom-control-label" for="horizontalCheckbox{{$action->id}}"></label>
</div>
@if($view ?? true)
<a href="{{ route('admin.' . $route . '.show', $action->id) }}"><i class="far fa-eye text-info mr-1 mt-1 font-16"></i></a>
@endif
@if($edit ?? true)
<a href="{{ route('admin.' . $route . '.edit', $action->id) }}"><i class="far fa-edit text-info mr-1 mt-1 font-16"></i></a>
@endif
@if($delete ?? true)
<a href="#" data-url="{{ route('admin.' . Str::singular($route) . '.destroy') }}" data-id="{{ $action->id }}" class="btn-delete"><i class="far fa-trash-alt text-danger mt-1 font-16"></i></a>
@endif
@if($image ?? false)
<a href="#" data-src="{{ asset($action->path()) }}" data-id="{{ $action->id }}" class="select-image"><i class="mdi mdi-checkbox-marked-outline font-18 ml-1"></i></a>
@endif