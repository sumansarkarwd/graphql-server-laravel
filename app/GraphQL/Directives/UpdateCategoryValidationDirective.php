<?php

namespace App\GraphQL\Directives;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Schema\Directives\ValidationDirective;

class UpdateCategoryValidationDirective extends ValidationDirective {
    /**
     * Name of the directive.
     *
     * @return string
     */
    public function name(): string
    {
        return 'updateCategoryValidation';
    }

    /**
     * @return mixed[]
     */
    public function rules(): array
    {
        return [
            'id' => ['required', 'exists:categories,id'],
            'name' => ['sometimes', Rule::unique('categories', 'name')->ignore($this->args['id'], 'id')],
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'name.unique' => 'The chosen category name already exists',
        ];
    }
}