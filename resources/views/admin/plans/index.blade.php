@extends('admin.layout')

@section('title', 'Membership Plans')

@section('content')
<div class="content-header">
  <div>
    <h1>Membership Plans</h1>
    <p class="subtitle">Plans shown on the Membership page. With one active plan the page shows it with the enquiry form; with two or more it shows a comparison. Plans marked Hidden are drafts imported from the design: check every figure before switching them on.</p>
  </div>
  <div><a href="{{ route('admin.plans.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Plan</a></div>
</div>

<div class="card">
  <div class="table-responsive">
    @if($plans->isEmpty())
      <div style="text-align: center; padding: 40px; color: var(--text-muted);">No plans yet.</div>
    @else
      <table>
        <thead><tr><th>Plan</th><th>Price</th><th>Annual charge</th><th>Status</th><th>Order</th><th style="text-align: right;">Actions</th></tr></thead>
        <tbody>
          @foreach($plans as $plan)
            <tr>
              <td><strong>{{ $plan->name }}</strong>@if($plan->is_featured) <span class="badge badge-read">Featured</span>@endif</td>
              <td>{{ $plan->price ? '₹ ' . $plan->price : '—' }}</td>
              <td>{{ $plan->annual_charge ? '₹ ' . $plan->annual_charge : '—' }}</td>
              <td>@if($plan->is_active)<span class="badge badge-read">Live</span>@else<span class="badge badge-unread">Hidden (draft)</span>@endif</td>
              <td>{{ $plan->sort_order }}</td>
              <td>
                <div class="actions-cell" style="justify-content: flex-end;">
                  <a href="{{ route('admin.plans.edit', $plan->id) }}" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                  <form action="{{ route('admin.plans.destroy', $plan->id) }}" method="POST" onsubmit="return confirm('Delete this plan?');">
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
