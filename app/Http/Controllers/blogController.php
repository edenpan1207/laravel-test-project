<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index() 
    {
    	$contents = [
    		[
    			'img' => 'img/Post_Image_1.jpg',
    			'img-alt' => 'post1',
    			'url' => 'post.html',
    			'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
    			'paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.',
    			'time' => 'February 12, 2016',
    			'comments' => 4
    		],
    		[
    			'img' => 'img/Post_Image_2.jpg',
    			'img-alt' => 'post2',
    			'url' => 'post.html',
    			'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
    			'paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.',
    			'time' => 'February 18, 2016',
    			'comments' => 8
    		],
    		[
    			'img' => 'img/Post_Image_3.jpg',
    			'img-alt' => 'post3',
    			'url' => 'post.html',
    			'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
    			'paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.',
    			'time' => 'March 2, 2016',
    			'comments' => 1
    		]
    	];

    	$categories = [
    		[
    			'name' => 'Web Development',
    			'number' => 10
    		],
    		[
    			'name' => 'Web Design',
    			'number' => 12
    		],
    		[
    			'name' => 'General',
    			'number' => 2
    		],
    		[
    			'name' => 'DIY',
    			'number' => 51
    		],
    		[
    			'name' => 'Facebook Development',
    			'number' => 11
    		]
    	];

    	$popular_posts = [
    		[
    			'img' => 'img/Post_Image_5_thumb.jpg',
    			'title' => 'Blog Post #5',
    			'time_ago' => 36
    		],
    		[
    			'img' => 'img/Post_Image_4_thumb.jpg',
    			'title' => 'Blog Post #4',
    			'time_ago' => 31
    		],
    		[
    			'img' => 'img/Post_Image_3_thumb.jpg',
    			'title' => 'Blog Post #3',
    			'time_ago' => 6
    		]
    	];

    	$tags = [
    		[
    			'title' => 'PHP'
    		],
    		[
    			'title' => 'Node.js'
    		],
    		[
    			'title' => 'Laravel'
    		],
    		[
    			'title' => 'RoR'
    		],
    		[
    			'title' => 'Python'
    		]
    	];

    	$footer_icons = [
    		[
    			'icon' => 'fa-facebook'
    		],
    		[
    			'icon' => 'fa-twitter'
    		],
    		[
    			'icon' => 'fa-google-plus'
    		],
    		[
    			'icon' => 'fa-github'
    		]
    	];

    	return view('blog.index', [
    		'contents' => $contents,
    		'categories' => $categories,
    		'popular_posts' => $popular_posts,
    		'tags' => $tags,
    		'footer_icons' => $footer_icons
    	]);
    }

}
