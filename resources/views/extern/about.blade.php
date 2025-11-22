@extends('extern.layout')
@section('title', 'produt name')
@section('content')
        <div class=" my-5">
            <div class="p-5 text-center bg-body-tertiary rounded-3">
                <h1 class="text-body-emphasis">{{ config('app.name', 'Laravel') }}</h1>
                <p class="col-lg-8 mx-auto fs-5 text-muted">
                    This is a custom jumbotron featuring an SVG image at the top, some
                    longer text that wraps early thanks to a responsive
                    <code>.col-*</code> class, and a customized call to action.
                </p>
                <div class="d-inline-flex gap-2 mb-5">
                    <button
                        class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill"
                        type="button"
                    >
                        Call to action
                        <svg class="bi ms-2" width="24" height="24" aria-hidden="true">
                        <use xlink:href="#arrow-right-short"></use>
                        </svg>
                    </button>
                    <button
                        class="btn btn-outline-secondary btn-lg px-4 rounded-pill"
                        type="button"
                    >
                        Secondary link
                    </button>
                </div>
            </div>
            
            <div class="container">
                <h2 class="pb-2 border-bottom text-center">Features with title</h2>
                
                <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                    <div class="col d-flex flex-column align-items-start gap-2">
                        <h2 class="fw-bold text-body-emphasis">
                        Left-aligned title explaining these awesome features
                        </h2>
                        <p class="text-body-secondary">
                        Paragraph of text beneath the heading to explain the heading.
                        We'll add onto it with another sentence and probably just keep
                        going until we run out of words.
                        </p>
                        <a href="#" class="btn btn-primary btn-lg">Primary button</a>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 g-4  about-icon">
                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <i class="bi bi-collection"></i>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis">
                            Featured title
                            </h4>
                            <p class="text-body-secondary">
                            Paragraph of text beneath the heading to explain the heading.
                            </p>
                        </div>
                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <i class="bi bi-gear-fill"></i>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis">
                            Featured title
                            </h4>
                            <p class="text-body-secondary">
                            Paragraph of text beneath the heading to explain the heading.
                            </p>
                        </div>
                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <i class="bi bi-speedometer"></i>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis">
                            Featured title
                            </h4>
                            <p class="text-body-secondary">
                            Paragraph of text beneath the heading to explain the heading.
                            </p>
                        </div>
                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <i class="bi bi-table"></i>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis">
                            Featured title
                            </h4>
                            <p class="text-body-secondary">
                            Paragraph of text beneath the heading to explain the heading.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection