<?php

namespace App\Services;

use App\Models\Post as PostModel;

class Post
{
    /**
     * Save
     *
     * @param $request
     */
    public static function save($request) {
        $post = new PostModel();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->save();
    }

    /**
     * Get all
     *
     * @return PostModel[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getAll() {
        return PostModel::all();
    }

    /**
     * Update
     *
     * @param $request
     */
    public static function update($request) {
        $post = PostModel::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->save();
    }

    /**
     * Delete
     *
     * @param $id
     */
    public static function delete($id) {
        $post = PostModel::find($id);
        $post->delete();
    }

    /**
     * Get by id
     *
     * @param $id
     * @return mixed
     */
    public static function getById($id) {
        return PostModel::find($id);
    }

    /**
     * Validate
     *
     * @param $request
     */
    public static function validate($request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
    }
}
