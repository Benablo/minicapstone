<nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color:#000000;">

    <a class="p-2 text-white" style="font-size:30px; font-weight:400;" href="{{ '/dashboard' }}">Finale Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-end justify-content-end">
            <div class="dropdown d-flex">
                @role('admin')
                <a class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Admin
                </a>
                <div class="dropdown-menu bg-dark bg-opacity-75" aria-labelledby="dropdownMenuButton" id="select3">
                    <span class="nav-line"></span>
                    <li class="nav-item">
                        <a style="margin-left: 20px"
                            class="nav-link text-white {{ 'admin/roles' == request()->path() ? 'active' : '' }}"
                            href="{{ route('admin.roles.index') }}">Roles</a>
                    </li>
                    <span class="nav-line"></span>
                    <li class="nav-item">
                        <a style="margin-left: 20px"
                            class="nav-link text-white {{ 'admin/permissions' == request()->path() ? 'active' : '' }}"
                            href="{{ route('admin.permissions.index') }}">Permissions</a>
                    </li>
                    <li class="nav-item">
                        <a style="margin-left: 20px"
                            class="nav-link text-white {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                            href="{{ route('admin.users.index') }}">Users</a>
                    </li>

                </div>

            </div>
            @endrole
            <li class="nav-item">
                <a class="nav-link text-white {{ 'dashboard' == request()->path() ? 'active' : '' }}"
                    href="{{ '/dashboard' }}">Dashboard</a>
            </li>

            @role('admin')
                <span class="nav-line"></span>
                {{-- <li class="nav-item">
                    <a class="nav-link text-white {{ 'contact' == request()->path() ? 'active' : '' }}"
                        href="{{ '/contact' }}">Contacts</a>
                </li> --}}
                <span class="nav-line"></span>

                <span class="nav-line"></span>


            @endrole
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ '/logout' }}">Log out</a>
            </li>
    </div>
</nav>

<style>
    #profile-name a {
        text-decoration: none;
        color: rgb(225, 222, 222);
    }

    #profile-name a:hover {
        background-color: rgba(255, 255, 255, 0);

    }

    .navbar-nav a {
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 5px;
        width: 120px;
        margin: 5px;
        text-align: center;
    }

    #select {
        color: dimgray;
    }


    #select2 li:hover {
        background-color: rgb(17, 162, 172);
    }
</style>
