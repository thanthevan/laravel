@extends('admin.master')
@section('head')
<title>Unishop-Phản hồi</title>
<meta content="" name="description" />
<link rel="stylesheet" href="public/source/admin/plugins/dropzone/dropzone.css">
<meta content="" name="description" />
@endsection
@section('content')
 <div id="main-content" class="page-mailbox">
            <div class="row" data-equal-height="true">
                <div class="col-md-4 list-messages">
                    <div class="panel panel-default">
                        <div class="panel-body messages">
                            <div class="input-group input-group-lg border-bottom">
                                <span class="input-group-btn">
                                    <a href="#" class="btn"><i class="fa fa-search"></i></a>
                                  </span>
                                <input type="text" class="form-control bd-0 bd-white" placeholder="Search">
                            </div>
                            <div id="messages-list" class="panel panel-default withScroll" data-height="window" data-padding="90">
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar3_big.png" alt="avatar 3" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                <h4 class="c-dark">Reset your account password</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="message-item media message-active">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar4_big.png" alt="avatar 4" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5><strong>Jerry Smith</strong></h5>
                                                <h4>Re: Check Dropbox</h4>
                                            </div>
                                        </div>
                                        <p class="f-14">Hello Steve, I have added new files in your Dropbox in order to show you how to...</p>
                                    </div>
                                </div>
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar5_big.png" alt="avatar 5" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                <h4 class="c-dark">Reset your account password</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar10_big.png" alt="avatar 10" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>Jerry Smith</strong></h5>
                                                <h4 class="c-dark">Check Dropbox</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Hello Steve, I have added new files in your Dropbox in order to show you how to...</p>
                                    </div>
                                </div>
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar7_big.png" alt="avatar 7" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                <h4 class="c-dark">Reset your account password</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar9_big.png" alt="avatar 9" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>Jerry Smith</strong></h5>
                                                <h4 class="c-dark">Check Dropbox</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Hello Steve, I have added new files in your Dropbox in order to show you how to...</p>
                                    </div>
                                </div>
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar8_big.png" alt="avatar 8" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                <h4 class="c-dark">Reset your account password</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar11_big.png" alt="avatar 11" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>Jerry Smith</strong></h5>
                                                <h4 class="c-dark">Check Dropbox</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Hello Steve, I have added new files in your Dropbox in order to show you how to...</p>
                                    </div>
                                </div>
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar12_big.png" alt="avatar 12" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                <h4 class="c-dark">Reset your account password</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar13_big.png" alt="avatar 13" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>Jerry Smith</strong></h5>
                                                <h4 class="c-dark">Check Dropbox</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Hello Steve, I have added new files in your Dropbox in order to show you how to...</p>
                                    </div>
                                </div>
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar1_big.png" alt="avatar 1" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                <h4 class="c-dark">Reset your account password</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar5_big.png" alt="avatar 5" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                <h4 class="c-dark">Reset your account password</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="message-item media">
                                    <div class="pull-left text-center">
                                        <div class="pos-rel message-checkbox">
                                            <input type="checkbox" data-style="flat-red">
                                        </div>
                                        <div>
                                            <strong><i class="fa fa-paperclip"></i> 2</strong>
                                        </div>
                                    </div>
                                    <div class="message-item-right">
                                        <div class="media">
                                            <img src="assets/img/avatars/avatar10_big.png" alt="avatar 10" width="50" class="pull-left">
                                            <div class="media-body">
                                                <small class="pull-right">23 Sept</small>
                                                <h5 class="c-dark"><strong>Jerry Smith</strong></h5>
                                                <h4 class="c-dark">Check Dropbox</h4>
                                            </div>
                                        </div>
                                        <p class="f-14 c-gray">Hello Steve, I have added new files in your Dropbox in order to show you how to...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 email-hidden-sm detail-message">
                    <div id="message-detail" class="panel panel-default withScroll" data-height="window" data-padding="40">
                        <div class="panel-heading messages message-result">
                            <div class="message-action-btn clearfix p-t-20">
                                <div class="pull-left">
                                    <div id="go-back" data-rel="tooltip" title="Go back" class="icon-rounded m-r-10 email-go-back"><i class="fa fa-hand-o-left"></i>
                                    </div>
                                    <div data-rel="tooltip" title="Reply" class="icon-rounded m-r-10"><i class="fa fa-reply"></i>
                                    </div>
                                    <div data-rel="tooltip" title="Forward" class="icon-rounded m-r-10"><i class="fa fa-long-arrow-right"></i>
                                    </div>
                                    <div data-rel="tooltip" title="Remove from favs" class="icon-rounded heart-red m-r-10"><i class="fa fa-heart"></i>
                                    </div>
                                    <div data-rel="tooltip" title="Print" class="icon-rounded m-r-10"><i class="fa fa-print"></i>
                                    </div>
                                    <div data-rel="tooltip" title="Move to trash" class="icon-rounded m-r-10"><i class="fa fa-trash-o"></i>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div data-rel="tooltip" title="Prev" class="icon-rounded m-r-10"><i class="fa fa-angle-double-left"></i>
                                    </div>
                                    <div data-rel="tooltip" title="Next" class="icon-rounded m-r-10"><i class="fa fa-angle-double-right"></i>
                                    </div>
                                    <div data-rel="tooltip" title="Parameters" class="icon-rounded gear m-r-10"><i class="fa fa-gear"></i>
                                    </div>
                                </div>
                            </div>
                            <h2 class="p-t-20 w-500">Re: Check Dropbox</h2>
                        </div>
                        <div class="panel-body messages message-result">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="p-20">
                                        <div class="message-item media">
                                            <div class="message-item-right">
                                                <div class="media">
                                                    <img src="assets/img/avatars/avatar4_big.png" alt="avatar 4" width="50" class="pull-left">
                                                    <div class="media-body">
                                                        <small class="pull-right">23 Sept</small>
                                                        <h5 class="c-dark"><strong>Jerry Smith</strong></h5>
                                                        <p class="c-gray">jerry.smith@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-body">
                                        <p>Hi John,</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero corporis ipsam voluptatibus suscipit eos expedita sapiente omnis voluptatum ea! Culpa, vitae eaque quis modi voluptatum quisquam ullam. Modi,
                                            tempora!</p>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                        <p>Thanks
                                            <br>Jerry</p>
                                        <div class="message-attache">
                                            <div class="media">
                                                <i class="fa fa-paperclip pull-left fa-2x"></i>
                                                <div class="media-body">
                                                    <div><a href="#" class="strong text-regular">Project.zip</a>
                                                    </div>
                                                    <span>12 MB</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <i class="fa fa-file pull-left fa-2x"></i>
                                                <div class="media-body">
                                                    <div><a href="#" class="strong text-regular">Contract.pdf</a>
                                                    </div>
                                                    <span>228 KB</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-between"></div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="p-20">
                                        <h3 class="message-title">Check Dropbox</h3>
                                        <div class="message-item media">
                                            <div class="message-item-right">
                                                <div class="media">
                                                    <img src="assets/img/avatars/avatar7_big.png" alt="avatar 7" width="50" class="pull-left">
                                                    <div class="media-body">
                                                        <small class="pull-right">22 Sept</small>
                                                        <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                        <p class="c-gray">john.snow@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-body">
                                        <p>Hi Jerry,</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero corporis ipsam voluptatibus suscipit eos expedita sapiente omnis voluptatum ea! Culpa, vitae eaque quis modi voluptatum quisquam ullam. Modi,
                                            tempora!</p>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                        <p>Thanks
                                            <br>John</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection