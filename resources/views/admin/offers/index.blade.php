@extends('admin.layout')

@section('title', 'Offers')

@section('content')
<div class="content-header">
  <div>
    <h1>Offers</h1>
    <p class="subtitle">"Top Offers of the Month" shown on the Membership page. Only active, unexpired offers appear on the website.</p>
  </div>
  <div>
    <a href="{{ route('admin.offers.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Offer</a>
  </div>
</div>

<div class="card">
  <div class="table-responsive">
    @if($offers->isEmpty())
      <div style="text-align: center; padding: 40px; color: var(--text-muted);">
        <i class="fas fa-tags" style="font-size: 3rem; margin-bottom: 15px; display: block;"></i>
        No offers yet.
      </div>
    @else
      <table>
        <thead>
          <tr><th>Offer</th><th>Tag</th><th>Valid until</th><th>Status</th><th>Order</th><th style="text-align: right;">Actions</th></tr>
        </thead>
        <tbody>
          @foreach($offers as $offer)
            <tr>
              <td><strong>{{ $offer->title }}</strong><br><span style="font-size: .85em; opacity: .8;">{{ \Illuminate\Support\Str::limit($offer->description, 70) }}</span></td>
              <td>{{ $offer->tag }}</td>
              <td>{{ $offer->valid_until?->format('d M Y') ?? '—' }}</td>
              <td>
                @if(!$offer->is_active)
                  <span class="badge badge-unread">Hidden (draft)</span>
                @elseif($offer->valid_until && $offer->valid_until->isPast())
                  <span class="badge badge-unread">Expired</span>
                @else
                  <span class="badge badge-read">Live</span>
                @endif
              </td>
              <td>{{ $offer->sort_order }}</td>
              <td>
                <div class="actions-cell" style="justify-content: flex-end;">
                  <a href="{{ route('admin.offers.edit', $offer->id) }}" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                  <form action="{{ route('admin.offers.destroy', $offer->id) }}" method="POST" onsubmit="return confirm('Delete this offer?');">
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
