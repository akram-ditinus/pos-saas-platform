@extends('restaurant_owner/layouts/app')

@section('subhead')
    <title>POS System</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Settings
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary">
                        <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="ExternalLink" />
                        Go to My Profile
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="relative col-span-12 xl:col-span-3">
                    <div class="sticky top-[104px]">
                        <div class="flex flex-col px-5 pt-5 pb-6 box box--stacked">
                            <a href="{{ route('settings') }}" @class([
                                'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                'active' => is_null(request()->query('page')),
                            ])>
                                <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="AppWindow" />
                                Profile Info
                            </a>
                            <a href="{{ route('settings', ['page' => 'email-settings']) }}" @class([
                                'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                'active' => request()->query('page') === 'email-settings',
                            ])>
                                <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="MailCheck" />
                                Email Settings
                            </a>
                            <a href="{{ route('settings', ['page' => 'security']) }}" @class([
                                'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                'active' => request()->query('page') === 'security',
                            ])>
                                <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="KeyRound" />
                                Security
                            </a>
                            <a href="{{ route('settings', ['page' => 'preferences']) }}" @class([
                                'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                'active' => request()->query('page') === 'preferences',
                            ])>
                                <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="PackageCheck" />
                                Preferences
                            </a>
                            <a href="{{ route('settings', ['page' => 'two-factor-authentication']) }}" @class([
                                'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                'active' => request()->query('page') === 'two-factor-authentication',
                            ])>
                                <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="ShieldCheck" />
                                Two-factor Authentication
                            </a>
                            <a href="{{ route('settings', ['page' => 'device-history']) }}" @class([
                                'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                'active' => request()->query('page') === 'device-history',
                            ])>
                                <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="Smartphone" />
                                Device History
                            </a>
                            <a href="{{ route('settings', ['page' => 'notification-settings']) }}" @class([
                                'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                'active' => request()->query('page') === 'notification-settings',
                            ])>
                                <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="BellDot" />
                                Notification Settings
                            </a>
                            <a href="{{ route('settings', ['page' => 'connected-services']) }}" @class([
                                'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                'active' => request()->query('page') === 'connected-services',
                            ])>
                                <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="Workflow" />
                                Connected Services
                            </a>
                            <a href="{{ route('settings', ['page' => 'social-media-links']) }}" @class([
                                'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                'active' => request()->query('page') === 'social-media-links',
                            ])>
                                <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="Podcast" />
                                Social Media Links
                            </a>
                            <a href="{{ route('settings', ['page' => 'account-deactivation']) }}" @class([
                                'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                'active' => request()->query('page') === 'account-deactivation',
                            ])>
                                <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3]" icon="Trash2" />
                                Account Deactivation
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col col-span-12 gap-y-7 xl:col-span-9">
                    <div class="box box--stacked flex flex-col p-1.5">
                        <div
                            class="mt-5 mb-5 block pt-5 first:mt-0 first:pt-0 sm:flex items-center">
                            <label class="mb-2 inline-block  text-right mr-14 w-80">
                            </label>
                            <div class="mt-5 w-full flex-1 xl:mt-0">
                                <div class="flex items-center">
                                    <div
                                        class="mt-5 mb-5 relative flex h-24 w-24 items-center justify-center border border-primary/10 bg-primary/5 rounded-full">
                                        
                                 @if(file_exists('images/users/profile/'.auth()->user()->uuid.".png"))
                                    <img class="rounded-full" src={{'/images/users/profile/'.auth()->user()->uuid.'.png'}}>
                                    <a class="box absolute bottom-0 right-0 flex h-7 w-7 items-center justify-center rounded-full"
                                            data-tw-toggle="modal" data-tw-target="#button-modal-preview" href="#" as="a"
                                            variant="primary">
                                            <x-base.lucide class="h-3.5 w-3.5 stroke-[1.3] text-slate-500" icon="Pencil" />
                                        </a>
                                    </div>
                                 @else
                                    <div
                                        class="mt-5 mb-5 relative flex h-24 w-24 items-center justify-center rounded-full border border-primary/10 bg-primary/5">
                                        <x-base.lucide
                                            class="-mt-1.5 h-[65%] w-[65%] fill-slate-300/70 stroke-slate-400/50 stroke-[0.5]"
                                            icon="User" />
                                        <a class="box absolute bottom-0 right-0 flex h-7 w-7 items-center justify-center rounded-full"
                                            data-tw-toggle="modal" data-tw-target="#button-modal-preview" href="#" as="a"
                                            variant="primary">
                                            <x-base.lucide class="h-3.5 w-3.5 stroke-[1.3] text-slate-500" icon="Pencil" />
                                        </a>
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <!-- BEGIN: Profile Image Modal Content -->
                        <x-base.preview-component>
                            <x-base.preview>
                                <x-base.dialog id="button-modal-preview">
                                    <x-base.dialog.panel>
                                        <a class="absolute right-0 top-0 mr-3 mt-3" data-tw-dismiss="modal" href="#">
                                            <x-base.lucide class="h-8 w-8 text-slate-400" icon="X" />
                                        </a>
                                        <form method="post" action="{{route('restaurant.owner.update.profile.image')}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('patch')       
                                        <div class="p-5 text-center">
                                            <x-base.lucide class="mx-auto mt-3 h-16 w-16 text-success" icon="CheckCircle" />
                                            <div class="mt-5 text-3xl">Upload Image</div>
                                            <div class="mt-2 text-slate-500">
                                                    <img id="blah" src="#" alt="your image" />
                                                <div>
                                                    <x-base.input-group>
                                                    <x-base.form-input type="file" value="{{ old('profile_image') }}" name='profile_image'  accept="image/*" type='file' id="imgInp" />
                                                    </x-base.input-group>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <x-base.button class="w-48" data-tw-dismiss="modal" type="submit" variant="primary">
                                                <x-base.lucide class="mr-2.5 h-4 w-4 stroke-[1.3]" icon="Image" /> Upload
                                            </x-base.button>
                                        </div>
                                        </form>
                                    </x-base.dialog.panel>
                                </x-base.dialog>
                            </x-base.preview>
                        </x-base.preview-component>
                        <!-- END: Profile Image Modal Content -->
                     
                    </div>
                    @if (is_null(request()->query('page')))
                    <form method="post" action="{{route('restaurant.owner.profile')}}">
                        @csrf
                        @method('patch')
                        <div class="flex flex-col p-5 box box--stacked">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Profile Info
                            </div>
                            <div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Full Name</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter your full legal name as it appears on your
                                                official identification.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="flex flex-col items-center md:flex-row">
                                            <x-base.form-input
                                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                                type="text" name="name" value="{{old('name',auth()->user()->name)}}" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Email</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please provide a valid email address that you have
                                                access to.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text" name="email" value="{{old('email',auth()->user()->email)}}"/>
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Phone Number</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please provide a valid phone number where we can reach
                                                you if needed.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text" name="phone" value="{{old('phone',auth()->user()->phone)}}"/>
                                    </div>
                                </div>
                                
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Address Line 1</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter the primary line of your physical address,
                                                typically including your house or building number and
                                                street name.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text" name="address_line_1" value="{{old('address_line_1',auth()->user()->address_line_1)}}" />
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Address Line 2</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                This field is optional and can be used to provide any
                                                additional address details, such as apartment number,
                                                suite, floor, or any other relevant information.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text" name="address_line_2" value="{{old('address_line_2',auth()->user()->address_line_2)}}" />
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">City</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter the name of the city or locality where your
                                                address is located.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text"  name="city" value="{{old('city',auth()->user()->city)}}"/>
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">State / Province</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please select your state or province from the provided
                                                list.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text"  name="state" value="{{old('state',auth()->user()->state)}}" />
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Zip / Postal Code</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter the postal code or ZIP code associated with your
                                                address.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text" name="pincode" value="{{old('pincode',auth()->user()->pincode)}}" />
                                    </div>
                                </div>
                                
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Country</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please specify the country you are currently residing
                                                in.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.tom-select class="w-full" data-placeholder="Select your country" name="country_id">
                                            @foreach ($countries as $key => $country)
                                                <option value="{{ $country['dial_code'] }}" @if($country['dial_code']==auth()->user()->country_id) selected @endif>
                                                    {{ $country['name'] }}
                                                </option>
                                            @endforeach
                                        </x-base.tom-select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex pt-5 mt-6 border-t border-dashed border-slate-300/70 md:justify-end">
                                <x-base.button class="w-full px-4 border-primary/50 md:w-auto" variant="outline-primary">
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'email-settings')
                        <div class="flex flex-col p-5 box box--stacked">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Email Settings
                            </div>
                            <div>
                                <div class="text-slate-500">
                                    Your current email address is
                                    <span class="font-medium">
                                        {{ $users[1]['email'] }}
                                    </span>
                                    .
                                </div>
                                <div class="flex-col block pt-5 mt-2 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">New Email Address</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please provide a valid email address that you have
                                                access to.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text" placeholder="{{ $users[0]['email'] }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex pt-5 mt-6 border-t border-dashed border-slate-300/70 md:justify-end">
                                <x-base.button class="w-full px-4 border-primary/50 md:w-auto" variant="outline-primary">
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'security')
                        <div class="flex flex-col p-5 box box--stacked">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Security
                            </div>
                            <div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Current Password</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter your current password to verify your identity.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text" placeholder="P**********d" />
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">New Password</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Create a new password for your account.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text" placeholder="P**********d" />
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">
                                                    Confirm New Password
                                                </div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Please re-enter the new password you've just chosen.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text" placeholder="P**********d" />
                                        <div class="mt-4 text-slate-500">
                                            <div class="font-medium">
                                                Password requirements:
                                            </div>
                                            <ul class="mt-2.5 flex list-disc flex-col gap-1 pl-3 text-slate-500">
                                                <li class="pl-0.5">
                                                    Passwords must be at least 8 characters long.
                                                </li>
                                                <li class="pl-0.5">
                                                    Include at least one numeric digit (0-9).
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex pt-5 mt-6 border-t border-dashed border-slate-300/70 md:justify-end">
                                <x-base.button class="w-full px-4 border-primary/50 md:w-auto" variant="outline-primary">
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'preferences')
                        <div class="flex flex-col p-5 box box--stacked">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Preferences
                            </div>
                            <div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Language</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Select your preferred language from the available
                                                options.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.tom-select class="w-full" data-placeholder="Select your language">
                                            @foreach ($languages as $fakerKey => $faker)
                                                <option value="{{ $faker['code'] }}">
                                                    {{ $faker['name'] }}
                                                </option>
                                            @endforeach
                                        </x-base.tom-select>
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Time Zone</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Select your current time zone from the list of
                                                available options.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.tom-select class="w-full" data-placeholder="Select your timezone">
                                            @foreach ($timezones as $fakerKey => $faker)
                                                <option value="{{ $faker['offset'] }}">
                                                    {{ $faker['name'] }}
                                                </option>
                                            @endforeach
                                        </x-base.tom-select>
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Item Support</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Check this box if you require additional support or
                                                assistance with your item.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-switch.input id="checkbox-switch-7" type="checkbox" />
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Featured Items</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Check this box if you want your items to be featured
                                                or highlighted on our
                                                <a class="text-primary" href="">
                                                    platform
                                                </a>
                                                .
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-switch.input id="checkbox-switch-7" type="checkbox" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex pt-5 mt-6 border-t border-dashed border-slate-300/70 md:justify-end">
                                <x-base.button class="w-full px-4 border-primary/50 md:w-auto" variant="outline-primary">
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'two-factor-authentication')
                        <div class="flex flex-col p-5 box box--stacked">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Two-Factor Authentication (2FA)
                                <div
                                    class="ml-3 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                                    <span class="-mt-px">Enabled</span>
                                </div>
                            </div>
                            <div>
                                <div class="text-slate-500">
                                    Enhance your account security by enabling Two-Factor
                                    Authentication in the settings.
                                </div>
                                <div class="flex-col block pt-5 mt-2 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Account Password</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter your current password to verify your identity.
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-input type="text" placeholder="P**********d" />
                                        <x-base.form-help>
                                            This is the password you use to log in to your account.
                                        </x-base.form-help>
                                    </div>
                                </div>
                            </div>
                            <div class="flex pt-5 mt-6 border-t border-dashed border-slate-300/70 md:justify-end">
                                <x-base.button class="w-full px-4 border-primary/50 md:w-auto" variant="outline-primary">
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'device-history')
                        <div class="flex flex-col p-5 box box--stacked">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Device History
                            </div>
                            <div>
                                <div class="text-slate-500">
                                    Access and control your currently connected devices.
                                </div>
                                <div class="mt-5 border rounded-lg border-slate-200/80">
                                    <div class="overflow-auto xl:overflow-visible">
                                        <x-base.table>
                                            <x-base.table.thead>
                                                <x-base.table.tr>
                                                    <x-base.table.td
                                                        class="py-4 font-medium whitespace-nowrap border-slate-200/80 bg-slate-50 text-slate-500 first:rounded-tl-lg last:rounded-tr-lg">
                                                        Browser
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 font-medium whitespace-nowrap border-slate-200/80 bg-slate-50 text-slate-500 first:rounded-tl-lg last:rounded-tr-lg">
                                                        Device
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 font-medium whitespace-nowrap border-slate-200/80 bg-slate-50 text-slate-500 first:rounded-tl-lg last:rounded-tr-lg">
                                                        Location
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 font-medium whitespace-nowrap border-slate-200/80 bg-slate-50 text-slate-500 first:rounded-tl-lg last:rounded-tr-lg">
                                                        Recent Activity
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            </x-base.table.thead>
                                            <x-base.table.tbody>
                                                @foreach ($recentDevices as $fakerKey => $faker)
                                                    <x-base.table.tr class="[&_td]:last:border-b-0">
                                                        <x-base.table.td
                                                            class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                            <div class="flex items-center whitespace-nowrap">
                                                                <div class="w-4 h-4 image-fit zoom-in">
                                                                    <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                        src="{{ Vite::asset($faker['browser']['image']) }}"
                                                                        alt="POS System" />
                                                                </div>
                                                                <div class="ml-3.5">
                                                                    {{ $faker['browser']['name'] }} on
                                                                    {{ $faker['operatingSystem'] }}
                                                                </div>
                                                            </div>
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                            <div class="flex items-center whitespace-nowrap">
                                                                <x-base.lucide class="mr-2 h-4 w-4 stroke-[1.3]"
                                                                    icon="Smartphone" />
                                                                {{ $faker['device'] }}
                                                                @if (!$fakerKey)
                                                                    <div
                                                                        class="ml-3 flex items-center rounded-md border border-primary/10 bg-primary/10 px-1.5 py-px text-xs font-medium text-primary">
                                                                        <span class="-mt-px">Current</span>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                {{ $faker['location'] }}
                                                            </div>
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                {{ $faker['activity'] }}
                                                            </div>
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                @endforeach
                                            </x-base.table.tbody>
                                        </x-base.table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'notification-settings')
                        <div class="flex flex-col p-5 box box--stacked">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Notification Settings
                            </div>
                            <div>
                                <x-base.alert class="flex items-center px-4 mb-2 border-primary/20 bg-primary/5"
                                    variant="outline-primary">
                                    <div>
                                        <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3] md:mr-2" icon="AlertCircle" />
                                    </div>
                                    <div class="mr-5 leading-relaxed">
                                        We'd like to request your browser's permission to
                                        display notifications.
                                        <a class="ml-1 font-medium underline decoration-warning/50 decoration-dotted underline-offset-[3px]"
                                            href="">
                                            Request permission
                                        </a>
                                        <x-base.alert.dismiss-button class="inset-y-0 btn-close" type="button"
                                            aria-label="Close">
                                            <x-base.lucide class="w-4 h-4" icon="X" />
                                        </x-base.alert.dismiss-button>
                                    </div>
                                </x-base.alert>
                                <div class="mt-5 border rounded-lg border-slate-200/80">
                                    <div class="overflow-auto xl:overflow-visible">
                                        <x-base.table>
                                            <x-base.table.thead>
                                                <x-base.table.tr>
                                                    <x-base.table.td
                                                        class="py-4 font-medium border-slate-200/80 bg-slate-50 text-slate-500 first:rounded-tl-lg last:rounded-tr-lg">
                                                        Type
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 font-medium border-slate-200/80 bg-slate-50 text-slate-500 first:rounded-tl-lg last:rounded-tr-lg">
                                                        <div class="flex flex-col items-center">
                                                            <x-base.lucide class="w-6 h-6" icon="MailCheck" />
                                                            <div class="mt-1.5">Email</div>
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 font-medium border-slate-200/80 bg-slate-50 text-slate-500 first:rounded-tl-lg last:rounded-tr-lg">
                                                        <div class="flex flex-col items-center">
                                                            <x-base.lucide class="w-6 h-6" icon="Globe" />
                                                            <div class="mt-1.5">Browser</div>
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 font-medium border-slate-200/80 bg-slate-50 text-slate-500 first:rounded-tl-lg last:rounded-tr-lg">
                                                        <div class="flex flex-col items-center">
                                                            <x-base.lucide class="w-6 h-6" icon="Smartphone" />
                                                            <div class="mt-1.5">App</div>
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            </x-base.table.thead>
                                            <x-base.table.tbody>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="whitespace-nowrap">
                                                            Unusual login activity detected
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="flex items-center whitespace-nowrap">
                                                            Password change request
                                                            <x-base.lucide class="ml-1.5 h-4 w-4 stroke-[1.3] text-slate-400"
                                                                icon="Info" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="whitespace-nowrap">
                                                            New message received
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="whitespace-nowrap">
                                                            Account activity summary
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="flex items-center whitespace-nowrap">
                                                            Security alert: Unrecognized device
                                                            <x-base.lucide class="ml-1.5 h-4 w-4 stroke-[1.3] text-slate-400"
                                                                icon="Info" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="py-4 border-dashed border-slate-300/70 dark:bg-darkmode-600">
                                                        <div class="text-center">
                                                            <x-base.form-check.input id="checkbox-switch-3" type="checkbox"
                                                                value="" />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            </x-base.table.tbody>
                                        </x-base.table>
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-3 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-1/2">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">
                                                    When would you prefer to receive notifications?
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <x-base.form-select>
                                            <option value="Immediately">Immediately</option>
                                            <option value="In the morning">In the morning</option>
                                            <option value="At noon">At noon</option>
                                            <option value="In the afternoon">
                                                In the afternoon
                                            </option>
                                            <option value="In the evening">In the evening</option>
                                            <option value="At night">At night</option>
                                            <option value="Once a day">Once a day</option>
                                            <option value="Twice a day">Twice a day</option>
                                            <option value="Custom schedule">Custom schedule</option>
                                            <option value="Don't send notifications">
                                                Don't send notifications
                                            </option>
                                        </x-base.form-select>
                                    </div>
                                </div>
                                <div class="flex-col block pt-5 mt-3 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <label class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-1/2">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">
                                                    Receive a daily overview ('Daily Digest') of your
                                                    task activity.
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="flex flex-col items-center md:flex-row">
                                            <x-base.form-select
                                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <option value="Every day">Every day</option>
                                                <option value="Once a day">Once a day</option>
                                                <option value="Twice a day">Twice a day</option>
                                                <option value="No daily overview (disable Daily Digest)">
                                                    No daily overview (disable Daily Digest)
                                                </option>
                                            </x-base.form-select>
                                            <x-base.form-select
                                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <option value="at 8:00 AM">at 8:00 AM</option>
                                                <option value="at 12:00 PM">at 12:00 PM</option>
                                                <option value="at 4:00 PM">at 4:00 PM</option>
                                                <option value="at 8:00 PM">at 8:00 PM</option>
                                            </x-base.form-select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-7 text-slate-500">
                                    To reduce interruptions, email notifications are bundled and
                                    delivered when you're not actively using your device.
                                </div>
                            </div>
                            <div class="flex pt-5 mt-6 border-t border-dashed border-slate-300/70 md:justify-end">
                                <x-base.button class="w-full px-4 border-primary/50 md:w-auto" variant="outline-primary">
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'connected-services')
                        <div class="flex flex-col p-5 box box--stacked">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Connected Services
                            </div>
                            <div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-10 h-10 ml-2 border rounded-full border-primary/10 bg-primary/10">
                                            <x-base.lucide class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Linkedin" />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Linked In</div>
                                            </div>
                                            <div class="pr-10 mt-1 text-xs leading-relaxed text-slate-500">
                                                Professional network and career profile
                                            </div>
                                        </div>
                                        <div class="flex flex-1 w-full sm:justify-end">
                                            <x-base.form-switch.input id="checkbox-switch-7" type="checkbox" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-10 h-10 ml-2 border rounded-full border-primary/10 bg-primary/10">
                                            <x-base.lucide class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Dribbble" />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Dribbble</div>
                                            </div>
                                            <div class="pr-10 mt-1 text-xs leading-relaxed text-slate-500">
                                                Design portfolio and creative work
                                            </div>
                                        </div>
                                        <div class="flex flex-1 w-full sm:justify-end">
                                            <x-base.form-switch.input id="checkbox-switch-7" type="checkbox" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-10 h-10 ml-2 border rounded-full border-primary/10 bg-primary/10">
                                            <x-base.lucide class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Facebook" />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Facebook</div>
                                            </div>
                                            <div class="pr-10 mt-1 text-xs leading-relaxed text-slate-500">
                                                Social connections and personal updates
                                            </div>
                                        </div>
                                        <div class="flex flex-1 w-full sm:justify-end">
                                            <x-base.form-switch.input id="checkbox-switch-7" type="checkbox" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-10 h-10 ml-2 border rounded-full border-primary/10 bg-primary/10">
                                            <x-base.lucide class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Instagram" />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Instagram</div>
                                            </div>
                                            <div class="pr-10 mt-1 text-xs leading-relaxed text-slate-500">
                                                Visual stories and photos
                                            </div>
                                        </div>
                                        <div class="flex flex-1 w-full sm:justify-end">
                                            <x-base.form-switch.input id="checkbox-switch-7" type="checkbox" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-10 h-10 ml-2 border rounded-full border-primary/10 bg-primary/10">
                                            <x-base.lucide class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Twitter" />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Twitter</div>
                                            </div>
                                            <div class="pr-10 mt-1 text-xs leading-relaxed text-slate-500">
                                                Microblogging and real-time updates
                                            </div>
                                        </div>
                                        <div class="flex flex-1 w-full sm:justify-end">
                                            <x-base.form-switch.input id="checkbox-switch-7" type="checkbox" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'social-media-links')
                        <div class="flex flex-col p-5 box box--stacked">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Social Media Links
                            </div>
                            <div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-10 h-10 ml-2 border rounded-full border-primary/10 bg-primary/10">
                                            <x-base.lucide class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Linkedin" />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Linked In</div>
                                            </div>
                                            <div class="pr-10 mt-1 text-xs leading-relaxed text-slate-500">
                                                Not connected
                                            </div>
                                        </div>
                                        <div class="flex flex-1 w-full sm:justify-end">
                                            <x-base.button class="px-4 border-primary/50 bg-primary/5 text-primary"
                                                variant="primary">
                                                <x-base.lucide class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]" icon="UserPlus" />
                                                Connect
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-10 h-10 ml-2 border rounded-full border-primary/10 bg-primary/10">
                                            <x-base.lucide class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Twitter" />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Dribbble</div>
                                            </div>
                                            <div class="pr-10 mt-1 text-xs leading-relaxed text-slate-500">
                                                Not connected
                                            </div>
                                        </div>
                                        <div class="flex flex-1 w-full sm:justify-end">
                                            <x-base.button class="px-4 border-primary/50 bg-primary/5 text-primary"
                                                variant="primary">
                                                <x-base.lucide class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]" icon="UserPlus" />
                                                Connect
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-10 h-10 ml-2 border rounded-full border-primary/10 bg-primary/10">
                                            <x-base.lucide class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Facebook" />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Facebook</div>
                                            </div>
                                            <div class="pr-10 mt-1 text-xs leading-relaxed text-slate-500">
                                                <a class="text-xs text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                    href="">
                                                    www.facebook.com/
                                                    {{ str_replace(' ', '', strtolower($users[0]['name'])) }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex flex-1 w-full sm:justify-end">
                                            <x-base.button class="px-4 border-primary/50 bg-primary/5 text-primary"
                                                variant="primary">
                                                <x-base.lucide class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]" icon="Check" />
                                                Connected
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-10 h-10 ml-2 border rounded-full border-primary/10 bg-primary/10">
                                            <x-base.lucide class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Instagram" />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Instagram</div>
                                            </div>
                                            <div class="pr-10 mt-1 text-xs leading-relaxed text-slate-500">
                                                Not connected
                                            </div>
                                        </div>
                                        <div class="flex flex-1 w-full sm:justify-end">
                                            <x-base.button class="px-4 border-primary/50 bg-primary/5 text-primary"
                                                variant="primary">
                                                <x-base.lucide class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]" icon="UserPlus" />
                                                Connect
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="flex items-center justify-center w-10 h-10 ml-2 border rounded-full border-primary/10 bg-primary/10">
                                            <x-base.lucide class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Twitter" />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Twitter</div>
                                            </div>
                                            <div class="pr-10 mt-1 text-xs leading-relaxed text-slate-500">
                                                <a class="text-xs text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                    href="">
                                                    www.twitter.com/
                                                    {{ str_replace(' ', '', strtolower($users[0]['name'])) }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex flex-1 w-full sm:justify-end">
                                            <x-base.button class="px-4 border-primary/50 bg-primary/5 text-primary"
                                                variant="primary">
                                                <x-base.lucide class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]" icon="Check" />
                                                Connected
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'account-deactivation')
                        <div class="flex flex-col p-5 box box--stacked">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Account Deactivation
                            </div>
                            <div>
                                <div class="leading-relaxed">
                                    When you initiate the account deletion process, you'll no
                                    longer have access to Front account services, and your
                                    personal data will be permanently removed. You have a 10-day
                                    window to cancel the deletion if needed.
                                </div>
                                <x-base.form-check class="mt-5">
                                    <x-base.form-check.input id="checkbox-switch-1" type="checkbox" value="" />
                                    <x-base.form-check.label for="checkbox-switch-1">
                                        Confirm that I want to delete my account.
                                    </x-base.form-check.label>
                                </x-base.form-check>
                            </div>
                            <div
                                class="flex flex-col-reverse gap-3 pt-5 mt-6 border-t border-dashed border-slate-300/70 md:flex-row md:justify-end">
                                <x-base.button class="w-full px-4 md:w-auto" variant="outline-secondary">
                                    Learn More
                                </x-base.button>
                                <x-base.button class="w-full px-4 border-danger/50 bg-danger/5 md:w-auto"
                                    variant="outline-danger">
                                    Delete
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#blah').hide();
    });
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            $('#blah').show();
            blah.src = URL.createObjectURL(file)
        }
    }
</script>
@endpush