<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Khill\Lavacharts\Exceptions\InvalidCellCount
     * @throws \Khill\Lavacharts\Exceptions\InvalidColumnType
     * @throws \Khill\Lavacharts\Exceptions\InvalidLabel
     * @throws \Khill\Lavacharts\Exceptions\InvalidRowDefinition
     * @throws \Khill\Lavacharts\Exceptions\InvalidRowProperty
     */
    public function index()
    {
        $teams = Team::all();

        $datatable = \Lava::DataTable();
        $datatable->addStringColumn('Team');
        $datatable->addNumberColumn('Punten');
        foreach ($teams as $team){
            $datatable->addRow([$team->name, $team->getPoints()]);
        }

        $barchart = \Lava::BarChart('points', $datatable);

        return view('teams.index', compact('teams', 'barchart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
