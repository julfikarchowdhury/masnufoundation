@extends('front.layout.layout')

@section('content')

<div class="page-header">
  <h1>About</h1>
</div>
<div class="container-fluid" style="background-color:#ebebeb;">
    <section class="container-fluid p-5">
        <div class="row d-flex">
            <div class="col-3" style="padding:20px 0px;margin-right:80px">
                <ul style="list-style-type:none;">
                    <li class="about-div-sizing x about-sidebar-indicator" value="1">Introduction</li>
                    <li class="about-div-sizing x" value="2">Principles and Norms</li>
                    <li class="about-div-sizing x" value="3">Goals and Objectives</li>
                    <li class="about-div-sizing x" value="4">Sources of funds and income</li>
                </ul>
            </div>

            <div class="moto-caption col-8 y" id="1" style="float:right;background-color: #ffffff;
                padding:30px 50px ;border-radius:15px;">
                <p class=" about-heading my-3">Introduction</p>
                <hr>
                <p>As-Sunnah Foundation is a non-profit, non-political, and entirely charitable organization dedicated to human welfare. Following the ideals and footsteps of the teacher of humanity,liberator of mankind, and role model of generosity Prophet Muhammad (Saw), this organization isengaged in social reform, inculcation of great morality, establishing employment, povertyalleviation, low cost or free health care, expansion of Islamic teachings and culture,conducting multidisciplinary education projects, continuous program in building a clean mindset,above all using oral, written and modern media to make people obey Allah and abide by HisMessenger (Saw).</p>
            </div>
            <div class="moto-caption col-8 y" id="2" style="float:right;background-color: #ffffff;
                padding:30px 50px ;border-radius:15px;display:none">
                <p class="about-heading my-3">Principles and Norms</p>
                <hr>
                <ul>
                    <li style="padding:10px">
                        The Holy Quran and the Sunnah of the Messenger of Allah (peace be upon him) are the
                        main ideals of the As-Sunnah Foundation.
                    </li>
                    <li style="padding:10px">
                        It accepts the Qur'an and Sunnah in the light of the interpretation of the Salafe Salihin.
                    </li>
                    <li style="padding:10px">
                        It nurtures the aqeedah and vision of Ahlus-Sunnah wal-Jama’ah.
                    </li>
                    <li style="padding:10px">
                        It calls for shirk-free faith and bid‘at-free practices.
                    </li>
                    <li style="padding:10px">
                        It works for the unity and solidarity of the Ummah.
                    </li>
                    <li style="padding:10px">
                        It adopts moderation by avoiding extreme polarization as much as possible on divisive issues.
                    </li>
                    <li style="padding:10px">
                        It refrains from taking political action and position and work for the greater good of
                        all irrespective of party affiliation.
                    </li>

                </ul>

            </div>
            <div class="moto-caption col-8 y" id="3" style="float:right;background-color: #ffffff;
                padding:30px 50px ;border-radius:15px;display:none">
                <p class="about-heading my-3">Goals and Objectives</p>
                <hr>
                <p style="padding:10px">The goal of the As-Sunnah Foundation is to gain the satisfaction of the Almighty Allah by conducting da'wah
                    activities to prevent evil deeds in the light of the lifestyle of the Prophet (peace be upon him).
                </p>
                <ul>
                    <li style="padding:10px;">
                        (a) Institutional and sub-institutional Islamic and general education and career-oriented technical training initiatives across
                        the country, especially in the comparatively neglected sections of society
                    </li>
                    <li style="padding:10px">
                        (b) service to humanity and
                    </li>
                    <li style="padding:10px">
                        (c) encouragement for good deeds are the prime objective of the As-sunnah Foundation.
                    </li>

                </ul>
            </div>
            <div class="moto-caption col-8 y" id="4" style="float:right;background-color: #ffffff;
                padding:30px 50px ;border-radius:15px;display:none">
                <p class="about-heading my-3">Sources of funds and income</p>
                <hr>

                <ul>
                    <li style="padding:10px;">
                        The journey begins with the property and funds purchased with donations from
                        the founding members of the Foundation.
                    </li>
                    <li style="padding:10px">
                        One-time and regular donations from members, supporters and well-wishers.
                    </li>
                    <li style="padding:10px">
                        Proceeds from any project of the Foundation.
                    </li>
                    <li style="padding:10px">
                        Grants given by the public in a particular sector.
                    </li>
                    <li style="padding:10px">
                        Zakat, Fitra payable to affluent Muslims.
                    </li>
                    <li style="padding:10px">
                        Money recovered in special sectors including Iftar and Qurbani.
                    </li>
                    <li style="padding:10px">
                        Grants from government or private sources.
                    </li>
                    <li style="padding:10px">
                        5-10% administrative cost deducted from various projects for managing various projects.
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
@endsection