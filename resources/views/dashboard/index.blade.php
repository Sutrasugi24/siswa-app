@extends('../layouts/main')

@section('content')
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <a href="" class="ml-auto flex items-center text-primary"> <i
                            data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="shopping-cart"
                                        class="report-box__icon text-primary"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                            title="33% Higher than last month"> 33% <i
                                                data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
                                <div class="text-base text-slate-500 mt-1">Item Sales</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="credit-card"
                                        class="report-box__icon text-pending"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-danger tooltip cursor-pointer"
                                            title="2% Lower than last month"> 2% <i
                                                data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                                <div class="text-base text-slate-500 mt-1">New Orders</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="monitor" class="report-box__icon text-warning"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                            title="12% Higher than last month"> 12% <i
                                                data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                                <div class="text-base text-slate-500 mt-1">Total Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="user" class="report-box__icon text-success"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                            title="22% Higher than last month"> 22% <i
                                                data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">152.040</div>
                                <div class="text-base text-slate-500 mt-1">Unique Visitor</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
            <!-- BEGIN: General Report -->
            <!-- BEGIN: Weekly Top Products -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Weekly Top Products
                    </h2>
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <button class="btn box flex items-center text-slate-600 dark:text-slate-300"> <i
                                data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export
                            to Excel </button>
                        <button
                            class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300">
                            <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export
                            to PDF </button>
                    </div>
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">IMAGES</th>
                                <th class="whitespace-nowrap">PRODUCT NAME</th>
                                <th class="text-center whitespace-nowrap">STOCK</th>
                                <th class="text-center whitespace-nowrap">STATUS</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-3.jpg"
                                                title="Uploaded at 10 February 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-9.jpg"
                                                title="Uploaded at 27 April 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-4.jpg"
                                                title="Uploaded at 15 March 2021">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-nowrap">Oppo Find X2
                                        Pro</a>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                        Smartphone &amp; Tablet</div>
                                </td>
                                <td class="text-center">146</td>
                                <td class="w-40">
                                    <div class="flex items-center justify-center text-success"> <i
                                            data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                                    </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href=""> <i
                                                data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                            Edit </a>
                                        <a class="flex items-center text-danger" href=""> <i
                                                data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-9.jpg"
                                                title="Uploaded at 2 July 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-1.jpg"
                                                title="Uploaded at 3 November 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-14.jpg"
                                                title="Uploaded at 10 June 2021">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-nowrap">Dell XPS 13</a>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC
                                        &amp; Laptop</div>
                                </td>
                                <td class="text-center">103</td>
                                <td class="w-40">
                                    <div class="flex items-center justify-center text-success"> <i
                                            data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                                    </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href=""> <i
                                                data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                            Edit </a>
                                        <a class="flex items-center text-danger" href=""> <i
                                                data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-14.jpg"
                                                title="Uploaded at 13 October 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-3.jpg"
                                                title="Uploaded at 20 September 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-3.jpg"
                                                title="Uploaded at 20 January 2021">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                        Photography</div>
                                </td>
                                <td class="text-center">50</td>
                                <td class="w-40">
                                    <div class="flex items-center justify-center text-success"> <i
                                            data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active
                                    </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href=""> <i
                                                data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                            Edit </a>
                                        <a class="flex items-center text-danger" href=""> <i
                                                data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-8.jpg"
                                                title="Uploaded at 18 July 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-8.jpg"
                                                title="Uploaded at 26 April 2021">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone - HTML Admin Template"
                                                class="tooltip rounded-full"
                                                src="dist/images/preview-2.jpg"
                                                title="Uploaded at 26 December 2021">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-nowrap">Apple MacBook Pro
                                        13</a>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC
                                        &amp; Laptop</div>
                                </td>
                                <td class="text-center">50</td>
                                <td class="w-40">
                                    <div class="flex items-center justify-center text-danger"> <i
                                            data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                        Inactive </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href=""> <i
                                                data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                            Edit </a>
                                        <a class="flex items-center text-danger" href=""> <i
                                                data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                    <nav class="w-full sm:w-auto sm:mr-auto">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4"
                                        data-lucide="chevrons-left"></i> </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4"
                                        data-lucide="chevron-left"></i> </a>
                            </li>
                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                            <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4"
                                        data-lucide="chevron-right"></i> </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4"
                                        data-lucide="chevrons-right"></i> </a>
                            </li>
                        </ul>
                    </nav>
                    <select class="w-20 form-select box mt-3 sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
            </div>
            <!-- END: Weekly Top Products -->
        </div>
    </div>
    <div class="col-span-12 2xl:col-span-3">
        <div class="2xl:border-l -mb-10 pb-10">
            <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                <!-- BEGIN: Schedules -->
                <div
                    class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Schedules
                        </h2>
                        <a href="" class="ml-auto text-primary truncate flex items-center"> <i
                                data-lucide="plus" class="w-4 h-4 mr-1"></i> Add New Schedules </a>
                    </div>
                    <div class="mt-5">
                        <div class="intro-x box">
                            <div class="p-5">
                                <div class="flex">
                                    <i data-lucide="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                    <div class="font-medium text-base mx-auto">April</div>
                                    <i data-lucide="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                </div>
                                <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                    <div class="font-medium">Su</div>
                                    <div class="font-medium">Mo</div>
                                    <div class="font-medium">Tu</div>
                                    <div class="font-medium">We</div>
                                    <div class="font-medium">Th</div>
                                    <div class="font-medium">Fr</div>
                                    <div class="font-medium">Sa</div>
                                    <div class="py-0.5 rounded relative text-slate-500">29</div>
                                    <div class="py-0.5 rounded relative text-slate-500">30</div>
                                    <div class="py-0.5 rounded relative text-slate-500">31</div>
                                    <div class="py-0.5 rounded relative">1</div>
                                    <div class="py-0.5 rounded relative">2</div>
                                    <div class="py-0.5 rounded relative">3</div>
                                    <div class="py-0.5 rounded relative">4</div>
                                    <div class="py-0.5 rounded relative">5</div>
                                    <div
                                        class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">
                                        6</div>
                                    <div class="py-0.5 rounded relative">7</div>
                                    <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                    <div class="py-0.5 rounded relative">9</div>
                                    <div class="py-0.5 rounded relative">10</div>
                                    <div class="py-0.5 rounded relative">11</div>
                                    <div class="py-0.5 rounded relative">12</div>
                                    <div class="py-0.5 rounded relative">13</div>
                                    <div class="py-0.5 rounded relative">14</div>
                                    <div class="py-0.5 rounded relative">15</div>
                                    <div class="py-0.5 rounded relative">16</div>
                                    <div class="py-0.5 rounded relative">17</div>
                                    <div class="py-0.5 rounded relative">18</div>
                                    <div class="py-0.5 rounded relative">19</div>
                                    <div class="py-0.5 rounded relative">20</div>
                                    <div class="py-0.5 rounded relative">21</div>
                                    <div class="py-0.5 rounded relative">22</div>
                                    <div
                                        class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">
                                        23</div>
                                    <div class="py-0.5 rounded relative">24</div>
                                    <div class="py-0.5 rounded relative">25</div>
                                    <div class="py-0.5 rounded relative">26</div>
                                    <div
                                        class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">
                                        27</div>
                                    <div class="py-0.5 rounded relative">28</div>
                                    <div class="py-0.5 rounded relative">29</div>
                                    <div class="py-0.5 rounded relative">30</div>
                                    <div class="py-0.5 rounded relative text-slate-500">1</div>
                                    <div class="py-0.5 rounded relative text-slate-500">2</div>
                                    <div class="py-0.5 rounded relative text-slate-500">3</div>
                                    <div class="py-0.5 rounded relative text-slate-500">4</div>
                                    <div class="py-0.5 rounded relative text-slate-500">5</div>
                                    <div class="py-0.5 rounded relative text-slate-500">6</div>
                                    <div class="py-0.5 rounded relative text-slate-500">7</div>
                                    <div class="py-0.5 rounded relative text-slate-500">8</div>
                                    <div class="py-0.5 rounded relative text-slate-500">9</div>
                                </div>
                            </div>
                            <div class="border-t border-slate-200/60 p-5">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                    <span class="truncate">UI/UX Workshop</span> <span
                                        class="font-medium xl:ml-auto">23th</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span class="truncate">VueJs Frontend Development</span> <span
                                        class="font-medium xl:ml-auto">10th</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                    <span class="truncate">Laravel Rest API</span> <span
                                        class="font-medium xl:ml-auto">31th</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Schedules -->
            </div>
        </div>
    </div>
</div>
@endsection