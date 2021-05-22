<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::orderBy('order')->paginate(10);

        return view('administrator.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Partner $partner)
    {

        $request->validate([
            'nit' => 'required|integer|min:9|unique:partners',
            'name' => 'required|string|max:120',
            'address' => 'required|string|max:120',            
        ]);
            
        $partner->create($request->all());
        
        return redirect()->route('asociados.create')
                        ->with('success','Asociado Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('administrator.partners.edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nit' => 'required|integer',
            'name' => 'required|string',
            'address' => 'required|string',
        ]);
    
        $partner = Partner::findOrFail($id);

        $partner->update($request->all());
    
        return redirect()->back()->with('success','Asociados actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);

        $partner->delete();
    
        return redirect()->route('asociados.index')
                        ->with('success','Asociado Eliminado');
    }

    public function logo(Partner $partner)
    {
        // validamos el tipo de archivos y el tamaño de la imagen
        $this->validate(request(),[
            'logo' => 'required|image|max:2048|dimensions:min_width=350,min_height=250',
        ]);

        //capturamos el achivo enviado
        $logo = request()->file('logo')->store('logos');
        
        $partner->logo = $logo;
        $partner->save();
    }

    public function delete(Partner $partner)
    {
        Storage::delete($partner->logo);

        $partner->logo = null;
        $partner->save();

        return back()->with('success', 'Foto Eliminada');
    }
}
