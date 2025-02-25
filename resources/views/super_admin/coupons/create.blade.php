@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>POS System</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12 sm:col-span-10 sm:col-start-2">
            
            <div class="mt-7">
                <form method="POST" action="{{route('super.admin.coupons.store')}}">
                    @csrf
                    <div class="box box--stacked flex flex-col">
                        <div class="p-7">
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Name</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-input
                                            class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                            type="text" name="title" value="{{ old('title')}}" />
                                    </div>
                                    @error('title')
                                        <x-base.alert class="mb-2 flex items-center" variant="outline-danger">
                                            {{ $message }}
                                            <x-base.alert.dismiss-button class="btn-close" type="button" aria-label="Close">
                                                <x-base.lucide class="h-4 w-4" icon="X" />
                                            </x-base.alert.dismiss-button>
                                        </x-base.alert>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Code</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="text" value="{{ old('code') }}" name='code' />
                                    @error('code')
                                        <x-base.alert class="mb-2 flex items-center" variant="outline-danger">
                                            {{ $message }}
                                            <x-base.alert.dismiss-button class="btn-close" type="button" aria-label="Close">
                                                <x-base.lucide class="h-4 w-4" icon="X" />
                                            </x-base.alert.dismiss-button>
                                        </x-base.alert>
                                    @enderror
                                </div>
                            </div>
                            
                           

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Type</div>
                                        </div>
                                       
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-select name="type">

                                        <option value="percentage"> Percentage</option>
                                        <option value="flat"> Flat</option>

                                    </x-base.form-select>
                                </div>
                            </div>
                        
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Amount</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-input type="number" value="{{ old('amount',0) }}" name='amount' />
                                @error('amount')
                                    <x-base.alert class="mb-2 flex items-center" variant="outline-danger">
                                        {{ $message }}
                                        <x-base.alert.dismiss-button class="btn-close" type="button" aria-label="Close">
                                            <x-base.lucide class="h-4 w-4" icon="X" />
                                        </x-base.alert.dismiss-button>
                                    </x-base.alert>
                                @enderror
                            </div>
                        </div>
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Status</div>
                                        </div>
                                       
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-select name="status">

                                        <option value="active"> Active</option>
                                        <option value="inactive"> Inactive</option>

                                    </x-base.form-select>
                                </div>
                            </div>
                        </div>
                        <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                            <x-base.button class="w-full border-primary/50 px-10 md:w-auto" variant="outline-primary">
                                <x-base.lucide class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]" icon="Pocket" />
                                Save
                            </x-base.button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection