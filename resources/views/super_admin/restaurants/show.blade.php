@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>POS System</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12 sm:col-span-10 sm:col-start-2">
            <div class="flex flex-col gap-y-2 lg:flex-row lg:items-center">
                <div @class([
                    'flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group active',
                    'after:hidden before:hidden after:lg:block before:lg:block',
                    "first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20",
                    "last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20",
                    "last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20",
                    "first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20",
                ])>
                    <div class="flex items-center">
                        <div
                            class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                            <div class="flex h-10 w-10 items-center justify-center">
                                1
                            </div>
                        </div>
                        <div
                            class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                            Personal Information
                        </div>
                    </div>
                </div>
                <div @class([
                    'flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group',
                    'after:hidden before:hidden after:lg:block before:lg:block',
                    "first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20",
                    "last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20",
                    "last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20",
                    "first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20",
                ])>
                    <div class="flex items-center">
                        <div
                            class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                            <div class="flex h-10 w-10 items-center justify-center">
                                2
                            </div>
                        </div>
                        <div
                            class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                            Account Setup
                        </div>
                    </div>
                </div>
                <div @class([
                    'flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group',
                    'after:hidden before:hidden after:lg:block before:lg:block',
                    "first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20",
                    "last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20",
                    "last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20",
                    "first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20",
                ])>
                    <div class="flex items-center">
                        <div
                            class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                            <div class="flex h-10 w-10 items-center justify-center">
                                3
                            </div>
                        </div>
                        <div
                            class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                            Additional Details
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-7">
                <form method="POST" action="{{route('restaurant.owner.restaurants.update',$restaurant->uid)}}">
                    @csrf
                    @method('patch')
                    <div class="box box--stacked flex flex-col">
                        <div class="p-7">
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Logo</div>
                                        </div>
                                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                            Upload a clear and recent logo.
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <div class="flex items-center">
                                        <img src="{{asset($restaurant['logo'])}}">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Full Name</div>
                                           
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <div class="flex flex-col items-center md:flex-row">
                                        {{$restaurant['title']}}
                                    </div>
                                </div>
                            </div>

                            

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Phone Number</div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    {{$restaurant['phone']}}
                                   
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Restaurant Type</div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    {{$restaurant['type']}}
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Currency</div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                   {{$restaurant['currency']}}
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Address </div>
                                            
                                        </div>
                                    </div>
                                </label>

                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    {{$restaurant['address_line_1']}}
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium"></div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    {{$restaurant['address_line_2']}}
                                    <x-base.form-input type="hidden" value="{{ old('longitude',$restaurant['longitude']) }}" name='longitude' />
                                    <x-base.form-input type="hidden" value="{{ old('latitude',$restaurant['latitude']) }}" name='latitude' />
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">State</div>
                                           
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    {{$restaurant['state']}}
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">City</div>
                                            
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    {{$restaurant['city']}}
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Pincode</div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    {{$restaurant['pincode']}}
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Country</div>
                                          
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    @if(!empty($countries[$restaurant->country_id])) {{$countries[$restaurant->country_id]}} @endif
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Number Of Floors</div>
                                           
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    {{$restaurant['no_of_floors']}}
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Number Of Tables</div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    {{$restaurant['no_of_tables']}}
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Has Table Booking</div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                   {{$restaurant['has_table_booking']}}
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Has Online Delivery</div>
                                        </div>
                                    </div>
                                </label>
                                 <div class="mt-3 w-full flex-1 xl:mt-0">
                                    {{$restaurant['has_online_delivery']}}
                                </div>
                            </div>
                        </div>

                        <div class="flex border-t border-slate-200/80 px-7 py-5">
                            <x-base.menu.item class="w-full border-primary/50 px-10 md:w-auto" href="{{route('super.admin.restaurants.index')}}">
                                <x-base.lucide class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]" icon="Pocket" />
                                Back
                            </x-base.menu.item>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection