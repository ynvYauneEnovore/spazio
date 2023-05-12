@extends('../layout/' . $layout)

@section('subhead')
    <title>Clases</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Notification -->
                <div class="col-span-12 mt-6 -mb-6 intro-y">
                    <div class="alert alert-dismissible show box bg-danger text-white flex items-center mb-6" role="alert">
                        Clases
                        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">
                            <i data-lucide="x" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>
                <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-6">
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-12 mt-3 2xl:mt-8">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-auto">Important Notes</h2>
                            <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-lucide="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Clase de Natación</div>
                                        <div class="text-slate-400 mt-1">Duración 135 horas.</div>
                                        <div class="text-slate-500 text-justify mt-1">Loand typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <div class="col-span-12 lg:col-span-6 mt-6">
                    <div class="box p-8 relative overflow-hidden bg-primary intro-y">
                        <div class="leading-[2.15rem] w-full sm:w-72 text-white text-xl -mt-3">Transact safely with Lender’s Fund Account (RDL)</div>
                        <div class="w-full sm:w-72 leading-relaxed text-white/70 dark:text-slate-500 mt-3">Apply now, quick registration.</div>
                        <button class="btn w-32 bg-white dark:bg-darkmode-800 dark:text-white mt-6 sm:mt-10">Start Now</button>
                        <img class="hidden sm:block absolute top-0 right-0 w-2/5 -mt-3 mr-2" alt="natacion" src="{{ asset('img/natacion.png') }}" style="width: 80px; height: auto;">
                    </div>
                </div>
                <!-- END: Ads 1 -->
                <!-- BEGIN: Ads 2 -->
                <div class="col-span-12 lg:col-span-6 mt-6">
                    <div class="box p-8 relative overflow-hidden intro-y">
                        <div class="leading-[2.15rem] w-full sm:w-52 text-primary dark:text-white text-xl -mt-3">Invite friends to get <span class="font-medium">FREE</span> bonuses!</div>
                        <div class="w-full sm:w-60 leading-relaxed text-slate-500 mt-2">Get a IDR 100,000 voucher by inviting your friends to fund #BecomeMember</div>
                        <div class="w-48 relative mt-6 cursor-pointer tooltip" title="Copy referral link">
                            <input type="text" class="form-control" value="https://dashboard.in">
                            <i data-lucide="copy" class="absolute right-0 top-0 bottom-0 my-auto mr-4 w-4 h-4"></i>
                        </div>
                        <img class="hidden sm:block absolute top-0 right-0 w-2/5 -mt-0 mr-2" alt="pesas" src="{{ asset('img/pesas.png') }}" style="width: 230px; height: auto;">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END: Delete Confirmation Modal -->
</div>
@endsection
