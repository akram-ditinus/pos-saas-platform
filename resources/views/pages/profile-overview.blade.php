@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>POS System</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="box box--stacked flex flex-col p-1.5">
                <div class="relative h-48 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
                    <div @class([
                        'w-full h-full relative overflow-hidden',
                        "before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem]",
                        "after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]",
                    ])></div>
                    <div class="absolute inset-x-0 top-0 w-32 h-32 mx-auto mt-24">
                        <div class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
                            <img
                                src="{{ Vite::asset($users[0]['photo']) }}"
                                alt="POS System"
                            />
                        </div>
                        <div
                            class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-success">
                        </div>
                    </div>
                </div>
                <div class="rounded-[0.6rem] bg-slate-50 pb-6 pt-12">
                    <div class="flex items-center justify-center text-xl font-medium">
                        {{ $users[0]['name'] }}
                        <x-base.lucide
                            class="w-5 h-5 ml-2 text-blue-500 fill-blue-500/30"
                            icon="BadgeCheck"
                        />
                    </div>
                    <div class="mt-2.5 flex flex-col items-center justify-center gap-x-5 gap-y-2 sm:flex-row">
                        <div class="flex items-center text-slate-500">
                            <x-base.lucide
                                class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                icon="Briefcase"
                            />
                            {{ $users[0]['department'] }}
                        </div>
                        <div class="flex items-center text-slate-500">
                            <x-base.lucide
                                class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                icon="MountainSnow"
                            />
                            <a href="">{{ $users[0]['location'] }}</a>
                        </div>
                        <div class="flex items-center text-slate-500">
                            <x-base.lucide
                                class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                icon="Signal"
                            />
                            {{ $users[0]['phone'] }}
                        </div>
                    </div>
                </div>
            </div>
            <x-base.tab.group class="mt-10">
                <div class="flex flex-col gap-y-3 2xl:flex-row 2xl:items-center">
                    <x-base.tab.list
                        class="box mr-auto w-full flex-col rounded-[0.6rem] border-slate-200 bg-white sm:flex-row 2xl:w-auto"
                        variant="boxed-tabs"
                    >
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                            id="example-1-tab"
                            selected="{{ is_null(request()->query('page')) }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Profile
                            </x-base.tab.button>
                        </x-base.tab>
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                            id="example-2-tab"
                            selected="{{ request()->query('page') === 'events' }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Events
                                <div
                                    class="ml-2 flex h-5 items-center justify-center rounded-full border border-theme-1/10 bg-theme-1/10 px-1.5 text-xs font-medium text-theme-1/70">
                                    7
                                </div>
                            </x-base.tab.button>
                        </x-base.tab>
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                            id="example-3-tab"
                            selected="{{ request()->query('page') === 'achievements' }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Achievements
                            </x-base.tab.button>
                        </x-base.tab>
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                            id="example-4-tab"
                            selected="{{ request()->query('page') === 'contacts' }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Contacts
                                <div
                                    class="ml-2 flex h-5 items-center justify-center rounded-full border border-theme-1/10 bg-theme-1/10 px-1.5 text-xs font-medium text-theme-1/70">
                                    5
                                </div>
                            </x-base.tab.button>
                        </x-base.tab>
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                            id="example-5-tab"
                            selected="{{ request()->query('page') === 'default' }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Default
                            </x-base.tab.button>
                        </x-base.tab>
                    </x-base.tab.list>
                    <div class="flex items-center gap-3 2xl:ml-auto">
                        <x-base.menu class="mr-auto 2xl:mr-0">
                            <x-base.menu.button
                                class="rounded-[0.6rem] bg-white py-3"
                                as="x-base.button"
                                variant="secondary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="Download"
                                />
                                <span class="max-w-[3.8rem] truncate sm:max-w-none">
                                    Share Profile
                                </span>
                                <x-base.lucide
                                    class="ml-2 h-4 w-4 stroke-[1.3]"
                                    icon="ChevronDown"
                                />
                            </x-base.menu.button>
                            <x-base.menu.items class="w-48">
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="w-4 h-4 mr-2"
                                        icon="Linkedin"
                                    /> Share to
                                    Linkedin
                                </x-base.menu.item>
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="w-4 h-4 mr-2"
                                        icon="Facebook"
                                    />
                                    Share to Facebook
                                </x-base.menu.item>
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="w-4 h-4 mr-2"
                                        icon="Twitter"
                                    />
                                    Share to Twitter
                                </x-base.menu.item>
                            </x-base.menu.items>
                        </x-base.menu>
                        <x-base.popover class="inline-block">
                            <x-base.popover.button
                                class="rounded-[0.6rem] bg-white py-3"
                                as="x-base.button"
                                variant="outline-secondary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="ArrowDownWideNarrow"
                                />
                                Teams
                                <div
                                    class="ml-2 flex h-5 items-center justify-center rounded-full border bg-slate-100 px-1.5 text-xs font-medium">
                                    42
                                </div>
                            </x-base.popover.button>
                            <x-base.popover.panel placement="bottom-end">
                                <div class="p-2">
                                    <div>
                                        <div class="text-left">Invite by Email</div>
                                        <x-base.form-input
                                            class="flex-1 mt-2"
                                            type="text"
                                            placeholder="{{ $users[1]['email'] }}"
                                        />
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <x-base.button
                                            class="w-32 ml-auto"
                                            variant="secondary"
                                        >
                                            Close
                                        </x-base.button>
                                        <x-base.button
                                            class="w-32 ml-2"
                                            variant="primary"
                                        >
                                            Search
                                        </x-base.button>
                                    </div>
                                </div>
                            </x-base.popover.panel>
                        </x-base.popover>
                        <x-base.menu>
                            <x-base.menu.button
                                class="rounded-[0.6rem] bg-white py-3 text-[0.94rem]"
                                as="x-base.button"
                                variant="secondary"
                            >
                                <div class="flex items-center justify-center w-5 h-5">
                                    <x-base.lucide
                                        class="h-4 w-4 stroke-[1.3]"
                                        icon="MoreVertical"
                                    />
                                </div>
                            </x-base.menu.button>
                            <x-base.menu.items class="w-44">
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="w-4 h-4 mr-2"
                                        icon="Settings"
                                    /> Settings
                                </x-base.menu.item>
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="w-4 h-4 mr-2"
                                        icon="Contact"
                                    /> Contacts
                                </x-base.menu.item>
                                <x-base.menu.item class="text-danger">
                                    <x-base.lucide
                                        class="w-4 h-4 mr-2"
                                        icon="Lock"
                                    />
                                    Lock Account
                                </x-base.menu.item>
                            </x-base.menu.items>
                        </x-base.menu>
                    </div>
                </div>
                <x-base.tab.panels>
                    <x-base.tab.panel
                        id="example-1"
                        selected="{{ is_null(request()->query('page')) }}"
                    >
                        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7">
                            <div class="col-span-12 xl:col-span-8">
                                <div class="flex flex-col gap-y-7">
                                    <div class="flex flex-col p-5 box box--stacked">
                                        <div
                                            class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                            Activity Feed
                                        </div>
                                        <div class="-my-3">
                                            <div
                                                class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                @foreach ($activities->take(5) as $fakerKey => $faker)
                                                    <div @class([
                                                        'mb-3 last:mb-0 relative',
                                                        "first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute",
                                                        "last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0",
                                                    ])>
                                                        <div @class([
                                                            'px-4 py-3 ml-8',
                                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                                        ])>
                                                            <a
                                                                class="font-medium text-primary"
                                                                href=""
                                                            >
                                                                {{ $faker['activity'] }}
                                                            </a>
                                                            <div
                                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                {{ $faker['activityDetails'] }}
                                                                <span @class([
                                                                    'group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0',
                                                                    '[&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10',
                                                                    '[&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10',
                                                                    '[&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10',
                                                                    '[&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10',
                                                                    ['primary', 'success', 'warning', 'info'][mt_rand(0, 3)],
                                                                ])>
                                                                    <span
                                                                        class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"
                                                                    ></span>
                                                                    <span class="-mt-px">
                                                                        {{ $faker['statusBadge'] }}
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            @if (isset($uploadedFiles))
                                                                <div class="my-3.5 grid grid-cols-1 gap-4 lg:grid-cols-3">
                                                                    @foreach ($uploadedFiles as $fakerKey => $faker)
                                                                        <div
                                                                            class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                            <x-base.file-icon
                                                                                class="w-10"
                                                                                variant="directory"
                                                                            />
                                                                            <div class="ml-3.5 mr-auto">
                                                                                <div
                                                                                    class="max-w-[8rem] truncate font-medium text-primary">
                                                                                    {{ $faker['filename'] }}
                                                                                </div>
                                                                                <div class="mt-1 text-xs text-slate-500">
                                                                                    {{ $faker['size'] }}
                                                                                </div>
                                                                            </div>
                                                                            <x-base.menu>
                                                                                <x-base.menu.button
                                                                                    class="w-5 h-5 text-slate-500"
                                                                                >
                                                                                    <x-base.lucide
                                                                                        class="w-4 h-4"
                                                                                        icon="MoreVertical"
                                                                                    />
                                                                                </x-base.menu.button>
                                                                                <x-base.menu.items class="w-40">
                                                                                    <x-base.menu.item>
                                                                                        <x-base.lucide
                                                                                            class="w-4 h-4 mr-2"
                                                                                            icon="Copy"
                                                                                        />
                                                                                        Copy Link
                                                                                    </x-base.menu.item>
                                                                                    <x-base.menu.item>
                                                                                        <x-base.lucide
                                                                                            class="w-4 h-4 mr-2"
                                                                                            icon="Trash"
                                                                                        />
                                                                                        Delete
                                                                                    </x-base.menu.item>
                                                                                </x-base.menu.items>
                                                                            </x-base.menu>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @endif
                                                            @if (isset($faker['images']))
                                                                <div
                                                                    class="my-3.5 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-1/2">
                                                                    <div
                                                                        class="grid grid-cols-1 overflow-hidden rounded-[0.6rem] md:grid-cols-3">
                                                                        <div
                                                                            class="image-fit h-24 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                            <x-base.image-zoom
                                                                                src="{{ Vite::asset($faker['images'][0]) }}"
                                                                                alt="POS System"
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="image-fit h-24 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                            <x-base.image-zoom
                                                                                src="{{ Vite::asset($faker['images'][1]) }}"
                                                                                alt="POS System"
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="image-fit h-24 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                            <x-base.image-zoom
                                                                                src="{{ Vite::asset($faker['images'][2]) }}"
                                                                                alt="POS System"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                {{ $faker['date'] }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-10 lg:grid-cols-2">
                                        <div class="flex flex-col p-5 box box--stacked">
                                            <div
                                                class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                Recent Messages
                                            </div>
                                            <div class="flex flex-col gap-5">
                                                @foreach ($messages->take(5) as $fakerKey => $faker)
                                                    <div class="flex items-center">
                                                        <div class="relative w-12 h-12">
                                                            <div
                                                                class="image-fit h-full w-full overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                                <img
                                                                    src="{{ Vite::asset($faker['sender']['photo']) }}"
                                                                    alt="POS System"
                                                                />
                                                            </div>
                                                            <div
                                                                class="box absolute bottom-0 right-0 mb-1 mr-1 h-2.5 w-2.5 rounded-full border border-white bg-success">
                                                            </div>
                                                        </div>
                                                        <div class="ml-3.5">
                                                            <div class="font-medium">
                                                                {{ $faker['sender']['name'] }}
                                                            </div>
                                                            <div class="mt-0.5 text-xs text-slate-500">
                                                                {{ $faker['content'] }}
                                                            </div>
                                                        </div>
                                                        <div class="relative ml-auto h-7 w-7">
                                                            <x-base.form-check.input
                                                                class="absolute z-10 w-full h-full opacity-0 peer"
                                                                type="checkbox"
                                                                value="checked"
                                                            />
                                                            <div
                                                                class="absolute inset-0 flex items-center justify-center m-auto text-white transition-all border rounded-full opacity-0 h-7 w-7 border-theme-1 bg-theme-1/80 peer-checked:opacity-100">
                                                                <x-base.lucide
                                                                    class="h-3 w-3 stroke-[1.5]"
                                                                    icon="MailCheck"
                                                                />
                                                            </div>
                                                            <div
                                                                class="absolute inset-0 flex items-center justify-center m-auto transition-all border rounded-full h-7 w-7 border-theme-1/20 bg-theme-1/5 text-primary peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-theme-1/10">
                                                                <x-base.lucide
                                                                    class="h-3 w-3 stroke-[1.5]"
                                                                    icon="MailPlus"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <x-base.button
                                                class="w-full mt-5 bg-white border-dashed border-primary/20 text-primary hover:bg-primary/20"
                                                variant="primary"
                                            >
                                                View All Messages
                                                <x-base.lucide
                                                    class="ml-2 h-4 w-4 stroke-[1.3]"
                                                    icon="ArrowRight"
                                                />
                                            </x-base.button>
                                        </div>
                                        <div class="flex flex-col p-5 box box--stacked">
                                            <div
                                                class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                Upcoming Events
                                            </div>
                                            <div class="flex flex-col gap-5">
                                                @foreach ($events->take(5) as $fakerKey => $faker)
                                                    <div class="flex items-center">
                                                        <div class="relative w-12 h-12">
                                                            <div
                                                                class="flex items-center justify-center w-full h-full overflow-hidden border-2 rounded-full border-slate-200/40 bg-theme-1/5">
                                                                <x-base.lucide
                                                                    class="w-4 h-4 fill-theme-1/10 text-theme-1"
                                                                    icon="{{ $faker['icon'] }}"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="ml-3.5">
                                                            <div class="font-medium">
                                                                {{ $faker['title'] }}
                                                            </div>
                                                            <div class="mt-0.5 text-xs text-slate-500">
                                                                {{ $faker['location'] }}
                                                            </div>
                                                        </div>
                                                        <div class="relative ml-auto h-7 w-7">
                                                            <x-base.form-check.input
                                                                class="absolute z-10 w-full h-full opacity-0 peer"
                                                                type="checkbox"
                                                                value="checked"
                                                            />
                                                            <div
                                                                class="absolute inset-0 flex items-center justify-center m-auto text-white transition-all border rounded-full opacity-0 h-7 w-7 border-theme-1 bg-theme-1/80 peer-checked:opacity-100">
                                                                <x-base.lucide
                                                                    class="h-3 w-3 stroke-[1.5]"
                                                                    icon="Check"
                                                                />
                                                            </div>
                                                            <div
                                                                class="absolute inset-0 flex items-center justify-center m-auto transition-all border rounded-full h-7 w-7 border-theme-1/20 bg-theme-1/5 text-primary peer-checked:opacity-0 peer-hover:rotate-180 peer-hover:bg-theme-1/10">
                                                                <x-base.lucide
                                                                    class="h-3 w-3 stroke-[1.5]"
                                                                    icon="Plus"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <x-base.button
                                                class="w-full mt-5 bg-white border-dashed border-primary/20 text-primary hover:bg-primary/20"
                                                variant="primary"
                                            >
                                                View All Events
                                                <x-base.lucide
                                                    class="ml-2 h-4 w-4 stroke-[1.3]"
                                                    icon="ArrowRight"
                                                />
                                            </x-base.button>
                                        </div>
                                    </div>
                                    <div class="flex flex-col box box--stacked">
                                        <div class="p-5 font-medium">Projects</div>
                                        <div class="overflow-auto xl:overflow-visible">
                                            <x-base.table
                                                classe
                                                class="border-b border-dashed border-slate-200/80"
                                            >
                                                <x-base.table.thead>
                                                    <x-base.table.tr>
                                                        <x-base.table.td
                                                            class="py-4 font-medium border-t border-slate-200/60 bg-slate-50 text-slate-500"
                                                        >
                                                            Title
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="py-4 font-medium border-t border-slate-200/60 bg-slate-50 text-slate-500"
                                                        >
                                                            Progress
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="py-4 font-medium border-t border-slate-200/60 bg-slate-50 text-slate-500"
                                                        >
                                                            Contributors
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                </x-base.table.thead>
                                                <x-base.table.tbody>
                                                    @foreach ($projectDetails->take(5) as $fakerKey => $faker)
                                                        <x-base.table.tr class="[&_td]:last:border-b-0">
                                                            <x-base.table.td
                                                                class="py-4 border-dashed dark:bg-darkmode-600"
                                                            >
                                                                <div class="flex items-center">
                                                                    <div class="image-fit zoom-in h-9 w-9">
                                                                        <x-base.tippy
                                                                            class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                            src="{{ Vite::asset($faker['image']) }}"
                                                                            alt="POS System"
                                                                            as="img"
                                                                            content="{{ $faker['title'] }}"
                                                                        />
                                                                    </div>
                                                                    <div class="ml-3.5">
                                                                        <a
                                                                            class="font-medium whitespace-nowrap"
                                                                            href=""
                                                                        >
                                                                            {{ $faker['title'] }}
                                                                        </a>
                                                                        <a
                                                                            class="mt-0.5 block whitespace-nowrap text-xs text-slate-500"
                                                                            href=""
                                                                        >
                                                                            {{ $faker['link'] }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </x-base.table.td>
                                                            <x-base.table.td
                                                                class="py-4 border-dashed dark:bg-darkmode-600"
                                                            >
                                                                <div class="w-40">
                                                                    <div class="text-xs text-slate-500">
                                                                        {{ mt_rand(50, 100) }}%
                                                                    </div>
                                                                    <div
                                                                        class="mt-1.5 flex h-1 rounded-sm border bg-slate-50">
                                                                        <div @class([
                                                                            'first:rounded-l-sm last:rounded-r-sm border border-primary/20 -m-px bg-primary/40',
                                                                            ['w-[35%]', 'w-[45%]', 'w-[55%]', 'w-[65%]', 'w-[75%]'][mt_rand(0, 4)],
                                                                        ])></div>
                                                                    </div>
                                                                </div>
                                                            </x-base.table.td>
                                                            <x-base.table.td
                                                                class="py-4 border-dashed dark:bg-darkmode-600"
                                                            >
                                                                <div class="whitespace-nowrap">
                                                                    <div
                                                                        class="flex items-center justify-center mt-4 sm:justify-start">
                                                                        <div class="flex">
                                                                            <div class="w-6 h-6 image-fit zoom-in">
                                                                                <x-base.tippy
                                                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                                    src="{{ Vite::asset($faker['contributors'][0]['photo']) }}"
                                                                                    alt="POS System"
                                                                                    as="img"
                                                                                    content="{{ $faker['contributors'][0]['name'] }}"
                                                                                />
                                                                            </div>
                                                                            <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                                                <x-base.tippy
                                                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                                    src="{{ Vite::asset($faker['contributors'][1]['photo']) }}"
                                                                                    alt="POS System"
                                                                                    as="img"
                                                                                    content="{{ $faker['contributors'][1]['name'] }}"
                                                                                />
                                                                            </div>
                                                                            <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                                                <x-base.tippy
                                                                                    class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                                    src="{{ Vite::asset($faker['contributors'][2]['photo']) }}"
                                                                                    alt="POS System"
                                                                                    as="img"
                                                                                    content="{{ $faker['contributors'][2]['name'] }}"
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                        <div class="ml-3 text-xs text-slate-500">
                                                                            4+ Members
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </x-base.table.td>
                                                        </x-base.table.tr>
                                                    @endforeach
                                                </x-base.table.tbody>
                                            </x-base.table>
                                        </div>
                                        <div class="p-5">
                                            <x-base.button
                                                class="w-full bg-white border-dashed border-primary/20 text-primary hover:bg-primary/20"
                                                variant="primary"
                                            >
                                                View All Projects
                                                <x-base.lucide
                                                    class="ml-2 h-4 w-4 stroke-[1.3]"
                                                    icon="ArrowRight"
                                                />
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative col-span-12 row-start-1 xl:col-span-4 xl:col-start-9">
                                <div class="sticky top-[6.2rem] flex flex-col gap-y-7">
                                    <div class="flex flex-col p-5 box box--stacked">
                                        <div>Complete your profile (83%)</div>
                                        <div class="mt-3.5 flex h-2">
                                            <div
                                                class="h-full w-[60%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r">
                                            </div>
                                            <div
                                                class="h-full w-[40%] border border-slate-300 bg-slate-100 first:rounded-l last:rounded-r">
                                            </div>
                                        </div>
                                        <x-base.button
                                            class="w-full mt-5 bg-white border-primary/20 text-primary hover:bg-primary/20"
                                            variant="primary"
                                        >
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                                icon="Inbox"
                                            />
                                            Profile Settings
                                        </x-base.button>
                                    </div>
                                    <div class="flex flex-col p-5 box box--stacked">
                                        <div
                                            class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                            Profile
                                        </div>
                                        <div class="flex flex-col gap-8">
                                            <div>
                                                <div class="text-xs uppercase text-slate-500">
                                                    Personal Data
                                                </div>
                                                <div class="mt-3.5">
                                                    <div class="flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Clipboard"
                                                        />
                                                        Department: {{ $users[0]['department'] }}
                                                    </div>
                                                    <div class="flex items-center mt-3">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Calendar"
                                                        />
                                                        Location: {{ $users[0]['location'] }}
                                                    </div>
                                                    <div class="flex items-center mt-3">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Clock"
                                                        />
                                                        Manager:
                                                        <div
                                                            class="ml-1 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                                                            <span class="-mt-px">
                                                                {{ $users[0]['manager'] }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center mt-3">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Map"
                                                        />
                                                        Position: {{ $users[0]['position'] }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="text-xs uppercase text-slate-500">
                                                    Contacts
                                                </div>
                                                <div class="mt-3.5">
                                                    <div class="flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Clipboard"
                                                        />
                                                        Email:
                                                        <a
                                                            class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                            href=""
                                                        >
                                                            {{ $users[0]['email'] }}
                                                        </a>
                                                    </div>
                                                    <div class="flex items-center mt-3">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Calendar"
                                                        />
                                                        Phone Number:
                                                        <a
                                                            class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                            href=""
                                                        >
                                                            {{ $users[0]['phone'] }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="text-xs uppercase text-slate-500">
                                                    Statistics
                                                </div>
                                                <div class="mt-3.5">
                                                    <div class="flex items-center mt-3">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Clock"
                                                        />
                                                        Teams:
                                                        <div
                                                            class="ml-1 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                                                            <span class="-mt-px">5 Members</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center mt-3">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Map"
                                                        />
                                                        Projects:
                                                        <a
                                                            class="ml-1 underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                            href=""
                                                        >
                                                            {{ $projectDetails[0]['title'] }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-base.tab.panel>
                    <x-base.tab.panel
                        id="example-2"
                        selected="{{ request()->query('page') === 'events' }}"
                    >
                        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                            @foreach ($events->take(9) as $fakerKey => $faker)
                                <div class="flex flex-col col-span-12 p-5 box box--stacked md:col-span-6 xl:col-span-4">
                                    <a
                                        class="text-[0.94rem] font-medium text-primary"
                                        href=""
                                    >
                                        {{ $faker['title'] }}
                                    </a>
                                    <div class="mt-1 mb-5 leading-relaxed text-slate-500">
                                        {{ $faker['description'] }}
                                    </div>
                                    <x-base.menu class="absolute top-0 right-0 mt-5 mr-5">
                                        <x-base.menu.button class="w-5 h-5 text-slate-500">
                                            <x-base.lucide
                                                class="w-5 h-5 fill-slate-400/70 stroke-slate-400/70"
                                                icon="MoreVertical"
                                            />
                                        </x-base.menu.button>
                                        <x-base.menu.items class="w-40">
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="w-4 h-4 mr-2"
                                                    icon="Copy"
                                                /> Copy
                                                Link
                                            </x-base.menu.item>
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="w-4 h-4 mr-2"
                                                    icon="Trash"
                                                />
                                                Delete
                                            </x-base.menu.item>
                                        </x-base.menu.items>
                                    </x-base.menu>
                                    <div
                                        class="flex flex-col gap-3 pt-5 mt-auto border-t border-dashed border-slate-300/70">
                                        <div class="flex items-center">
                                            <div class="text-slate-500">Organizer:</div>
                                            <div class="ml-auto">
                                                <div
                                                    class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                    <span class="-mt-px">{{ $faker['organizer'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="text-slate-500">Available Seats:</div>
                                            <div class="ml-auto">
                                                <div class="flex items-center">
                                                    <x-base.lucide
                                                        icon="Armchair"
                                                        @class([
                                                            'w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&.active]:text-pending/80 [&.active]:fill-pending/10',
                                                            'active' => $faker['availableSeats'] >= 1,
                                                        ])
                                                    />
                                                    <x-base.lucide
                                                        icon="Armchair"
                                                        @class([
                                                            'w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&.active]:text-pending/80 [&.active]:fill-pending/10',
                                                            'active' => $faker['availableSeats'] >= 2,
                                                        ])
                                                    />
                                                    <x-base.lucide
                                                        icon="Armchair"
                                                        @class([
                                                            'w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&.active]:text-pending/80 [&.active]:fill-pending/10',
                                                            'active' => $faker['availableSeats'] >= 3,
                                                        ])
                                                    />
                                                    <x-base.lucide
                                                        icon="Armchair"
                                                        @class([
                                                            'w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&.active]:text-pending/80 [&.active]:fill-pending/10',
                                                            'active' => $faker['availableSeats'] >= 4,
                                                        ])
                                                    />
                                                    <x-base.lucide
                                                        icon="Armchair"
                                                        @class([
                                                            'w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&.active]:text-pending/80 [&.active]:fill-pending/10',
                                                            'active' => $faker['availableSeats'] >= 5,
                                                        ])
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="text-slate-500">Time:</div>
                                            <div class="ml-auto text-slate-500">
                                                {{ $faker['time'] }}
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="text-slate-500">Attendees:</div>
                                            <div class="ml-auto">
                                                <div class="flex items-center justify-center">
                                                    <div class="w-6 h-6 image-fit zoom-in">
                                                        <x-base.tippy
                                                            class="border-2 border-white rounded-full"
                                                            src="{{ Vite::asset($faker['attendees'][0]['photo']) }}"
                                                            alt="POS System"
                                                            as="img"
                                                            content="{{ 'Uploaded at' . $faker['attendees'][0]['name'] }}"
                                                        />
                                                    </div>
                                                    <div class="w-6 h-6 -ml-2 image-fit zoom-in">
                                                        <x-base.tippy
                                                            class="border-2 border-white rounded-full"
                                                            src="{{ Vite::asset($faker['attendees'][1]['photo']) }}"
                                                            alt="POS System"
                                                            as="img"
                                                            content="{{ 'Uploaded at' . $faker['attendees'][1]['name'] }}"
                                                        />
                                                    </div>
                                                    <div class="w-6 h-6 -ml-2 image-fit zoom-in">
                                                        <x-base.tippy
                                                            class="border-2 border-white rounded-full"
                                                            src="{{ Vite::asset($faker['attendees'][2]['photo']) }}"
                                                            alt="POS System"
                                                            as="img"
                                                            content="{{ 'Uploaded at' . $faker['attendees'][2]['name'] }}"
                                                        />
                                                    </div>
                                                    <div class="w-6 h-6 -ml-2 image-fit zoom-in">
                                                        <x-base.tippy
                                                            class="border-2 border-white rounded-full"
                                                            src="{{ Vite::asset($faker['attendees'][3]['photo']) }}"
                                                            alt="POS System"
                                                            as="img"
                                                            content="{{ 'Uploaded at' . $faker['attendees'][3]['name'] }}"
                                                        />
                                                    </div>
                                                    <div class="ml-1 text-slate-500">
                                                        ({{ mt_rand(20, 100) }}+)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="text-slate-500">Registration Link:</div>
                                            <div class="ml-auto">
                                                <a
                                                    class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                    href=""
                                                >
                                                    {{ $faker['registrationLink'] }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </x-base.tab.panel>
                    <x-base.tab.panel
                        id="example-3"
                        selected="{{ request()->query('page') === 'achievements' }}"
                    >
                        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                            @foreach ($achievements->take(9) as $fakerKey => $faker)
                                <div class="flex flex-col col-span-12 box box--stacked md:col-span-6 xl:col-span-4">
                                    <div class="flex mt-5 ml-5">
                                        <span
                                            class="mr-auto flex items-center rounded-md border border-success/10 bg-success/10 px-2 py-0.5 text-xs font-medium text-success"
                                        >
                                            <span class="-mt-px">{{ $faker['category'] }}</span>
                                        </span>
                                    </div>
                                    <x-base.menu class="absolute top-0 right-0 mt-5 mr-5">
                                        <x-base.menu.button class="w-5 h-5 text-slate-500">
                                            <x-base.lucide
                                                class="w-5 h-5 fill-slate-400/70 stroke-slate-400/70"
                                                icon="MoreVertical"
                                            />
                                        </x-base.menu.button>
                                        <x-base.menu.items class="w-40">
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="w-4 h-4 mr-2"
                                                    icon="Copy"
                                                /> Copy
                                                Link
                                            </x-base.menu.item>
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="w-4 h-4 mr-2"
                                                    icon="Trash"
                                                />
                                                Delete
                                            </x-base.menu.item>
                                        </x-base.menu.items>
                                    </x-base.menu>
                                    <div class="flex flex-col items-center px-5 pb-10 mt-5">
                                        <div class="relative h-[72px] w-[72px]">
                                            <div
                                                class="flex items-center justify-center w-full h-full overflow-hidden border rounded-full border-slate-200/70 bg-theme-1/5">
                                                <x-base.lucide
                                                    class="h-6 w-6 fill-theme-1/10 stroke-[0.7] text-theme-1"
                                                    icon="{{ $faker['event']['icon'] }}"
                                                />
                                            </div>
                                        </div>
                                        <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                            {{ $faker['title'] }}
                                        </div>
                                        <div class="mt-1.5 text-center text-slate-500">
                                            {{ $faker['description'] }}
                                        </div>
                                        <div class="mt-5 text-xs uppercase text-slate-400">
                                            Collaborators
                                        </div>
                                        <div class="flex justify-center mt-3">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <x-base.tippy
                                                    class="border-2 border-white rounded-full"
                                                    src="{{ Vite::asset($faker['collaborators'][0]['photo']) }}"
                                                    alt="POS System"
                                                    as="img"
                                                    content="{{ $faker['collaborators'][0]['name'] }}"
                                                />
                                            </div>
                                            <div class="w-10 h-10 -ml-3 image-fit zoom-in">
                                                <x-base.tippy
                                                    class="border-2 border-white rounded-full"
                                                    src="{{ Vite::asset($faker['collaborators'][1]['photo']) }}"
                                                    alt="POS System"
                                                    as="img"
                                                    content="{{ $faker['collaborators'][1]['name'] }}"
                                                />
                                            </div>
                                            <div class="w-10 h-10 -ml-3 image-fit zoom-in">
                                                <x-base.tippy
                                                    class="border-2 border-white rounded-full"
                                                    src="{{ Vite::asset($faker['collaborators'][2]['photo']) }}"
                                                    alt="POS System"
                                                    as="img"
                                                    content="{{ $faker['collaborators'][2]['name'] }}"
                                                />
                                            </div>
                                            <div class="w-10 h-10 -ml-3 image-fit zoom-in">
                                                <x-base.tippy
                                                    class="border-2 border-white rounded-full"
                                                    src="{{ Vite::asset($faker['collaborators'][3]['photo']) }}"
                                                    alt="POS System"
                                                    as="img"
                                                    content="{{ $faker['collaborators'][3]['name'] }}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex border-t border-slate-200/80">
                                        <div class="flex flex-col items-center flex-1 py-3">
                                            <div class="text-base font-medium">
                                                {{ $faker['level'] }}
                                            </div>
                                            <div class="text-slate-500">Level</div>
                                        </div>
                                        <div class="flex flex-col items-center flex-1 py-3 border-x border-slate-200/80">
                                            <div class="text-base font-medium">
                                                {{ $faker['duration'] }}
                                            </div>
                                            <div class="text-slate-500">Duration</div>
                                        </div>
                                        <div class="flex flex-col items-center flex-1 py-3">
                                            <div class="text-base font-medium">
                                                {{ $faker['score'] }}
                                            </div>
                                            <div class="text-slate-500">Score</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </x-base.tab.panel>
                    <x-base.tab.panel
                        id="example-4"
                        selected="{{ request()->query('page') === 'contacts' }}"
                    >
                        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                            @foreach ($users->take(9) as $fakerKey => $faker)
                                <div class="flex flex-col col-span-12 box box--stacked md:col-span-6 xl:col-span-4">
                                    <x-base.menu class="absolute top-0 right-0 mt-5 mr-5">
                                        <x-base.menu.button class="w-5 h-5 text-slate-500">
                                            <x-base.lucide
                                                class="w-5 h-5 fill-slate-400/70 stroke-slate-400/70"
                                                icon="MoreVertical"
                                            />
                                        </x-base.menu.button>
                                        <x-base.menu.items class="w-40">
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="w-4 h-4 mr-2"
                                                    icon="Copy"
                                                /> Copy
                                                Link
                                            </x-base.menu.item>
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="w-4 h-4 mr-2"
                                                    icon="Trash"
                                                />
                                                Delete
                                            </x-base.menu.item>
                                        </x-base.menu.items>
                                    </x-base.menu>
                                    <div class="flex flex-col items-center px-5 pb-10 mt-10">
                                        <div
                                            class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                            <img
                                                src="{{ Vite::asset($faker['photo']) }}"
                                                alt="POS System"
                                            />
                                        </div>
                                        <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                            {{ $faker['name'] }}
                                        </div>
                                        <div class="flex items-center justify-center gap-3 mt-2">
                                            <div class="flex items-center text-slate-500">
                                                <x-base.lucide
                                                    class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                    icon="Hotel"
                                                />
                                                {{ $faker['location'] }}
                                            </div>
                                            <div class="flex items-center text-slate-500">
                                                <x-base.lucide
                                                    class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                    icon="Calendar"
                                                />
                                                {{ $faker['joinedDate'] }}
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center justify-center gap-2 mt-5 sm:flex-row">
                                            <span
                                                class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary"
                                            >
                                                <span class="-mt-px truncate">
                                                    {{ $faker['department'] }}
                                                </span>
                                            </span>
                                            <span
                                                class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary"
                                            >
                                                <span class="-mt-px truncate">
                                                    {{ $faker['position'] }}
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center px-5 py-4 border-t border-slate-200/80">
                                        <div class="text-slate-500">
                                            {{ mt_rand(20, 100) }}+ Connections
                                        </div>
                                        @if (mt_rand(0, 1))
                                            <x-base.button
                                                class="px-4 ml-auto border-primary/50"
                                                variant="outline-primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="UserPlus"
                                                />
                                                Connect
                                            </x-base.button>
                                        @else
                                            <x-base.button
                                                class="px-4 ml-auto"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="Check"
                                                />
                                                Connected
                                            </x-base.button>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </x-base.tab.panel>
                    <x-base.tab.panel
                        id="example-5"
                        selected="{{ request()->query('page') === 'default' }}"
                    >
                        <div class="box box--stacked mt-3.5 flex flex-col items-center py-14">
                            <x-base.lucide
                                class="h-24 w-24 fill-primary/5 stroke-[0.3] text-primary/70"
                                icon="FileLock2"
                            />
                            <div class="mt-5 text-base font-medium">
                                Two-Factor Authentication (2FA)
                            </div>
                            <div class="px-10 mt-1 text-center text-slate-500">
                                Enhance your account security by enabling Two-Factor
                                Authentication in the settings.
                            </div>
                            <x-base.button
                                class="mt-6"
                                variant="primary"
                            >
                                <x-base.lucide
                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="Lock"
                                />
                                Enable Now
                            </x-base.button>
                        </div>
                    </x-base.tab.panel>
                </x-base.tab.panels>
            </x-base.tab.group>
        </div>
    </div>
@endsection
