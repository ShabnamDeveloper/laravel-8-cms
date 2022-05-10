@section('title'){{ $title ?? getTitle() }}@endsection
@section('description'){{ $description ?? getDescription() }}@endsection
@section('image'){{ $image ?? getImage() }}@endsection
@section('robots'){{ $robots ?? getRobots() }}@endsection
