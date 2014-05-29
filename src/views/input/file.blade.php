<div class="form-group">
	<label for="inputEmail3" class="col-md-{{ $labelWidth }} control-label">
		{{ $title }}
	</label>
	<div class="col-md-{{ $controlWidth }}">
		<div class="input-group">
			<span class="input-group-btn">
				<span class="btn btn-primary btn-file">
					Dosya 
					{{ Form::file($name) }}
				</span>
			</span>
			<input type="text" class="form-control" readonly="">
		</div>
	</div>
</div>