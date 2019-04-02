@include("commons.header")

<section id="create-project">
    <form action="{{url("project/create/new")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <button class="button form right float-right">Register</button>
    </form>
</section>

@include("commons.footer")