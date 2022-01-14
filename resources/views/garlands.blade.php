@extends('layouts.main')
@section('title') Garlands @endsection
@section('body')
<div class="blm-page-title-row" style="  background: linear-gradient(0deg, rgb(0 0 0 / 43%), rgb(0 0 0 / 60%)), url(/assets/images/events.jpg);">
    <div class="blm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Garlands</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{route('page.index')}}">Home</a>
                        </span>
                        <span>Garlands</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid tm-container-content tm-mt-60" style="margin-top: 30px;">
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">
            Latest Photos
        </h2>
      
    </div>

    <div class="masonry" style="margin-bottom: 30px;">
        <div class="mItem">
            <img src="/assets/images/garlands/146045010_3799999390023289_7856246733831738712_n.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/garlands/146597033_3800009880022240_8459456654957176997_n.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/garlands/168934330_3960772993945927_6191776271171905617_n.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/garlands/170316831_3968558126500747_5323859062435631480_n.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/garlands/182262437_4066879413335284_5014077070615217954_n.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/garlands/183724050_4054432284579997_3054715232088235576_n.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/garlands/186544564_4128980313791860_282939134167227162_n.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/garlands/190129164_4128980373791854_5740242528973030552_n.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/garlands/190160983_4105215302835028_2407992853720424694_n.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/garlands/242197028_4438595322830356_7807977704826436293_n.jpg">
        </div>
    </div>

</div>

@endsection
