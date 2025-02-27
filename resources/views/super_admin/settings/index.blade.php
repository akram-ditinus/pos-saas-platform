@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>POS System</title>
@endsection

@push('styles')
<style>
    h3{
        font-size:20pt !important;
       padding: 20px 0px !important;
    }
    </style>
@endpush
@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Settings
                </div>
              
            </div>
            <div class="mt-3.5 flex flex-col gap-8">
               
                <br>
                <br>
                @if (session('error'))
                    <x-base.alert class="mb-2 flex items-center" variant="outline-danger">
                        {{ session('error ') }}
                        <x-base.alert.dismiss-button class="btn-close" type="button" aria-label="Close">
                            <x-base.lucide class="h-4 w-4" icon="X" />
                        </x-base.alert.dismiss-button>
                    </x-base.alert>
                @endif

                @if (session('success'))
                    <x-base.alert class="mb-2 flex items-center text-white" variant="outline-secondary">
                        {{ session('success') }}
                        <x-base.alert.dismiss-button class="btn-close" type="button" aria-label="Close">
                            <x-base.lucide class="h-4 w-4" icon="X" />
                        </x-base.alert.dismiss-button>
                    </x-base.alert>
                @endif
                <div class="box box--stacked">
                    <div class="overflow-auto xl:overflow-visible">
                        <x-base.table class="border-b border-slate-200/60">
                            <x-base.table.tbody>
                                <x-base.table.td colspan=3>
                                    <h3>Basic Information</h3>
                                 </x-base.table.td>
                                <x-base.table.tr class="text-black">
                                    <x-base.table.td>
                                        Field Name
                                    </x-base.table.td>
                                    <x-base.table.td>
                                    Field Value
                                    </x-base.table.td>
                                    <x-base.table.td>
                                        Action
                                    </x-base.table.td>
                                </x-base.table.tr>
                                @foreach($settings as $setting)
                                <form action="{{route('super.admin.settings.update',$setting->id)}}" method="POST">
                                    @if($setting->field_key=='stripe_merchent_id') 
                                    <x-base.table.tr class="text-black">
                                        <x-base.table.td colspan=3>
                                           <h3>Stripe Details</h3>
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr class="text-black">
                                        <x-base.table.td>
                                            Field Name
                                        </x-base.table.td>
                                        <x-base.table.td>
                                        Field Value
                                        </x-base.table.td>
                                        <x-base.table.td>
                                            Action
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                    @endif
                                    @csrf
                                    @method('patch')
                                <x-base.table.tr>
                                    <x-base.table.td>
                                        {{ucwords(str_replace("_"," ",$setting->field_key))}}
                                    </x-base.table.td>
                                    <x-base.table.td>
                                    <x-base.form-input name="field_value" class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0" type="text" value="{{$setting->field_value}}"/>
                                    </x-base.table.td>
                                    <x-base.table.td>
                                        <x-base.button class="text-center">Update</x-base.button>
                                    </x-base.table.td>
                                </x-base.table.tr>
                                </form>
                                @endforeach
                            </x-base.table.tbody>
                        </x-base.table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection