<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Youssef Ahmed Shaker</title>
    <link href="{{ asset('assets/css/cv_pdf3.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="name-info">
                <h1>
                    @if(!empty($first_name)) {{ $first_name }} @endif
                    @if(!empty($middel_name)) {{ $middel_name }} @endif
                    @if(!empty($Family_name)) {{ $Family_name }} @endif
                </h1>
                <h3>
                    @if(!empty($career_job)) {{ $career_job }} @endif
                </h3>
                @if(!empty($address && $county)) <p>Address 
                    <br>
                    <div class='adders'>
                        {{ $address }} - {{ $county }}
                    </div>
                </p> @endif
                @if(!empty($phone)) <p>TEL: {{ $phone }}</p> @endif

                @if(!empty($email)) <div class='email'><p>Email: {{ $email }}</p></div> @endif
            </div>
            <div class="contact-info">
                @if(!empty($linkedin)) <p>LinkedIn: {{ $linkedin }}</p> @endif
                @if(!empty($github)) <p>GitHub: {{ $github }}</p> @endif
            </div>
        </div>
        <br>
        <div class="summer">
            @if(!empty($Summary))
            <p><strong>{{ $Summary }}</strong></p>
            @endif
        </div>
        <div class="experience">
            <div class="section-title">Experience</div>
            <div>
                <div class='data_ex'>
                <p>
                    @if(!empty($start_date_month)) ({{ $start_date_month }} @endif
                    @if(!empty($start_date_year)) {{ $start_date_year }} - @endif
                    @if(!empty($end_date_month)) {{ $end_date_month }} @endif
                    @if(!empty($end_date_year)) {{ $end_date_year }} @endif
                </p>
            </div>
                <h3>
                    @if(!empty($type_jop)) {{ $type_jop }} @endif
                    @if(!empty($company_name)) - {{ $company_name }} @endif
                </h3>
                @if(!empty($Job_summary))
                <ul>
                    <li>{{ $Job_summary }}</li>
                </ul>
                @endif
            </div>
            <div>
                <div class='data_ex'>
                <p>
                    @if(!empty($start_date_month2)) ({{ $start_date_month2 }} @endif
                    @if(!empty($start_date_year2)) {{ $start_date_year2 }} - @endif
                    @if(!empty($end_date_month2)) {{ $end_date_month2 }} @endif
                    @if(!empty($end_date_year2)) {{ $end_date_year2 }})) @endif
                </p>
            </div>
                <h3>
                    @if(!empty($type_jop2)) {{ $type_jop2 }} @endif
                    @if(!empty($company_name2)) - {{ $company_name2 }} @endif
                </h3>
                @if(!empty($Job_summary2))
                <ul>
                    <li>{{ $Job_summary2 }}</li>
                </ul>
                @endif
            </div>
            <div>
                <div class='data_ex'>
                <p>
                    @if(!empty($start_date_month3)) ({{ $start_date_month3 }} @endif
                    @if(!empty($start_date_year3)) {{ $start_date_year3 }} - @endif
                    @if(!empty($end_date_month3)) {{ $end_date_month3 }} @endif
                    @if(!empty($end_date_year3)) {{ $end_date_year3 }})) @endif
                </p>
            </div>
                <h3>
                    @if(!empty($type_jop3)) {{ $type_jop3 }} @endif
                    @if(!empty($company_name3)) - {{ $company_name3 }} @endif
                </h3>
                @if(!empty($Job_summary3))
                <ul>
                    <li>{{ $Job_summary3 }}</li>
                </ul>
                @endif
            </div>
        </div>
        <div class="projects">
            <div class="section-title">Projects</div>
            <div >
                @if(!empty($project_name))
                <h3>• {{ $project_name }}</h3>
                <div>
                    <p>Developed a {{ $project_name }} application featuring...</p>
                @endif
                <div class='pro'>
                    <p><strong>Skills:</strong> {{ $skills_project }}</p>
                    <p>Repo Link: {{ $url_project }}</p>
                </div>
            </div>
            <div >
                @if(!empty($project_name2))
                <h3>• {{ $project_name2 }}</h3>
                <div>
                    <p>Developed a {{ $project_name2 }} application featuring...</p>
                @endif
                <div class='pro'>
                    @if(!empty($skills_project2))
                    <p><strong>Skills:</strong> 
                        {{ $skills_project2 }}
                        @endif
                    </p>
                    @if(!empty($url_project2))
                    <p>Repo Link: {{ $url_project2 }}</p>
                    @endif
                </div>
            </div>
            <div >
                @if(!empty($project_name3))
                <h3>• {{ $project_name3 }}</h3>
                <div>
                    <p>Developed a {{ $project_name3 }} application featuring...</p>
                @endif
                <div class='pro'>
                    @if(!empty($skills_project3))
                    <p><strong>Skills:</strong> 
                        {{ $skills_project3 }}
                        @endif
                    </p>
                    @if(!empty($url_project3))
                    <p>Repo Link: {{ $url_project3 }}</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="Skills">
            <h2>Skills : </h2>
            <div>
                <ul>
                    @if(!empty(!empty($skills)))
                        @foreach($skills as $skill)
                            <li>• {{ $skill }}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="education">
            <div class="section-title">Education</div>
            <div>
                <p><strong>INSTITUTE:</strong> {{ $University_name }} ({{ $start_date_month_university }} {{ $start_date_year_university }} - {{ $end_date_month_university }} {{ $end_date_year_university }})</p>
                <p><strong>MAJOR:</strong> {{ $MAJOR }}</p>
            </div>
        </div>
        <div class="languages">
            <div class="section-title">Languages</div>
            <p><strong>
                @if(!empty($languages_name1))
                • {{ $languages_name1 }}:
                @endif
            </strong> 
            @if(!empty($languages_name1))
            {{ $language_level1 }}
            @endif
        </p>
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
