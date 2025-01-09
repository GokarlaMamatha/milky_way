<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCmsRequest;
use App\Http\Requests\UpdateCmsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CmsRepository;
use Illuminate\Http\Request;
use App\Models\Cms;
use Flash;

class CmsController extends AppBaseController
{
    /** @var CmsRepository $cmsRepository*/
    private $cmsRepository;

    public function __construct(CmsRepository $cmsRepo)
    {
        $this->cmsRepository = $cmsRepo;
    }

    /**
     * Display a listing of the Cms.
     */
    public function index(Request $request)
    {
        return view('cms.index');
    }

    /**
     * Show the form for creating a new Cms.
     */
    public function create()
    {
        $pages = Cms::pluck('title', 'id');
        return view('cms.create', compact('pages'));
    }

    /**
     * Store a newly created Cms in storage.
     */
    public function store(CreateCmsRequest $request)
    {   
        $fieldsToUpdate = $request->except('gallery');
        $cms = $this->cmsRepository->create($fieldsToUpdate);
        if ($request->hasfile('banner_image')) {
            $cms->banner_image = uploadImage($request->file('banner_image'), CMS_IMAGE_PATH);
        }
        $cms->main_menu = $request->has('main_menu') ? 1 : 0;
        $cms->top_menu = $request->has('top_menu') ? 1 : 0;
        $cms->side_menu = $request->has('side_menu') ? 1 : 0;
        $cms->footer_menu = $request->has('footer_menu') ? 1 : 0;

        $cms->gallery = uploadMultipleImage($request->file('gallery'), CMS_IMAGE_PATH, $request->multiple_alt_textgallery, null);
        $cms->save();

        

        Flash::success('Cms saved successfully.');

        return redirect(route('cms.index'));
    }

    /**
     * Display the specified Cms.
     */
    public function show($id)
    {
        $cms = $this->cmsRepository->find($id);

        if (empty($cms)) {
            Flash::error('Cms not found');

            return redirect(route('cms.index'));
        }

        return view('cms.show')->with('cms', $cms);
    }

    /**
     * Show the form for editing the specified Cms.
     */
    public function edit($id)
    {
        $cms = $this->cmsRepository->find($id);

        if (empty($cms)) {
            Flash::error('Cms not found');

            return redirect(route('cms.index'));
        }
        $pages = Cms::pluck('title', 'id');

        return view('cms.edit',compact('pages'))->with('cms', $cms);
    }

    /**
     * Update the specified Cms in storage.
     */
    public function update($id, UpdateCmsRequest $request)
    {
        $cms = $this->cmsRepository->find($id);

        if (empty($cms)) {
            Flash::error('Cms not found');

            return redirect(route('cms.index'));
        }

        if ($request->hasfile('banner_image')) {
            removeImage($cms->banner_image, CMS_IMAGE_PATH);
        }
        $fieldsToUpdate = $request->except('gallery');
        $cms = $this->cmsRepository->update($fieldsToUpdate, $id);
        if ($request->hasfile('banner_image')) {
            $cms->banner_image = uploadImage($request->file('banner_image'), CMS_IMAGE_PATH);
        }
        $cms->main_menu = $request->has('main_menu') ? 1 : 0;
        $cms->top_menu = $request->has('top_menu') ? 1 : 0;
        $cms->side_menu = $request->has('side_menu') ? 1 : 0;
        $cms->footer_menu = $request->has('footer_menu') ? 1 : 0;
        $cms->gallery = uploadMultipleImage($request->file('gallery'), CMS_IMAGE_PATH, $request->multiple_alt_textgallery, $cms->gallery);
        $cms->save();

   
        Flash::success('Cms updated successfully.');

        return redirect(route('cms.index'));

    }

    /**
     * Remove the specified Cms from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        
        $cms = $this->cmsRepository->find($id);

        if (empty($cms)) {
            Flash::error('Cms not found');

            return redirect(route('cms.index'));
        }

        if (getSubMenu($cms->id)->count() > 0) {
            Flash::error('Unable to delete because this page contains sub pages.');
        } else {
            if ($cms->banner_image != '') {
                removeImage($cms->banner_image, CMS_IMAGE_PATH);
            }

            if ($cms->gallery != '') {
                foreach (json_decode($cms->gallery, true) as $gal) {
                    removeImage($gal['path'], CMS_IMAGE_PATH);
                }
            }

            $this->cmsRepository->delete($id);

            Flash::success('Cms deleted successfully.');
        }

        return redirect(route('cms.index'));
    }

    public function removeGalleryItem($id, $key)
    {
        $cms = $this->cmsRepository->find($id);
        if (!empty($cms)) {
            $data = json_decode($cms->gallery, true);
            removeImage($data[$key]['path'], CMS_IMAGE_PATH);
            unset($data[$key]);
            $cms->gallery = json_encode(array_values($data));
            $cms->save();
            Flash::success('Image Removed Successfully.');
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
