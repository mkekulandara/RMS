<div class="modal fade" id="reserve"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="title">Reserve</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="Post" action="book.php" onsubmit="return validate(this)">
                    <fieldset>
                        <div class="form-group">
                            <label for="event_name" class="col-lg-4 control-label">Event Name :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="event_name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="resource_id" class="col-lg-4 control-label">Resource Id :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="demo" name="resource_id" placeholder="Resource Id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Day :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="date">
                                    <option>Monday</option>
                                    <option>Tuesday</option>
                                    <option>Wednesday</option>
                                    <option>Thursday</option>
                                    <option>Friday</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Time Slot :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="time_slot">
                                    <option>8.00-9.00 A.M</option>
                                    <option>9.00-10.00 A.M</option>
                                    <option>10.00-11.00 A.M</option>
                                    <option>11.00-12.00 A.M</option>
                                    <option>12.00-1.00 P.M</option>
                                    <option>1.00-2.00 P.M</option>
                                    <option>2.00-3.00 P.M</option>
                                    <option>3.00-4.00 P.M</option>
                                    <option>4.00-5.00 P.M</option>
                                    <option>5.00-6.00 P.M</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-lg-4 control-label">Reason for Booking :<br></label>
                            <div class="col-lg-6">
                                <textarea class="form-control" rows="3" name="description"></textarea>
                                <span class="help-block">Enter a small description about the event or the program which the hall is Reserving for.</span>
                            </div>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Send Request</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </fieldset>
            </form>
        </div>
    </div>
</div>
