@extends('layouts.app')

@section('content')

    <div class="top-nav">
      <div class="grid-x grid-margin-x">
        <div class="large-6 medium-6 small-12 columns">
          <ul class="top-list">
            <li class="fa fa-map-marker">Nairobi, Valley Road</li>
            <li class="fa fa-envelope-o">help@cytonn.com</li>
            <li class="fa fa-phone">+2097977977</li>
          </ul>
        </div>
        <div class="large-6 medium-6 small-12 columns">
          <ul id="menu-topmenu" class="top-list-right">
            <li ><a href="#" data-open="loginModal"> Client login </a></li>
            <li ><a href="#" data-open="registerModal"> Register</a> </li>
            <li ><a href="support.html">Support</a></li>
          </ul>
        </div>
      </div>
    </div>
      <div class="top-bar" id="responsive-menu">
        <div class="top-bar-left">
          <h3><span>Cyt</span>Pro</h3>
        </div>
        <div class="top-bar-right">
          <ul class="menu">
            <li ><a class="current" href="index.html"> Home </a></li>
            <li ><a href="features.html">Features</a> </li>
            <li ><a href="pricing.html"> Pricing</a></li>
            <li ><a href="team.html"> Team</a></li>
          </ul>
        </div>
      </div>

    <section class="showcase">
      <div class="grid-x grid-margin-x">
        <div class="large-4 medium-4 large-offset-1 medium-offset-1 columns">
          <div class="showcase-box">
            <h3> Fast, Reliable, Secure</h3>
            <p>Takes only 45 seconds to install</p>
            <div class="grid-x grid-margin-x">
              <div class="large-6 medium-6 small-12 columns">
                <ul>
                  <li><strong>Easy</strong>Installation</li>
                  <li><strong>Quick</strong>Response</li>
                  <li><strong>98%</strong>Uptime</li>
                  <li><strong>24/7</strong>Support</li>
                </ul>
              </div>

              <div class="large-6 medium-6 small-12 columns">
                <ul>
                  <li><strong>Easy</strong>Installation</li>
                  <li><strong>Quick</strong>Response</li>
                  <li><strong>98%</strong>Uptime</li>
                  <li><strong>24/7</strong>Support</li>
                </ul>
              </div>
            </div>
          </div>

              <div class="showcase-box-bottom">
                <div class="grid-x grid-margin-x">
                  <div class="large-6 medium-6 small-12 columns">
                    Starting at
                      <div class="pricing"><span>99.99</span>/Annually</div>
                  </div>
                  <div class="start-link columns large-6 medium-6">
                  <h5><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Get Started Now</a></h5>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </section>

@endsection
