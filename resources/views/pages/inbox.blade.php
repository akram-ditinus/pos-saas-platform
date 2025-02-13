@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>POS System</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="mt-4 flex flex-col gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Inbox
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="MailPlus"
                        />
                        Compose New Mail
                    </x-base.button>
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="Cog"
                        /> Mail
                        Settings
                    </x-base.button>
                </div>
            </div>
            <div class="mt-3.5 flex flex-col gap-5 sm:flex-row">
                <div class="relative">
                    <div class="sticky top-[104px]">
                        <div
                            class="box box--stacked grid grid-cols-3 gap-3.5 px-3.5 py-4 before:z-[-1] before:content-[''] sm:w-[102px] sm:grid-cols-1">
                            <x-base.tippy
                                class="active relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                data-placement="right"
                                href=""
                                as="a"
                                content="Inbox"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="AppWindow"
                                />
                                <div
                                    class="absolute right-0 top-0 -mr-1.5 -mt-1.5 flex h-[1.2rem] min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs font-medium">
                                    <div
                                        class="h-full w-full rounded-full border border-pending/20 bg-pending/10 px-2 text-pending">
                                        12+
                                    </div>
                                </div>
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                data-placement="right"
                                href=""
                                as="a"
                                content="Starred"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="MailCheck"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                data-placement="right"
                                href=""
                                as="a"
                                content="Snoozed"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="KeyRound"
                                />
                                <div
                                    class="absolute right-0 top-0 -mr-1.5 -mt-1.5 flex h-[1.2rem] min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs font-medium">
                                    <div
                                        class="h-full w-full rounded-full border border-pending/20 bg-pending/10 px-2 text-pending">
                                        3
                                    </div>
                                </div>
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                data-placement="right"
                                href=""
                                as="a"
                                content="Important"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="PackageCheck"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                data-placement="right"
                                href=""
                                as="a"
                                content="Sent"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="ShieldCheck"
                                />
                                <div
                                    class="absolute right-0 top-0 -mr-1.5 -mt-1.5 flex h-[1.2rem] min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs font-medium">
                                    <div
                                        class="h-full w-full rounded-full border border-pending/20 bg-pending/10 px-2 text-pending">
                                        41
                                    </div>
                                </div>
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                data-placement="right"
                                href=""
                                as="a"
                                content="Drafts"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="Smartphone"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                data-placement="right"
                                href=""
                                as="a"
                                content="Categories"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="BellDot"
                                />
                                <div
                                    class="absolute right-0 top-0 -mr-1.5 -mt-1.5 flex h-[1.2rem] min-w-[1.15rem] items-center justify-center rounded-full bg-white text-xs font-medium">
                                    <div
                                        class="h-full w-full rounded-full border border-pending/20 bg-pending/10 px-2 text-pending">
                                        21
                                    </div>
                                </div>
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                data-placement="right"
                                href=""
                                as="a"
                                content="Chats"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="Workflow"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                data-placement="right"
                                href=""
                                as="a"
                                content="Scheduled"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="Podcast"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="relative flex h-14 place-content-center items-center rounded-lg border border-slate-200/80 py-3 hover:text-primary [&.active]:border-primary/10 [&.active]:bg-primary/[0.04] [&.active]:font-medium [&.active]:text-primary [&.active]:shadow-sm"
                                data-placement="right"
                                href=""
                                as="a"
                                content="All Mail"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 fill-theme-1/10 stroke-[0.8]"
                                    icon="Trash2"
                                />
                            </x-base.tippy>
                        </div>
                    </div>
                </div>
                <div class="w-full overflow-hidden pb-10">
                    <div class="box box--stacked flex w-full flex-col">
                        <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                            <div>
                                <div class="relative">
                                    <x-base.lucide
                                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"
                                        icon="Search"
                                    />
                                    <x-base.form-input
                                        class="rounded-[0.5rem] pl-9 sm:w-64"
                                        type="text"
                                        placeholder="Search mails..."
                                    />
                                </div>
                            </div>
                            <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                <x-base.menu>
                                    <x-base.menu.button
                                        class="w-full sm:w-auto"
                                        as="x-base.button"
                                        variant="outline-secondary"
                                    >
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4 stroke-[1.3]"
                                            icon="Download"
                                        />
                                        Export
                                        <x-base.lucide
                                            class="ml-2 h-4 w-4 stroke-[1.3]"
                                            icon="ChevronDown"
                                        />
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="FileBarChart"
                                            />
                                            PDF
                                        </x-base.menu.item>
                                        <x-base.menu.item>
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="FileBarChart"
                                            />
                                            CSV
                                        </x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.popover class="inline-block">
                                    <x-base.popover.button
                                        class="w-full sm:w-auto"
                                        as="x-base.button"
                                        variant="outline-secondary"
                                    >
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4 stroke-[1.3]"
                                            icon="ArrowDownWideNarrow"
                                        />
                                        Filter
                                        <div
                                            class="ml-2 flex h-5 items-center justify-center rounded-full border bg-slate-100 px-1.5 text-xs font-medium">
                                            3
                                        </div>
                                    </x-base.popover.button>
                                    <x-base.popover.panel placement="bottom-end">
                                        <div class="p-2">
                                            <div>
                                                <div class="text-left text-slate-500">
                                                    Sender
                                                </div>
                                                <x-base.tom-select
                                                    class="mt-2 flex-1"
                                                    data-placeholder="Search user"
                                                >
                                                    @foreach ($users as $fakerKey => $faker)
                                                        <option value="{{ $fakerKey }}">
                                                            {{ $faker['name'] }}
                                                        </option>
                                                    @endforeach
                                                </x-base.tom-select>
                                            </div>
                                            <div class="mt-3">
                                                <div class="text-left text-slate-500">
                                                    Status
                                                </div>
                                                <x-base.form-select class="mt-2 flex-1">
                                                    <option value="Read">Read</option>
                                                    <option value="Unread">Unread</option>
                                                    <option value="Pinned">Pinned</option>
                                                </x-base.form-select>
                                            </div>
                                            <div class="mt-4 flex items-center">
                                                <x-base.button
                                                    class="ml-auto w-32"
                                                    variant="secondary"
                                                >
                                                    Close
                                                </x-base.button>
                                                <x-base.button
                                                    class="ml-2 w-32"
                                                    variant="primary"
                                                >
                                                    Apply
                                                </x-base.button>
                                            </div>
                                        </div>
                                    </x-base.popover.panel>
                                </x-base.popover>
                            </div>
                        </div>
                        <div class="mt-0.5 px-5">
                            <div
                                class="mb-2 flex items-center rounded-[0.6rem] border border-slate-200/70 bg-primary/[0.01] px-5 py-3.5 shadow-sm">
                                <div class="flex items-center">
                                    <div class="relative h-5 w-5">
                                        <x-base.form-check.input
                                            class="peer absolute z-10 h-full w-full opacity-0"
                                            type="checkbox"
                                            value="checked"
                                        />
                                        <div
                                            class="absolute inset-0 m-auto flex h-[16px] w-[16px] items-center justify-center rounded border border-primary/50 bg-primary/60 text-white opacity-0 shadow-sm transition-all peer-checked:opacity-100">
                                            <x-base.lucide
                                                class="h-3 w-3 stroke-[1.5]"
                                                icon="Check"
                                            />
                                        </div>
                                        <div
                                            class="absolute inset-0 m-auto flex h-[16px] w-[16px] items-center justify-center rounded border-[1.5px] border-primary/30 text-primary shadow-sm transition-all peer-checked:opacity-0 peer-hover:bg-primary/10">
                                        </div>
                                    </div>
                                    <x-base.lucide
                                        class="ml-1 mr-0.5 h-5 w-5 stroke-[1.2] text-slate-500/80"
                                        icon="ChevronDown"
                                    />
                                </div>
                                <div class="ml-4 mr-0.5">
                                    <x-base.lucide
                                        class="h-[17px] w-[17px] stroke-[1] text-slate-500/80"
                                        icon="RefreshCcw"
                                    />
                                </div>
                                <div class="ml-4">
                                    <x-base.lucide
                                        class="h-[17px] w-[17px] stroke-[1] text-slate-500/80"
                                        icon="MoreHorizontal"
                                    />
                                </div>
                                <div class="ml-auto hidden text-slate-500/70 sm:block">
                                    1 - 50 of 5,238
                                </div>
                                <div class="ml-auto sm:ml-5">
                                    <x-base.lucide
                                        class="h-[17px] w-[17px] stroke-[1] text-slate-500/80"
                                        icon="ArrowLeft"
                                    />
                                </div>
                                <div class="ml-3">
                                    <x-base.lucide
                                        class="h-[17px] w-[17px] stroke-[1] text-slate-500/80"
                                        icon="ArrowRight"
                                    />
                                </div>
                                <div class="ml-5">
                                    <x-base.lucide
                                        class="h-[17px] w-[17px] stroke-[1] text-slate-500/80"
                                        icon="Settings"
                                    />
                                </div>
                            </div>
                            <div>
                                <div
                                    class="overflow-x-auto rounded-[0.6rem] border border-slate-200/70 border-t-slate-200/60 shadow-sm sm:overflow-x-visible">
                                    @foreach ($mails->take(13) as $fakerKey => $faker)
                                        <div @class([
                                            'transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block last:border-b-0 border-b border-slate-200/50 dark:border-darkmode-400',
                                            'hover:relative hover:bg-slate-50',
                                            'bg-primary/[0.03] text-slate-500 dark:text-slate-500 dark:bg-darkmode-400/70' => !$faker[
                                                'opened'
                                            ],
                                            'dark:text-slate-300 dark:bg-darkmode-600' => $faker['opened'],
                                        ])>
                                            <div class="flex items-center px-5 py-3.5">
                                                <div>
                                                    <div class="relative h-5 w-5">
                                                        <x-base.form-check.input
                                                            class="peer absolute z-10 h-full w-full opacity-0"
                                                            type="checkbox"
                                                            value="checked"
                                                            checked="{{ !$faker['opened'] }}"
                                                        />
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-[16px] w-[16px] items-center justify-center rounded border border-primary/50 bg-primary/60 text-white opacity-0 shadow-sm transition-all peer-checked:opacity-100">
                                                            <x-base.lucide
                                                                class="h-3 w-3 stroke-[1.5]"
                                                                icon="Check"
                                                            />
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-[16px] w-[16px] items-center justify-center rounded border-[1.5px] border-primary/30 text-primary shadow-sm transition-all peer-checked:opacity-0 peer-hover:bg-primary/10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="relative h-[18px] w-[18px]">
                                                        <x-base.form-check.input
                                                            class="peer absolute z-10 h-full w-full opacity-0"
                                                            type="checkbox"
                                                            value="checked"
                                                        />
                                                        <x-base.lucide
                                                            class="absolute inset-0 h-[18px] w-[18px] fill-primary/[0.03] stroke-[1] text-primary/50 peer-checked:fill-primary/50 peer-checked:text-primary peer-hover:fill-primary/10 peer-hover:peer-checked:fill-primary/50"
                                                            icon="Star"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="ml-2.5">
                                                    <div class="relative h-[17px] w-[17px]">
                                                        <x-base.form-check.input
                                                            class="peer absolute z-10 h-full w-full opacity-0"
                                                            type="checkbox"
                                                            value="checked"
                                                        />
                                                        <x-base.lucide
                                                            class="absolute inset-0 h-[17px] w-[17px] fill-primary/[0.03] stroke-[1] text-primary/50 peer-checked:fill-primary/50 peer-checked:text-primary peer-hover:fill-primary/10 peer-hover:peer-checked:fill-primary/50"
                                                            icon="Bookmark"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="ml-8 mr-5 flex w-40 flex-none items-center">
                                                    <div class="image-fit relative h-5 w-5 flex-none">
                                                        <img
                                                            class="rounded-full"
                                                            src="{{ Vite::asset($faker['sender']['photo']) }}"
                                                            alt="POS System"
                                                        />
                                                    </div>
                                                    <div @class(['ml-2.5 truncate', 'font-medium' => $faker['opened']])>
                                                        {{ $faker['sender']['name'] }}
                                                    </div>
                                                </div>
                                                <div class="max-w-2xl truncate">
                                                    <span @class(['font-medium' => $faker['opened']])>
                                                        {{ $faker['subject'] }}
                                                    </span>
                                                    <span class="mx-0.5">-</span> {{ $faker['content'] }}
                                                </div>
                                                <div class="ml-auto whitespace-nowrap pl-10 text-xs text-slate-500/70">
                                                    {{ $faker['date'] }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center p-5 text-center text-slate-500/80 sm:flex-row sm:text-left">
                            <div>4.41 GB (25%) of 17 GB used Manage</div>
                            <div class="mt-2 sm:ml-auto sm:mt-0">
                                Last account activity: 36 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
