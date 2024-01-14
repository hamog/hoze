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
          <span class="side-menu__label">داشبورد</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.category.index')}}">
          <span class="side-menu__label">دسته بندی</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.news.index')}}">
          <span class="side-menu__label">اخبار</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.announcement.index')}}">
          <span class="side-menu__label">اطلاعیه ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.article.index')}}">
          <span class="side-menu__label">مقاله ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.link.index')}}">
          <span class="side-menu__label">پیوند ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.slider.index')}}">
          <span class="side-menu__label">اسلایدر</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.menus.groups')}}">
          <span class="side-menu__label">مدیریت منو ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.tags.index')}}">
          <span class="side-menu__label">برچسب ها</span>
        </a>
      </li>
      <li class="slide">
        <a class="side-menu__item"  href="{{route('admin.settings.index')}}">
          <span class="side-menu__label">تنظیمات</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
