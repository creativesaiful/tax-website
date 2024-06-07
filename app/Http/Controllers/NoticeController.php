<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Http\Requests\StoreNoticeRequest;
use App\Http\Requests\UpdateNoticeRequest;
use Brian2694\Toastr\Facades\Toastr;


class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $notices = Notice::latest()->get();
        return view('admin.pages.notices', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.notice-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoticeRequest $request)
    {
        
        if ($request->file_path) {
            $image = $request->file('file_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/notices'), $imageName); 
          
        }

        Notice::create([
            'title' => $request->title,
            'description' => $request->description ?? null,
            'file_path' => $imageName ?? null
        ]);

        Toastr::success('Notice created successfully', 'Success');

        return redirect()->route('notices');
        

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
      
        $notice = Notice::findOrfail($id);
        
        return view('admin.pages.notice-show', compact('notice')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $notice = Notice::findOrfail($id);
        return view('admin.pages.notice-edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoticeRequest $request, $id)
    {
        $notice = Notice::findOrfail($id);

     

        if ($request->file_path) {
            $image = $request->file('file_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/notices'), $imageName); 

        }

        $old_img = $notice->file_path; 
        if (file_exists('storage/notices/'.$old_img) && $old_img!=null) {
            unlink('storage/notices/'.$old_img);
        }

        
      

        $notice->update([
            'title' => $request->title,
            'description' => $request->description ?? null,
            'file_path' => $imageName ?? null
        ]);

        Toastr::success('Notice updated successfully', 'Success');

        return redirect()->route('notices');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $notice = Notice::findOrfail($id);
        $old_img = $notice->file_path; 
        if (file_exists('storage/notices/'.$old_img) && $old_img!=null) {
            unlink('storage/notices/'.$old_img);
        }

        $notice->delete();

        Toastr::error('Notice deleted successfully', 'Success');

        return redirect()->route('notices');

    }
}
