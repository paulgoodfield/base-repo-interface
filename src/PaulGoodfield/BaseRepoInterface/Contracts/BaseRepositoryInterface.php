<?php

namespace PaulGoodfield\BaseRepoInterface\Contracts;

interface BaseRepositoryInterface {

	public function all($columns = array('*'), $order = array());

	public function find(int $id, $columns = array('*'));

	public function findWhere($fieldvals = array(), $columns = array('*'), $order = array(), $start = 0, $limit = 10000);

	public function create(array $data);

	public function update(int $id, array $data);

	public function delete(int $id);

	public function attach(int $id, string $relation, int $relationId, array $additional);

	public function detach(int $id, string $relation, int $relationId);
}