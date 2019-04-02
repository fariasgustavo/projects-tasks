@include("commons.header")
    
<section id="projects">
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="{{ url("project/$project->id") }}">
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>

                    <ul>
                        
                    </ul>
                </a>
            </li>
        @endforeach
    </ul>
</section>

@include("commons.footer")