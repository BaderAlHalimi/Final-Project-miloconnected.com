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
                    <h3 class="lead mb-3">Users Subscriptions Hestory:</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">user</th>
                                <th scope="col">Plan</th>
                                <th scope="col">Price</th>
                                <th scope="col">status</th>
                                <th scope="col">expires at</th>
                                <th scope="col">Action 1</th>
                                <th scope="col">Action 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($subscriptions)
                                @foreach ($subscriptions as $subscription)
                                    <tr>
                                        <th scope="row">{{ $subscription->id }}</th>
                                        <td>{{ $subscription->user->name }}</td>
                                        <td>{{ $subscription->plan->title }}</td>
                                        <td>${{ $subscription->price }}</td>
                                        <td>{{ $subscription->status }}</td>
                                        <td
                                            @if (!$subscription->expires_at->isFuture()) class="text-danger fw-bold" @else class="text-success fw-bold" @endif>
                                            @if (!$subscription->expires_at->isFuture())
                                                from
                                            @endif
                                            @if ($subscription->expires_at->isToday())
                                            0
                                            @else
                                            {{ ceil($subscription->expires_at->diffInMinutes() / (60 * 24)) }}
                                            @endif @if ($subscription->expires_at->isFuture())
                                                days from now
                                            @else
                                                days
                                            @endif
                                            {{-- {{ ->deffForHumans() }} --}}
                                        </td>
                                        <td><button onclick="revoke(`{{ $subscription->id }}`)"
                                                class="btn btn-danger"><i class="fa-solid fa-trash"></i> Revoke</button></td>
                                        <td><button onclick="addDays(`{{ $subscription->id }}`)"
                                                class="btn btn-info"><i class="fa-solid fa-plus"></i> Add Days</button></td>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

        function revoke(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete a subscription!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // إذا قام المستخدم بالموافقة على الحذف
                    fetch(`http://127.0.0.1:8001/Subscriptions/${id}/revoke`, {
                            method: 'POST', // يمكنك استخدام POST أو أي طريقة أخرى حسب احتياجك
                            headers: {
                                'Content-Type': 'application/json', // قد تحتاج إلى تعديل هذا حسب نوع البيانات الذي تقوم بإرساله
                                'X-CSRF-TOKEN': '{{ csrf_token() }}', // استبدال بالتوكن الفعلي
                            },
                            // قد تحتاج إلى إضافة جسم الطلب إذا كنت تحتاج إلى إرسال بيانات مع الطلب
                            // body: JSON.stringify({}),
                        })
                        .then(response => {
                            if (response.ok) {
                                Swal.fire(
                                    'Deleted!',
                                    'Deleted!',
                                    'This Subscribe has been deleted.',
                                    'success'
                                ).then(() => {
                                    // بعد إغلاق نافذة Swal، قم بإعادة تحميل الصفحة
                                    window.location.reload();
                                });
                            }
                        })
                }
            })
        }
        
        function addDays(id){
            Swal.fire({
              title: 'Enter the number of days to add to the plan',
              input: 'text',
              inputAttributes: {
                autocapitalize: 'off'
              },
              showCancelButton: true,
              confirmButtonText: 'Add days',
              showLoaderOnConfirm: true,
              preConfirm: (days) => {
                return fetch(`http://127.0.0.1:8001/Subscriptions/${id}/addDays?days=${days}`)
                  .then(response => {
                    if (!response.ok) {
                      throw new Error(response.statusText)
                    }
                    return response.json()
                  })
                  .catch(error => {
                    Swal.showValidationMessage(
                      `Request failed: ${error}`
                    )
                  })
              },
              allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
              if (result.isConfirmed) {
                Swal.fire({
                  title: `The days of this subscription have been successfully updated!`,
                }).then(() => {
                    // بعد إغلاق نافذة Swal، قم بإعادة تحميل الصفحة
                    window.location.reload();
                })
              }
            })
        }
    </script>
</x-app-layout>
