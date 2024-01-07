<aside class="app-sidebar">
  <div class="app-sidebar__logo">
    <a class="header-brand" href="index.html">
      <img src="{{asset('../../assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
      <img src="{{asset('../../assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
      <img src="{{asset('../../assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Dayonelogo">
      <img src="{{asset('../../assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
    </a>
  </div>
  <div class="app-sidebar3">
    <ul class="side-menu">
      <li class="slide">
        <a class="side-menu__item"  href="{{route("admin.dashboard")}}">
          <span class="side-menu__label">داشبورد</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route("admin.category.index")}}">
          <span class="side-menu__label">دسته بندی</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route("admin.news.index")}}">
          <span class="side-menu__label">اخبار</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route("admin.announcement.index")}}">
          <span class="side-menu__label">اطلاعیه ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route("admin.article.index")}}">
          <span class="side-menu__label">مقاله ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route("admin.link.index")}}">
          <span class="side-menu__label">پیوند ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route("admin.slider.index")}}">
          <span class="side-menu__label">اسلایدر</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route("admin.menus.groups")}}">
          <span class="side-menu__label">مدیریت منو ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route("admin.tag.index")}}">
          <span class="side-menu__label">برچسب ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route("admin.setting.index")}}">
          <span class="side-menu__label">تنظیمات</span>
        </a>
      </li>

      {{-- <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
          <i class="feather feather-home sidemenu_icon"></i>
          <span class="side-menu__label">دسته بندی</span><i class="angle fa fa-angle-left"></i>
        </a>
        <ul class="slide-menu">
          <li><a href="index.html" class="slide-item">Dashboard</a></li>
          <li><a href="hr-department.html" class="slide-item">Department</a></li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Employees</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="hr-emplist.html">Employees List</a></li>
              <li><a class="sub-slide-item" href="hr-empview.html">View Employee</a></li>
              <li><a class="sub-slide-item" href="hr-addemployee.html">Add Employee</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Attendance</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="hr-attlist.html">Attendance List</a></li>
              <li><a class="sub-slide-item" href="hr-attuser.html">Attendance By User</a></li>
              <li><a class="sub-slide-item" href="hr-attview.html">Attendance View</a></li>
              <li><a class="sub-slide-item" href="hr-overviewcldr.html">Overview Calender</a></li>
              <li><a class="sub-slide-item" href="hr-attmark.html">Attendance Mark </a></li>
              <li><a class="sub-slide-item" href="hr-leaves.html">Leave Settings</a></li>
              <li><a class="sub-slide-item" href="hr-leavesapplication.html">Leave Applications</a></li>
              <li><a class="sub-slide-item" href="hr-recentleaves.html">Recent Leaves </a></li>
            </ul>
          </li>
          <li><a href="hr-award.html" class="slide-item">Awards</a></li>
          <li><a href="hr-holiday.html" class="slide-item">Holidays</a></li>
          <li><a href="hr-notice.html" class="slide-item">Notice Board</a></li>
          <li><a href="hr-expenses.html" class="slide-item">Expenses</a></li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Payroll</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="hr-empsalary.html">Employee Salary</a></li>
              <li><a class="sub-slide-item" href="hr-addpayroll.html">Add Payroll</a></li>
              <li><a class="sub-slide-item" href="hr-editpayroll.html">Edit Payroll</a></li>
            </ul>
          </li>
          <li><a href="hr-events.html" class="slide-item">Events</a></li>
          <li><a href="hr-settings.html" class="slide-item">Settings</a></li>
        </ul>
      </li> --}}
      {{-- <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
          <i class="feather  feather-users sidemenu_icon"></i>
          <span class="side-menu__label">Employee Dashboard</span><i class="angle fa fa-angle-left"></i>
        </a>
        <ul class="slide-menu">
          <li><a href="index2.html" class="slide-item">Dashboard</a></li>
          <li><a href="employee-attendance.html" class="slide-item">Attendance</a></li>
          <li><a href="employee-leaves.html" class="slide-item">Apply Leaves </a></li>
          <li><a href="employee-myleaves.html" class="slide-item">My Leaves </a></li>
          <li><a href="employee-payslips.html" class="slide-item">Payslips </a></li>
          <li><a href="employee-expenses.html" class="slide-item">Expenses</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
          <i class="feather feather-clipboard sidemenu_icon"></i>
          <span class="side-menu__label">Task Dashboard</span><i class="angle fa fa-angle-left"></i>
        </a>
        <ul class="slide-menu">
          <li><a href="index3.html" class="slide-item">Dashboard</a></li>
          <li><a href="task-list.html" class="slide-item">Task List</a></li>
          <li><a href="task-running.html" class="slide-item">Running Tasks</a></li>
          <li><a href="task-hold.html" class="slide-item">OnHold Tasks</a></li>
          <li><a href="task-complete.html" class="slide-item">Completed Tasks</a></li>
          <li><a href="task-view.html" class="slide-item">View Task</a></li>
          <li><a href="task-overclndr.html" class="slide-item">Overview Calendar</a></li>
          <li><a href="task-board.html" class="slide-item">Task Board</a></li>
          <li><a href="task-new.html" class="slide-item">New Task</a></li>
          <li><a href="task-profile.html" class="slide-item">User Profile</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
          <i class="feather feather-book sidemenu_icon"></i>
          <span class="side-menu__label">Project Dashboard</span><i class="angle fa fa-angle-left"></i>
        </a>
        <ul class="slide-menu">
          <li><a href="index4.html" class="slide-item">Dashboard</a></li>
          <li><a href="project-list.html" class="slide-item">Project List</a></li>
          <li><a href="project-view.html" class="slide-item">View Project</a></li>
          <li><a href="project-overclndr.html" class="slide-item">Overview Calendar</a></li>
          <li><a href="project-new.html" class="slide-item">New Project</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
          <i class="feather feather-user sidemenu_icon"></i>
          <span class="side-menu__label">Client Dashboard</span><i class="angle fa fa-angle-left"></i>
        </a>
        <ul class="slide-menu">
          <li><a href="index5.html" class="slide-item">Dashboard</a></li>
          <li><a href="client-list.html" class="slide-item">Client List</a></li>
          <li><a href="client-view.html" class="slide-item">View Client</a></li>
          <li><a href="client-new.html" class="slide-item">New Client</a></li>
          <li><a href="client-profile.html" class="slide-item">User Profile</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
          <i class="feather feather-briefcase sidemenu_icon"></i>
          <span class="side-menu__label">Job Dashboard</span><i class="angle fa fa-angle-left"></i>
        </a>
        <ul class="slide-menu">
          <li><a href="index6.html" class="slide-item">Dashboard</a></li>
          <li><a href="job-list.html" class="slide-item">Job Lists</a></li>
          <li><a href="job-view.html" class="slide-item">Job View</a></li>
          <li><a href="job-applictaion.html" class="slide-item">Job Applications</a></li>
          <li><a href="job-apply.html" class="slide-item">Apply Job</a></li>
          <li><a href="job-new.html" class="slide-item">New Job</a></li>
          <li><a href="job-user.html" class="slide-item">User Profile</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
          <i class="feather feather-headphones sidemenu_icon"></i>
          <span class="side-menu__label">Support System</span><i class="angle fa fa-angle-left"></i>
        </a>
        <ul class="slide-menu">
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Landing Pages</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="support-landing.html">Landing Page</a></li>
              <li><a class="sub-slide-item" href="support-knowledge.html">Knowledge Page</a></li>
              <li><a class="sub-slide-item" href="support-knowledgeview.html">Knowledge View</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">User Pages</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="support-userdash.html">Dashboard</a></li>
              <li><a class="sub-slide-item" href="support-editprofile.html">Profile</a></li>
              <li class="sub-slide2">
                <a class="sub-side-menu__item2" href="#" data-toggle="sub-slide2"><span class="sub-side-menu__label2">Tickets</span><i class="sub-angle2 fa fa-angle-left"></i></a>
                <ul class="sub-slide-menu2">
                  <li><a href="support-ticketlist.html" class="sub-slide-item2">Ticket List</a></li>
                  <li><a href="support-ticketactive.html" class="sub-slide-item2">Active Tickets</a></li>
                  <li><a href="support-ticketclosed.html" class="sub-slide-item2">Closed Tickets</a></li>
                  <li><a href="support-ticketcreate.html" class="sub-slide-item2">Create Ticket</a></li>
                  <li><a href="support-ticketview.html" class="sub-slide-item2">View Ticket</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="sub-slide">
            <a href="#" class="sub-side-menu__item" data-toggle="sub-slide"><span class="sub-side-menu__label">Admin</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="support-admindash.html">Dashboard</a></li>
              <li><a class="sub-slide-item" href="support-admineditprofile.html">Edit Profile</a></li>
              <li class="sub-slide2">
                <a class="sub-side-menu__item2" href="#" data-toggle="sub-slide2"><span class="sub-side-menu__label2">Tickets</span><i class="sub-angle2 fa fa-angle-left"></i></a>
                <ul class="sub-slide-menu2">
                  <li><a href="support-adminticketlist.html" class="sub-slide-item2">Ticket List</a></li>
                  <li><a href="support-adminticketactive.html" class="sub-slide-item2">Active Tickets</a></li>
                  <li><a href="support-adminticketclosed.html" class="sub-slide-item2">Closed Tickets</a></li>
                  <li><a href="support-adminticketnew.html" class="sub-slide-item2">New Ticket</a></li>
                  <li><a href="support-adminticketview.html" class="sub-slide-item2">View Ticket</a></li>
                </ul>
              </li>
              <li><a class="sub-slide-item" href="support-admincustomer.html">Customers</a></li>
              <li><a class="sub-slide-item" href="support-admincategories.html">Categories</a></li>
              <li><a class="sub-slide-item" href="support-adminarticles.html">Articles</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a href="#" class="sub-side-menu__item" data-toggle="sub-slide"><span class="sub-side-menu__label">Agent</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="support-agentdash.html">Dashboard</a></li>
              <li class="sub-slide2">
                <a class="sub-side-menu__item2" href="#" data-toggle="sub-slide2"><span class="sub-side-menu__label2">Tickets</span><i class="sub-angle2 fa fa-angle-left"></i></a>
                <ul class="sub-slide-menu2">
                  <li><a href="support-agentticketlist.html" class="sub-slide-item2">Ticket List</a></li>
                  <li><a href="support-agentticketactive.html" class="sub-slide-item2">Active Tickets</a></li>
                  <li><a href="support-agentticketclosed.html" class="sub-slide-item2">Closed Tickets</a></li>
                  <li><a href="support-agentticketview.html" class="sub-slide-item2">View Ticket</a></li>
                </ul>
              </li>
              <li><a class="sub-slide-item" href="support-agentassign.html">Assigned Categories</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="chat-livechat.html">
          <i class="feather feather-message-square sidemenu_icon"></i>
          <span class="side-menu__label">Chat</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
          <i class="feather feather-airplay sidemenu_icon"></i>
          <span class="side-menu__label">Admin</span><i class="angle fa fa-angle-left"></i>
        </a>
        <ul class="slide-menu">
          <li><a href="admin-general.html" class="slide-item">General Settings</a></li>
          <li><a href="admin-api.html" class="slide-item">API Settings</a></li>
          <li><a href="admin-role.html" class="slide-item">Role Access</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
          <i class="feather feather-slack sidemenu_icon"></i>
          <span class="side-menu__label">Super Admin</span><i class="angle fa fa-angle-left"></i>
        </a>
        <ul class="slide-menu">
          <li><a href="index7.html" class="slide-item">Dashboard</a></li>
          <li><a href="superadmin-company.html" class="slide-item">Companies</a></li>
          <li><a href="superadmin-subscription.html" class="slide-item">Subscription Plans</a></li>
          <li><a href="superadmin-invoices.html" class="slide-item">Invoices</a></li>
          <li><a href="superadmin-admins.html" class="slide-item">Super Admins</a></li>
          <li><a href="superadmin-settings.html" class="slide-item">Settings</a></li>
          <li><a href="superadmin-role.html" class="slide-item">Role Access</a></li>
        </ul>
      </li>
      <li class="side-item side-item-category">Apps</li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-server sidemenu_icon"></i>
        <span class="side-menu__label">Components</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">

          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Chat</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="chat.html">Chat</a></li>
              <li><a class="sub-slide-item" href="chat2.html">Chat 02</a></li>
              <li><a class="sub-slide-item" href="chat3.html">Chat 03</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Contact</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="contact-list.html">Contact list</a></li>
              <li><a class="sub-slide-item" href="contact-list2.html">Contact list 02</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">File Manager</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="file-manager.html">File Manager</a></li>
              <li><a class="sub-slide-item" href="file-manager-list.html">File Manager 02</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Todo List</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="todo-list.html">Todo List</a></li>
              <li><a class="sub-slide-item" href="todo-list2.html">Todo List 02</a></li>
              <li><a class="sub-slide-item" href="todo-list3.html">Todo List 03</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">User List</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="users-list-1.html">User List 01</a></li>
              <li><a class="sub-slide-item" href="users-list-2.html">User List 02</a></li>
              <li><a class="sub-slide-item" href="users-list-3.html">User List 03</a></li>
              <li><a class="sub-slide-item" href="users-list-4.html">User List 04</a></li>
            </ul>
          </li>
          <li><a href="calendar.html" class="slide-item"> Calendar</a></li>
          <li><a href="dragula.html" class="slide-item"> Dragula Card</a></li>
          <li><a href="cookies.html" class="slide-item"> Cookies</a></li>
          <li><a href="image-comparison.html" class="slide-item"> Image Comparison</a></li>
          <li><a href="img-crop.html" class="slide-item"> Image Crop</a></li>
          <li><a href="page-sessiontimeout.html" class="slide-item"> Page-sessiontimeout</a></li>
          <li><a href="notify.html" class="slide-item"> Notifications</a></li>
          <li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
          <li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
          <li><a href="counters.html" class="slide-item"> Counters</a></li>
          <li><a href="loaders.html" class="slide-item"> Loaders</a></li>
          <li><a href="time-line.html" class="slide-item"> Time Line</a></li>
          <li><a href="rating.html" class="slide-item"> Rating</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-layers sidemenu_icon"></i>
        <span class="side-menu__label">Elements</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="accordion.html" class="slide-item"> Accordion</a></li>
          <li><a href="alerts.html" class="slide-item"> Alerts</a></li>
          <li><a href="avatars.html" class="slide-item"> Avatars</a></li>
          <li><a href="badge.html" class="slide-item"> Badges</a></li>
          <li><a href="breadcrumbs.html" class="slide-item"> Breadcrumb</a></li>
          <li><a href="buttons.html" class="slide-item"> Buttons</a></li>
          <li><a href="cards.html" class="slide-item"> Cards</a></li>
          <li><a href="cards-image.html" class="slide-item"> Card Images</a></li>
          <li><a href="carousel.html" class="slide-item"> Carousel</a></li>
          <li><a href="dropdown.html" class="slide-item"> Dropdown</a></li>
          <li><a href="footers.html" class="slide-item"> Footers</a></li>
          <li><a href="headers.html" class="slide-item"> Headers</a></li>
          <li><a href="jumbotron.html" class="slide-item"> Jumbotron</a></li>
          <li><a href="list&listgroup.html" class="slide-item"> Lists & List Group</a></li>
          <li><a href="media-object.html" class="slide-item"> Media Obejct</a></li>
          <li><a href="modal.html" class="slide-item"> Modal</a></li>
          <li><a href="navigation.html" class="slide-item"> Navigation</a></li>
          <li><a href="pagination.html" class="slide-item"> Pagination</a></li>
          <li><a href="panels.html" class="slide-item"> Panel</a></li>
          <li><a href="popover.html" class="slide-item"> Popover</a></li>
          <li><a href="progress.html" class="slide-item"> Progress</a></li>
          <li><a href="tabs.html" class="slide-item"> Tabs</a></li>
          <li><a href="tags.html" class="slide-item"> Tags</a></li>
          <li><a href="tooltip.html" class="slide-item"> Tooltips</a></li>
        </ul>
      </li>
      <li class="side-item side-item-category">Forms & Charts</li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-file sidemenu_icon"></i>
        <span class="side-menu__label">Forms</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="form-elements.html" class="slide-item"> Form Elements</a></li>
          <li><a href="advanced-forms.html" class="slide-item"> Advanced Forms</a></li>
          <li><a href="form-wizard.html" class="slide-item"> Form Wizard</a></li>
          <li><a href="form-editor.html" class="slide-item"> Form Editor</a></li>
          <li><a href="form-sizes.html" class="slide-item"> Form Element Sizes</a></li>
          <li><a href="form-treeview.html" class="slide-item"> Form Treeview</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-bar-chart sidemenu_icon"></i>
        <span class="side-menu__label">Charts</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="chart-chartist.html" class="slide-item">Chartjs Charts</a></li>
          <li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
          <li><a href="chart-apex.html" class="slide-item"> Apex Charts</a></li>
          <li><a href="chart-peity.html" class="slide-item"> Pie Charts</a></li>
          <li><a href="chart-echart.html" class="slide-item"> Echart Charts</a></li>
          <li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
          <li><a href="chart-c3.html" class="slide-item">C3 Charts</a></li>
        </ul>
      </li>
      <li class="side-item side-item-category">Widgets & Maps </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-codepen sidemenu_icon"></i>
        <span class="side-menu__label">Widgets</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="widgets-1.html" class="slide-item">Widgets</a></li>
          <li><a href="widgets-2.html" class="slide-item">Chart Widgets</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-map-pin sidemenu_icon"></i>
        <span class="side-menu__label">Maps</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="maps.html" class="slide-item">Vector Maps</a></li>
          <li><a href="maps2.html" class="slide-item">Leaflet Maps</a></li>
          <li><a href="maps3.html" class="slide-item">Mapel Maps</a></li>
        </ul>
      </li>
      <li class="side-item side-item-category">Icons & Tables</li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-layout sidemenu_icon"></i>
        <span class="side-menu__label">Tables</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="tables.html" class="slide-item">Default table</a></li>
          <li><a href="datatable.html" class="slide-item">Data Table</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-compass sidemenu_icon"></i>
        <span class="side-menu__label">Icons</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
          <li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
          <li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
          <li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
          <li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
          <li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
          <li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
          <li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
          <li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
          <li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
          <li><a href="icons11.html" class="slide-item">Material Icons</a></li>
        </ul>
      </li>
      <li class="side-item side-item-category">Pages</li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-copy sidemenu_icon"></i>
        <span class="side-menu__label">Pages</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Profile</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="profile-1.html">Profile 01</a></li>
              <li><a class="sub-slide-item" href="profile-2.html">Profile 02</a></li>
              <li><a class="sub-slide-item" href="profile-3.html">Profile 03</a></li>
            </ul>
          </li>
          <li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Email</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="email-compose.html">Email Compose</a></li>
              <li><a class="sub-slide-item" href="email-inbox.html">Email Inbox</a></li>
              <li><a class="sub-slide-item" href="email-read.html">Email Read</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Pricing</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="pricing.html">Pricing 01</a></li>
              <li><a class="sub-slide-item" href="pricing-2.html">Pricing 02</a></li>
              <li><a class="sub-slide-item" href="pricing-3.html">Pricing 03</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Invoice</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="invoice-list.html">Invoice list</a></li>
              <li><a class="sub-slide-item" href="invoice-1.html">Invoice 01</a></li>
              <li><a class="sub-slide-item" href="invoice-2.html">Invoice 02</a></li>
              <li><a class="sub-slide-item" href="invoice-3.html">Invoice 03</a></li>
              <li><a class="sub-slide-item" href="invoice-add.html">Add Invoice</a></li>
              <li><a class="sub-slide-item" href="invoice-edit.html">Edit Invoice</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Blog</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="blog.html">Blog 01</a></li>
              <li><a class="sub-slide-item" href="blog-2.html">Blog 02</a></li>
              <li><a class="sub-slide-item" href="blog-3.html">Blog 03</a></li>
              <li><a class="sub-slide-item" href="blog-styles.html">Blog Styles</a></li>
            </ul>
          </li>
          <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
          <li><a href="faq.html" class="slide-item"> FAQS</a></li>
          <li><a href="terms.html" class="slide-item"> Terms</a></li>
          <li><a href="empty.html" class="slide-item"> Empty Page</a></li>
          <li><a href="search.html" class="slide-item"> Search</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-shopping-cart sidemenu_icon"></i>
        <span class="side-menu__label">E-commerce</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="products.html" class="slide-item"> Products</a></li>
          <li><a href="product-details.html" class="slide-item"> Products Details</a></li>
          <li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-aperture sidemenu_icon"></i>
        <span class="side-menu__label">Utils</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="element-colors.html" class="slide-item"> Colors</a></li>
          <li><a href="element-flex.html" class="slide-item"> Flex Items</a></li>
          <li><a href="element-height.html" class="slide-item"> Height</a></li>
          <li><a href="elements-border.html" class="slide-item"> Border</a></li>
          <li><a href="elements-display.html" class="slide-item"> Display</a></li>
          <li><a href="elements-margin.html" class="slide-item"> Margin</a></li>
          <li><a href="elements-paddning.html" class="slide-item"> Padding</a></li>
          <li><a href="element-typography.html" class="slide-item"> Typhography</a></li>
          <li><a href="element-width.html" class="slide-item"> Width</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-lock sidemenu_icon"></i>
        <span class="side-menu__label">Account</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Login</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="login-1.html">Login 01</a></li>
              <li><a class="sub-slide-item" href="login-2.html">Login 02</a></li>
              <li><a class="sub-slide-item" href="login-3.html">Login 03</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Register</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="register-1.html">Register 01</a></li>
              <li><a class="sub-slide-item" href="register-2.html">Register 02</a></li>
              <li><a class="sub-slide-item" href="register-3.html">Register 03</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Forgot Password</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="forgot-password-1.html">Forgot Password 01</a></li>
              <li><a class="sub-slide-item" href="forgot-password-2.html">Forgot Password 02</a></li>
              <li><a class="sub-slide-item" href="forgot-password-3.html">Forgot Password 03</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Reset Password</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="reset-password-1.html">Reset Password 01</a></li>
              <li><a class="sub-slide-item" href="reset-password-2.html">Reset Password 02</a></li>
              <li><a class="sub-slide-item" href="reset-password-3.html">Reset Password 03</a></li>
            </ul>
          </li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Lock Screen</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="lockscreen-1.html">Lock Screen 01</a></li>
              <li><a class="sub-slide-item" href="lockscreen-2.html">Lock Screen 02</a></li>
              <li><a class="sub-slide-item" href="lockscreen-3.html">Lock Screen 03</a></li>
            </ul>
          </li>
          <li><a href="construction.html" class="slide-item"> Under Construction</a></li>
          <li><a href="coming.html" class="slide-item"> Coming Soon</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-alert-octagon sidemenu_icon"></i>
        <span class="side-menu__label">Alert Messages</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="message-success.html" class="slide-item">Success Message</a></li>
          <li><a href="message-warning.html" class="slide-item">Warning Message</a></li>
          <li><a href="message-danger.html" class="slide-item">Danger Message</a></li>
        </ul>
      </li>
      <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-alert-triangle sidemenu_icon"></i>
        <span class="side-menu__label">Error Pages</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="400.html" class="slide-item"> 400</a></li>
          <li><a href="401.html" class="slide-item"> 401</a></li>
          <li><a href="403.html" class="slide-item"> 403</a></li>
          <li><a href="404.html" class="slide-item"> 404</a></li>
          <li><a href="500.html" class="slide-item"> 500</a></li>
          <li><a href="503.html" class="slide-item"> 503</a></li>
        </ul>
      </li>
      <li class="slide ">
        <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="feather feather-sliders sidemenu_icon"></i>
        <span class="side-menu__label">Submenus</span><i class="angle fa fa-angle-left"></i></a>
        <ul class="slide-menu">
          <li><a href="#" class="slide-item">Level-1</a></li>
          <li class="sub-slide">
            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Level-2</span><i class="sub-angle fa fa-angle-left"></i></a>
            <ul class="sub-slide-menu">
              <li><a class="sub-slide-item" href="#">Level-2.1</a></li>
              <li><a class="sub-slide-item" href="#">Level-2.2</a></li>
              <li class="sub-slide2">
                <a class="sub-side-menu__item2" href="#" data-toggle="sub-slide2"><span class="sub-side-menu__label2">Level-2.3</span><i class="sub-angle2 fa fa-angle-left"></i></a>
                <ul class="sub-slide-menu2">
                  <li><a href="#" class="sub-slide-item2">Level-2.3.1</a></li>
                  <li><a href="#" class="sub-slide-item2">Level-2.3.2</a></li>
                  <li><a href="#" class="sub-slide-item2">Level-2.3.3</a></li>
                </ul>
              </li>
              <li><a class="sub-slide-item" href="#">Level-2.4</a></li>
              <li><a class="sub-slide-item" href="#">Level-2.5</a></li>
            </ul>
          </li>
        </ul>
      </li> --}}
    </ul>
  </div>
</aside>
