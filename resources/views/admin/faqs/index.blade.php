@extends('admin.layout')

@section('title', 'FAQs')

@section('content')
<div class="content-header">
  <div>
    <h1>FAQs</h1>
    <p class="subtitle">Questions shown on the Membership and Connect Us pages. Items marked Hidden were imported as drafts from the design: check and edit the answer before switching them on.</p>
  </div>
  <div><a href="{{ route('admin.faqs.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add FAQ</a></div>
</div>

<div class="card">
  <div class="table-responsive">
    @if($faqs->isEmpty())
      <div style="text-align: center; padding: 40px; color: var(--text-muted);">No FAQs yet.</div>
    @else
      <table>
        <thead><tr><th>Page</th><th>Question</th><th>Status</th><th>Order</th><th style="text-align: right;">Actions</th></tr></thead>
        <tbody>
          @foreach($faqs as $faq)
            <tr>
              <td>{{ ucfirst($faq->page) }}</td>
              <td><strong>{{ $faq->question }}</strong></td>
              <td>@if($faq->is_active)<span class="badge badge-read">Live</span>@else<span class="badge badge-unread">Hidden (draft)</span>@endif</td>
              <td>{{ $faq->sort_order }}</td>
              <td>
                <div class="actions-cell" style="justify-content: flex-end;">
                  <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                  <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Delete this FAQ?');">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</div>
@endsection
