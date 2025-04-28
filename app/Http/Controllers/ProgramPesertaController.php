<?php
namespace App\Http\Controllers;

use App\Data\ProgramPesertaData;
use Illuminate\Http\Request;

class ProgramPesertaController extends Controller
{
    // Menampilkan Daftar Program
    public function showPrograms()
    {
        $programs = ProgramPesertaData::allPrograms();
        return view('programs.index', compact('programs'));
    }

    public function showProgram($programName)
{
    $program = ProgramPesertaData::findProgram($programName); // Mengambil data program
    return view('programs.show', compact('program')); // Kirim data program ke view
}


    // Menampilkan Daftar Peserta
    public function showParticipants()
    {
        $participants = ProgramPesertaData::allParticipants();
        return view('participants.index', compact('participants'));
    }

    public function showParticipant($id)
{
    $participant = ProgramPesertaData::findParticipant($id); // Ambil data peserta
    return view('participants.show', compact('participant')); // Kirim data peserta ke view
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
        $participants = &ProgramPesertaData::allParticipants(); // Referensi langsung ke array data peserta
        foreach ($participants as &$participant) {
            if ($participant['id'] == $id) {
                $participant['name'] = $request->name;
                $participant['program'] = $request->program;
                $participant['payment'] = $request->payment;
                $participant['email'] = $request->email;
                $participant['phone'] = $request->phone;
                $participant['address'] = $request->address;
                break;
            }
        }
        return redirect()->route('participants.show', $id)->with('success', 'Data peserta berhasil diperbarui.');
    }

    // Menghapus Peserta
    public function destroy($id)
    {
        // Menghapus peserta dari array dummy
        $participants = ProgramPesertaData::allParticipants();
        $index = array_search($id, array_column($participants, 'id'));
        
        if ($index !== false) {
            array_splice($participants, $index, 1); // Menghapus peserta berdasarkan ID
        }

        return redirect('/participants')->with('success', 'Peserta berhasil dihapus.');
    }
}
