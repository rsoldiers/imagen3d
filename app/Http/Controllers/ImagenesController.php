<?php

namespace App\Http\Controllers;


use App\Models\captura3d;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function index()
    {
        $imagenes = captura3d::all();
        $imagenActual = $imagenes->first();

        return view('imagenes', compact('imagenActual'));
    }

    public function mostrarImagen($id)
    {
        $imagenActual = captura3d::find($id);
        
        // Obtener la imagen anterior
        $imagenAnterior = captura3d::where('id', '<', $id)->orderBy('id', 'desc')->first();
        if (!$imagenAnterior) {
            $imagenAnterior = captura3d::orderBy('id', 'desc')->first();
        }

        // Obtener la imagen siguiente
        $imagenSiguiente = captura3d::where('id', '>', $id)->orderBy('id')->first();
        if (!$imagenSiguiente) {
            $imagenSiguiente = captura3d::orderBy('id')->first();
        }

        return view('imagenes', compact('imagenActual', 'imagenAnterior', 'imagenSiguiente'));
    }
}
