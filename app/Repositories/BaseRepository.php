<?php
namespace App\Repositories;
use App\Interfaces\RepositoryInterface;

class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct($model)
    {
        $this->model = new $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function paginated($perPage)
    {
        return $this->model->paginate($perPage);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->model->find($id);
        return $record->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}