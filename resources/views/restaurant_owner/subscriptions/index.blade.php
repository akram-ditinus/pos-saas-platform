@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>POS System</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">

        <div class="col-span-12">

            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Subscriptions
                </div>
              
            </div>
            <div class="mt-3.5 flex flex-col gap-8">
               
                @if (session('error'))
                    <x-base.alert class="mb-2 flex items-center" variant="outline-danger">
                        {{ session('error') }}
                        <x-base.alert.dismiss-button class="btn-close" type="button" aria-label="Close">
                            <x-base.lucide class="h-4 w-4" icon="X" />
                        </x-base.alert.dismiss-button>
                    </x-base.alert>
                @endif

                @if (session('success'))

                    <x-base.alert class="mb-2 flex items-center" variant="outline-success">
                        {{ session('success') }}
                        <x-base.alert.dismiss-button class="btn-close" type="button" aria-label="Close">
                            <x-base.lucide class="h-4 w-4" icon="X" />
                        </x-base.alert.dismiss-button>
                    </x-base.alert>

                @endif
                <div class="">
                    
                    <div class="overflow-auto xl:overflow-visible columns-3">
                        


                        @foreach ($subscriptions as $key => $subscription)
                        <div class="col-span-12 p-5 box box--stacked md:col-span-6 xl:col-span-4 mb-5">
                            <a
                                class="text-[0.94rem] font-medium text-primary"
                                href=""
                            >
                                {{$subscription->title}}
                            </a>
                            <div class="mt-1 mb-5 leading-relaxed text-slate-500">
                               {{$subscription->remarks}}
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
                                    <div class="text-slate-500">Trial period:</div>
                                    <div class="ml-auto">
                                        <div
                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                            <span class="-mt-px">{{$subscription->trial_period_in_days}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="text-slate-500">Price:</div>
                                    <div class="ml-auto">
                                        <div class="flex items-center">
                                            ${!!$subscription->sale_price>0? $subscription->sale_price . " (<del>".$subscription->price."</del>)" : $subscription->price!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center text-justify">
                                
                                            Details:
                           
                                            <br>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    
                                   
                                </div>
                               
                                
                                <div class="flex items-center">
                                    <div class="text-slate-500"><x-base.menu.item href="{{route('restaurant.owner.subscriptions.show',$subscription->uid)}}">Get plan</x-base.menu.item></div>
                                    <div class="ml-auto">
                                        {{-- <a
                                            class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                            href=""
                                        >
                                            {{ $faker['registrationLink'] }}
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
    </div>
@endsection