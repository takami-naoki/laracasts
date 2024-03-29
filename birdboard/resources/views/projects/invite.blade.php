<div class="card mt-3">
    <h3 class="font-weight-normal text-xl py-4 mb-3 -ml-5 border-l-4 border-blue-light pl-4">
        Invite a User
    </h3>
    <form action="{{$project->path() . '/invitations'}}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="border border-grey rounded w-full py-2 px-3" placeholder="Email address">
        </div>
        <button type="submit" class="button">Invite</button>
    </form>
    @include('errors', ['bag' => 'invitations'])
</div>
