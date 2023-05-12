@extends('../layout/' . $layout)

@section('subhead')
    <title>Regular Table - Rubick - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Point of Sale</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#new-order-modal" class="btn btn-primary shadow-md mr-2">New Order</a>
            <div class="pos-dropdown dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-lucide="chevron-down"></i>
                    </span>
                </button>
                <div class="pos-dropdown__dropdown-menu dropdown-menu">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">INV-0206020 - {{ $fakers[3]['users'][0]['name'] }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">INV-0206022 - {{ $fakers[4]['users'][0]['name'] }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">INV-0206021 - {{ $fakers[5]['users'][0]['name'] }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Item List -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <div class="lg:flex intro-y">
                <div class="relative">
                    <input type="text" class="form-control py-3 px-4 w-full lg:w-64 box pr-10" placeholder="Search item...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 text-slate-500" data-lucide="search"></i>
                </div>
                <select class="form-select py-3 px-4 box w-full lg:w-auto mt-3 lg:mt-0 ml-auto">
                    <option>Sort By</option>
                    <option>A to Z</option>
                    <option>Z to A</option>
                    <option>Lowest Price</option>
                    <option>Highest Price</option>
                </select>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5">
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Soup</div>
                    <div class="text-slate-500">5 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box bg-primary p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base text-white">Pancake & Toast</div>
                    <div class="text-white text-opacity-80 dark:text-slate-500">8 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Pasta</div>
                    <div class="text-slate-500">4 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Waffle</div>
                    <div class="text-slate-500">3 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Snacks</div>
                    <div class="text-slate-500">8 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Deserts</div>
                    <div class="text-slate-500">8 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Beverage</div>
                    <div class="text-slate-500">9 Items</div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t">
                @foreach (array_slice($fakers, 0, 8) as $faker)
                    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                                <div class="absolute top-0 left-0 w-full h-full image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-md" src="{{ asset('dist/images/' . $faker['foods'][0]['image']) }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">{{ $faker['foods'][0]['name'] }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <!-- END: Item List -->
        <!-- BEGIN: Ticket -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y pr-1">
                <div class="box p-2">
                    <ul class="nav nav-pills" role="tablist">
                        <li id="ticket-tab" class="nav-item flex-1" role="presentation">
                            <button
                                class="nav-link w-full py-2 active"
                                data-tw-toggle="pill"
                                data-tw-target="#ticket"
                                type="button"
                                role="tab"
                                aria-controls="ticket"
                                aria-selected="true"
                            >
                                Ticket
                            </button>
                        </li>
                        <li id="details-tab" class="nav-item flex-1" role="presentation">
                            <button
                                class="nav-link w-full py-2"
                                data-tw-toggle="pill"
                                data-tw-target="#details"
                                type="button"
                                role="tab"
                                aria-controls="details"
                                aria-selected="false"
                            >
                                Details
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">
                    <div class="box p-2 mt-5">
                        @foreach (array_slice($fakers, 0, 5) as $key => $faker)
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-darkmode-600 hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md">
                                <div class="max-w-[50%] truncate mr-1">{{ $faker['foods'][0]['name'] }}</div>
                                <div class="text-slate-500">x 1</div>
                                <i data-lucide="edit" class="w-4 h-4 text-slate-500 ml-2"></i>
                                <div class="ml-auto font-medium">${{ $faker['totals'][0] }}</div>
                            </a>
                        @endforeach
                    </div>
                    <div class="box flex p-5 mt-5">
                        <input type="text" class="form-control py-3 px-4 w-full bg-slate-100 border-slate-200/60 pr-10" placeholder="Use coupon code...">
                        <button class="btn btn-primary ml-2">Apply</button>
                    </div>
                    <div class="box p-5 mt-5">
                        <div class="flex">
                            <div class="mr-auto">Subtotal</div>
                            <div class="font-medium">$250</div>
                        </div>
                        <div class="flex mt-4">
                            <div class="mr-auto">Discount</div>
                            <div class="font-medium text-danger">-$20</div>
                        </div>
                        <div class="flex mt-4">
                            <div class="mr-auto">Tax</div>
                            <div class="font-medium">15%</div>
                        </div>
                        <div class="flex mt-4 pt-4 border-t border-slate-200/60 dark:border-darkmode-400">
                            <div class="mr-auto font-medium text-base">Total Charge</div>
                            <div class="font-medium text-base">$220</div>
                        </div>
                    </div>
                    <div class="flex mt-5">
                        <button class="btn w-32 border-slate-300 dark:border-darkmode-400 text-slate-500">Clear Items</button>
                        <button class="btn btn-primary w-32 shadow-md ml-auto">Charge</button>
                    </div>
                </div>
                <div id="details" class="tab-pane" role="tabpanel" aria-labelledby="details-tab">
                    <div class="box p-5 mt-5">
                        <div class="flex items-center border-b border-slate-200 dark:border-darkmode-400 pb-5">
                            <div>
                                <div class="text-slate-500">Time</div>
                                <div class="mt-1">02/06/20 02:10 PM</div>
                            </div>
                            <i data-lucide="clock" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                        <div class="flex items-center border-b border-slate-200 dark:border-darkmode-400 py-5">
                            <div>
                                <div class="text-slate-500">Customer</div>
                                <div class="mt-1">{{ $fakers[0]['users'][0]['name'] }}</div>
                            </div>
                            <i data-lucide="user" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                        <div class="flex items-center border-b border-slate-200 dark:border-darkmode-400 py-5">
                            <div>
                                <div class="text-slate-500">People</div>
                                <div class="mt-1">3</div>
                            </div>
                            <i data-lucide="users" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                        <div class="flex items-center pt-5">
                            <div>
                                <div class="text-slate-500">Table</div>
                                <div class="mt-1">21</div>
                            </div>
                            <i data-lucide="mic" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Ticket -->
    </div>
    <!-- BEGIN: New Order Modal -->
    <div id="new-order-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">New Order</h2>
                </div>
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12">
                        <label for="pos-form-1" class="form-label">Name</label>
                        <input id="pos-form-1" type="text" class="form-control flex-1" placeholder="Customer name">
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-2" class="form-label">Table</label>
                        <input id="pos-form-2" type="text" class="form-control flex-1" placeholder="Customer table">
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-3" class="form-label">Number of People</label>
                        <input id="pos-form-3" type="text" class="form-control flex-1" placeholder="People">
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-32 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-32">Create Ticket</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: New Order Modal -->
    <!-- BEGIN: Add Item Modal -->
    <div id="add-item-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">{{ $fakers[0]['foods'][0]['name'] }}</h2>
                </div>
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12">
                        <label for="pos-form-4" class="form-label">Quantity</label>
                        <div class="flex mt-2 flex-1">
                            <button type="button" class="btn w-12 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500 mr-1">-</button>
                            <input id="pos-form-4" type="text" class="form-control w-24 text-center" placeholder="Item quantity" value="2">
                            <button type="button" class="btn w-12 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500 ml-1">+</button>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-5" class="form-label">Notes</label>
                        <textarea id="pos-form-5" class="form-control w-full mt-2" placeholder="Item notes"></textarea>
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-24">Add Item</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Add Item Modal -->
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Regular Table</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Table -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Basic Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-dark mt-5">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-basic-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-dark mt-5">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Table -->
            <!-- BEGIN: Bordered Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Bordered Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#bordered-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="bordered-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-bordered-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-bordered-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Bordered Table -->
            <!-- BEGIN: Hoverable Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Hoverable Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#hoverable-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="hoverable-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-hoverable-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-hoverable-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Hoverable Table -->
            <!-- BEGIN: Table Row States -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Table Row States</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#row-states-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="row-states-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-primary text-white">
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr class="bg-danger text-white">
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr class="bg-warning">
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-row-states-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-row-states-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-primary text-white">
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr class="bg-danger text-white">
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr class="bg-warning">
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Table Row States -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Table Head Options -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Table Head Options</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#head-options-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="head-options-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table mt-5">
                                <thead class="table-light">
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-head-options-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-head-options-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table mt-5">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Table Head Options -->
            <!-- BEGIN: Responsive Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Responsive Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#responsive-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="responsive-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                        <th class="whitespace-nowrap">Email</th>
                                        <th class="whitespace-nowrap">Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="whitespace-nowrap">1</td>
                                        <td class="whitespace-nowrap">Angelina</td>
                                        <td class="whitespace-nowrap">Jolie</td>
                                        <td class="whitespace-nowrap">@angelinajolie</td>
                                        <td class="whitespace-nowrap">angelinajolie@gmail.com</td>
                                        <td class="whitespace-nowrap">
                                            260 W. Storm Street New York, NY 10025.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="whitespace-nowrap">2</td>
                                        <td class="whitespace-nowrap">Brad</td>
                                        <td class="whitespace-nowrap">Pitt</td>
                                        <td class="whitespace-nowrap">@bradpitt</td>
                                        <td class="whitespace-nowrap">bradpitt@gmail.com</td>
                                        <td class="whitespace-nowrap">
                                            47 Division St. Buffalo, NY 14241.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="whitespace-nowrap">3</td>
                                        <td class="whitespace-nowrap">Charlie</td>
                                        <td class="whitespace-nowrap">Hunnam</td>
                                        <td class="whitespace-nowrap">@charliehunnam</td>
                                        <td class="whitespace-nowrap">charliehunnam@gmail.com</td>
                                        <td class="whitespace-nowrap">
                                            8023 Amerige Street Harriman, NY 10926.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-responsive-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-responsive-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                        <th class="whitespace-nowrap">Email</th>
                                                        <th class="whitespace-nowrap">Address</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="whitespace-nowrap">1</td>
                                                        <td class="whitespace-nowrap">Angelina</td>
                                                        <td class="whitespace-nowrap">Jolie</td>
                                                        <td class="whitespace-nowrap">@angelinajolie</td>
                                                        <td class="whitespace-nowrap">angelinajolie@gmail.com</td>
                                                        <td class="whitespace-nowrap">
                                                            260 W. Storm Street New York, NY 10025.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="whitespace-nowrap">2</td>
                                                        <td class="whitespace-nowrap">Brad</td>
                                                        <td class="whitespace-nowrap">Pitt</td>
                                                        <td class="whitespace-nowrap">@bradpitt</td>
                                                        <td class="whitespace-nowrap">bradpitt@gmail.com</td>
                                                        <td class="whitespace-nowrap">
                                                            47 Division St. Buffalo, NY 14241.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="whitespace-nowrap">3</td>
                                                        <td class="whitespace-nowrap">Charlie</td>
                                                        <td class="whitespace-nowrap">Hunnam</td>
                                                        <td class="whitespace-nowrap">@charliehunnam</td>
                                                        <td class="whitespace-nowrap">charliehunnam@gmail.com</td>
                                                        <td class="whitespace-nowrap">
                                                            8023 Amerige Street Harriman, NY 10926.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Responsive Table -->
            <!-- BEGIN: Small Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Small Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#small-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="small-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-small-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-small-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Small Table -->
            <!-- BEGIN: Striped Rows -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Striped Rows</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-8">Show example code</label>
                        <input id="show-example-8" data-target="#striped-rows-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="striped-rows-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-striped-rows-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-striped-rows-table">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="overflow-x-auto">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Striped Rows -->
        </div>
    </div>
@endsection
