<div class="tab-pane fade" id="listEvents" role="tabpanel">
    <br>
    <table border="1" width="100%">
        <tr>
            <td>
                <table border="1" width="100%">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Event Type</th>
                        <th>Ticket Type</th>
                    </tr>
                    @foreach($events as $event)
                    <tr>
                        <td>{{$event->id}}</td>
                        <td>{{$event->name}}</td>
                        <td>{{$event->location}}</td>
                        <td>{{$event->start_date}}</td>
                        <td>{{$event->end_date}}</td>
                        <td>{{$event->event_type}}</td>
                        <td>{{$event->ticket_type}}</td>

                    </tr>
                    @endforeach

                </table>
            </td>
        </tr>
    </table>
</div>