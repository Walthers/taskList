<?php
$functions = new Functions();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Read</title>
    {{HTML::style('css/bootstrap.css')}}
    {{HTML::script('js/jquery-3.3.1.min.js') }}

</head>
<body>
    <input type="hidden" name="cdtask">
    <div class="container" style="padding-top: 20px;">
        <button class="btn btn-outline-primary btn-lg" name="Delete" value="Delete" onclick="action(3)">Adicionar</button>
        <div style="padding-top: 20px;">
            <table class="table table-striped" id="tableContent">
                <thead>
                    <th>Nome</th>
                    <th>Status</th>
                    <th>Descrição</th>
                    <th>Data de Criação</th>
                    <th>Data de edição</th>
                    <th>Data de conclusão</th>
                    <th style="text-align: -webkit-center">Ações</th>
                </thead>
                @foreach($taskList as $task)
                <tr>
                    <td>{{$task->NMTASK}}</td>
                    <td>{{$functions->getStatusConvert($task->FGSTATUS)}}</td>
                    <td>{{$task->DSTASK}}</td>
                    <td>{{$task->DTCREATION}}</td>
                    <td>{{$task->DTEDITION}}</td>
                    <td>{{$task->DTCONCLUSION}}</td>
                    <td style= "display: flex;">
                        <div>
                            <button class="btn btn-outline-primary" name="Edit" value="Edit" onclick="action(2, {{$task->CDTASK}})">Alterar</button>
                        </div>
                        <div style= "padding-left: 20px;">
                            <button class="btn btn-outline-primary" name="Delete" value="Delete" onclick="action(1, {{$task->CDTASK}})">Deletar</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
<script>
function action(typeAction, cdtask){
    switch(typeAction){
        case 1:
            action = "delete";
            break;
        case 2:
            action = "edit";
            break;
        case 3:
            location.href=location.href+"create";
            return;
    }
    location.href=location.href+action+"/"+cdtask;
}
</script>
</body>
</html>
