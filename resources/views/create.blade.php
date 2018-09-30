<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    {{HTML::style('css/bootstrap.css')}}
    {{HTML::style('css/styleForm.css')}}
    {{HTML::script('js/jquery-3.3.1.min.js') }}
</head>
<body>
    <div class="container">
        <button style="margin-top:20px;" class="btn btn-outline-primary btn-sm" name="Back" value="Back" onclick="goBack()">Voltar</button>
        <form action="store" method="post">
            <div id="divContainer" style="">
                <label style="display: block;" for="NMTASK">Nome</label>
                <input type="text" class="form-control" name="NMTASK">
            </div>
            <div id="divContainer">
                <label style="display: block;" for="DSTASK">Descrição</label>
                <textarea class="form-control" name="DSTASK"></textarea>
            </div>
                <div class="custom-control custom-checkbox" id="divContainer">
                    <input type="hidden" value="" name="FGSTATUS" id="hiddenValue">
                    <input id="FGSTATUS" type="checkbox" name="FGSTATUS" class="custom-control-input">
                    {{Form::label("FGSTATUS", "Completado?", array("class" => "custom-control-label"))}}
                </div>
            <div id="divContainer">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="Submit" class="btn btn-outline-primary" name="Submit" value="Submit" >Salvar</button>
            </div>
        </form>
    </div>
<script>
function goBack(){
    var url = location.href;
    location.href = url.replace('create', '');
}
</script>
</body>
</html>
