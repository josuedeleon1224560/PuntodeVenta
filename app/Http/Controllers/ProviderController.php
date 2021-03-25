<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\ProviderStoreRequest.php;
use App\Http\Requests\ProviderUpdateRequest.php;

class ProviderController extends Controller
{
      public function index()
    {
        $providers = Provider::get();
        return view('admin.provider.index', compact('providers'));
    }

    public function create()
    {
        return view('admin.provider.create';
    }


    public function store(ProviderStoreRequest $request)
    {
        Provider::create($request->all());
        return redirect()->route('providers.index'); 
    }

  
    public function show(Provider $Provider)
    {
        return view('admin.provider.show', compact('Provider'));
    }


    public function edit(Provider $Provider)
    {
        return view('admin.provider.show', compact('Provider')); 
    }

   
    public function update(ProviderUpdateRequest $request, Provider $Provider)
    {
        $Provider->update($request->all());
        return redirect()->route('providers.index'); 
    }

   
    public function destroy(Provider $Provider)
    {
        $Provider->delete();
        return redirect()->route('providers.index'); 
    }
}
