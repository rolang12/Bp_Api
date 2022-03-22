<?php

namespace App\Http\Livewire\Users;

use App\Http\Controllers\CrudController;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class Crud extends Component
{
    use WithPagination;
    public $search = '';
    public $vista = 'default';
    public $name;
    public $rol;
    public $user_id;


    public function render()
    {
        return view('livewire.users.crud', [
                 
            $users = 'users' => User::join('countries', 'users.countries_id','countries.country_id')
            ->where('name', 'like', "%$this->search%" )
            ->orWhere('id', 'like', "%$this->search%" )
            ->orderBy('id','asc')
            ->paginate(10)

        ]);

    }

    public function destroy($id) 
    {
        User::destroy($id);
        session()->flash('status','User has been deleted Successfully');
    }
    
   
    public function edit($id) 
    {
       $user = User::find($id);
       $this->user_id = $user->id;
       $this->name = $user->name;
       $this->rol = $user->rol;
       $this->vista = 'edit';
    }
    
    public function update()
    {
        $this->validate(['name' =>'required|max:15|string']);

        // $user = CrudController::updateUser($this);
    
        $user = User::find($this->user_id);

        $user->update([
            'name' => $this->name,
            'rol' => $this->rol,
        ]);

        session()->flash('status','User has been updated Successfully');
        
        $vista = 'default';
    }

}
