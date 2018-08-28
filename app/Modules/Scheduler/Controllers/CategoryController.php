<?php

/**
 * This file is part of FusionInvoiceFOSS.
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FI\Modules\Scheduler\Controllers;

use FI\Http\Controllers\Controller;
use FI\Modules\Scheduler\Models\Category;
use FI\Modules\Scheduler\Models\Schedule;
use Illuminate\Http\Request;

class CategoryController extends Controller {

	public function index() {
		$categories = Category::all();

		return view( 'categories.index' )->with( 'categories', $categories );
	}

	public function create() {
		return view( 'categories.create' );
	}

	public function store( Request $request ) {
		$categories             = new Category;
		$categories->name       = $request->name;
		$categories->text_color = $request->text_color;
		$categories->bg_color   = $request->bg_color;
		$categories->save();

		return redirect()->route( 'scheduler.categories.index' )->with( 'alertSuccess', 'Successfully Created category!' );
	}

	public function show( $id ) {
		$categories = Category::find( $id );

		return view('schedule.categories.show', compact( 'categories' ) );
	}

	public function edit( $id ) {
		$categories = Category::find( $id );

		return view( 'categories.edit', compact( 'categories' ) );
	}

	public function update( Request $request, $id ) {
		$categories             = Category::find( $id );
		$categories->name       = $request->name;
		$categories->text_color = $request->text_color;
		$categories->bg_color   = $request->bg_color;
		$categories->save();

		return redirect()->route( 'scheduler.categories.index' )->with( 'alertSuccess', 'Successfully Edited category!' );
	}

	public function delete( $id ) {

		$category = Category::find( $id );

        if ($category->in_use)
        {
            return response()->json(['error' => trans('fi.cannot_delete_record_in_use')], 200);
        }
        else
        {
            Category::destroy($id);

            return response()->json(['success' => trans('fi.record_successfully_deleted')], 200);

        }

	}
}