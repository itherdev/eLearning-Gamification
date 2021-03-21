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

        <div class="row">
          <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
              <div class="article-header">
                <div class="article-image" data-background="../assets/img/news/img13.jpg">
                </div>
              </div>
              <div class="article-details">
                <div class="article-title">
                  <h2><a href="{{ route('course1')}}">TI6KUR2018 - ORACLE PL/SQL</a></h2>
                </div>
                <div class="article-user">
                  <img alt="image" src="../assets/img/avatar/avatar-1.png">
                  <div class="article-user-details">
                    <div class="user-detail-name">
                      <a href="#">Ade, Irma Purnamasari M.Kom</a>
                    </div>
                    <div class="text-job">NIP. 4111111111111</div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
              <div class="article-header">
                <div class="article-image" data-background="../assets/img/news/img14.jpg">
                </div>
              </div>
              <div class="article-details">
                
                <div class="article-title">
                  <h2><a href="#">TI6KUR2018 - PEMROGRAMAN WEB SERVICE</a></h2>
                </div>
                
                <div class="article-user">
                  <img alt="image" src="../assets/img/avatar/avatar-3.png">
                  <div class="article-user-details">
                    <div class="user-detail-name">
                      <a href="#">Andi, Setiawan M.Kom</a>
                    </div>
                    <div class="text-job">NIP. 4111111111111</div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
              <div class="article-header">
                <div class="article-image" data-background="../assets/img/news/img01.jpg">
                </div>
              </div>
              <div class="article-details">
                
                <div class="article-title">
                  <h2><a href="#">TI6KUR2018 - DEEP LEARNING DASAR</a></h2>
                </div>
                
                <div class="article-user">
                  <img alt="image" src="../assets/img/avatar/avatar-2.png">
                  <div class="article-user-details">
                    <div class="user-detail-name">
                      <a href="#">Gifthera, Dwilestari</a>
                    </div>
                    <div class="text-job">NIP. 4111111111111</div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
              <div class="article-header">
                <div class="article-image" data-background="../assets/img/news/img13.jpg">
                </div>
              </div>
              <div class="article-details">
                <div class="article-title">
                  <h2><a href="#">TI6KUR2018 - PEMROGRAMAN ANDROID LANJUT
                    </a></h2>
                </div>
                <div class="article-user">
                  <img alt="image" src="../assets/img/avatar/avatar-1.png">
                  <div class="article-user-details">
                    <div class="user-detail-name">
                      <a href="#">Raditya, Danar Dana</a>
                    </div>
                    <div class="text-job">NIP. 4111111111111</div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
              <div class="article-header">
                <div class="article-image" data-background="../assets/img/news/img14.jpg">
                </div>
              </div>
              <div class="article-details">
                
                <div class="article-title">
                  <h2><a href="#">TI6KUR2018 - SECURE PROGRAMMING</a></h2>
                </div>
                
                <div class="article-user">
                  <img alt="image" src="../assets/img/avatar/avatar-3.png">
                  <div class="article-user-details">
                    <div class="user-detail-name">
                      <a href="#">Iin, Sholihin, M.Kom</a>
                    </div>
                    <div class="text-job">NIP. 4111111111111</div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          
        </div>

    </div>

</div>
@endsection

@push('page-scripts')
    
@endpush