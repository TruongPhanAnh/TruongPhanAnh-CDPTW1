<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1728">
    <div class="container ">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 p-0">
                <div class="card-body">
                    <h2 class="card-title">THE7 CORPORATE</h2>

                    <p>Suspendisse ullamcorper finibus justo eget auctor. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante.</p>

                    <p>Nam eget neque pellentesque, efficitur neque at, ornare orci. Morbi convallis a eros fermentum rhoncus. Morbi convallis a eros fermentum rhoncus lorem. Vestibulum ligula orci, volutpat id aliquet eget, consectetur eget ante. Duis pharetra for nec rhoncus felis sagittis nec amet ultricies lorem.</p>
                    <p>Quisque lorem <span class="color">12 YEARS</span> quis efficitur felis. Duis pharetra <span>86 CLIENTS</span> for amet ultricies augue, nec rhoncus felis <span>7 AWARDS</span> sagittis nec.</p>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-12 p-0">
                <div class="card-body">
                    <h2 class="card-title">OUR EXPERIENCE</h2>
                    <div class="pro">
                        <p>Creative Services - 12 years</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                        </div>
                        <p>Insights & Strategy - 10 years</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                        </div>
                        <p>Media Research - 8 years</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                        <p>Marketing Data - 7 years</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>