@extends('layouts.app')

@section('title', 'Dashboard')
@section('header-title', 'Dashboard')

@section('styles')
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
<div class="cards">
    <div class="card-single">
        <div>
            <h1>54</h1>
            <span>Customers</span>
        </div>
        <div>
            <span class="las la-users"></span>
        </div>
    </div>
    <div class="card-single">
        <div>
            <h1>79</h1>
            <span>Projects</span>
        </div>
        <div>
            <span class="las la-clipboard-list"></span>
        </div>
    </div>
    <div class="card-single">
        <div>
            <h1>124</h1>
            <span>Orders</span>
        </div>
        <div>
            <span class="las la-shopping-bag"></span>
        </div>
    </div>
    <div class="card-single">
        <div>
            <h1>$6k</h1>
            <span>Income</span>
        </div>
        <div>
            <span class="lab la-google-wallet"></span>
        </div>
    </div>
</div>
<div class="recent-grid">
    <div class="projects">
        <div class="card">
            <div class="card-header">
                <h3>Recent Projects</h3>
                <button>See all <span class="las.la-arrow-right"></span></button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table width="100%">
                        <thead>
                        <tr>
                            <td>Project Title</td>
                            <td>Department</td>
                            <td>Status</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>UI/UX Design</td>
                            <td>UI Team</td>
                            <td><span class="status purple"></span> review</td>
                        </tr>
                        <tr>
                            <td>Web development</td>
                            <td>Frontend</td>
                            <td><span class="status pink"></span> in progress</td>
                        </tr>
                        <tr>
                            <td>Ushop app</td>
                            <td>Mobile Team</td>
                            <td><span class="status orange"></span> pending</td>
                        </tr>
                        {{-- (El resto de tus filas...) --}}
                        <tr>
                            <td>UI/UX Design</td>
                            <td>UI Team</td>
                            <td>
                                <span class="status purple"></span>
                                review
                            </td>
                        </tr>
                        <tr>
                            <td>Web development</td>
                            <td>Frontend</td>
                            <td>
                                <span class="status pink"></span>
                                in progress
                            </td>
                        </tr>
                        <tr>
                            <td>Ushop app</td>
                            <td>Mobile Team</td>
                            <td>
                                <span class="status orange"></span>
                                pending
                            </td>
                        </tr>
                        <tr>
                            <td>UI/UX Design</td>
                            <td>UI Team</td>
                            <td>
                                <span class="status purple"></span>
                                review
                            </td>
                        </tr>
                        <tr>
                            <td>Web development</td>
                            <td>Frontend</td>
                            <td>
                                <span class="status pink"></span>
                                in progress
                            </td>
                        </tr>
                        <tr>
                            <td>Ushop app</td>
                            <td>Mobile Team</td>
                            <td>
                                <span class="status orange"></span>
                                pending
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="customers">
        <div class="card">
            <div class="card-header">
                <h3>New customer</h3>
                <button>See all <span class="las.la-arrow-right"></span></button>
            </div>
            <div class="card-body">
                {{-- (Repetí el primer cliente como ejemplo para el resto) --}}
                @for ($i = 0; $i < 6; $i++)
                <div class="customer">
                    <div class="info">
                        <img src="{{ asset('img/2.jpg') }}" width="40px" height="40px" alt="">
                        <div>
                            <h4>Esteban</h4>
                            <small>CEO Excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection