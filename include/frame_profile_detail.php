
<div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> Profile </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                  <img alt="User Pic" src="https://cdn2.iconfinder.com/data/icons/essenstial-ultimate-ui/64/avatar-512.png" class="img-circle img-responsive">
                </div>

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name</td>
                        <td><?php echo $row['firstname']; ?></td>
                      </tr>
                      <tr>
                        <td>User name</td>
                        <td><?php echo $row['username']; ?></td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td><?php echo $row['Gender']; ?></td>
                      </tr>
                      <tr>
                        <td>Birthday</td>
                        <td><?php echo $row['Birthday']; ?></td>
                      </tr>
                        <tr>
                          <td>Email</td>
                          <td><?php echo $row['emailid']; ?></td>
                        </tr>

                      </tr>

                    </tbody>
                  </table>

                  <a href=<?php echo "../posts/post.php?user=".$_REQUEST['user']; ?> class="btn btn-default">My Posts</a>

                </div>
              </div>
            </div>
                  <!--
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="" type="button" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href=<?php echo "../users/delete_user.php?user=".$row['username']; ?>  type=\"button\" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                  </div>
                -->
          </div>
        </div>
      </div>
  </div>
