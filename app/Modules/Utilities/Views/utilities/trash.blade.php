@extends('layouts.master')

@section('content')

    <section class="content-header">
        <h1 class="pull-left">
            {{ trans('fi.manage_trash') }}
        </h1>

        <div class="clearfix"></div>
    </section>

    <section class="content">

        @include('layouts._alerts')

        <div class="row">

            <div class="col-xs-12">

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-clients">{{ trans('fi.clients') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-quotes">{{ trans('fi.quotes') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-workorders">{{ trans('fi.workorders') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-invoices">{{ trans('fi.invoices') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-recurring_invoices">{{ trans('fi.recurring_invoices') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-payments">{{ trans('fi.payments') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-expenses">{{ trans('fi.expenses') }}</a></li>
                        <li><a data-toggle="tab" href="#tab-projects">{{ trans('fi.projects') }}</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab-clients" class="tab-pane active">

                            <div class="row">
                                <div class="col-md-12">
                                    @include('utilities._clientstrash')
                                </div>
                            </div>
                        </div>

                        <div id="tab-quotes" class="tab-pane">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('utilities._quotestrash')
                                </div>
                            </div>
                        </div>

                        <div id="tab-workorders" class="tab-pane">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('utilities._workorderstrash')
                                </div>
                            </div>
                        </div>

                        <div id="tab-invoices" class="tab-pane">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('utilities._invoicestrash')
                                </div>
                            </div>
                        </div>

                        <div id="tab-recurring_invoices" class="tab-pane">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('utilities._recurring_invoicestrash')
                                </div>
                            </div>
                        </div>

                        <div id="tab-payments" class="tab-pane">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('utilities._paymentstrash')
                                </div>
                            </div>
                        </div>
                        <div id="tab-expenses" class="tab-pane">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('utilities._expensestrash')
                                </div>
                            </div>
                        </div>
                        <div id="tab-projects" class="tab-pane">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('utilities._projectstrash')
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

@stop