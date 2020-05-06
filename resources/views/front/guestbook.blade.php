@extends('front.main')

@section('content')

<div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-header">
                    <h1>Guest Book</h1>
                </div>
                <div class="row guestbook">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <p>Message added successfully...</p>
                        </div>
                        <div class="panel panel-default panel-guestbook">
                            <div class="panel-heading">
                                <div class="guestbook__title">Lorem ipsum dolor sit amet, ex blandit luptatum eos</div>
                            </div>
                            <div class="panel-body">
                                <div class="guestbook__text">Lorem ipsum dolor sit amet, ex blandit luptatum eos, duo nobis nonumes mediocritatem cu. Ut summo eligendi nec, vitae prompta theophrastus ad has. Recteque cotidieque duo ex. Mel at sale essent, euripidis evertitur argumentum his ex. Et vidit percipit mel. Meliore assentior ne eos, usu stet tincidunt adversarium id, et prima porro nam. Harum apeirian eu mel, eos etiam saperet docendi cu.</div>
                            </div>
                            <div class="panel-footer">
                                <div class="guestbook__writer"><strong>Added By:</strong> Ahmed ElShahat</div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-guestbook">
                            <div class="panel-heading">
                                <div class="guestbook__title">Lorem ipsum dolor sit amet, ex blandit luptatum eos</div>
                            </div>
                            <div class="panel-body">
                                <div class="guestbook__text">Lorem ipsum dolor sit amet, ex blandit luptatum eos, duo nobis nonumes mediocritatem cu. Ut summo eligendi nec, vitae prompta theophrastus ad has. Recteque cotidieque duo ex. Mel at sale essent, euripidis evertitur argumentum his ex. Et vidit percipit mel. Meliore assentior ne eos, usu stet tincidunt adversarium id, et prima porro nam. Harum apeirian eu mel, eos etiam saperet docendi cu.</div>
                            </div>
                            <div class="panel-footer">
                                <div class="guestbook__writer"><strong>Added By:</strong> Ahmed ElShahat</div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-guestbook">
                            <div class="panel-heading">
                                <div class="guestbook__title">Lorem ipsum dolor sit amet, ex blandit luptatum eos</div>
                            </div>
                            <div class="panel-body">
                                <div class="guestbook__text">Lorem ipsum dolor sit amet, ex blandit luptatum eos, duo nobis nonumes mediocritatem cu. Ut summo eligendi nec, vitae prompta theophrastus ad has. Recteque cotidieque duo ex. Mel at sale essent, euripidis evertitur argumentum his ex. Et vidit percipit mel. Meliore assentior ne eos, usu stet tincidunt adversarium id, et prima porro nam. Harum apeirian eu mel, eos etiam saperet docendi cu.</div>
                            </div>
                            <div class="panel-footer">
                                <div class="guestbook__writer"><strong>Added By:</strong> Ahmed ElShahat</div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-guestbook">
                            <div class="panel-heading">
                                <div class="guestbook__title">Lorem ipsum dolor sit amet, ex blandit luptatum eos</div>
                            </div>
                            <div class="panel-body">
                                <div class="guestbook__text">Lorem ipsum dolor sit amet, ex blandit luptatum eos, duo nobis nonumes mediocritatem cu. Ut summo eligendi nec, vitae prompta theophrastus ad has. Recteque cotidieque duo ex. Mel at sale essent, euripidis evertitur argumentum his ex. Et vidit percipit mel. Meliore assentior ne eos, usu stet tincidunt adversarium id, et prima porro nam. Harum apeirian eu mel, eos etiam saperet docendi cu.</div>
                            </div>
                            <div class="panel-footer">
                                <div class="guestbook__writer"><strong>Added By:</strong> Ahmed ElShahat</div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-guestbook">
                            <div class="panel-heading">
                                <div class="guestbook__title">Lorem ipsum dolor sit amet, ex blandit luptatum eos</div>
                            </div>
                            <div class="panel-body">
                                <div class="guestbook__text">Lorem ipsum dolor sit amet, ex blandit luptatum eos, duo nobis nonumes mediocritatem cu. Ut summo eligendi nec, vitae prompta theophrastus ad has. Recteque cotidieque duo ex. Mel at sale essent, euripidis evertitur argumentum his ex. Et vidit percipit mel. Meliore assentior ne eos, usu stet tincidunt adversarium id, et prima porro nam. Harum apeirian eu mel, eos etiam saperet docendi cu.</div>
                            </div>
                            <div class="panel-footer">
                                <div class="guestbook__writer"><strong>Added By:</strong> Ahmed ElShahat</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br /><br />
                    </div>
                    <div class="col-md-12">
                        <div class="section-header">
                            <h1>Add new message</h1>
                        </div>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="title" class="col-sm-3 control-label">Message Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title" placeholder="Message Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content" class="col-sm-3 control-label">Message Content</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="6" id="content" placeholder="Message Content"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Your Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Your Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-comments"></i> Add Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop