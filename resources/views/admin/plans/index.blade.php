@extends('admin.layouts.app')

@section('title', 'Plan d\'abonnement')

@section('content')
    <div class="nk-content ">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">Code Example
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Pricing Table</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Choose your pricing plan and start enjoying our service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing">
                                    <div class="pricing-head">
                                        <div class="pricing-title">
                                            <h4 class="card-title title">Starter</h4>
                                            <p class="sub-text">Enjoy entry level of invest &amp; earn.</p>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-6"><span class="h4 fw-500">1.67%</span><span
                                                        class="sub-text">Daily Interest</span></div>
                                                <div class="col-6"><span class="h4 fw-500">30</span><span
                                                        class="sub-text">Term Days</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><span class="w-50">Min Deposit</span> - <span class="ms-auto">$250</span>
                                            </li>
                                            <li><span class="w-50">Max Deposit</span> - <span class="ms-auto">$1,999</span>
                                            </li>
                                            <li><span class="w-50">Deposit Return</span> - <span class="ms-auto">Yes</span>
                                            </li>
                                            <li><span class="w-50">Total Return</span> - <span class="ms-auto">125%</span>
                                            </li>
                                        </ul>
                                        <div class="pricing-action"><button class="btn btn-outline-light">Choose this
                                                plan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing">
                                    <div class="pricing-head">
                                        <div class="pricing-title">
                                            <h4 class="card-title title">Silver</h4>
                                            <p class="sub-text">Best plan for user to investers.</p>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-6"><span class="h4 fw-500">4.76%</span><span
                                                        class="sub-text">Daily Interest</span></div>
                                                <div class="col-6"><span class="h4 fw-500">21</span><span
                                                        class="sub-text">Term Days</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><span class="w-50">Min Deposit</span> - <span class="ms-auto">$2,000</span>
                                            </li>
                                            <li><span class="w-50">Max Deposit</span> - <span class="ms-auto">$4,999</span>
                                            </li>
                                            <li><span class="w-50">Deposit Return</span> - <span class="ms-auto">Yes</span>
                                            </li>
                                            <li><span class="w-50">Total Return</span> - <span class="ms-auto">200%</span>
                                            </li>
                                        </ul>
                                        <div class="pricing-action"><button class="btn btn-outline-light">Choose this
                                                plan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing recommend"><span
                                        class="pricing-badge badge bg-primary">Recommend</span>
                                    <div class="pricing-head">
                                        <div class="pricing-title">
                                            <h4 class="card-title title">Dimond</h4>
                                            <p class="sub-text">Advance level of invest &amp; earn.</p>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-6"><span class="h4 fw-500">14.29%</span><span
                                                        class="sub-text">Daily Interest</span></div>
                                                <div class="col-6"><span class="h4 fw-500">14</span><span
                                                        class="sub-text">Term Days</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><span class="w-50">Min Deposit</span> - <span class="ms-auto">$5,000</span>
                                            </li>
                                            <li><span class="w-50">Max Deposit</span> - <span class="ms-auto">$20,000</span>
                                            </li>
                                            <li><span class="w-50">Deposit Return</span> - <span class="ms-auto">Yes</span>
                                            </li>
                                            <li><span class="w-50">Total Return</span> - <span class="ms-auto">300%</span>
                                            </li>
                                        </ul>
                                        <div class="pricing-action"><button class="btn btn-outline-light">Choose this
                                                plan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing">
                                    <div class="pricing-head">
                                        <div class="pricing-title">
                                            <h4 class="card-title title">Palitinam</h4>
                                            <p class="sub-text">Just invest money &amp; earn.</p>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-6"><span class="h4 fw-500">21.07%</span><span
                                                        class="sub-text">Daily Interest</span></div>
                                                <div class="col-6"><span class="h4 fw-500">7</span><span
                                                        class="sub-text">Term Days</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><span class="w-50">Min Deposit</span> - <span class="ms-auto">$10,500</span>
                                            </li>
                                            <li><span class="w-50">Max Deposit</span> - <span class="ms-auto">$50,999</span>
                                            </li>
                                            <li><span class="w-50">Deposit Return</span> - <span class="ms-auto">Yes</span>
                                            </li>
                                            <li><span class="w-50">Total Return</span> - <span class="ms-auto">500%</span>
                                            </li>
                                        </ul>
                                        <div class="pricing-action"><button class="btn btn-outline-light">Choose this
                                                plan</button>
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