<div id="scheduler-dashboard-totals-widget">
    <section class="content">
        <div class="box box-solid">
            <div class="box-header">
                <h3 class="box-title">{{ trans('fi.schedule_summary') }}</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="small-box bg-olive">
                            <div class="inner">
                                <div class="huge"><h3>{!! $schedulerEvents['monthEvent'] !!}</h3></div>
                                <p>{{ trans('fi.events_this_month') }}</p>
                            </div>
                            <div class="icon"><i class="ion ion-calendar"></i></div>
                            <a class="small-box-footer" href="{!! route('scheduler.fullcalendar') !!}">
                                {{ trans('fi.vevents_this_month') }}
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="small-box bg-orange">
                            <div class="inner">
                                <div class="huge"><h3>{!! $schedulerEvents['lastMonthEvent'] !!}</h3></div>
                                <p>{{ trans('fi.events_last_month') }}</p>
                            </div>
                            <div class="icon"><i class="ion ion-calendar"></i></div>
                            <a class="small-box-footer" href="{!! route('scheduler.fullcalendar') !!}?status=last">
                                {{ trans('fi.vevents_last_month') }}
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <div class="huge"><h3>{!! $schedulerEvents['nextMonthEvent'] !!}</h3></div>
                                <p>{{ trans('fi.events_next_month') }}</p>
                            </div>
                            <div class="icon"><i class="ion ion-calendar"></i></div>
                            <a class="small-box-footer" href="{!! route('scheduler.fullcalendar') !!}?status=next">
                                {{ trans('fi.vevents_next_month') }}
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <div class="huge"><h3>{!! count($schedulerEvents['reminders']) !!}</h3></div>
                                <p>{{ trans('fi.reminders') }}</p>
                            </div>
                            <div class="icon"><i class="ion ion-ios-bell-outline"></i></div>
                            <a class="small-box-footer" href="{!! route('scheduler.index') !!}">
                                {{ trans('fi.schedule_dashboard') }}
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>