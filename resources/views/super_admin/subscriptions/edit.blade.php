@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>POS System</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12 sm:col-span-10 sm:col-start-2">
            
            <div class="mt-7">
                <form method="POST" action="{{route('super.admin.subscriptions.update',$subscription['uid'])}}">
                    @csrf
                    @method('patch')
                    <div class="box box--stacked flex flex-col">
                        <div class="p-7">
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Taxes</div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-select name="tax_id">
                                            <option value=""> -remove tax- </option>
                                            @foreach($taxes as $tax)
                                            <option @if($subscription->tax_id==$tax->uid) selected @endif value="{{$tax->uid}}">{{$tax->title}}</option>
                                            @endforeach
                                        </x-base.form-select>
                                    </div>
                                </div>
                            </div>
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
                                            type="text" name="title" value="{{ old('title',$subscription['title'])}}" />

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
                                            <div class="font-medium">Description</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-textarea name="description" >{{ old('description',$subscription['description'])}}</x-base.form-textarea>
                                    </div>
                                    @error('description')
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
                                            <div class="font-medium">Price</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="number" value="{{ old('price',$subscription['price']) }}" name='price' />
                                    @error('price')
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
                                            <div class="font-medium">Sale Price</div>
                                           
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="number" value="{{ old('sale_price',$subscription['sale_price']) }}" name='sale_price' />
                                    @error('sale_price')
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
                                            <div class="font-medium">Duration In Days</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                        
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="number" value="{{ old('duration_in_days',$subscription['duration_in_days']) }}" name='duration_in_days' />
                                @error('duration_in_days')
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
                                            <div class="font-medium">Trial Period In Days</div>
                                            
                                        </div>
                                        
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="number" value="{{ old('trial_period_in_days',$subscription['trial_period_in_days']) }}" name='trial_period_in_days' />
                                @error('trial_period_in_days')
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
                                            <div class="font-medium">Remarks</div>
                                           
                                        </div>
                                        
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="text" value="{{ old('remarks',$subscription['remarks']) }}" name='remarks' />
                                @error('remarks')
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

                                        <option @if($subscription['status']=='pending') selected @endif value="pending"> Pending</option>
                                        <option @if($subscription['status']=='active') selected @endif value="active"> Active</option>
                                        <option @if($subscription['status']=='inactive') selected @endif value="inactive"> Inactive</option>

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