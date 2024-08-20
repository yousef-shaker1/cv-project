<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Youssef Ahmed Shaker</title>
    <link href="{{ asset('assets/css/cv_pdf.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="name-info">
                <h1><strong>
                    @if($first_name)
                    {{ $first_name }}
                    @endif
                    <span>
                        @if($middel_name)
                        {{ $middel_name }}
                        @endif
                    </span><br>
                    @if($Family_name)
                    {{ $Family_name }}
                    @endif
                </strong></h1>
                <h3>
                    @if($career_job)
                    {{ $career_job }}
                    @endif
                </h3>
            </div>
            <div class="contact-info">
                @if($phone)
                <p><a href="tel:+{{ $phone }}">TEL: {{ $phone }}</a></p>
                @endif
                @if($county && $address)
                <p>Address: {{ $address }}, {{ $county }}</p>
                @endif
                @if($email)
                <p><a href="mailto:{{ $email }}">Email: {{ $email }}</a></p>
                @endif
                @if($linkedin)
                <p>LinkedIn: <a href="{{ $linkedin }}">{{ $linkedin }}</a>
                    @endif
                </p>
                @if($github)
                <p><a href="{{ $github }}">GitHub: {{ $github }}</a></p>
                @endif
            </div>
            <div class="summer">
                <h2>Summary : </h2>
                @if($Summary)
                <p><strong>{{ $Summary }}</strong></p>
                @endif
            </div>
        </div>
        <hr>
        <div class="experience">
            <h2>Experience : </h2>
            <div>
                <h3><strong>
                    @if($type_jop)
                    {{ $type_jop }}
                    @endif
                </strong><span>-</span><strong>
                    @if($company_name)
                    {{ $company_name }}
                    @endif
                </strong></h3>
                <p>
                    @if($start_date_month)
                    ( {{ $start_date_month }}
                    @endif
                    @if($start_date_year)
                    {{ $start_date_year }}
                    @endif - 
                    @if($end_date_month)
                    {{ $end_date_month }}
                    @endif
                    @if($end_date_year)
                    {{ $end_date_year }} )</p>
                    @endif
                @if($Job_summary)
                    <ul>
                        <li>{{ $Job_summary }}</li>
                    </ul>
                @endif
            </div>
            <br>
            @if(!empty($type_jop2))
            <div>
                <h3><strong>
                    @if(!empty($type_jop2))
                    {{ $type_jop2 }}
                    @endif
                    @if(!empty($company_name2))
                </strong><span>-</span><strong>
                    {{ $company_name2 }}
                </strong></h3>
                @endif
                <p>
                    @if(!empty($start_date_month2))
                    ( {{ $start_date_month2 }}
                    @endif
                    @if(!empty($start_date_year2))
                    {{ $start_date_year2 }} -
                    @endif
                    @if(!empty($end_date_month2))
                    {{ $end_date_month2 }}
                    @endif
                    @if(!empty($end_date_year2))
                    {{ $end_date_year2 }} )</p>
                    @endif
            
                @if(!empty($Job_summary2))
                    <ul>
                        <li>{{ $Job_summary2 }}</li>
                    </ul>
                @endif
            </div>
            @endif
            <br>
            @if(!empty($type_jop3))
            <div>
                <h3><strong>
                    @if(!empty($type_jop3))
                    {{ $type_jop3 }}
                    @endif
                    @if(!empty($company_name3))
                </strong><span>-</span><strong>
                    {{ $company_name3 }}
                </strong></h3>
                @endif
                <p>
                    @if(!empty($start_date_month3))
                    ( {{ $start_date_month3 }}
                    @endif
                    @if(!empty($start_date_year3))
                    {{ $start_date_year3 }} -
                    @endif
                    @if(!empty($end_date_month3))
                    {{ $end_date_month3 }}
                    @endif
                    @if(!empty($end_date_year3))
                    {{ $end_date_year3 }} )</p>
                    @endif
            
                @if(!empty($Job_summary3))
                    <ul>
                        <li>{{ $Job_summary3 }}</li>
                    </ul>
                @endif
            </div>
            @endif
        </div>
        <hr>
        <div class="projects">
            <h2>projects : </h2>
            <div>
                @if(!empty($project_name))
                <ul>
                    <li><h3>{{ $project_name }}</h3></li>
                </ul>
                @endif 
                @if (!empty($project_name))
                <h5><span> </span>Developed a {{ $project_name }} application featuring...</h5>
                @endif
                @if(!empty($skills_project))
                <p><span> </span><strong>Skills:</strong>{{ $skills_project }}</p>
                @endif
                @if(!empty($url_project))
                <p><span> </span>Repo Link : {{ $url_project }}</p>
                @endif
            </div>

            <div>
                @if(!empty($project_name2))
                <ul>
                    <li><h3>{{ $project_name2 }}</h3></li>
                </ul>
                @endif
                @if (!empty($project_name2))
                <h5><span> </span>Developed a {{ $project_name2 }} application featuring...</h5>
                @endif
                @if(!empty($skills_project2))
                <p><span> </span><strong>Skills:</strong>{{ $skills_project2 }}</p>
                @endif
                @if(!empty($url_project2))
                <p><span> </span>Repo Link : {{ $url_project2 }}</p>
                @endif
            </div>

            <div>
                @if(!empty($project_name3))
                <ul>
                    <li><h3>{{ $project_name3 }}</h3></li>
                </ul>
                @endif
                @if (!empty($project_name3))
                <h5><span> </span>Developed a {{ $project_name3 }} application featuring...</h5>
                @endif
                @if(!empty($skills_project3))
                <p><span> </span><strong>Skills:</strong>{{ $skills_project3 }}</p>
                @endif
                @if(!empty($url_project3))
                <p><span> </span>Repo Link : {{ $url_project3 }}</p>
                @endif
            </div>
        </div>
        <hr>
        <div class="Skills">
            <h2>Skills : </h2>
            <div>
                <ul>
                    @if(!empty($skills))
                        @foreach($skills as $skill)
                            <li>• {{ $skill }}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <hr>
        <div class="education">
            <h2>Education : </h2>
            <div>
                @if($University_name && $start_date_month_university)
                <p><strong>INSTITUTE: </strong>{{ $University_name }} ({{ $start_date_month_university }} {{ $start_date_year_university }} - {{ $end_date_month_university }} {{ $end_date_year_university }})</p>
                @endif
                @if($MAJOR)
                <p><strong>MAJOR: </strong>{{ $MAJOR }}</p>
                @endif
                @if($university_year)
                <p><strong>year:</strong>{{ $university_year }}</p>
                @endif
            </div>
        </div>
        <hr>
        <div class="languages">
            <h2>Languages </h2>
            <div class=lan>
                <p><strong>
                    @if(!empty($languages_name1))
                    • {{ $languages_name1 }}:
                    @endif
                </strong>
                    @if(!empty($language_level1))
                    {{ $language_level1 }}
                    @endif
                </p>
            </div>
            <div class='lan2'>
                <p><strong>
                    @if(!empty($language_name2))
                    • {{ $language_name2 }}:
                    @endif
                </strong>
                    @if(!empty($language_level2))
                    {{ $language_level2 }}
                    @endif
                </p>
            </div>
        </div>
        
    </div>
</body>

</html>
