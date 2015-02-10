<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" > File </label>

    <div class="col-sm-9">
        {{ Form::text('name',null ,array('class' => 'col-xs-10 col-sm-5')) }}
     
    </div>
</div>
<div style="clear: both;"></div>
<div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
        {{ Form::submit('Save',array('class' => 'btn btn-info')) }}
        &nbsp; &nbsp; &nbsp;
        <button class="btn" type="reset">
            <i class="icon-undo bigger-110"></i>
            Reset
        </button>
    </div>
</div>