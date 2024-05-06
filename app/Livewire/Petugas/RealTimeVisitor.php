<?php

namespace App\Livewire\Petugas;

use App\Models\Tamu;
use Livewire\Component;
use Livewire\WithPagination;

use App\Exports\VisitorExport;
use Maatwebsite\Excel\Facades\Excel;


class RealTimeVisitor extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $bulan = '';
    public $search = '';

    public function downloadExcel()
    {
        return Excel::download(new VisitorExport, 'DataPengunjung.xlsx');
    }

    public function searchByMonth()
    {
        // Panggil searchData() saat bulan berubah
        $this->render();
    }

    public function searchData()
    {
        // Panggil searchData() saat bulan berubah
        $this->render();
    }

    public function render()
    {
        // Membuat query dasar
        $query = Tamu::query();

        // Filter berdasarkan bulan jika bulan tidak kosong
        if (!empty($this->bulan)) {
            $query->whereMonth('created_at', $this->bulan);
        }

        // Filter berdasarkan pencarian jika pencarian tidak kosong
        if (!empty($this->search)) {
            $query->where('nama_lengkap', 'like', '%' . $this->search . '%')
                ->orWhere('instansi', 'like', '%' . $this->search . '%')
                ->orWhere('keperluan', 'like', '%' . $this->search . '%');
        }

        // Mengambil data dengan paginasi
        $tamu = $query->latest()->paginate(1);

        // Kirim data tamu ke view
        return view('livewire.petugas.real-time-visitor', compact('tamu'));
    }
}
