<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Youssef Ahmed Shaker</title>
    <link href="{{ asset('assets/css/cv_pdf2.css') }}" rel="stylesheet">
    
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="name-info">
                <h1><strong>
                        @if (!empty($first_name))
                            {{ $first_name }}
                        @endif
                        <span>
                            @if (!empty($middel_name))
                                {{ $middel_name }}
                            @endif
                        </span>
                        @if (!empty($Family_name))
                            {{ $Family_name }}
                        @endif
                    </strong></h1>
                <div class="contact-info">
                    @if (!empty($phone))
                        <a href="tel:+{{ $phone }}">TEL: {{ $phone }} | </a>
                    @endif
                    @if (!empty($county && $address))
                        Address: {{ $address }} - {{ $county }} |
                    @endif
                    @if (!empty($email))
                        <a href="mailto:{{ $email }}">Email: {{ $email }}</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="summary">
            <h2>Summary</h2>
            @if (!empty($Summary))
                <p><strong>{{ $Summary }}</strong></p>
            @endif
        </div>

        <div class="experience">
            <h2>Experience</h2>
            <div class="job">
                <h3><strong>
                        @if (!empty($type_jop))
                            {{ $type_jop }}
                        @endif
                    </strong><span>-</span><strong>
                        @if (!empty($company_name))
                            {{ $company_name }}
                        @endif
                    </strong></h3>
                <p class="dates">
                    @if (!empty($start_date_month))
                        {{ $start_date_month }}
                    @endif
                    @if (!empty($start_date_year))
                        {{ $start_date_year }}
                    @endif -
                    @if (!empty($end_date_month))
                        {{ $end_date_month }}
                    @endif
                    @if (!empty($end_date_year))
                        {{ $end_date_year }}
                    @endif
                </p>
                @if (!empty($Job_summary))
                    <ul class="summary">
                        <li>{{ $Job_summary }}</li>
                    </ul>
                @endif
            </div>
            
            <div class="job">
                @if (!empty($type_jop2))
                    <h3><strong>
                            @if (!empty($type_jop2))
                                {{ $type_jop2 }}
                            @endif
                        </strong><span>-</span><strong>
                            @if (!empty($company_name2))
                                {{ $company_name2 }}
                            @endif
                    </strong></h3>
                @endif
                <p class="dates">
                    @if (!empty($start_date_month2))
                        {{ $start_date_month2 }}
                    @endif
                    @if (!empty($start_date_year2))
                        {{ $start_date_year2 }} -
                    @endif
                    @if (!empty($end_date_month2))
                        {{ $end_date_month2 }}
                    @endif
                    @if (!empty($end_date_year2))
                        {{ $end_date_year2 }}
                    @endif
                </p>
                @if (!empty($Job_summary2))
                    <ul class="summary">
                        <li>{{ $Job_summary2 }}</li>
                    </ul>
                @endif
            </div>
            <div class="job">
                @if (!empty($type_jop3))
                    <h3><strong>
                            @if (!empty($type_jop3))
                                {{ $type_jop3 }}
                            @endif
                        </strong><span>-</span><strong>
                            @if (!empty($company_name3))
                                {{ $company_name3 }}
                            @endif
                    </strong></h3>
                @endif
                <p class="dates">
                    @if (!empty($start_date_month3))
                        {{ $start_date_month3 }}
                    @endif
                    @if (!empty($start_date_year3))
                        {{ $start_date_year3 }} -
                    @endif
                    @if (!empty($end_date_month3))
                        {{ $end_date_month3 }}
                    @endif
                    @if (!empty($end_date_year3))
                        {{ $end_date_year3 }}
                    @endif
                </p>
                @if (!empty($Job_summary3))
                    <ul class="summary">
                        <li>{{ $Job_summary3 }}</li>
                    </ul>
                @endif
            </div>
        </div>
      </div>


    </div>
    <div class="projects">
        <h2>Projects:</h2>
        <div>
            @if(!empty($project_name))
                <ul class="project-list">
                    <li><h3>• {{ $project_name }}</h3></li>
                </ul>
            @endif
                @if (!empty($project_name))
                    <h5>Developed a {{ $project_name }} application featuring...</h5>
                @endif
                @if(!empty($skills_project))
                <p class="project-skills"><strong>Skills:</strong> {{ $skills_project }}</p>
            @endif
            @if(!empty($url_project))
                <p class="project-repo">Repo Link: <a href="{{ $url_project }}" target="_blank">{{ $url_project }}</a></p>
            @endif
        </div>
        <div>
            @if(!empty($project_name2))
                <ul>
                    <li class="project-list"><h3>• {{ $project_name2 }}</h3></li>
                </ul>
            @endif
            @if (!empty($project_name2))
                <h5>Developed a {{ $project_name2 }} application featuring...</h5>
            @endif
            @if(!empty($skills_project2))
                <p class="project-skills"><strong>Skills:</strong> {{ $skills_project2 }}</p>
            @endif
            @if(!empty($url_project2))
                <p class="project-repo">Repo Link: <a href="{{ $url_project2 }}" target="_blank">{{ $url_project2 }}</a></p>
            @endif
        </div>
        <div>
            @if(!empty($project_name3))
                <ul>
                    <li class="project-list"><h3>• {{ $project_name3 }}</h3></li>
                </ul>
            @endif
            @if (!empty($project_name3))
                <h5>Developed a {{ $project_name3 }} application featuring...</h5>
            @endif
            @if(!empty($skills_project3))
                <p class="project-skills"><strong>Skills:</strong> {{ $skills_project3 }}</p>
            @endif
            @if(!empty($url_project3))
                <p class="project-repo">Repo Link: <a href="{{ $url_project3 }}" target="_blank">{{ $url_project2 }}</a></p>
            @endif
        </div>
    </div>
    
    <div class="education">
        <h2>education</h2>
        <p class="dates">
            @if (!empty($start_date_month_university))
                ( {{ $start_date_month_university }}
            @endif
            @if (!empty($start_date_year_university))
                {{ $start_date_year_university }}
            @endif -
            @if (!empty($end_date_month_university))
                {{ $end_date_month_university }}
            @endif
            @if (!empty($end_date_year_university))
                {{ $end_date_year_university }} )
            @endif
        </p>
        <div class="university-info">
            <h3>
                @if(!empty($MAJOR))
                <span>MAJOR: {{ $MAJOR }}</span>
                @endif
                <br>
                @if(!empty($University_name))
                <span>University of {{ $University_name }}</span>
                @endif
                <br>
                @if(!empty($university_year))
                <span>year:{{ $university_year }}</strong>
                @endif
            </h3>
        </div>
    </div>
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


    
    
    <div class="languages">
        <h2>Languages </h2>
        <div class='lan'>
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
</body>

</html>
