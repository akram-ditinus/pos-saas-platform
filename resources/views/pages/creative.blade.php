@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>POS System</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex h-10 items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Creative
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12 flex flex-col gap-x-6 gap-y-10 md:col-span-6 xl:col-span-4">
                    <div class="box box--stacked p-5">
                        <div class="mb-5 flex items-center border-b border-dashed pb-5">
                            <div class="mr-auto">
                                <div class="text-base font-medium">09:30 - 11:30</div>
                                <div class="mt-0.5 text-slate-500">Monday, Sep 01</div>
                            </div>
                            <div>
                                <div
                                    class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="POS System"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="mb-7 flex items-center">
                            <div class="mr-auto">
                                <div class="max-w-[15rem] truncate text-base font-medium">
                                    {{ $products[0]['name'] }}
                                </div>
                                <div class="mt-0.5 max-w-[9rem] truncate text-slate-500 md:max-w-none">
                                    {{ implode(', ', $products[0]['category']['tags']) }}
                                </div>
                            </div>
                            <div class="text-base font-medium text-primary">
                                ${{ formatCurrency($products[0]['price']) }}
                            </div>
                        </div>
                        <x-base.button
                            class="w-full"
                            type="button"
                            rounded
                            variant="primary"
                        >
                            Order Now
                        </x-base.button>
                    </div>
                    <div class="box box--stacked p-1">
                        <div
                            class="flex items-center gap-3.5 rounded-lg bg-gradient-to-r from-theme-2/[0.85] to-theme-1/[0.85] p-4">
                            <div>
                                <div
                                    class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="POS System"
                                    />
                                </div>
                            </div>
                            <div>
                                <div class="text-base font-medium text-white">
                                    {{ $users[0]['name'] }}
                                </div>
                                <div class="mt-0.5 text-slate-500 text-white/80">
                                    {{ $activities[0]['activity'] }}
                                </div>
                                <div class="mt-1 text-white/80">
                                    {{ $activities[0]['date'] }}
                                </div>
                            </div>
                            <div class="ml-auto flex gap-2">
                                <x-base.tippy
                                    class="flex h-9 w-9 items-center justify-center rounded-full border border-white/40 bg-white/5"
                                    as="a"
                                    content="Send a message"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-white/10 text-white"
                                        icon="ChevronRight"
                                    />
                                </x-base.tippy>
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="mb-5 flex items-center gap-3.5 border-b border-dashed pb-5">
                            <div>
                                <div
                                    class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="POS System"
                                    />
                                </div>
                            </div>
                            <div>
                                <div class="max-w-[9rem] truncate text-base font-medium md:max-w-none">
                                    {{ $users[0]['name'] }}
                                </div>
                                <div class="mt-0.5 max-w-[9rem] truncate text-slate-500 md:max-w-none">
                                    {{ $users[0]['position'] }}
                                </div>
                            </div>
                            <div class="ml-auto flex gap-2">
                                <x-base.tippy
                                    class="flex h-9 w-9 items-center justify-center rounded-full border border-primary/40 bg-primary/5"
                                    as="a"
                                    content="Call"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/10 text-primary"
                                        icon="Phone"
                                    />
                                </x-base.tippy>
                                <x-base.tippy
                                    class="flex h-9 w-9 items-center justify-center rounded-full border border-primary/40 bg-primary/5"
                                    as="a"
                                    content="Send a message"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/10 text-primary"
                                        icon="Mail"
                                    />
                                </x-base.tippy>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="text-base font-medium">
                                Want to access Figma file "Tailwise"
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                Give me an access, need to check the design immediately, thank
                                you.
                            </div>
                        </div>
                        <div class="mt-7 flex items-center gap-3">
                            <x-base.button
                                class="w-full"
                                type="button"
                                rounded
                                variant="outline-primary"
                            >
                                Denied
                            </x-base.button>
                            <x-base.button
                                class="w-full"
                                type="button"
                                rounded
                                variant="primary"
                            >
                                Give Access
                            </x-base.button>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex flex-col items-center pt-5">
                            <div
                                class="flex h-16 w-16 items-center justify-center rounded-full border-4 border-white/70 bg-primary">
                                <x-base.lucide
                                    class="h-8 w-8 stroke-[1.5] text-white"
                                    icon="Check"
                                />
                            </div>
                            <div class="mt-5 text-center text-base font-medium">
                                Message Sent Successfully
                            </div>
                            <div class="mt-0.5 px-8 text-center text-slate-500">
                                Your message has been sent successfully. Thank you for
                                reaching out!
                            </div>
                            <x-base.button
                                class="mt-7 w-full"
                                type="button"
                                rounded
                                variant="primary"
                            >
                                Dismiss
                            </x-base.button>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="text-base font-medium">Color</div>
                        <div class="mt-0.5 text-slate-500">
                            Select your preferred color
                        </div>
                        <div class="flex gap-2">
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                    checked
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-blue-800 bg-blue-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-blue-800/50 bg-blue-800/40 text-blue-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-blue-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-red-800 bg-red-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-red-800/50 bg-red-800/40 text-red-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-theme-1/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-green-800 bg-green-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-green-800/50 bg-green-800/40 text-green-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-green-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-yellow-800 bg-yellow-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-yellow-800/50 bg-yellow-800/40 text-yellow-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-yellow-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-orange-800 bg-orange-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-orange-800/50 bg-orange-800/40 text-orange-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-orange-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-amber-800 bg-amber-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-amber-800/50 bg-amber-800/40 text-amber-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-amber-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-cyan-800 bg-cyan-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-cyan-800/50 bg-cyan-800/40 text-cyan-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-cyan-800/10">
                                </div>
                            </div>
                            <div class="relative mt-3 h-7 w-7">
                                <x-base.form-check.input
                                    class="peer absolute z-10 h-full w-full opacity-0"
                                    type="checkbox"
                                    value="checked"
                                />
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-teal-800 bg-teal-800/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <x-base.lucide
                                        class="h-3 w-3 stroke-[1.5]"
                                        icon="Check"
                                    />
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-7 w-7 items-center justify-center rounded-full border border-teal-800/50 bg-teal-800/40 text-teal-800 transition-all peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-teal-800/10">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="relative">
                            <x-base.form-input
                                class="pr-11"
                                type="text"
                                rounded
                                placeholder="Search members..."
                            />
                            <div class="absolute inset-y-0 right-0 flex w-11 items-center justify-center">
                                <x-base.lucide
                                    class="h-4 w-4 stroke-[1.3] text-slate-400"
                                    icon="Search"
                                />
                            </div>
                        </div>
                        <div class="mt-3.5 flex flex-col gap-2">
                            @foreach ($users->take(5) as $fakerKey => $faker)
                                <div
                                    class="-mx-2 flex cursor-pointer items-center gap-3.5 rounded-lg px-2 py-1.5 transition-all hover:bg-slate-50">
                                    <div>
                                        <div
                                            class="image-fit h-10 w-10 overflow-hidden rounded-full border-2 border-slate-200/70">
                                            <img
                                                src="{{ Vite::asset($faker['photo']) }}"
                                                alt="POS System"
                                            />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-medium">{{ $faker['name'] }}</div>
                                        <div class="mt-1 text-xs text-slate-500">
                                            {{ $faker['position'] }}
                                        </div>
                                    </div>
                                    <div class="ml-auto flex gap-2.5">
                                        <x-base.tippy
                                            class="flex h-7 w-7 items-center justify-center rounded-full border border-primary/40 bg-primary/5"
                                            as="a"
                                            content="Call"
                                        >
                                            <x-base.lucide
                                                class="h-3 w-3 fill-primary/10 text-primary"
                                                icon="Phone"
                                            />
                                        </x-base.tippy>
                                        <x-base.tippy
                                            class="flex h-7 w-7 items-center justify-center rounded-full border border-primary/40 bg-primary/5"
                                            as="a"
                                            content="Send a message"
                                        >
                                            <x-base.lucide
                                                class="h-3 w-3 fill-primary/10 text-primary"
                                                icon="Mail"
                                            />
                                        </x-base.tippy>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-col gap-x-6 gap-y-10 md:col-span-6 xl:col-span-4">
                    <div class="box box--stacked p-5">
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div
                                    class="image-fit h-20 w-20 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="POS System"
                                    />
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="max-w-[12rem] truncate text-base font-medium md:max-w-none">
                                    {{ $events[0]['title'] }}
                                </div>
                                <div
                                    class="mt-1 flex max-w-[12rem] items-center gap-1.5 truncate text-slate-500 md:max-w-none">
                                    <x-base.lucide
                                        class="h-4 w-4 stroke-[1.3]"
                                        icon="MapPin"
                                    />
                                    {{ $events[0]['location'] }}
                                </div>
                                <div
                                    class="mt-1 flex max-w-[12rem] items-center gap-1.5 truncate text-slate-500 md:max-w-none">
                                    <x-base.lucide
                                        class="h-4 w-4 stroke-[1.3]"
                                        icon="Building"
                                    />
                                    {{ $events[0]['organizer'] }}
                                </div>
                            </div>
                        </div>
                        <x-base.button
                            class="mt-5 w-full"
                            type="button"
                            rounded
                            variant="primary"
                        >
                            View Details
                        </x-base.button>
                        <x-base.button
                            class="mt-2 w-full"
                            type="button"
                            rounded
                            variant="outline-primary"
                        >
                            Dismiss
                        </x-base.button>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div
                                    class="image-fit h-20 w-20 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($products[0]['images'][0]['path']) }}"
                                        alt="POS System"
                                    />
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="max-w-[12rem] truncate text-base font-medium md:max-w-none">
                                    Celestial Shopping Extravaganza
                                </div>
                                <div class="mt-0.5 max-w-[11rem] truncate text-slate-500 md:max-w-none">
                                    {{ $products[0]['name'] }}
                                </div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base font-medium text-primary">
                                        ${{ formatCurrency($products[0]['price']) }}
                                    </div>
                                    <a
                                        class="ml-auto"
                                        href=""
                                    >
                                        <x-base.lucide
                                            class="h-5 w-5 fill-pending/30 stroke-[1] text-pending"
                                            icon="Heart"
                                        />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex flex-col items-center">
                            <div>
                                <div
                                    class="image-fit h-28 w-28 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="POS System"
                                    />
                                </div>
                            </div>
                            <div class="mt-3 text-base font-medium">
                                {{ $users[0]['name'] }}
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                {{ $users[0]['position'] }}
                            </div>
                            <div class="mt-5 flex items-center gap-2">
                                <div class="flex items-center gap-1.5">
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                        icon="MapPin"
                                    />
                                    <div class="max-w-[6rem] truncate md:max-w-none">
                                        {{ $users[0]['location'] }}
                                    </div>
                                </div>
                                <div class="mx-1.5 h-1.5 w-1.5 rounded-full bg-slate-300"></div>
                                <div class="flex items-center gap-1.5">
                                    <x-base.lucide
                                        class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                        icon="Phone"
                                    />
                                    <div class="max-w-[6rem] truncate md:max-w-none">
                                        {{ $users[0]['phone'] }}
                                    </div>
                                </div>
                            </div>
                            <x-base.button
                                class="mt-5 w-full"
                                type="button"
                                rounded
                                variant="primary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="Mail"
                                />
                                Send Message
                            </x-base.button>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div
                            class="image-fit h-48 overflow-hidden rounded-lg before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/60 before:to-theme-2/5">
                            <img
                                class="rounded-md saturate-150"
                                src="{{ Vite::asset('resources/images/miscellaneous/robot.jpg') }}"
                                alt="POS System"
                            />
                        </div>
                        <div class="mt-5 text-slate-500">
                            {{ $posts[0]['date'] }}
                        </div>
                        <div class="mt-2 text-base font-medium">
                            {{ $posts[0]['title'] }}
                        </div>
                        <div class="mt-2 leading-relaxed">
                            {{ collect(explode(' ', $posts[0]['content']))->take(30)->join(' ') }}
                            ...
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="flex flex-col items-center py-3">
                            <div
                                class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-b from-theme-1/70 to-theme-2/70">
                                <div class="flex h-3/4 w-3/4 items-center justify-center rounded-full bg-white">
                                    <x-base.lucide
                                        class="h-10 w-10 stroke-[1.3] text-theme-1"
                                        icon="ArrowUp"
                                    />
                                </div>
                            </div>
                            <div class="mt-5 text-base font-medium">Upload Photos</div>
                            <div class="mt-0.5 text-slate-500">
                                Drag and drop photo here or
                                <a
                                    class="text-primary"
                                    href=""
                                >
                                    select files
                                </a>
                                .
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="mb-5 flex items-center gap-3.5 border-b border-dashed pb-5">
                            <div>
                                <div class="image-fit h-10 w-10 overflow-hidden rounded-full border-2 border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="POS System"
                                    />
                                </div>
                            </div>
                            <div>
                                <div class="max-w-[9rem] truncate font-medium md:max-w-none">
                                    {{ $events[0]['title'] }}
                                </div>
                                <div class="mt-0.5 text-xs text-slate-500">
                                    {{ $events[0]['location'] }}
                                </div>
                            </div>
                            <div class="ml-auto flex gap-2">
                                <x-base.tippy
                                    class="flex h-7 w-7 items-center justify-center rounded-full border border-primary/40 bg-primary/5"
                                    as="a"
                                    content="Call"
                                >
                                    <x-base.lucide
                                        class="h-3 w-3 fill-primary/10 text-primary"
                                        icon="Phone"
                                    />
                                </x-base.tippy>
                                <x-base.tippy
                                    class="flex h-7 w-7 items-center justify-center rounded-full border border-primary/40 bg-primary/5"
                                    as="a"
                                    content="Send a message"
                                >
                                    <x-base.lucide
                                        class="h-3 w-3 fill-primary/10 text-primary"
                                        icon="Mail"
                                    />
                                </x-base.tippy>
                            </div>
                        </div>
                        <div class="flex flex-col items-center gap-2.5 sm:flex-row">
                            We will notify you about the updates.
                            <x-base.button
                                class="h-6 sm:ml-auto"
                                variant="primary"
                                size="sm"
                            >
                                More Details
                            </x-base.button>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-col gap-x-6 gap-y-10 md:col-span-6 xl:col-span-4">
                    <div class="box box--stacked p-5">
                        <div class="text-xs text-slate-500">UPCOMING</div>
                        <div class="mt-1 text-base font-medium">
                            {{ $posts[0]['title'] }}
                        </div>
                        <a
                            class="hover mt-5 flex items-center rounded-lg border border-slate-200/70 bg-slate-100 px-5 py-4 hover:bg-slate-200/50"
                            href=""
                        >
                            <x-base.lucide
                                class="h-5 w-5 fill-primary/5 stroke-[1] text-primary"
                                icon="MapPin"
                            />
                            <div class="ml-3.5">
                                <div class="font-medium">
                                    {{ $events[0]['location'] }}
                                </div>
                                <div class="mt-1 text-slate-500">
                                    {{ $events[0]['date'] }}
                                </div>
                            </div>
                            <x-base.lucide
                                class="ml-auto h-6 w-6 stroke-[1] text-primary/80"
                                icon="ChevronRight"
                            />
                        </a>
                        <div class="mt-6 flex items-center justify-center">
                            <div class="flex">
                                @foreach ($products->take(4) as $fakerKey => $faker)
                                    <div class="image-fit zoom-in -ml-3.5 h-10 w-10 first:ml-0">
                                        <x-base.tippy
                                            class="rounded-full border-2 border-white"
                                            src="{{ Vite::asset($faker['images'][0]['path']) }}"
                                            alt="POS System"
                                            as="img"
                                            content="{{ $faker['name'] }}"
                                        />
                                    </div>
                                @endforeach
                            </div>
                            <div class="ml-3">
                                {{ explode(' ', $users[0]['name'])[0] }},
                                {{ explode(' ', $users[0]['name'])[0] }}, and
                                <a
                                    class="ml-1 text-primary"
                                    href=""
                                >
                                    2 others
                                </a>
                                .
                            </div>
                        </div>
                        <x-base.button
                            class="mt-5 w-full"
                            type="button"
                            rounded
                            variant="primary"
                        >
                            Create Meeting Schedule
                        </x-base.button>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="relative">
                            <div
                                class="image-fit h-96 overflow-hidden rounded-lg before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-5/6 before:w-full before:bg-gradient-to-t before:from-transparent before:to-theme-2/70">
                                <img
                                    class="rounded-md saturate-150"
                                    src="{{ Vite::asset('resources/images/miscellaneous/mountain.jpg') }}"
                                    alt="POS System"
                                />
                            </div>
                            <div class="absolute inset-0 z-10 -mt-10 flex flex-col items-center justify-center gap-2">
                                <div class="text-base text-white/90">
                                    Today, 24 May 2046
                                </div>
                                <div class="text-6xl text-white">
                                    {{ mt_rand(20, 35) }}°C
                                </div>
                                <div class="text-base text-white/90">Cloudy</div>
                                <x-base.loading-icon
                                    class="mt-10 h-10 w-10"
                                    color="white"
                                    icon="oval"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="box box--stacked">
                        <div class="flex flex-col items-center px-5 pb-7 pt-5">
                            <div>
                                <div
                                    class="image-fit h-28 w-28 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="POS System"
                                    />
                                </div>
                            </div>
                            <div class="mt-3 text-base font-medium">
                                {{ $users[0]['name'] }}
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                {{ $users[0]['position'] }}
                            </div>
                            <div class="mt-6 flex items-center px-2">
                                <div class="w-full text-center">
                                    <div class="font-medium">15</div>
                                    <div class="mt-0.5 text-slate-500">Projects</div>
                                </div>
                                <div class="mx-5 h-7 w-px border-l border-dashed border-slate-300/70 sm:mx-7"></div>
                                <div class="w-full text-center">
                                    <div class="font-medium">Full Time</div>
                                    <div class="mt-0.5 text-slate-500">Employment</div>
                                </div>
                                <div class="mx-5 h-7 w-px border-l border-dashed border-slate-300/70 sm:mx-7"></div>
                                <div class="w-full text-center">
                                    <div class="font-medium">4.5/5</div>
                                    <div class="mt-0.5 text-slate-500">Rating</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center rounded-b-lg border-t border-slate-200/80 bg-slate-50 p-5">
                            <div class="mx-14 text-center leading-relaxed">
                                How is your project experience with
                                <a
                                    class="text-primary"
                                    href=""
                                >
                                    {{ explode(' ', $users[0]['name'])[0] }}
                                </a>
                                ?
                            </div>
                            <div class="mt-3.5 flex items-center">
                                <x-base.lucide
                                    class="mr-1 h-6 w-6 fill-pending/30 text-pending"
                                    icon="Star"
                                />
                                <x-base.lucide
                                    class="mr-1 h-6 w-6 fill-pending/30 text-pending"
                                    icon="Star"
                                />
                                <x-base.lucide
                                    class="mr-1 h-6 w-6 fill-pending/30 text-pending"
                                    icon="Star"
                                />
                                <x-base.lucide
                                    class="mr-1 h-6 w-6 fill-pending/30 text-pending"
                                    icon="Star"
                                />
                                <x-base.lucide
                                    class="fill-slate/30 mr-1 h-6 w-6 text-slate-400"
                                    icon="Star"
                                />
                            </div>
                            <x-base.button
                                class="mt-6 w-full"
                                type="button"
                                rounded
                                variant="primary"
                            >
                                Give a Rate
                            </x-base.button>
                        </div>
                    </div>
                    <div class="box box--stacked p-5">
                        <div class="text-base font-medium">
                            Category Recommendations
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2.5">
                            @foreach ($categories as $fakerKey => $faker)
                                <a
                                    href=""
                                    @class([
                                        'px-2.5 py-0.5 border rounded-md bg-primary/5 border-primary/10 text-primary [&.active]:bg-primary/90 [&.active]:text-white',
                                        'active' => !mt_rand(0, 1),
                                    ])
                                >
                                    {{ $faker['name'] }}
                                </a>
                            @endforeach
                        </div>
                        <x-base.button
                            class="mt-6 w-full"
                            type="button"
                            rounded
                            variant="outline-primary"
                        >
                            Choose Categories
                        </x-base.button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
