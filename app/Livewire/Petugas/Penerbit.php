<?php

namespace App\Livewire\Petugas;

use App\Models\Buku;
use App\Models\Penerbit as ModelsPenerbit;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Penerbit extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $create, $edit, $delete;
    public $nama, $penerbit_id;
    public $search;

    protected $queryString = ['search'];

    protected $rules = [
        'nama' => 'required',
    ];

    public function showCreateForm()
    {
        $this->create = true;
    }

    public function store()
    {
        $this->validate();

        ModelsPenerbit::create([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama)
        ]);

        session()->flash('sukses', 'Data berhasil ditambahkan');

        $this->format();
    }

    public function showEditForm(ModelsPenerbit $penerbit)
    {
        $this->format();

        $this->edit = true;
        $this->nama = $penerbit->nama;
        $this->penerbit_id = $penerbit->id;
    }

    public function update(ModelsPenerbit $penerbit)
    {
        $this->validate();

        $penerbit->update([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama)
        ]);

        session()->flash('sukses', 'Data berhasil diubah ');

        $this->format();
    }

    public function showDelete(ModelsPenerbit $penerbit)
    {
        $this->delete = true;
        $this->penerbit_id = $penerbit->id;
    }

    public function destroy(ModelsPenerbit $penerbit)
    {
        $buku = Buku::where('penerbit_id', $penerbit->id)->get();
        foreach ($buku as $key => $value) {
            $value->update([
                'penerbit_id' => 1
            ]);
        }

        $penerbit->delete();

        session()->flash('sukses', 'Data berhasil dihapus');

        $this->format();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function searchData()
    {
        $this->resetPage(); // Reset halaman ketika melakukan pencarian
    }

    public function render()
    {
        return view('livewire.petugas.penerbit', [
            'penerbit' => $this->search === null ?
                ModelsPenerbit::latest()->paginate(5) :
                ModelsPenerbit::latest()->where('nama', 'like', '%' . $this->search . '%')->paginate(5)
        ]);
    }

    public function format()
    {
        unset($this->create);
        unset($this->edit);
        unset($this->delete);
        unset($this->nama);
        unset($this->penerbit_id);
    }
}
