@include ('layouts.header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    @include ('layouts.aside')    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Update User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <section class="content">
    <div class="row">
      <div class="col-md-3">
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="/uploads/avatar/{{$user->avatar}}" alt="User profile picture">

            <p class="text-muted text-center"><b>Email Address</b> :{{$user->email}}</p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Total post</b> <a class="pull-right">{{$user::count()}}</a>
              </li>
              <!-- <li class="list-group-item">
                <b>Credit Purchases</b> <a class="pull-right">Null</a>
              </li> -->
              <li class="list-group-item">
                <b>Position</b> <a class="pull-right">Chief Editor</a>
              </li>
            </ul>
            <form enctype="multipart/form-data" action="/profile" method="POST">
              {{ csrf_field() }}
              <input type="file" name= "avatar" class="form-control" placeholder="Update display picture">
              <input type="submit" class="btn btn-primary btn-block btn-sm" value="Upload avatar" style="float:right; margin: 10px">
            </form>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
     <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#Publish" data-toggle="tab">Publish Post</a></li>
            <li><a href="#timeline" data-toggle="tab">News Feed</a></li>
            <li><a href="#settings" data-toggle="tab">Settings</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="Publish">
              <div class="post">
                <div class="user-block">
                  <img class="profile-user-img img-responsive img-circle" src="/uploads/avatar/{{$user->avatar}}" alt="User profile picture">
                  <span class="username ">{{$user->name}}</span>
                  <span class="description">{{$user->created_at}}</span>
                </div><!-- /.user-block -->
                <p >
                <form enctype="multipart/form-data" action="/articles" method="POST">
                {{ csrf_field() }}
                <div class="hidden" name="user_id" value="{{ Auth::User()->id }}"></div>
                <div class="form-group has-feedback">
                  <label for="content">Publish Post</label>
                  <textarea name="content" class="form-control"></textarea>
                  <span class="glyphicon glyphicon-user form-control-feedback text-info"></span>
                </div>
                <div class="checkbox col-md-9 col-sm-9">
                  <label>
                    <input type="checkbox" name="live">Live
                  </label>
                </div>
                <div class="col-md-3 col-sm-3">
                  <input type="submit" class="btn btn-info btn-block btn-sm" value="Share">
                </div>
              </form>
              </p>
              <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><span class="glyphicon glyphicon-retweet text-success" aria-hidden="true">Share</a></li>
                    <li><a href="#" class="link-black text-sm"><span class="glyphicon glyphicon-heart text-danger" aria-hidden="true">Like</a>
                    </li>
                    <li><a href="#" class="link-black text-sm"><span class="glyphicon glyphicon-comment" aria-hidden="true"> Comments</a></li>
                  </ul>
                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
              </div> <!-- /.tab-pane -->

              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <span class="glyphicon glyphicon-envelope form-control-feedback bg-blue"></span>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                  <span class="glyphicon glyphicon-envelope form-control-feedback bg-blue"></span>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

@include ('layouts.footer')