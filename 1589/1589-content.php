<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1589">
    <div class="container ">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 p-4">
                <div class="position-relative img">
                    <div class="fancy-date">
                        <a title="7:05 pm" href="" rel="nofollow">
                            <span class="entry-month">
                                Mar
                            </span>
                            <span class="entry-date">
                                25
                            </span>
                            <span class="entry-year">
                                2017
                            </span>
                        </a>
                    </div>
                    <div class="card-img-wrapper">
                        <img class="card-img" src="images/1.jpg" alt="Hình 1">
                    </div>
                </div>
                <div class="card-body">
                    <a href="#">
                        <h3 class="card-title">LOREM IOSUM SIT AMET DOLOR</h3>
                    </a>
                    <span class="a mt-3"></span>
                    <a href="">
                        <p>Technology Comment</p>
                    </a>
                    <p class="card-text mt-3">
                        Amet ipsum id sem quis mauris porttitor conse quat id vitae dolor.
                        Phasellus ligula velit molestie rhoncus ullamcorper mauris ultricies mi at pharetra lorem.
                    </p>
                    <a href="#" class="view font-weight-bold pb-1">
                        Read more
                        <i class="fa fa-caret-right ml-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 p-4">
                <div class="position-relative img">
                    <div class="fancy-date">
                        <a title="7:05 pm" href="" rel="nofollow">
                            <span class="entry-month">
                                Mar
                            </span>
                            <span class="entry-date">
                                25
                            </span>
                            <span class="entry-year">
                                2017
                            </span>
                        </a>
                    </div>
                    <div class="card-img-wrapper">
                        <img class="card-img" src="images/1.jpg" alt="Hình 1">
                    </div>
                </div>
                <div class="card-body">
                    <a href="#">
                        <h3 class="card-title">LOREM IOSUM SIT AMET DOLOR</h3>
                    </a>
                    <span class="a mt-3"></span>
                    <a href="">
                        <p>Technology Comment</p>
                    </a>
                    <p class="card-text mt-3">
                        Amet ipsum id sem quis mauris porttitor conse quat id vitae dolor.
                        Phasellus ligula velit molestie rhoncus ullamcorper mauris ultricies mi at pharetra lorem.
                    </p>
                    <a href="#" class="view font-weight-bold pb-1">
                        Read more
                        <i class="fa fa-caret-right ml-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 p-4">
                <div class="position-relative img">
                    <div class="fancy-date">
                        <a title="7:05 pm" href="" rel="nofollow">
                            <span class="entry-month">
                                Mar
                            </span>
                            <span class="entry-date">
                                25
                            </span>
                            <span class="entry-year">
                                2017
                            </span>
                        </a>
                    </div>
                    <div class="card-img-wrapper">
                        <img class="card-img" src="images/1.jpg" alt="Hình 1">
                    </div>
                </div>
                <div class="card-body">
                    <a href="#">
                        <h3 class="card-title">LOREM IOSUM SIT AMET DOLOR</h3>
                    </a>
                    <span class="a mt-3"></span>
                    <a href="">
                        <p>Technology Comment</p>
                    </a>
                    <p class="card-text mt-3">
                        Amet ipsum id sem quis mauris porttitor conse quat id vitae dolor.
                        Phasellus ligula velit molestie rhoncus ullamcorper mauris ultricies mi at pharetra lorem.
                    </p>
                    <a href="#" class="view font-weight-bold pb-1">
                        Read more
                        <i class="fa fa-caret-right ml-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 p-4">
                <div class="position-relative img">
                    <div class="fancy-date">
                        <a title="7:05 pm" href="" rel="nofollow">
                            <span class="entry-month">
                                Mar
                            </span>
                            <span class="entry-date">
                                25
                            </span>
                            <span class="entry-year">
                                2017
                            </span>
                        </a>
                    </div>
                    <div class="card-img-wrapper">
                        <img class="card-img" src="images/1.jpg" alt="Hình 1">
                    </div>
                </div>
                <div class="card-body">
                    <a href="#">
                        <h3 class="card-title">LOREM IOSUM SIT AMET DOLOR</h3>
                    </a>
                    <span class="a mt-3"></span>
                    <a href="">
                        <p>Technology Comment</p>
                    </a>
                    <p class="card-text mt-3">
                        Amet ipsum id sem quis mauris porttitor conse quat id vitae dolor.
                        Phasellus ligula velit molestie rhoncus ullamcorper mauris ultricies mi at pharetra lorem.
                    </p>
                    <a href="#" class="view font-weight-bold pb-1">
                        Read more
                        <i class="fa fa-caret-right ml-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>