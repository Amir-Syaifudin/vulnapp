<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

/**
 * CVE-2025-27515 PoC: Laravel wildcard form validation bypass.
 *
 * Validation targets "files.*", which Laravel expands by iterating the
 * array keys actually present under "files". If the client sends a single
 * file under the plain field name "files" (not "files[]"), the value is a
 * lone UploadedFile instead of an array, so the wildcard has zero keys to
 * expand into and the "image" rule never runs against anything -
 * validate() passes with no checks performed. Storage code below then
 * defensively wraps the value with Arr::wrap() (a common real-world
 * pattern), so the unvalidated file is stored anyway.
 *
 * Exploit: POST a multipart form field named "files" (singular) containing
 * a .php webshell, instead of "files[]" with an array of images.
 */
class VulnUploadController extends Controller
{
    public function form()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'files.*' => 'image|max:2048',
        ]);

        $stored = [];
        foreach (Arr::wrap($request->file('files')) as $file) {
            $path = $file->storeAs('uploads', $file->getClientOriginalName(), 'public');
            $stored[] = $path;
        }

        return response()->json(['stored' => $stored]);
    }
}
