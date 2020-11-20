@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <div>
                <div class="btn-group w-100 mb-2">
                    <a class="btn btn-outline-primary rounded active m-1" href="javascript:void(0)" data-filter="all">
                        All Images
                    </a>
                    <a class="btn btn-outline-primary rounded m-1" href="javascript:void(0)" data-filter="1">
                        Academic
                    </a>
                    <a class="btn btn-outline-primary rounded m-1" href="javascript:void(0)" data-filter="2">
                        Co-Curricular
                    </a>
                    <a class="btn btn-outline-primary rounded m-1" href="javascript:void(0)" data-filter="3">
                        Sports
                    </a>
                    <a class="btn btn-outline-primary rounded m-1" href="javascript:void(0)" data-filter="4">
                        Awards
                    </a>
                    <a class="btn btn-outline-primary rounded m-1" href="javascript:void(0)" data-filter="5">
                        Events
                    </a>
                </div>
                <div class="mb-2">
                    <a class="badge badge-pill rounded-circle" href="javascript:void(0)" data-shuffle>
                        <i class="material-icons">shuffle</i>
                    </a>
                    {{-- <div class="float-right">
                        <select class="custom-select" style="width: auto;" data-sortOrder>
                            <option value="sortData"> Sort by Category </option>
                        </select>
                        <div class="btn-group">
                            <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                            <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div>
                <div class="filter-container p-0 row">
                    @if(count($ac_galleries)>0)
                        @foreach($ac_galleries as $ac_gallery)
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="academic">
                                <a href="/storage/gallery/mso11_1592542013.jpg" data-toggle="lightbox"
                                    data-title="{{ $ac_gallery->caption }}">
                                    <figure class="figure">
                                        <img class="figure-img img-fluid"
                                            src="/storage/gallery/mso11_1592542013.jpg"
                                            alt="{{ $ac_gallery->caption }}">
                                        <figcaption class="figure-caption text-justify">{{ $ac_gallery->caption }}
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="academic">
                                <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxrf2QfS1CgfkiMpGbVeeeKUTOcW3aD5WKRA&usqp=CAU"
                                    data-toggle="lightbox" data-title="{{ $ac_gallery->caption }}">
                                    <figure class="figure">
                                        <img class="figure-img img-fluid"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxrf2QfS1CgfkiMpGbVeeeKUTOcW3aD5WKRA&usqp=CAU"
                                            alt="{{ $ac_gallery->caption }}">
                                        <figcaption class="figure-caption text-justify">{{ $ac_gallery->caption }}
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                        @endforeach
                    @endif
                    @if(count($cc_galleries)>0)
                        @foreach($cc_galleries as $cc_gallery)
                            <div class="filtr-item col-sm-2" data-category="2" data-sort="cocurricular">
                                <a href="/storage/gallery/mso2_1592541056.jpg" data-toggle="lightbox"
                                    data-title="{{ $cc_gallery->caption }}">
                                    <figure class="figure">
                                        <img class="figure-img img-fluid"
                                            src="/storage/gallery/mso2_1592541056.jpg"
                                            alt="{{ $cc_gallery->caption }}">
                                        <figcaption class="figure-caption text-justify">{{ $cc_gallery->caption }}
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="3" data-sort="sports">
                                <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSAoPn07oVnsBhko0VLC6TwqWC7tEGC_GWY7w&usqp=CAU"
                                    data-title="caption">
                                    <figure class="figure">
                                        <img class="figure-img img-fluid"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSAoPn07oVnsBhko0VLC6TwqWC7tEGC_GWY7w&usqp=CAU"
                                            alt="image">
                                        <figcaption class="figure-caption text-justify">caption
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    @endif
                    @if(count($sp_galleries)>0)
                        @foreach($sp_galleries as $sp_gallery)
                            <div class="filtr-item col-sm-2" data-category="3" data-sort="sports">
                                <a href="/storage/gallery/mso5_1593088131.jpg" data-toggle="lightbox"
                                    data-title="{{ $sp_gallery->caption }}">
                                    <figure class="figure">
                                        <img class="figure-img img-fluid"
                                            src="/storage/gallery/mso5_1593088131.jpg"
                                            alt="{{ $sp_gallery->caption }}">
                                        <figcaption class="figure-caption text-justify">{{ $sp_gallery->caption }}
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            
                        @endforeach
                    @endif
                    @if(count($aw_galleries)>0)
                        @foreach($aw_galleries as $aw_gallery)
                            <div class="filtr-item col-sm-2" data-category="4" data-sort="awards">
                                <a href="/storage/gallery/{{ $aw_gallery->name }}" data-toggle="lightbox"
                                    data-title="{{ $aw_gallery->caption }}">
                                    <figure class="figure">
                                        <img class="figure-img img-fluid"
                                            src="/storage/gallery/{{ $aw_gallery->name }}"
                                            alt="{{ $aw_gallery->caption }}">
                                        <figcaption class="figure-caption text-justify">{{ $aw_gallery->caption }}
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    @endif
                    @if(count($mw_galleries)>0)
                        @foreach($mw_galleries as $mw_gallery)
                            <div class="filtr-item col-sm-2" data-category="5" data-sort="events">
                                <a href="/storage/gallery/mso5_1593088131.jpg" data-toggle="lightbox"
                                    data-title="{{ $mw_gallery->caption }}">
                                    <figure class="figure">
                                        <img class="figure-img img-fluid"
                                            src="/storage/gallery/mso5_1593088131.jpg"
                                            alt="{{ $mw_gallery->caption }}">
                                        <figcaption class="figure-caption text-justify">{{ $mw_gallery->caption }}
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
