<div class="tab-pane fade" id="listEvents" role="tabpanel">
    <br>
    <table border="1" width="100%">
        <tr>
            <td>
                <table border="1" width="100%">
                    <tr>
                        <th style="text-align: center;">Id</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Location</th>
                        <th style="text-align: center;">Start Date</th>
                        <th style="text-align: center;">End Date</th>
                        <th style="text-align: center;">Event Type</th>
                        <th style="text-align: center;">Ticket Type</th>
                        <th style="text-align: center;">Barcode</th>
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
                        <td>
                            <a target="_blank" href="{{ route('front.event.add.showBarcode' ,$event->id) }}"><i class="fa fa-fw fa-eye text-primary"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </td>
        </tr>
    </table>
</div>