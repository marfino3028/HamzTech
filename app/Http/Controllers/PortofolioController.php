<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortofolioController extends Controller
{
    private function getPortfolios()
    {
        return config('portfolios');
    }

    // Display all portfolios
    public function index()
    {
        $data = array_values($this->getPortfolios());
        return view('portofolio.index', compact('data'));
    }

    // Show create form
    public function create()
    {
        return view('portofolio.create');
    }

    // Store new portfolio
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'string',
        ]);

        $portfolios = $this->getPortfolios();
        $slug = Str::slug($validated['title']);

        if (isset($portfolios[$slug])) {
            return redirect()->back()->withErrors(['title' => 'Portfolio with this title already exists']);
        }

        $portfolios[$slug] = [
            'title' => $validated['title'],
            'slug' => $slug,
            'image' => $validated['image'],
            'desc' => $validated['desc'],
            'images' => $validated['images'],
        ];

        return redirect()->route('portofolio.index')->with('success', 'Portfolio created successfully');
    }

    // Show single portfolio
    public function show($slug)
    {
        $portfolios = $this->getPortfolios();
        
        if (!isset($portfolios[$slug])) {
            abort(404, 'Portfolio not found');
        }

        return view('portofolio.show', ['item' => $portfolios[$slug]]);
    }

    // Show edit form
    public function edit($slug)
    {
        $portfolios = $this->getPortfolios();
        
        if (!isset($portfolios[$slug])) {
            abort(404, 'Portfolio not found');
        }

        return view('portofolio.edit', ['item' => $portfolios[$slug]]);
    }

    // Update portfolio
    public function update(Request $request, $slug)
    {
        $portfolios = $this->getPortfolios();
        
        if (!isset($portfolios[$slug])) {
            abort(404, 'Portfolio not found');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'string',
        ]);

        $newSlug = Str::slug($validated['title']);
        
        if ($newSlug !== $slug && isset($portfolios[$newSlug])) {
            return redirect()->back()->withErrors(['title' => 'Portfolio with this title already exists']);
        }

        $portfolios[$newSlug] = [
            'title' => $validated['title'],
            'slug' => $newSlug,
            'image' => $validated['image'],
            'desc' => $validated['desc'],
            'images' => $validated['images'],
        ];

        if ($newSlug !== $slug) {
            unset($portfolios[$slug]);
        }

        return redirect()->route('portofolio.index')->with('success', 'Portfolio updated successfully');
    }

    // Delete portfolio
    public function destroy($slug)
    {
        $portfolios = $this->getPortfolios();
        
        if (!isset($portfolios[$slug])) {
            abort(404, 'Portfolio not found');
        }

        unset($portfolios[$slug]);

        return redirect()->route('portofolio.index')->with('success', 'Portfolio deleted successfully');
    }
}