@extends('admin.layout')

@section('title', 'Edit ' . $config['label'])

@section('content')
<div class="content-header">
  <div>
    <h1>{{ $config['label'] }}</h1>
    <p class="subtitle">Edit any text, picture or link below and press <strong>Save</strong>. Changes appear on the website immediately.</p>
  </div>
  <div style="display: flex; gap: 10px;">
    <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> All pages</a>
    <a href="{{ $config['url'] }}" target="_blank" class="btn btn-secondary"><i class="fas fa-external-link-alt"></i> View page</a>
  </div>
</div>

<form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data">
  @csrf

  @foreach($config['sections'] as $section => $def)
    <div class="card" id="section-{{ $section }}">
      <div class="card-title"><span>{{ $def['label'] }}</span></div>

      @if(!empty($def['note']))
        <p style="margin: 0 0 18px; opacity: .8;"><i class="fas fa-info-circle"></i> {{ $def['note'] }}</p>
      @endif

      <div class="form-row" style="flex-wrap: wrap;">
        @foreach($def['fields'] as $field => $f)
          @include('admin.pages._field', [
              'name' => "f[$section][$field]",
              'id' => "f-$section-$field",
              'f' => $f,
              'value' => $values["$section.$field"] ?? '',
              'resetName' => "reset[$section][$field]",
              'isOverridden' => isset($overridden["$page.$section.$field"]),
          ])
        @endforeach
      </div>

      {{-- repeating lists that belong to this section --}}
      @foreach(collect($config['lists'] ?? [])->filter(fn ($l) => $l['section'] === $section) as $listKey => $list)
        <div style="margin-top: 26px; border-top: 1px solid var(--border); padding-top: 18px;">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
            <strong>{{ $list['label'] }}</strong>
            <a href="{{ route('admin.pages.items.create', [$page, $listKey]) }}" class="btn btn-secondary btn-sm"><i class="fas fa-plus"></i> Add {{ $list['item_label'] }}</a>
          </div>
          @php $rows = $items[$listKey] ?? collect(); @endphp
          @if($rows->isEmpty())
            <p style="opacity: .7;">Nothing here yet.</p>
          @else
            <div class="table-responsive">
              <table>
                <thead><tr><th>#</th><th>{{ ucfirst($list['item_label']) }}</th><th>Status</th><th style="text-align: right;">Actions</th></tr></thead>
                <tbody>
                  @foreach($rows as $row)
                    <tr>
                      <td>{{ $row->sort_order }}</td>
                      <td><strong>{{ $row->data[$list['title_field']] ?? '—' }}</strong></td>
                      <td>@if($row->is_active)<span class="badge badge-read">Shown</span>@else<span class="badge badge-unread">Hidden</span>@endif</td>
                      <td>
                        <div class="actions-cell" style="justify-content: flex-end;">
                          <a href="{{ route('admin.pages.items.edit', [$page, $listKey, $row->id]) }}" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                          <button type="submit" form="del-{{ $row->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Remove this {{ $list['item_label'] }}?');"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          @endif
        </div>
      @endforeach
    </div>
  @endforeach

  <div style="position: sticky; bottom: 0; padding: 14px 0; display: flex; justify-content: flex-end;">
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save page</button>
  </div>
</form>

{{-- delete forms live outside the main form (HTML does not allow nested forms) --}}
@foreach($items as $listKey => $rows)
  @foreach($rows as $row)
    <form id="del-{{ $row->id }}" action="{{ route('admin.pages.items.destroy', [$page, $listKey, $row->id]) }}" method="POST" style="display: none;">
      @csrf @method('DELETE')
    </form>
  @endforeach
@endforeach
@endsection
