<div class="container">

    <div class="row justify-content-center">
       @foreach($events as $event)
            <div class="col-lg-4 col-md-6">
                <div class="single-events-card style-4">
                    <div class="events-image">
                        <a href="{{route('events.show',$event->id)}}"><img src="{{asset('storage/'.$event->eventImage)}}" alt="Image"></a>
                        <div class="date">
                            <span>{{\Carbon\Carbon::make($event->eventDate)->format('d')}}</span>
                            <p>{{\Carbon\Carbon::make($event->eventDate)->format('F')}}</p>
                        </div>
                    </div>
                    <div class="events-content">

                        <a href="{{route('events.show',$event->id)}}">
                            <h3>{{$event->eventTitle}}</h3>
                        </a>
                    </div>
                </div>
            </div>
       @endforeach


    </div>
    <div class="paginations">
        @if($hasMore)
            <div class="brought">
                <a wire:click.prevent="addPerPage()" class="default-btn btn">Load more</a>
            </div>
            @endif



    </div>
</div>
