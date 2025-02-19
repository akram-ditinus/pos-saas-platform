<div>
    <x-base.slideover id="theme-switcher">
        <x-base.slideover.panel class="w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
            <a
                class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                data-tw-dismiss="modal"
                href="javascript:;"
            >
                <x-base.lucide
                    class="h-3 w-3 stroke-[1] sm:h-8 sm:w-8"
                    icon="X"
                />
            </a>
            <x-base.slideover.description class="p-0">
                <div class="flex flex-col">
                    <div class="px-8 pt-6 pb-8">
                        <div class="text-base font-medium">Color Schemes</div>
                        <div class="mt-0.5 text-slate-500">
                            Choose your color schemes
                        </div>
                        <div class="mt-5 grid grid-cols-2 gap-3.5 sm:grid-cols-4">
                            @foreach (['default', 'theme-1', 'theme-2', 'theme-3', 'theme-4', 'theme-5', 'theme-6', 'theme-7', 'theme-8', 'theme-9', 'theme-10', 'theme-11', 'theme-12', 'theme-13', 'theme-14', 'theme-15', 'theme-16', 'theme-17'] as $colorKey => $colorScheme)
                                <div>
                                    <a
                                        href="{{ route('color-scheme-switcher', ['activeColorScheme' => $colorScheme]) }}"
                                        @class([
                                            'h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block',
                                            'border-2 border-theme-1/60' => $activeColorScheme == $colorScheme,
                                        ])
                                    >
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="flex items-center h-full gap-1 -mx-2">
                                                <div @class(['w-1/2 h-[140%] bg-theme-1 rotate-12', $colorScheme])></div>
                                                <div @class(['w-1/2 h-[140%] bg-theme-2 rotate-12', $colorScheme])></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="border-b border-dashed"></div>
                    <div class="px-8 pt-6 pb-8">
                        <div class="text-base font-medium">Themes</div>
                        <div class="mt-0.5 text-slate-500">Choose your themes</div>
                        <div class="mt-5 grid grid-cols-2 gap-x-5 gap-y-3.5 sm:grid-cols-3">
                            @foreach (['echo'] as $themeKey => $theme)
                                <div>
                                    <a
                                        href="{{ route('theme-switcher', ['activeTheme' => $theme]) }}"
                                        @class([
                                            'h-20 cursor-pointer bg-slate-50 box p-1 block',
                                            'border-2 border-theme-1/60' => $activeTheme == $theme,
                                        ])
                                    >
                                        <div class="w-full h-full overflow-hidden rounded-md">
                                            <img
                                                class="w-full h-full"
                                                src="{{ Vite::asset('resources/images/themes/' . $theme . '.png') }}"
                                            />
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        {{ $theme }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
              <div class="text-base font-medium">Scheme</div>
              <div class="mt-0.5 text-slate-400">
                Choose light or dark mode
              </div>
              <div class="grid grid-cols-3 gap-4 mt-5">
                <div>
                  <div class="h-12 rounded-full cursor-pointer box bg-slate-50"></div>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    Light Mode
                  </div>
                </div>
                <div>
                  <div class="h-12 rounded-full cursor-pointer box bg-slate-50"></div>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    Dark Mode
                  </div>
                </div>
              </div>
            </div>  --}}
                </div>
            </x-base.slideover.description>
        </x-base.slideover.panel>
    </x-base.slideover>
    <div
        class="fixed bottom-0 right-0 z-50 flex items-center justify-center mb-5 mr-5 text-white rounded-full shadow-lg cursor-pointer h-14 w-14 bg-theme-1"
        data-tw-toggle="modal"
        data-tw-target="#theme-switcher"
        href="javascript:;"
    >
        <x-base.lucide
            class="w-5 h-5 animate-spin"
            icon="Settings"
        />
    </div>
</div>
