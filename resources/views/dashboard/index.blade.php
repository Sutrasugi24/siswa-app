@extends('templates.default')

@section('content')
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Laporan Keseluruhan
                    </h2>
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <button class="btn box flex items-center text-slate-600 dark:text-slate-300"> <i
                                data-lucide="download" class="hidden sm:block w-4 h-4 mr-2"></i></button>
                        <button
                            class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300">
                            <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-1"></i> Unduh Data PDF </button>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="graduation-cap" class="report-box__icon"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ isset($student_count) ? $student_count : '0' }}</div>
                                <div class="text-base text-slate-500 mt-1">Jumlah Siswa</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="user-check"
                                        class="report-box__icon text-success"></i>
                                    <div class="ml-auto">
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ isset($student_active) ? $student_active : '0' }}</div>
                                <div class="text-base text-slate-500 mt-1">Data Telah Diambil</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="user-x" class="report-box__icon text-danger"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ isset($student_inactive) ? $student_inactive : '0' }}</div>
                                <div class="text-base text-slate-500 mt-1">Data Belum Diambil</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="verified" class="report-box__icon text-success"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ isset($user_count) ? $user_count : '0' }}</div>
                                <div class="text-base text-slate-500 mt-1">Jumlah User</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection