@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">CRM Dashboard</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Welcome to CRM Dashboard.</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                        class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                            class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="dropdown"><a href="#"
                                                        class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                        data-bs-toggle="dropdown"><em
                                                            class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span
                                                                class="d-none d-md-inline">Last</span> 30
                                                            Days</span><em
                                                            class="dd-indc icon ni ni-chevron-right"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Last 30 Days</span></a>
                                                            </li>
                                                            <li><a href="#"><span>Last 6 Months</span></a>
                                                            </li>
                                                            <li><a href="#"><span>Last 1 Years</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em
                                                        class="icon ni ni-reports"></em><span>Reports</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-md-6 col-lg-5">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start pb-3 g-2">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Sales Revenue</h6>
                                                <p>In last 30 days revenue from subscription.</p>
                                            </div>
                                            <div class="card-tools"><em class="card-hint icon ni ni-help"
                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="Customer of this month"></em></div>
                                        </div>
                                        <div class="analytic-au">
                                            <div class="analytic-data-group analytic-au-group g-3">
                                                <div class="analytic-data analytic-au-data">
                                                    <div class="title">Monthly</div>
                                                    <div class="amount">9.28K</div>
                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%
                                                    </div>
                                                </div>
                                                <div class="analytic-data analytic-au-data">
                                                    <div class="title">Weekly</div>
                                                    <div class="amount">2.69K</div>
                                                    <div class="change down"><em
                                                            class="icon ni ni-arrow-long-down"></em>1.92%
                                                    </div>
                                                </div>
                                                <div class="analytic-data analytic-au-data">
                                                    <div class="title">Daily (Avg)</div>
                                                    <div class="amount">0.94K</div>
                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="analytic-au-ck"><canvas class="analytics-au-chart"
                                                    id="analyticAuData"></canvas></div>
                                            <div class="chart-label-group">
                                                <div class="chart-label">01 Feb, 2021</div>
                                                <div class="chart-label">30 Feb, 2021</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group pb-3 g-2">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Import & Expense Report Statistics</h6>
                                                <p>Report Comparison</p>
                                            </div>
                                            <div class="card-tools shrink-0 d-none d-sm-block">
                                                <ul class="nav nav-switch-s2 nav-tabs bg-white">
                                                    <li class="nav-item"><a href="#" class="nav-link">7
                                                            D</a></li>
                                                    <li class="nav-item"><a href="#" class="nav-link active">1 M</a></li>
                                                    <li class="nav-item"><a href="#" class="nav-link">3
                                                            M</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="analytic-ov">
                                            <div class="analytic-data-group analytic-ov-group g-3">
                                                <div class="analytic-data analytic-ov-data">
                                                    <div class="title">Yearly</div>
                                                    <div class="amount">2.7K</div>
                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>12.37%
                                                    </div>
                                                </div>
                                                <div class="analytic-data analytic-ov-data">
                                                    <div class="title">Monothly</div>
                                                    <div class="amount">3.8K</div>
                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>47.74%
                                                    </div>
                                                </div>
                                                <div class="analytic-data analytic-ov-data">
                                                    <div class="title">Weekly</div>
                                                    <div class="amount">9.9%</div>
                                                    <div class="change down"><em
                                                            class="icon ni ni-arrow-long-down"></em>12.37%
                                                    </div>
                                                </div>
                                                <div class="analytic-data analytic-ov-data">
                                                    <div class="title">Daily</div>
                                                    <div class="amount">2.5%</div>
                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>9.35%
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="analytic-ov-ck"><canvas class="analytics-line-large"
                                                    id="analyticOvData"></canvas></div>
                                            <div class="chart-label-group ms-5">
                                                <div class="chart-label">01 Jan, 2021</div>
                                                <div class="chart-label d-none d-sm-block">15 Jan, 2021
                                                </div>
                                                <div class="chart-label">30 Jan, 2021</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Recent Sale</h6>
                                                </div>
                                                <div class="card-tools"><a href="recent-sale.html" class="link">View All</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner p-0">
                                            <table class="nk-tb-list nk-tb-ulist">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col"><span class="sub-text">ID</span></th>
                                                        <th class="nk-tb-col"><span class="sub-text">Name</span></th>
                                                        <th class="nk-tb-col"><span class="sub-text">Price</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span>
                                                        </th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-end">
                                                            <div class="dropdown"><a href="#"
                                                                    class="btn btn-xs btn-trigger btn-icon dropdown-toggle me-n1"
                                                                    data-bs-toggle="dropdown" data-offset="0,5"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-check-round-cut"></em><span>Mark
                                                                                    As Done</span></a></li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-archive"></em><span>Mark
                                                                                    As Archive</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-trash"></em><span>Remove
                                                                                    Tasks</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col"><span>P-78</span></td>
                                                        <td class="nk-tb-col"><span>Mackbook<span
                                                                    class="dot dot-success d-lg-none ms-1"></span></span>
                                                        </td>
                                                        <td class="nk-tb-col"><span>$999.00</span></td>
                                                        <td class="nk-tb-col tb-col-lg"><span
                                                                class="badge badge-dot badge-dot-xs bg-success">Available</span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions">
                                                                <li>
                                                                    <div class="dropdown"><a href="#"
                                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                                            data-bs-toggle="dropdown"><em
                                                                                class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal"
                                                                                        href="#editDataDash"><em
                                                                                            class="icon ni ni-edit"></em><span>Edit
                                                                                            Info</span></a>
                                                                                </li>
                                                                                <li><a data-bs-toggle="modal"
                                                                                        href="#deleteData"><em
                                                                                            class="icon ni ni-trash"></em><span>Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col"><span>P-56</span></td>
                                                        <td class="nk-tb-col"><span>iPhone<span
                                                                    class="dot dot-danger d-lg-none ms-1"></span></span>
                                                        </td>
                                                        <td class="nk-tb-col"><span>$700.00</span></td>
                                                        <td class="nk-tb-col tb-col-lg"><span
                                                                class="badge badge-dot badge-dot-xs bg-danger">Out
                                                                of Stock</span></td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions">
                                                                <li>
                                                                    <div class="dropdown"><a href="#"
                                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                                            data-bs-toggle="dropdown"><em
                                                                                class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal"
                                                                                        href="#editDataDash"><em
                                                                                            class="icon ni ni-edit"></em><span>Edit
                                                                                            Info</span></a>
                                                                                </li>
                                                                                <li><a data-bs-toggle="modal"
                                                                                        href="#deleteData"><em
                                                                                            class="icon ni ni-trash"></em><span>Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col"><span>P-68</span></td>
                                                        <td class="nk-tb-col"><span>Watch<span
                                                                    class="dot dot-success d-lg-none ms-1"></span></span>
                                                        </td>
                                                        <td class="nk-tb-col"><span>$260.00</span></td>
                                                        <td class="nk-tb-col tb-col-lg"><span
                                                                class="badge badge-dot badge-dot-xs bg-success">Available</span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions">
                                                                <li>
                                                                    <div class="dropdown"><a href="#"
                                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                                            data-bs-toggle="dropdown"><em
                                                                                class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal"
                                                                                        href="#editDataDash"><em
                                                                                            class="icon ni ni-edit"></em><span>Edit
                                                                                            Info</span></a>
                                                                                </li>
                                                                                <li><a data-bs-toggle="modal"
                                                                                        href="#deleteData"><em
                                                                                            class="icon ni ni-trash"></em><span>Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col"><span>P-56</span></td>
                                                        <td class="nk-tb-col"><span>Earbuds<span
                                                                    class="dot dot-warning d-lg-none ms-1"></span></span>
                                                        </td>
                                                        <td class="nk-tb-col"><span>$180.00</span></td>
                                                        <td class="nk-tb-col tb-col-lg"><span
                                                                class="badge badge-dot badge-dot-xs bg-warning">Low
                                                                Stock</span></td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions">
                                                                <li>
                                                                    <div class="dropdown"><a href="#"
                                                                            class="dropdown-toggle btn btn-icon btn-trigger"
                                                                            data-bs-toggle="dropdown"><em
                                                                                class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a data-bs-toggle="modal"
                                                                                        href="#editDataDash"><em
                                                                                            class="icon ni ni-edit"></em><span>Edit
                                                                                            Info</span></a>
                                                                                </li>
                                                                                <li><a data-bs-toggle="modal"
                                                                                        href="#deleteData"><em
                                                                                            class="icon ni ni-trash"></em><span>Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xxl-4">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Traffic Channel</h6>
                                            </div>
                                            <div class="card-tools">
                                                <div class="drodown"><a href="#"
                                                        class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white"
                                                        data-bs-toggle="dropdown">30 Days</a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>7 Days</span></a></li>
                                                            <li><a href="#"><span>15 Days</span></a></li>
                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="traffic-channel">
                                            <div class="traffic-channel-doughnut-ck"><canvas class="analytics-doughnut"
                                                    id="TrafficChannelDoughnutData"></canvas></div>
                                            <div class="traffic-channel-group g-2">
                                                <div class="traffic-channel-data">
                                                    <div class="title"><span class="dot dot-lg sq"
                                                            data-bg="#9cabff"></span><span>Organic
                                                            Search</span></div>
                                                    <div class="amount">4,305 <small>58.63%</small></div>
                                                </div>
                                                <div class="traffic-channel-data">
                                                    <div class="title"><span class="dot dot-lg sq"
                                                            data-bg="#b8acff"></span><span>Social
                                                            Media</span></div>
                                                    <div class="amount">859 <small>23.94%</small></div>
                                                </div>
                                                <div class="traffic-channel-data">
                                                    <div class="title"><span class="dot dot-lg sq"
                                                            data-bg="#ffa9ce"></span><span>Referrals</span>
                                                    </div>
                                                    <div class="amount">482 <small>12.94%</small></div>
                                                </div>
                                                <div class="traffic-channel-data">
                                                    <div class="title"><span class="dot dot-lg sq"
                                                            data-bg="#f9db7b"></span><span>Others</span>
                                                    </div>
                                                    <div class="amount">138 <small>4.49%</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/charts/chart-crm19ce.js') }}"></script>
@endsection