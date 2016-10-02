<h1>Your Travel Stories</h1>
<form role="form" method="post" enctype="multipart/form-data" action="newstory">
    <div class="form-group">
        <label>Title</label>
        <input class="form-control" name="title" placeholder="Enter text">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="desc" rows="3" placeholder="Your travel experience"></textarea>
    </div>
    <label class="btn btn-default btn-file">
        Cover Image <input type="file" name="cimage" accept="image/*" style="display:none">
    </label> &nbsp;<label class="btn btn-default btn-file">
        User Image <input type="file" name="pimage" accept="image/*" style="display:none">
    </label>
    <hr>
    <button type="submit" class="btn btn-default">Post Story</button>
</form>