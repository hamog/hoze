<aside class="app-sidebar">
  <div class="app-sidebar__logo">
    <a class="header-brand" href="index.html">
      <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
      <img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
      <img src="{{asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Dayonelogo">
      <img src="{{asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
    </a>
  </div>
  <div class="app-sidebar3">
    <ul class="side-menu">
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.dashboard')}}">
           <span class="side-menu__label"><i class="feather feather-home"></i> داشبورد</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.category.index')}}">
          <span class="side-menu__label"><i class="feather feather-list"></i> دسته بندی</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.news.index')}}">
          <span class="side-menu__label"><i class="feather feather-edit"></i> اخبار</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.announcement.index')}}">
          <span class="side-menu__label"><i class="feather feather-edit-2"></i> اطلاعیه ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.article.index')}}">
          <span class="side-menu__label"><i class="feather feather-edit-3"></i> مقاله ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.link.index')}}">
          <span class="side-menu__label"><i class="feather feather-link"></i> پیوند ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.slider.index')}}">
          <span class="side-menu__label"><i class="feather feather-sliders"></i> اسلایدر</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.menus.groups')}}">
          <span class="side-menu__label"><i class="feather feather-menu"></i> مدیریت منو ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.tags.index')}}">
          <span class="side-menu__label"><i class="feather feather-tag"></i> برچسب ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.settings.index')}}">
          <span class="side-menu__label"><i class="feather feather-settings"></i> تنظیمات</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
