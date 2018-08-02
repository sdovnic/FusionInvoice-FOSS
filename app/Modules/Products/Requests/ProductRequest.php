<?php
/**
 * *
 *  * This file is part of Workorder Addon for FusionInvoice.
 *  *
 *  *
 *  * For the full copyright and license information, please view the LICENSE
 *  * file that was distributed with this source code.
 *  
 *
 */

namespace FI\Modules\Products\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
	protected $rules = [
		'cost' => 'numeric',
		'numstock' => 'integer',
	];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user();//->can('create', 'schedule');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
	public function rules() {
			return $this->rules;
	}

}
