<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('style.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <title>{{ $user->name }} | {{ $user->job_name }}</title>
  <meta name="description" content="Wowfolio - A Simple & Clean Portfolio Template For Developers" />
</head>

<body>

  <a href="https://api.whatsapp.com/send?phone={{ $user->whatsapp }}" class="float" target="_blank">
    <i class="fa-brands fa-whatsapp my-float"></i>
    </a>

  <header class="main-header">
    <div class="main-header__logo-container">
      <div class="main-header__logo-img-cont">
        <a href="{{ route('index') }}" style="text-decoration: none;">
          <img
            src="https://media.licdn.com/dms/image/C4D03AQGd-W704QQNSQ/profile-displayphoto-shrink_800_800/0/1650550944492?e=1684972800&v=beta&t=lY7sSNRoYwl5_RFrvtLH0ugoOV1P2dzAHDYfCv5wo8Y"
            alt="logo Image" class="main-header__logo-img" />
        </div>
        <h4 class="main-header__logo-text">{{ $user->name }}</h4>
      </a>
    </div>
    <nav class="main-header__navigation">
      <ul class="main-header__navigation-links">
        <li class="main-header__navigation-link"><a href="{{ route('index') }}"> Home </a></li>
        <li class="main-header__navigation-link"><a href="#about"> About </a></li>
        <li class="main-header__navigation-link"><a href="#projects"> Projects </a></li>
        <li class="main-header__navigation-link"><a href="#contact" href=""> Contact </a></li>
        <li class="main-header__navigation-link"><a href="{{ route('login') }}" href=""> Login </a></li>
      </ul>
    </nav>
    <div class="main-header__sm-scr-nav-btn">
      <div class="main-header__sm-scr-nav-btn-line"></div>
      <div class="main-header__sm-scr-nav-btn-line"></div>
    </div>
    <div class="main-header__sm-menu">
      <div class="main-header__sm-menu-close">

      </div>
      <ul class="main-header__sm-menu-links">
        <li>
          <a class="main-header__sm-menu-link main-header__sm-menu-link--1" name="home-hero">Home</a>
        </li>

        <li>
          <a class="main-header__sm-menu-link main-header__sm-menu-link--2" name="about">About</a>
        </li>
        <li>
          <a class="main-header__sm-menu-link main-header__sm-menu-link--3" name="projects">Projects</a>
        </li>
        <li>
          <a class="main-header__sm-menu-link main-header__sm-menu-link--4" name="contact">Contact</a>
        </li>
        <li>
          <a class="main-header__sm-menu-link main-header__sm-menu-link--5" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
    </div>
    <!-- <button class="btn btn-theme btn-sm">Download CV</button> -->
  </header>

  <!--Remove or Comment out this theme selector code when you are done with choosing the right color for your theme so this color selector don't appear when you host the site online
  <div class="themeClrSelector">
    <input placeholder="Color Selector" type="color" value="#1DA1F2" class="themeClrSelector__input" />
    <img alt="theme color tester" src="https://img.icons8.com/fluent/48/000000/rgb-circle-1.png"
      class="themeClrSelector__img" />
  </div>
  ---->

  <section id="home-hero" class="home-hero">
    <div class="home-hero__content">
      <div class="home-hero__info">
        <h1 class="heading-primary home-hero__heading-primary">
          <span class="heading-primary__sm"> {{ $frontend->hero_header_text }}</span>
          <span class="heading-primary__main">
            {{ $frontend->hero_body_text }}
          </span>
        </h1>
        <a href="#projects" class="btn btn-theme home-hero__btn-theme">Projects</a>
        <a href="#contact" class="btn btn-inv home-hero__btn-theme">Contact</a>
      </div>
    </div>
  </section>
  <section id="about" class="about main-section">
    <div class="main-container">
      <h2 class="heading-secondary projects__heading-secondary">
        <span class="heading-secondary__sm"> {{ $frontend->about_header_text }}</span>
        <span class="heading-secondary__main">
          {{ $frontend->about_body_text }}
      </h2>
      <div class="main-section__content">
        <div class="about__info">
          <div class="about__main-info">
            <h3 class="heading-quaternary about__heading-quaternary">
              {{ $frontend->myStory_header_text }}
            </h3>
            <p class="text-primary about__text-primary">
              {!! $frontend->myStory_body_text !!} 
            </p>
            <a href="#projects" class="btn btn-theme about__btn-theme">Projects</a>
          </div>
          <div class="about__skill-info">
            <h3 class="heading-quaternary about__heading-quaternary">
              My Skills
            </h3>
            <ul class="about__skills">
              @foreach ($skills as $skill)
              <li class="about__skill">{{ $skill->name }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="skills-showcase">
    <ul class="skills-showcase__list">
      @foreach ($techs as $tech)
      <li class="skills-showcase__list-item">
        <i class="devicon-{{ $tech->icon }}-plain"></i>
      </li>
      @endforeach
    </ul>
  </section>
  <section id="projects" class="projects main-section">
    <div class="main-container">
      <h2 class="heading-secondary projects__heading-secondary">
        <span class="heading-secondary__sm"> {{ $frontend->projects_header_text }}</span>
        <span class="heading-secondary__main">
          {{ $frontend->projects_body_text }}
        </span>
      </h2>
      <div class="main-section__content">

        @php
            $countProjects = count($projects);
        @endphp
        @for ($i = 0; $i < $countProjects; $i++)
          @if($i % 2 == 0)
            <div class="about__info" @if($i !== $countProjects - 1) style="margin-bottom: 40px" @endif>
              <div class="about__main-info">   
                <div class="projects__list-item-img-cont">
                  <img src="{{ $projects[$i]->image }}" alt="Project Image" class="projects__list-item-img">
                </div>
              </div>
              <div class="about__skill-info">
                <h3 class="heading-tertiary">
                  {{ $projects[$i]->name }}
                </h3>
                <p class="text-primary projects__list-item-text-primary">
                  {{ $projects[$i]->description }}
                </p>
                @if($projects[$i]->live_link == "#")

                @else
                <a href="{{ $projects[$i]->live_link }}" target="_blank" class="btn btn-theme projects__btn-theme">
                  Live Link
                </a>
                @endif
                @if($projects[$i]->code_link == "#")

                @else
                  <a href="{{ $projects[$i]->code_link }}" target="_blank" class="btn btn-inv projects__btn-inv">Code Link</a>
                @endif
              </div>
            </div>
          @else

            <div class="about__info" @if($i !== $countProjects - 1) style="margin-bottom: 40px" @endif>
              <div class="about__skill-info">
                <h3 class="heading-tertiary">
                  {{ $projects[$i]->name }}
                </h3>
                <p class="text-primary projects__list-item-text-primary">
                  {{ $projects[$i]->description }}
                </p>
                @if($projects[$i]->live_link == "#")

                @else
                <a href="{{ $projects[$i]->live_link }}" target="_blank" class="btn btn-theme projects__btn-theme">
                  Live Link
                </a>
                @endif
                @if($projects[$i]->code_link == "#")

                @else
                  <a href="{{ $projects[$i]->code_link }}" target="_blank" class="btn btn-inv projects__btn-inv">Code Link</a>
                @endif
              </div>
              <div class="about__main-info">   
                <div class="projects__list-item-img-cont">
                  <img src="{{ $projects[$i]->image }}" alt="Project Image" class="projects__list-item-img">
                </div>
              </div>
            </div>
          @endif
        @endfor
      </div>
    </div>
  </section>
  <section id="contact" class="contact main-section">
    <div class="main-container">
      <h2 class="heading-secondary">
        <span class="heading-secondary__sm"> {{ $frontend->contact_header_text }}</span>
        <span class="heading-secondary__main">
          {{ $frontend->contact_body_text }}
        </span>
      </h2>
      <div class="main-section__content">
        <div class="contact__form-cont">
          <form class="contact__form">
            <div class="contact__form-field">
              <label for="name" class="contact__form-field-label">Name</label>
              <input placeholder="Enter Your Name" type="text" class="contact__form-field-input" />
            </div>
            <div class="contact__form-field">
              <label for="name" class="contact__form-field-label">Email</label>
              <input placeholder="Enter Your Email" type="text" class="contact__form-field-input" />
            </div>
            <div class="contact__form-field">
              <label for="name" class="contact__form-field-label">Message</label>
              <textarea placeholder="Enter Your Message" name="message" id="" cols="30" rows="10"
                class="contact__form-field-input"></textarea>
            </div>
            <button type="submit" class="contact__form-submit">Submit</button>
          </form>
          <div class="contact__form-visual"></div>
        </div>
      </div>
    </div>
  </section>
  <footer class="main-footer">
    <div class="main-footer__upper">
      <div class="main-container">
        <ul class="main-footer__links">
          <li class="main-footer__link">
            <a href="/">Home</a>
          </li>
          <li class="main-footer__link">
            <a href="#about">About</a>
          </li>
          <li class="main-footer__link">
            <a href="#projects">Projects</a>
          </li>
          <li class="main-footer__link">
            <a href="#contact">Contact</a>
          </li>
        </ul>
        <div class="main-footer__mid-line"></div>
        <div class="main-footer__socials">

          @if(!$user->github == null)
            <a href="https://github.com/{{ $user->github }}" target="_blank" class="main-footer__social-link">
              <i class="fa-brands fa-github"></i>
            </a>
          @endif

          @if(!$user->instagram == null)
            <a href="https://instagram.com/{{ $user->instagram }}" target="_blank" class="main-footer__social-link">
              <i class="fa-brands fa-instagram"></i>
            </a>
          @endif

          @if(!$user->facebook == null)
            <a href="https://facebook.com/{{ $user->facebook }}" target="_blank" class="main-footer__social-link">
              <i class="fa-brands fa-facebook"></i>
            </a>
          @endif

          @if(!$user->youtube == null)
            <a href="https://youtube.com/@{{ $user->youtube }}" target="_blank" class="main-footer__social-link">
              <i class="fa-brands fa-youtube"></i>
            </a>
          @endif

          @if(!$user->twitter == null)
            <a href="https://linkedin.com/{{ $user->twitter }}" target="_blank" class="main-footer__social-link">
              <i class="fa-brands fa-twitter"></i>
            </a>
          @endif

          @if(!$user->linkedin == null)
            <a href="https://linkedin.com/in/{{ $user->linkedin }}" target="_blank" class="main-footer__social-link">
              <i class="fa-brands fa-linkedin"></i>
            </a>
          @endif

          @if(!$user->pinterest == null)
            <a href="https://pinterest.com/{{ $user->pinterest }}" target="_blank" class="main-footer__social-link">
              <i class="fa-brands fa-pinterest"></i>
            </a>
          @endif

          @if(!$user->medium == null)
            <a href="https://medium.com/@{{ $user->medium }}" target="_blank" class="main-footer__social-link">
              <i class="fa-brands fa-medium"></i>
            </a>
          @endif

          @if(!$user->devto == null)
            <a href="https://dev.to/{{ $user->devto }}" target="_blank" class="main-footer__social-link">
              <i class="fa-brands fa-dev"></i>
            </a>
          @endif

        </div>
      </div>
    </div>
    <div class="main-footer__bottom">
      <div class="main-container">
        <p class="main-footer__bottom-txt">
          <!-- If you can give me some credits or shoutout here by linking to my website, then that will help me a lot :) -->
          Frontend (with a few tweaks) by<a target="_blank" href="https://github.com/rammcodes/wowfolio"> WowFolio</a> Open-Source Template
          <script>document.write(new Date().getFullYear())</script>. Backend by
          <a target="_blank" href="https://talles.amadeu.ml">Talles Amadeu</a>
        </p>
      </div>
    </div>
  </footer>
  <script src="{{ asset('script.js') }}"></script>
</body>

</html>