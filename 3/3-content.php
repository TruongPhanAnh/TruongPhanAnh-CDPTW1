<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3">
    <div class="container pt-5">
        <div class="heading">
            <div class="title">
                <div class="subtitle">
                    <h3>FEATURED PRODUCTS</h3>
                </div>
                <p>FEATURED ITEMS</p>
                <div class="background-text">
                    FEATURED PRODUCTS
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item border rounded">
                    <div class="img">
                        <img src="./images/1.png" alt="Image" class="img-fluid">
                        <div class="actions">
                            <a href="#" class="btn btn-sm btn-secondary">
                                <i class="fa fa-ban"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-default">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content row mx-0 border-top rounded-bottom text-center">
                        <div class="price col-4 px-0 py-2">
                            <div class="new-price">
                                $22.80
                            </div>
                            <div class="old-price">
                                $28.50
                            </div>
                        </div>
                        <div class="title col-8 px-0 py-2 border-left">
                            <h3>Nullam malesuada</h3>
                        </div>
                    </div>
                    <div class="sale">
                        <span>Sale</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item border rounded">
                    <div class="img">
                        <img src="images/1.png" alt="Image" class="img-fluid">
                        <div class="actions">
                            <a href="#" class="btn btn-sm btn-secondary">
                                <i class="fa fa-ban"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-default">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content row mx-0 border-top rounded-bottom text-center">
                        <div class="price col-4 px-0 py-2">
                            <div class="new-price">
                                $22.80
                            </div>
                            <div class="old-price">
                                $28.50
                            </div>
                        </div>
                        <div class="title col-8 px-0 py-2 border-left">
                            <h3>Nullam malesuada</h3>
                        </div>
                    </div>
                    <div class="new">
                        <span>New</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item border rounded">
                    <div class="img">
                        <img src="images/1.png" alt="Image" class="img-fluid">
                        <div class="actions">
                            <a href="#" class="btn btn-sm btn-secondary">
                                <i class="fa fa-ban"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-default">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content row mx-0 border-top rounded-bottom text-center">
                        <div class="price col-4 px-0 py-2">
                            <div class="new-price">
                                $22.80
                            </div>
                            <div class="old-price">
                                $28.50
                            </div>
                        </div>
                        <div class="title col-8 px-0 py-2 border-left">
                            <h3>Nullam malesuada</h3>
                        </div>
                    </div>
                    <div class="sale">
                        <span>Sale</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item border rounded">
                    <div class="img">
                        <img src="images/1.png" alt="Image" class="img-fluid">
                        <div class="actions">
                            <a href="#" class="btn btn-sm btn-secondary">
                                <i class="fa fa-ban"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-default">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content row mx-0 border-top rounded-bottom text-center">
                        <div class="price col-4 px-0 py-2">
                            <div class="new-price">
                                $22.80
                            </div>
                            <div class="old-price">
                                $28.50
                            </div>
                        </div>
                        <div class="title col-8 px-0 py-2 border-left">
                            <h3>Nullam malesuada</h3>
                        </div>
                    </div>
                    <div class="sale">
                        <span>Sale</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>