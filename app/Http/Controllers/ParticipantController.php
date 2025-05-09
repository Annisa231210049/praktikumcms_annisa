<?php

namespace App\Http\Controllers;

use App\Data\ProgramPesertaData;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    // Menampilkan Daftar Program
    public function showPrograms()
    {
        $programs = ProgramPesertaData::allPrograms();
        return view('programs.index', compact('programs'));
    }

    public function showProgram($programName)
    {
        $program = ProgramPesertaData::findProgram($programName);
        return view('programs.show', compact('program'));
    }

    // Menampilkan Daftar Peserta
    public function showParticipants()
    {
        $participants = ProgramPesertaData::allParticipants();
        return view('participants.index', compact('participants'));
    }

    public function showParticipant($id)
    {
        $participant = ProgramPesertaData::findParticipant($id);
        return view('participants.show', compact('participant'));
    }

    // Mencari Peserta Berdasarkan Nama
    public function findParticipantByName(Request $request)
    {
        $name = $request->input('name');
        $participant = ProgramPesertaData::findParticipantByName($name);

        if ($participant) {
            return view('participants.show', compact('participant'));
        } else {
            return redirect()->back()->with('error', 'Peserta tidak ditemukan');
        }
    }

    // Menampilkan Halaman Edit Peserta
    public function edit($id)
    {
        $participant = ProgramPesertaData::findParticipant($id);
        return view('participants.edit', compact('participant'));
    }

    // Memperbarui Data Peserta
    public function update(Request $request, $id)
    {
        $participant = ProgramPesertaData::find($id);

        if ($participant) {
            $participant->name = $request->name;
            $participant->program = $request->program;
            $participant->payment = $request->payment;
            $participant->email = $request->email;
            $participant->phone = $request->phone;
            $participant->address = $request->address;
            $participant->save(); // Simpan perubahan ke database

            return redirect()->route('participants.show', $id)->with('success', 'Data peserta berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Peserta tidak ditemukan.');
        }
    }

    // Menghapus Peserta
    public function destroy($id)
    {
        $participant = ProgramPesertaData::find($id);

        if ($participant) {
            $participant->delete(); // Menghapus peserta dari database
            return redirect('/participants')->with('success', 'Peserta berhasil dihapus.');
        } else {
            return redirect('/participants')->with('error', 'Peserta tidak ditemukan.');
        }
    }
}
