<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest('published_at')->get();
        return view('admin.beritas.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.beritas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'published_at' => 'required|date',
            'link' => 'nullable|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->store('beritas', 'public');

        Berita::create([
            'title' => $request->title,
            'published_at' => $request->published_at,
            'link' => $request->link,
            'image' => $path,
        ]);

        return redirect()->route('admin.beritas.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(Berita $berita)
    {
        return view('admin.beritas.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'published_at' => 'required|date',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $berita->image;
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($path);
            $path = $request->file('image')->store('beritas', 'public');
        }

        $berita->update([
            'title' => $request->title,
            'published_at' => $request->published_at,
            'link' => $request->link,
            'image' => $path,
        ]);

        return redirect()->route('admin.beritas.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        Storage::disk('public')->delete($berita->image);
        $berita->delete();
        return redirect()->route('admin.beritas.index')->with('success', 'Berita berhasil dihapus.');
    }
}