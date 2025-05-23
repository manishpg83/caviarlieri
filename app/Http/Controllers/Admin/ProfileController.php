<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $admin = Auth::user();

        return view('admin.profile.index', compact('admin'));
    }

    public function edit()
    {
        $admin = Auth::user();

        return view('admin.profile.edit', compact('admin'));
    }

    public function update(Request $request)
    {
        $admin = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins,email,'.$admin->id,
            'password' => 'nullable|string|min:8|confirmed',
            'image' => 'nullable|file|image',
        ]);

        $updateData = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');

            if ($imagePath) {
                if ($admin->profile_image) {
                    Storage::disk('public')->delete($admin->profile_image);
                }
                $updateData['profile_image'] = $imagePath;
                notyf()->success('Image uploaded successfully');
            } else {
                notyf()->error('Image upload failed');
            }
        }

        if ($request->filled('password')) {
            $updateData['password'] = Hash::make($request->password);
        }

        try {
            User::where('id', $admin->id)->update($updateData);
            notyf()->success('Profile updated successfully');
        } catch (\Exception $e) {
            notyf()->error('An error occurred while updating your profile');
        }

        return redirect()->route('admin.profile.index');
    }

    public function destroy()
    {
        $admin = Auth::user();

        try {
            if ($admin->profile_image) {
                Storage::disk('public')->delete($admin->profile_image);
            }

            if ($admin instanceof User) {
                $admin->delete();
                notyf()->success('Account deleted successfully');
            } else {
                notyf()->error('Unable to delete account');
            }
        } catch (\Exception $e) {
            notyf()->error('An error occurred while deleting your account');
        }

        return redirect()->route('admin.login');
    }
}
