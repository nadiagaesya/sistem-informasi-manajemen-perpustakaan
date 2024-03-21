<?php

namespace App\Livewire\Admin;

use App\Models\User as ModelsUser;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $admin, $petugas, $peminjam;
    public $create, $name, $email, $password, $password_confirmation;
    public $search;

    protected $queryString = ['search'];

    protected $validationAttributes = [
        'name' => 'nama',
        'password_confirmation' => 'ulangi password',
    ];

    // protected $messages = [
    //     'password_confirmation.min' => 'Password confirmation minimal berisi 8 karakter'
    // ];

    protected function rules()
    {
        return [
            'name' => 'required',
            'kelas' => 'required',
            'nisn_atau_nip' => 'required|numeric', // Menambahkan validasi numerik untuk NISN atau NIP
            'telepon' => 'required|numeric', // Menambahkan validasi numerik untuk NISN atau NIP
            'email' => ['required', 'email', 'unique:App\Models\User,email'],
            'password' => ['required', 'confirmed', Password::min(8)],
            'password_confirmation' => ['required', Password::min(8)]
        ];
    }

    public function adminShow()
    {
        $this->format();
        $this->admin = true;
    }

    public function petugasShow()
    {
        $this->format();
        $this->petugas = true;
    }

    public function peminjamShow()
    {
        $this->format();
        $this->peminjam = true;
    }

    public function showCreateForm()
    {
        $this->create = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function searchData()
    {
        $this->resetPage(); // Reset halaman ketika melakukan pencarian
    }

    public function store()
    {
        $this->validate();

        $user = ModelsUser::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        if ($this->admin) {
            $user->assignRole('admin');
        } elseif ($this->petugas) {
            $user->assignRole('petugas');
        } else {
            $user->assignRole('peminjam');
        }

        session()->flash('sukses', 'Data berhasil ditambah');
        $this->format();
    }

    public function render()
    {
        if ($this->search) {
            if ($this->admin) {
                $user = ModelsUser::role('admin')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            } elseif ($this->petugas) {
                $user = ModelsUser::role('petugas')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            } elseif ($this->peminjam) {
                $user = ModelsUser::role('peminjam')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            } else {
                $user = ModelsUser::where('name', 'like', '%' . $this->search . '%')->paginate(5);
            }
        } else {
            if ($this->admin) {
                $user = ModelsUser::role('admin')->paginate(5);
            } elseif ($this->petugas) {
                $user = ModelsUser::role('petugas')->paginate(5);
            } elseif ($this->peminjam) {
                $user = ModelsUser::role('peminjam')->paginate(5);
            } else {
                $user = ModelsUser::paginate(5);
            }
        }

        return view('livewire.admin.user', compact('user'));
    }

    public function format()
    {
        $this->admin = false;
        $this->petugas = false;
        $this->peminjam = false;
        unset($this->create);
        unset($this->name);
        unset($this->email);
        unset($this->password);
        unset($this->password_confirmation);
        unset($this->store);
    }
}
