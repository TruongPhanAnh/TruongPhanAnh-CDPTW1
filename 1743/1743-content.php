<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1743">
    <div class="container ">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 p-0">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="info-wrapper ult-adjust-bottom-margin">
                            <div class="info-circle-wrapper info-circle-responsive">
                                <div class="info-c-full-br" data-start-degree="90" data-info-circle-angle="full" data-responsive-circle="on" data-responsive-breakpoint="400" data-launch="linear" data-launch-duration="0.6" data-launch-delay="0.2" data-slide-true="on" data-slide-duration="5" data-icon-size="24" data-icon-show="show" data-icon-show-size="32" data-highlight-style="info-circle-pop" data-focus-on="hover" data-slide-number="5">
                                    <div class="icon-circle-list">
                                        <div class="info-circle-icons" style="top: -230px;">
                                            <i class="fa fa-briefcase info-circle-icon"></i>
                                        </div>
                                        <div class="info-details" data-icon-class="ult-info-circle-icon">
                                            <div class="info-circle-def">
                                                <div class="info-circle-sub-def">
                                                    <i class="fa fa-briefcase info-circle-icon"></i>
                                                    <div class="responsive-font-class ult-responsive">
                                                        <h3>Industry Experience</h3>
                                                        <div class="info-circle-text">Nullam faucibus
                                                            dictum nibh vel tempor – at loem ipsum
                                                            dapibus!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-circle-icons" style="left: 218.743px; top: -71.0739px;">
                                            <i class="fa fa-user info-circle-icon"></i>
                                        </div>
                                        <div class="info-details" data-icon-class="ult-info-circle-icon">
                                            <div class="info-circle-def">
                                                <div class="info-circle-sub-def">
                                                    <i class="fa fa-user info-circle-icon"></i>
                                                    <div class="responsive-font-class ult-responsive">
                                                        <h3>Brilliant Team</h3>
                                                        <div class="info-circle-text">Nunc facilisis
                                                            mauris id luctus nunc amet lacus faucibus lorem.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-circle-icons" style="left: 135.191px; top: 186.074px;">
                                            <i class="fa fa-cogs info-circle-icon"></i>
                                        </div>
                                        <div class="info-details" data-icon-class="ult-info-circle-icon">
                                            <div class="info-circle-def">
                                                <div class="info-circle-sub-def">
                                                    <i class="fa fa-cogs info-circle-icon"></i>
                                                    <div class="responsive-font-class ult-responsive">
                                                        <h3>Creative &amp; Professional</h3>
                                                        <div class="info-circle-text">Pellen tesque
                                                            habitant morbi tristique amet glavrida senectu.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-circle-icons" style="left: -135.191px; top: 186.074px;">
                                            <i class="fa fa-comments info-circle-icon"></i>
                                        </div>
                                        <div class="info-details" data-icon-class="ult-info-circle-icon">
                                            <div class="info-circle-def">
                                                <div class="info-circle-sub-def">
                                                    <i class="fa fa-comments info-circle-icon"></i>
                                                    <div class="responsive-font-class ult-responsive">
                                                        <h3>Complex Sollutions</h3>
                                                        <div class="info-circle-text">Lorem ipsum –
                                                            tesque morbi dolor for nulla tristique senectu.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-circle-icons info-circle-pop info-circle-active" style="left: -218.743px; top: -71.0739px;">
                                            <i class="fa fa-flag info-circle-icon"></i>
                                        </div>
                                        <div class="info-details" data-icon-class="ult-info-circle-icon">
                                            <div class="info-circle-def">
                                                <div class="info-circle-sub-def">
                                                    <i class="fa fa-flag info-circle-icon"></i>
                                                    <div class="responsive-font-class ult-responsive">
                                                        <h3>100% Result Guarantee</h3>
                                                        <div class="info-circle-text">Dolor glavrida
                                                            amet
                                                            habitant morbi dolor agalvida – for
                                                            tristique lorem senectu.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-c-full">
                                        <div class="info-c-full-wrap" style="opacity: 1;">
                                            <div class="info-circle-def">
                                                <div class="info-circle-sub-def">
                                                    <i class="fa fa-flag info-circle-icon" style="font-size: 32px;"></i>
                                                    <div class="responsive-font-class ult-responsive">
                                                        <h3>100% Result Guarantee</h3>
                                                        <div class="info-circle-text">Dolor glavrida
                                                            amet
                                                            habitant morbi dolor agalvida – for
                                                            tristique lorem senectu.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 p-4">
                <div class="headlineS">
                    <h2>5 MAIN REASONS TO CHOOSE US</h2>
                    <ul>
                        <li>
                            <div class="headlinesyear">1</div>
                            <div class="headlinestitle">
                                <p>Because acting with lorm ipsum – integrity ipsum porta maximus, odio augue ullam rutrum velit sit tincidunt elit.</p>
                            </div>
                        </li>
                        <li>
                            <div class="headlinesyear">2</div>
                            <div class="headlinestitle">
                                <p>Because acting with lorm ipsum – integrity ipsum porta maximus, odio augue ullam rutrum velit sit tincidunt elit.</p>
                            </div>
                        </li>
                        <li>
                            <div class="headlinesyear">3</div>
                            <div class="headlinestitle">
                                <p>Because acting with lorm ipsum – integrity ipsum porta maximus, odio augue ullam rutrum velit sit tincidunt elit.</p>
                            </div>
                        </li>
                        <li>
                            <div class="headlinesyear">4</div>
                            <div class="headlinestitle">
                                <p>Because acting with lorm ipsum – integrity ipsum porta maximus, odio augue ullam rutrum velit sit tincidunt elit.</p>
                            </div>
                        </li>
                        <li>
                            <div class="headlinesyear">5</div>
                            <div class="headlinestitle">
                                <p>Because acting with lorm ipsum – integrity ipsum porta maximus, odio augue ullam rutrum velit sit tincidunt elit.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>