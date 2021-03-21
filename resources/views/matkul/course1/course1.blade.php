@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
    
    <div class="section-body">
        <h2 class="section-title">Courses</h2>
        {{-- <p class="section-lead">
          Toggle the visibility of content across your project with a few classes and our JavaScript plugins.
        </p> --}}

        {{-- <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <article class="article article-style-b">
                <div class="article-header">
                  <div class="article-image" data-background="../assets/img/news/img13.jpg">
                  </div>
                </div>
                <div class="article-details">
                    <div class="article-category">Pertemuan 1</a>
                  <div class="article-title">
                    <h2><a href="#">Into</a></h2>
                  </div>
                  <div class="progress mb-3" data-height="15">
                    <div class="progress-bar" role="progressbar" data-width="100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <article class="article article-style-b">
                <div class="article-header">
                  <div class="article-image" data-background="../assets/img/news/img15.jpg">
                  </div>
                </div>
                <div class="article-details">
                    <div class="article-category">Pertemuan 2</a>
                  <div class="article-title">
                    <h2><a href="#">Review PHP-HTML </a></h2>
                  </div>
                  <div class="progress mb-3" data-height="15">
                    <div class="progress-bar" role="progressbar" data-width="75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                  </div>
                  
                </div>
              </article>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <article class="article article-style-b">
                <div class="article-header">
                  <div class="article-image" data-background="../assets/img/news/img07.jpg">
                  </div>
                </div>
                <div class="article-details">
                    <div class="article-category">Pertemuan 3</a>
                  <div class="article-title">
                    <h2><a href="#">Filter Var</a></h2>
                  </div>
                  <div class="progress mb-3" data-height="15">
                      <div class="progress-bar" role="progressbar" data-width="75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                  
                </div>
              </article>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                  <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/img14.jpg">
                    </div>
                  </div>
                  <div class="article-details">
                      <div class="article-category">Pertemuan 4</a>
                    <div class="article-title">
                      <h2><a href="#">Sign in with Google</a></h2>
                    </div>
                    <div class="progress mb-3" data-height="15">
                      <div class="progress-bar" role="progressbar" data-width="100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                  </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <article class="article article-style-b">
                <div class="article-header">
                  <div class="article-image" data-background="../assets/img/news/img02.jpg">
                  </div>
                </div>
                <div class="article-details">
                    <div class="article-category">Pertemuan 5</a>
                  <div class="article-title">
                    <h2><a href="#">Secure URI</a></h2>
                  </div>
                  <div class="progress mb-3" data-height="15">
                      <div class="progress-bar" role="progressbar" data-width="100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                  
                </div>
              </article>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                  <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/img14.jpg">
                    </div>
                  </div>
                  <div class="article-details">
                      <div class="article-category">Pertemuan 6</a>
                    <div class="article-title">
                      <h2><a href="#">Secure Path Location</a></h2>
                    </div>
                    <div class="progress mb-3" data-height="15">
                      <div class="progress-bar" role="progressbar" data-width="75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    
                  </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                    <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/img13.jpg">
                    </div>
                    </div>
                    <div class="article-details">
                        <div class="article-category">Pertemuan 7</a>
                    <div class="article-title">
                        <h2><a href="#">Secure Database</a></h2>
                    </div>
                    <div class="progress mb-3" data-height="15">
                        <div class="progress-bar" role="progressbar" data-width="75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    
                    </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                <div class="article-header">
                    <div class="article-image" data-background="../assets/img/news/img14.jpg">
                    </div>
                    <div class="article-badge">
                        <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Trending</div>
                    </div>
                </div>
                <div class="article-details">
                    <div class="article-category">Pertemuan 8</a>
                    <div class="article-title">
                    <h2><a href="#">UTS Kisi-Kisi</a></h2>
                    </div>
                    <div class="progress mb-3" data-height="15">
                    <div class="progress-bar" role="progressbar" data-width="100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>
                </article>
            </div>
        </div> --}}

        <div class="col-lg-12 col-md-12 col-12">
          <div class="card">
            <div class="card-header">
              <h4>This Week Stats</h4>
              <div class="card-header-action">
                
              </div>
            </div>
            <div class="card-body">
              <div class="summary">
                <div class="summary-info">
                  <h4>$1,053</h4>
                  <div class="text-muted">Sold 3 items on 2 customers</div>
                  <div class="d-block mt-2">
                    <a href="#">View All</a>
                  </div>
                </div>
                <div class="summary-item">
                  <h6>Item List <span class="text-muted">(3 Items)</span></h6>
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <a href="#">
                        <img class="mr-3 rounded" width="50" src="../assets/img/products/product-1-50.png" alt="product">
                      </a>
                      <div class="media-body">
                        <div class="media-right">$405</div>
                        <div class="media-title"><a href="#">PlayStation 9</a></div>
                        <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday</div>
                      </div>
                    </li>
                    <li class="media">
                      <a href="#">
                        <img class="mr-3 rounded" width="50" src="../assets/img/products/product-2-50.png" alt="product">
                      </a>
                      <div class="media-body">
                        <div class="media-right">$499</div>
                        <div class="media-title"><a href="#">RocketZ</a></div>
                        <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <a href="#">
                        <img class="mr-3 rounded" width="50" src="../assets/img/products/product-3-50.png" alt="product">
                      </a>
                      <div class="media-body">
                        <div class="media-right">$149</div>
                        <div class="media-title"><a href="#">Xiaomay Readme 4.0</a></div>
                        <div class="text-muted text-small">by <a href="#">Kusnaedi</a> <div class="bullet"></div> Tuesday
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>

</div>
@endsection

@push('page-scripts')
    
@endpush