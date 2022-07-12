<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>

            <th scope="col" class="px-6 py-3">
                Subscription
            </th>
            <th scope="col" class="px-6 py-3">
                Amount
            </th>
            <th scope="col" class="px-6 py-3">
                Transaction id
            </th>
            <th scope="col" class="px-6 py-3">
                Payment phone
            </th>
            <th scope="col" class="px-6 py-3">
                Status
            </th>
            <th scope="col" class="px-6 py-3">
                End date
            </th>

            <th  scope="col" class="px-6 py-3 bg-blue-400 text-white">
                Action
            </th>

        </tr>
        </thead>
        <tbody>
@forelse($myPayments as $myPay)
    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">

        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
            {{$myPay->subscriptions->sub_name}}
        </th>
        <td class="px-6 py-4">
            {{number_format($myPay->amount_paid)}}
        </td>

        <td class="px-6 py-4">
            {{$myPay->transaction_id}}
        </td>

        <td class="px-6 py-4">
            {{$myPay->payment_phone}}
        </td>
        <td class="px-6 py-4">
            @if($myPay->paid==1)
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Paid</span>
            @else
                <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Not paid</span>
            @endif
        </td>

        <td class="px-6 py-4">
            {{$myPay->end_date}}
        </td>

        <td class="px-6 py-4">
            <button wire:click="comfirm_pay('{{ $myPay->transaction_id }}')" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Confirm pay</button>

        </td>

    </tr>
@empty
    <tr>
        <td colspan="7">No payments made already</td>
    </tr>
@endforelse

        </tbody>
    </table>

    <div wire:loading class="loading">Loading&#8230;</div>
</div>
