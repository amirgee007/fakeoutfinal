<div class="tab-pane fade" id="addEvent" role="tabpanel">
    <br>

    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/event/add') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="eventName" class="col-md-4 control-label">Event Name</label>
                <div class="col-md-6">
                    <input name="name" placeholder="Give it a short distinct name" class="form-control"  required type="text">
                </div>
            </div>

            <div class="form-group">
                <label for="eventName" class="col-md-4 control-label">Event Location</label>
                <div class="col-md-6">
                    <input name="location" placeholder="Specify where it's held" class="form-control"  required type="text">
                </div>
            </div>


            <div class="form-group">
                <label for="eventName" class="col-md-4 control-label">Starts Date</label>
                <div class="col-md-3">
                    <input name="starts_date" placeholder="Start Date" class="form-control"  required type="date">
                </div>

                {{--<label for="eventName" class="col-md-4 control-label">Start Time</label>--}}
                <div class="col-md-3">
                    <input name="start_time" placeholder="Start Time" class="form-control"  required type="time">
                </div>
            </div>


            <div class="form-group">
                <label for="eventName" class="col-md-4 control-label">Ends Date</label>
                <div class="col-md-3">
                    <input name="ends_date" placeholder="Ends Date" class="form-control"  required type="date">
                </div>
                {{--<label for="eventName" class="col-md-4 control-label">Ends Time</label>--}}
                <div class="col-md-3">
                    <input name="ends_time" placeholder="Ends Time" class="form-control"  required type="time">
                </div>
            </div>


            <div class="form-group">
                <label for="eventName" style="margin-top:31px" class="col-md-4 control-label">Event Image</label>
                <div class="col-md-6">
                    <span style="background-color: #00AA88" class="btn btn-default btn-file" onclick="HandleBrowseClick('input-image-hidden');">Click to Add Event Image</span>
                    <input style="display:none" name="image" id="input-image-hidden" onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0])" type="file" accept="image/jpeg, image/png">
                    <img id="image-preview" class="img1" align="middle"  style="height:100px; width:150px;"  src=""/>
                </div>
            </div>


            <div class="form-group">
                <label for="eventName" class="col-md-4 control-label">Event Type</label>
                <div class="col-md-6">
                    <select name="event_type" id="event_type" class="form-control"  required>
                        <option value="">Select Type</option>
                        <option value="vip">Vip</option>
                        <option value="general">general</option>
                        <option value="invitation">invitation</option>
                    </select> </div>
            </div>


            <div class="form-group">
                <label for="eventName" class="col-md-4 control-label">Ticket Type</label>
                <div class="col-md-6">
                    <select name="ticket_type" id="ticket_type" class="form-control"  required>
                        <option value="">Select Type</option>
                        <option value="vip">Low</option>
                        <option value="general">High</option>
                        <option value="invitation">Normal</option>
                    </select>

                </div>
            </div>

                <div class="form-group">
                    <label for="eventName" class="col-md-4 control-label">Event Codes</label>
                    <div class="col-md-6">
                        <textarea rows="5" id="eventCodes"  class="form-control" name="eventCodes" required></textarea>
                        <p style="color: red">One entry per Comma Separated please.</p>
                    </div>
                </div>


                <div class="form-group">
                    <label for="eventName" class="col-md-4 control-label">Comments</label>
                    <div class="col-md-6">
                        <textarea rows="3" id="comments"  class="form-control" name="comments" required></textarea>
                    </div>
                </div>

            <br/>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Generator Barcode & Add
                    </button>
                    <a  href="{{route('promoterEvents.index')}}" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>