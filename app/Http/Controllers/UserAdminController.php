<?php

namespace App\Http\Controllers;

use App\Models\UserAdmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_admin = UserAdmin::where('role', 'admin')->get();
        $user_admin = UserAdmin::all(); // Ambil semua data stok dari database
        // dd(@user_admin);
        return view('admin.user_admin.index', compact('user_admin')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
    
        // Persiapkan data untuk disimpan
        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin', 
        ];

        UserAdmin::create($data);
        
        return redirect()->route('user_admin.index')->with('success', 'User admin berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(UserAdmin $userAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_admin = UserAdmin::findOrFail($id); // Mengambil data stok berdasarkan ID
        return view('admin.user_admin.edit', compact('user_admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAdmin $userAdmin)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
        ], [
            'username' => 'Wajib diisi',
           'name' => 'Wajib diisi',
            'email' => 'Wajib diisi',
        ]);

        $validatedData['role'] = 'admin';
        $userAdmin->update($validatedData);
        return redirect()->route('user_admin.index')->with('success', 'user admin berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAdmin $userAdmin)
    {
        $userAdmin->delete();
        return redirect()->route('user_admin.index')->with('success', 'User admin berhasil dihapus');
    }

    // public function isExistEmail(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $user_admin = UserAdmin::select("*");
    
    //         if (isset($request->email)) {
    //             $user_admin->where(DB::raw('LOWER(email)'), strtolower($request->email));
    //         }
    
    //         if (isset($request->id)) {
    //             $user_admin->where('id', '<>', $request->id);
    //         }
    
    //         $data = ['valid' => ($user_admin->count() == 0)];
    
    //         return $data;
    //     }
    // }
}
