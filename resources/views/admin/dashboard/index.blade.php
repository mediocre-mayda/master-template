@extends('admin.layouts.template')


@section('main')

    <div class="clearfix"></div>
    <div class="row">
        <div class="x_panel">
            <div class="x_title">
                <h2>Dashboard</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="dashboard-intro">
                    <div class="dashboard-intro__content">
                        <h2>Welcome to Admin Dashboard.</h2>
                       
                        <p> </p>
                        <p><strong>Stats:</strong></p>
                        <p>Cities: {{ $count_cities }}</p>
                        <p>Places: {{ $count_places }}</p>
                        <p>Categories: {{ $count_users }}</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@stop
