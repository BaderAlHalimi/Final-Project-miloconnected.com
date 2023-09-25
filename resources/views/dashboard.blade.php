<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="lead mb-3">Your Subscription:</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Plan</th>
                                <th scope="col">Price</th>
                                <th scope="col">status</th>
                                <th scope="col">expires at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($subscription)
                                <tr>
                                    <th scope="row">{{ $subscription->id }}</th>
                                    <td>{{ $subscription->plan->title }}</td>
                                    <td>${{ $subscription->price }}</td>
                                    <td>{{ $subscription->status }}</td>
                                    <td
                                        @if (!$subscription->expires_at->isFuture()) class="text-danger fw-bold" @else class="text-success fw-bold" @endif>
                                        @if (!$subscription->expires_at->isFuture())
                                            from
                                        @endif
                                        {{ $subscription->expires_at->diffInDays() }} @if ($subscription->expires_at->isFuture())
                                            days from now
                                        @else
                                            days
                                        @endif
                                        {{-- {{ ->deffForHumans() }} --}}
                                    </td>
                                    <td>
                                        <form id="increaseSubscriptionForm{{ $subscription->id }}"
                                            action="{{ route('payment.increase') }}" method="post">
                                            @csrf
                                            <select name="plan"
                                                id="increaseSubscriptionSelect{{ $subscription->id }}"
                                                onchange="submitIncreaseForm(`{{ $subscription->id }}`)"
                                                class="form-select form-select-sm btn btn-success text-dark"
                                                aria-label="Small select example">
                                                <option class="bg-white text-dark" selected>Increase subscription
                                                </option>
                                                @foreach ($plans as $plan)
                                                    <option class="bg-white text-dark" value="{{ $plan->id }}">
                                                        {{ $plan->title }}</option>
                                                @endforeach
                                            </select>
                                        </form>
                                        {{-- <button class="btn btn-success">Increase subscription</button> --}}
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td colspan="6" class="text-center"> No Subscriptions yet!</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="lead mb-3">Your Subscriptions Hestory:</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Plan</th>
                                <th scope="col">Price</th>
                                <th scope="col">status</th>
                                <th scope="col">expires at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($subscriptions)
                                @foreach ($subscriptions as $subscription)
                                    <tr>
                                        <th scope="row">{{ $subscription->id }}</th>
                                        <td>{{ $subscription->plan->title }}</td>
                                        <td>${{ $subscription->price }}</td>
                                        <td>{{ $subscription->status }}</td>
                                        <td
                                            @if (!$subscription->expires_at->isFuture()) class="text-danger fw-bold" @else class="text-success fw-bold" @endif>
                                            @if (!$subscription->expires_at->isFuture())
                                                from
                                            @endif
                                            {{ $subscription->expires_at->diffInDays() }} @if ($subscription->expires_at->isFuture())
                                                days from now
                                            @else
                                                days
                                            @endif
                                            {{-- {{ ->deffForHumans() }} --}}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center"> No Subscriptions yet!</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $subscriptions->links() }}
                </div>
            </div>
        </div>
    </div>
    <script>
        function submitIncreaseForm(subscriptionId) {
            // احصل على النموذج باستخدام الهوية subscriptionId
            const select = document.getElementById(`increaseSubscriptionSelect${subscriptionId}`);
            if (select.selectedIndex != 0) {
                const form = document.getElementById(`increaseSubscriptionForm${subscriptionId}`);
                // قم بإرسال النموذج
                form.submit();
            }
        }
    </script>
</x-app-layout>
