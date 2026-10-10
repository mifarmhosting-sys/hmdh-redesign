@extends('admin.layout')

@section('title', 'Page Content')

@section('content')
<div class="content-header">
  <div>
    <h1>Page Content</h1>
    <p class="subtitle">Change the words, pictures and links shown on each page of the website.</p>
  </div>
</div>

<div class="card">
  <div class="table-responsive">
    <table>
      <thead><tr><th>Page</th><th>Editable sections</th><th style="text-align: right;">Actions</th></tr></thead>
      <tbody>
        @foreach($pages as $key => $page)
          <tr>
            <td><strong>{{ $page['label'] }}</strong></td>
            <td>{{ collect($page['sections'])->pluck('label')->implode(' · ') }}</td>
            <td>
              <div class="actions-cell" style="justify-content: flex-end;">
                <a href="{{ route('admin.pages.edit', $key) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                <a href="{{ $page['url'] }}" target="_blank" class="btn btn-secondary btn-sm"><i class="fas fa-external-link-alt"></i> View</a>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
