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
                <form method="POST" action="{{route('super.admin.users.restaurant.update',$user['uuid'])}}">
                    @method('PATCH')
                    @csrf
                    <div class="box box--stacked flex flex-col">
                        <div class="p-7">
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Profile Photo</div>
                                        </div>
                                        
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <div class="flex items-center">
                                        <div
                                            class="relative flex h-24 w-24 items-center justify-center rounded-full border border-primary/10 bg-primary/5">
                                            <x-base.lucide
                                                class="-mt-1.5 h-[65%] w-[65%] fill-slate-300/70 stroke-slate-400/50 stroke-[0.5]"
                                                icon="User" />
                                            <a class="box absolute bottom-0 right-0 flex h-7 w-7 items-center justify-center rounded-full"
                                                href="">
                                                <x-base.lucide class="h-3.5 w-3.5 stroke-[1.3] text-slate-500"
                                                    icon="Pencil" />
                                            </a>
                                        </div>
                                        <x-base.button class="ml-8 mr-2 h-8 pl-3.5 pr-4" variant="outline-secondary"
                                            size="sm">
                                            <x-base.lucide class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]" icon="Trash2" />
                                            Remove
                                        </x-base.button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Full Name</div>
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
                                            type="text" name="name" value="{{ old('name',$user['name'])}}"  required="required"/>
                                            
                                    </div>
                                    @error('name')
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
                                            <div class="font-medium">Phone Number</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                        
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="text" value="{{ old('phone',$user['phone']) }}" name='phone'  required="required"/>
                                    @error('phone')
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
                                            <div class="font-medium">Address Line</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                        
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="text" value="{{ old('address_line_1',$user['address_line_1']) }}" name='address_line_1'  required="required"/>
                                    @error('address_line_1')
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
                                            <div class="font-medium">Address Line 2</div>
                                           
                                        </div>
                                        
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="text" value="{{ old('address_line_2',$user['address_line_2']) }}" name='address_line_2' />
                                    @error('address_line_2')
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
                                            <div class="font-medium">State</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                        
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="text" value="{{ old('state',$user['state']) }}" name='state'  required="required"/>
                                    @error('state')
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
                                            <div class="font-medium">City</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                        
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="text" value="{{ old('city',$user['city']) }}" name='city'  required="required"/>
                                    @error('city')
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
                                            <div class="font-medium">Pincode</div>
                                           
                                        </div>
                                        
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-input type="text" value="{{ old('pincode',$user['pincode']) }}" name='pincode'/>
                                    @error('pincode')
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
                                            <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                        </div>
                                       
                                    </div>
                                </label>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <x-base.form-select name="status">
                                        <option @if($user->status=='pending') selected @endif  value="pending"> Pending</option>
                                        <option @if($user->status=='active') selected @endif value="active"> Active</option>
                                        <option @if($user->status=='inactive') selected @endif value="inactive"> Block</option>
                                    </x-base.form-select>
                                </div>
                            </div>
                            
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <label class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Country</div>
                                        <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                    </div>
                                    </div>
                                    
                                </div>
                            </label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-select class="w-full" data-placeholder="Select your country" name="country_id">
                                    @foreach ($countries as $key => $country)
                                        <option value="{{ $country['dial_code'] }}" @if($country['dial_code']==$user->country_id) selected @endif>
                                            {{ $country['name'] }}
                                        </option>
                                    @endforeach
                                </x-base.form-select>
                            </div>
                        </div>
                    </div>

                    
                    <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                        <x-base.button class="w-full border-primary/50 px-10 md:w-auto" variant="outline-primary">
                            <x-base.lucide class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]" icon="Pocket" />
                            Next
                        </x-base.button>
                    </div>
                        </div>
                        



                </form>
            </div>
        </div>
    </div>
    </div>
@endsection