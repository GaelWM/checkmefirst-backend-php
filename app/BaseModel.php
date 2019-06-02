<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BaseModel extends Model
{
    /**
     * Update Model
     * @param $request
     * @param Model $model Model to update
     * @param null $array extra info to be saved
     * @return Model
     */
    public function updateModel($request, Model $model, $array = null)
    {
        if ($array == null)
            $model->update($request->all());
        else
            $model->update(array_merge($request->all(), $array));
        return $model;
    }

    /**
     * Create
     * @param $request Request information to save
     * @param null $array extra info to be saved
     * @return mixed
     */
    public function createModel($request, $array = null)
    {
        if ($array == null)
            return self::create($request->all());
        else
            return self::create(array_merge($request->all(), $array));
    }
}
