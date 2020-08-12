<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user-circle"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- Profile Image -->
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="{{ asset('admin/dist/img/sormanos.jpg') }}"
                     alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">Tob Sormanos</h3>

            <p class="text-muted text-center">App Development</p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                </li>
                <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                </li>
                <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                </li>
            </ul>
            <form action="/logout" method="post">
                @csrf
                <button class="btn btn-primary btn-block">Logout</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</li>
