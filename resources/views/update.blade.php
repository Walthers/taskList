<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
    {{HTML::style("css/styleForm.css")}}
    {{HTML::style("css/bootstrap.css")}}
</head>
<body>
	<div class="container">
		<button style="margin-top:20px;" class="btn btn-outline-primary btn-sm" name="Back" value="Back" onclick="goBack({{$taskList->CDTASK}})">Voltar</button>
		{{Form::model($taskList, array("method" => "patch", "action" => array("taskListController@update", $taskList->CDTASK)))}}
			<div id="divContainer" style="">
					{{Form::label("NMTASK", "Nome")}}
					{{Form::text("NMTASK", null, array("class" => "form-control"))}}
				<div id="divContainer">
					{{Form::label("DSTASK", "Descrição")}}
					{{Form::textarea("DSTASK", null, array("class" => "form-control"))}}
				</div>
	            <div class="custom-control custom-checkbox" id="divContainer">
					<input type="hidden" value="" name="FGSTATUS" id="hiddenValue">
					<input {{isset($taskList['FGSTATUS'])&&$taskList['FGSTATUS'] == 'on' ? 'checked' : ''}} id="FGSTATUS" type="checkbox" name="FGSTATUS" class="custom-control-input">
					{{Form::label("FGSTATUS", "Completado?", array("class" => "custom-control-label"))}}
				</div>
    			<div id="divContainer">
					{{Form::submit("Salvar", array("class" => "btn btn-outline-primary"))}}
				</div>
            </div>
		{{Form::close()}}
	</div>
<script>
function goBack(cdtask){
    var url = location.href;
    location.href = url.replace('/edit', '').replace(cdtask, '');
}
</script>
</body>
</html>
