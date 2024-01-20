<div class="sidebar" data-color="orange">

  <div class="logo">
    <a href="{{route('home')}}" class="simple-text logo-mini">
      KA
    </a>
    <a href="{{route('home')}}" class="simple-text logo-normal">
      Kider Admin
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
    <li class="{{ in_array(request()->route()->getName(), ['teacherList','createTeacher','editTeacher','viewTeacher']) ? 'active' : '' }}">
        <a href="{{route('teacherList')}}">
          <i class="now-ui-icons users_single-02"></i>
          <p>Teachers</p>
        </a>
      </li>
      <li>
        <a href="">
          <i class="now-ui-icons objects_planet"></i>
          <p>Classes</p>
        </a>
      </li>
      <li
        class="{{ in_array(request()->route()->getName(), ['appointmentList', 'trashAppointment', 'viewAppointment']) ? 'active' : '' }}">
        <a href="{{route('appointmentList')}}">
          <i class="now-ui-icons ui-1_calendar-60"></i>
          <p>Appointments</p>
        </a>
      </li>
      <li
        class="{{ in_array(request()->route()->getName(), ['testimonial', 'testimonialList', 'createTestimonial','editTestimonial','trashTestimonial','viewTestimonial']) ? 'active' : '' }}">
        <a href="{{route('testimonialList')}}">
          <i class="now-ui-icons ui-2_favourite-28"></i>
          <p>Testimonials</p>
        </a>
      </li>

      <li
        class="{{ in_array(request()->route()->getName(), ['contactUsList', 'viewContactUs']) ? 'active' : '' }}">
        <a href="{{route('contactUsList')}}">
          <i class="now-ui-icons ui-2_chat-round"></i>
          <p>Contacts</p>
        </a>
      </li>
    </ul>
  </div>
</div>