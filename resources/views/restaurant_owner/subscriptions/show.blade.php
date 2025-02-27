@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>POS System</title>
@endsection

@push('styles')
    <style>
        /* thead tr td{

                background-color: aquamarine !important;
            } */
    </style>
@endpush

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Invoice
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary">
                        <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="ExternalLink" />
                        My Profile
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <form action="{{route('restaurant.owner.orders.store')}}" method="POST">
                        @csrf
                        <x-base.form-input type="hidden" name="subscription_plan_id" value="{{$subscription->uid}}"/>
                    <div class="box box--stacked flex flex-col p-5 sm:p-14">
                        <div
                            class="flex flex-col gap-y-7 rounded-lg border border-primary/5 bg-primary/[0.03] px-8 py-12 sm:-mx-10 sm:-mt-10 sm:px-10 sm:py-16 md:flex-row">
                            <div class="flex flex-col justify-center">
                                <div
                                    class="flex h-[50px] w-[50px] items-center justify-center rounded-[0.6rem] border border-primary/50">
                                    <div
                                        class="flex h-[45px] w-[45px] items-center justify-center rounded-lg bg-gradient-to-r from-theme-1/90 to-theme-2/90 transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:-rotate-180">
                                        <div class="relative h-[23px] w-[23px] -rotate-45 [&_div]:bg-white">
                                            <div
                                                class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                            </div>
                                            <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
                                            <div
                                                class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3.5 text-lg font-medium text-slate-600/90">
                                    Ditinus Technology LTD.
                                </div>
                            </div>
                            <div class="md:ml-auto md:text-right">
                                <div class="-mt-1 text-lg font-medium text-primary">
                                    # INVOICE
                                </div>
                                <div class="mt-1">
                                    {{ 121 }}
                                </div>
                                <div class="mt-7 flex flex-col gap-1">
                                    <div>address line 1</div>
                                    <div>addressLine2</div>
                                    <div>location</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex flex-col px-8 pt-4 sm:flex-row sm:px-0">
                            <div>
                                <div class="text-slate-500">Bill to :</div>
                                <div class="mt-1.5 text-base font-medium text-primary">
                                    {{ auth()->user()->name }}
                                </div>
                                <div class="mt-1.5 flex flex-col gap-1">
                                    <div>{{ auth()->user()->email }}</div>
                                    <div>{{ auth()->user()->phone }}</div>
                                    <div>{{ auth()->user()->city }},{{ auth()->user()->state }}{{ auth()->user()->landmark}}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-7 flex flex-col gap-4 sm:ml-auto sm:mt-0 sm:text-right">
                                <div>
                                    <div class="text-slate-500">Invoice date :</div>
                                    <div class="mt-1.5 font-medium text-slate-600">
                                        {{ date('d-M, Y') }}
                                    </div>
                                </div>
                                <div>
                                    <div class="text-slate-500">Due date :</div>
                                    <div class="mt-1.5 font-medium text-slate-600">
                                        2-feb-2025
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 rounded-[0.6rem] border border-slate-200/80">
                            <div class="overflow-auto xl:overflow-visible">
                                <x-base.table class="text-left">
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.td
                                                class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                Subscription Name
                                            </x-base.table.td>
                                            <x-base.table.td
                                                class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                Validity
                                            </x-base.table.td>
                                            <x-base.table.td
                                                class="border-slate-200/80 bg-slate-50 py-4 text-right font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                Amount
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr class="[&_td]:last:border-b-0">
                                            <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center">

                                                    <div class="whitespace-nowrap">
                                                        {{$subscription->title}}
                                                    </div>
                                                </div>
                                            </x-base.table.td>

                                            <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$subscription->duration_in_days}} days
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td class="border-dashed py-4 text-right dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    @if($subscription->sale_price) {{$subscription->sale_price}} @else {{$subscription->price}} @endif
                                                </div>
                                            </x-base.table.td>

                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                        </div>
                        <div class="my-10 ml-auto flex flex-col gap-3.5 pr-5 text-right">
                            <div class="flex items-center justify-end">
                                <div class="text-slate-500">Subtotal:</div>
                                <div class="w-20 font-medium text-slate-600 sm:w-52">
                                    <span id="init-subtotal" class="invisible">@if($subscription->sale_price)
                                    {{$subscription->sale_price}} @else {{$subscription->price}} @endif</span>
                                    $ <span id="subtotal">@if($subscription->sale_price) {{$subscription->sale_price}}
                                    @else {{$subscription->price}} @endif</span>
                                </div>
                            </div>

                            <div class="flex items-center justify-end">
                                <div class="text-slate-500">Coupons:</div>
                                <div class="w-20 font-medium text-slate-600 sm:w-52">
                                    <x-base.input-group>
                                        <x-base.form-input type="text" placeholder="coupon code" id="coupon_code" name="coupon_code" />
                                    </x-base.input-group>
                                    <x-base.input-group>
                                        <x-base.button id="coupon-btn">Apply</x-base.button>
                                    </x-base.input-group>
                                </div>
                            </div>

                            <div class="flex items-center justify-end">
                                <div class="text-slate-500">Coupons:</div>
                                <div class="w-20 font-medium text-slate-600 sm:w-52">
                                    <div id="coupon_amount">$0</div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end">
                                <div class="text-slate-500">Tax:</div>
                                <div class="w-20 font-medium text-slate-600 sm:w-52">
                                    $ <span id="tax">{{ $subscription->tax_amount }}</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-end">
                                <div class="text-slate-500">Total:</div>
                                <div class="w-20 font-medium text-slate-600 sm:w-52">
                                    $
                                    <span id="total">@if($subscription->sale_price)
                                    {{$subscription->sale_price + $subscription->tax_amount}} @else {{$subscription->pricee + $subscription->tax_amount}} @endif</span>
                                </div>
                            </div>
                            <x-base.button>Process</x-base.button>
                        </div>
                        <div class="-mx-8 border-t border-dashed border-slate-200/80 px-10 pt-6">
                            <div class="text-base font-medium">
                                Have questions about your invoice?
                            </div>
                            <div class="mt-1 text-slate-500">
                                Get in touch with us for assistance on any billing matters.
                            </div>
                            <div class="mt-5 text-slate-500">© 2046 Left4code.</div>
                        </div>
                    </div>
                </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $('#coupon-btn').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                url: "{{route('restaurant.owner.apply.coupon')}}",
                type: 'POST',
                data: { coupon_code: $('#coupon_code').val(), '_token': "{{ csrf_token() }}" },
                contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                success: function (result) {
                    /* if found any coupon */
                    var taxamt = parseFloat($('#tax').text());
                    var total = parseFloat($('#total').text());
                    var coupon_amount = 0;
                    console.log('taxamt:' + taxamt);
                    var subtotal = parseFloat($('#init-subtotal').text());
                    if (result.status == 'success') {
                        if(result.type=="flat" && result.cpnamt>0){
                            coupon_amount = result.cpnamt;
                        }
                        if(result.type=="percentage" && result.cpnamt>0){
                            coupon_amount = (parseFloat(result.cpnamt) * subtotal) / 100;
                        }
                        $('#total').text(subtotal - coupon_amount + taxamt);
                        $('#coupon_amount').text('$' + coupon_amount);
                    } else {
                        $('#total').text(subtotal + taxamt);
                        $('#coupon_amount').text('$' + 0);
                    }
                },

                error: function () {
                    console.log("error in fetching user info");
                }
            });
        });
    </script>
@endpush