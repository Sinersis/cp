<?php

namespace App\Http\Controllers;

use App\Admin\Sections\Department;
use App\KeyDeport;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function searchByComparePostsCounts(Request $request)
    {
        $posts = Post::query()->where('body', 'like', '%'.$request->get('body').'%')->get();
        return response()->json(['comparePostsCount' => $posts->count()]);
    }

    public function searchByComparePosts(Request $request)
    {
        $posts = Post::query()->where('body', 'like', '%'.$request->get('body').'%')->get();
        return response()->json(['comparePosts' => $posts]);
    }

    public function searchDepartmentByTags(Request $request)
    {
        $str = [',', ', ','.','. ',' , ','!','! ','?','? '];

        $body = str_replace($str, ' ',$request->get('body'));
        $body = explode(' ', $body);
        $tags = KeyDeport::query()->whereIn('name', $body)->get();

        $result = [];

        foreach ($tags as $tag) {
            $result[] = $tag->department->name;
        };

        return response()->json(array_unique($result));
    }

    public function allPosts()
    {
        return Post::with('tags')->get();
    }
}
