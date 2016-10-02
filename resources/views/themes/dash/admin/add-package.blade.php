<h1>Add New Package</h1>
<form role="form" method="post" action="newpackage">
        <div class="form-group">
                <label>Location</label>
                <input class="form-control" name="location" placeholder="Enter Location">
        </div><div class="form-group">
                <label>Time</label>
                <input class="form-control" name="time" placeholder="Enter TIme">
        </div><div class="form-group">
                <label>Cost</label>
                <input class="form-control" name="cost" placeholder="Enter Cost">
        </div><div class="form-group">
                <label>Company</label>
                <input class="form-control" name="company" placeholder="Enter Company Name">
        </div><div class="form-group">
                <label>Contact Address</label>
                <input class="form-control" name="contact" placeholder="Enter Contact Number">
        </div>
        <div class="form-group">
                <label for="sel1">Activity:</label>
                <select class="form-control" name="activity" id="sel1">
                        <option>Trekking</option>
                        <option>Rafting</option>
                </select>
        </div>
        <hr>
        <button type="submit" class="btn btn-default">New Package</button>
</form>