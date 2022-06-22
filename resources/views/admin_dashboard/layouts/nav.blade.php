<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('admin_dashboard_assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">MYBLOG</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('index') }}" target="_blank">
                <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                </div>
                <div class="menu-title">Posts</div>
            </a>

            <ul>
                <li> <a href="{{ route('admin.posts.index') }}"><i class="bx bx-right-arrow-alt"></i>All Posts</a>
                </li>
                <li> <a href="{{ route('admin.posts.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New Posts</a>
                </li>

            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-menu'></i>
                </div>
                <div class="menu-title">Categories</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.categories.index')}}">
                        <i class="bx bx-right-arrow-alt"></i>All Categories
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.categories.create')}}">
                        <i class="bx bx-right-arrow-alt"></i>Add New Category
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.tags.index') }}">
                <div class="parent-icon"><i class='bx bx-purchase-tag'></i></div>
                <div class="menu-title">Tags</div>
            </a>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-comment-dots'></i>
                </div>
                <div class="menu-title">Comments</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.comments.index')}}">
                        <i class="bx bx-right-arrow-alt"></i>All Comments
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.comments.create')}}">
                        <i class="bx bx-right-arrow-alt"></i>Add New Comment
                    </a>
                </li>
            </ul>
        </li>
        <hr>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-key'></i>
                </div>
                <div class="menu-title">Roles</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.roles.index')}}">
                        <i class="bx bx-right-arrow-alt"></i>All Roles
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.roles.create')}}">
                        <i class="bx bx-right-arrow-alt"></i>Add New Role
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->