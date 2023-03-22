<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $items = Participant::all();

        return view('pages.participants.index', [
            'items' => $items,
            'title' => 'Peserta'
        ]);
    }

    public function create()
    {
        return view('pages.participants.create', [
            'title' => 'Tambah Peserta Baru'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('participants', 'public');

        Participant::create($data);
        return redirect()->route('participants.index');
    }

    public function edit($id)
    {
        $item = Participant::findorFail($id);

        return view('pages.participants.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        if (!empty($data['photo'])) {
            $data['photo'] = $request->file('photo')->store('participants', 'public');
        } else {
            unset($data['photo']);
        }

        Participant::findOrFail($id)->update($data);
        return redirect()->route('participants.index');
    }

    public function destroy($id)
    {
        Participant::findOrFail($id)->delete();
        return redirect()->route('participants.index');
    }
}
