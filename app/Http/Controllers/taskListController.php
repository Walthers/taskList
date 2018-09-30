<?php

namespace App\Http\Controllers;

use App\Tasklist;
use Request;

class taskListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Tasklist::orderBy('DTCREATION', 'desc')->paginate(10);
        return view("read", array('taskList' => $task));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tasklist::create(Request::all());

        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cdtask
     * @return \Illuminate\Http\Response
     */
    public function show($cdtask)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cdtask
     * @return \Illuminate\Http\Response
     */
    public function edit($cdtask)
    {
        $task = tasklist::findOrFail($cdtask);
        return view("update", array('taskList' => $task));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $cdtask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cdtask)
    {
        date_default_timezone_set('America/Sao_Paulo');

        $task            = tasklist::findOrFail($cdtask);
        $task->DTEDITION = date('Y-m-d H:i:s', time());

        if ($task->FGSTATUS == "on") {
            $task->DTCONCLUSION = date('Y-m-d H:i:s', time());
        } else {
            $task->DTCONCLUSION = null;
        }
        $task->update(Request::all());
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $cdtask
     * @return \Illuminate\Http\Response
     */
    public function destroy($cdtask)
    {
        $task = tasklist::findOrFail($cdtask);
        $task->delete();
        return redirect("/");
    }
}
