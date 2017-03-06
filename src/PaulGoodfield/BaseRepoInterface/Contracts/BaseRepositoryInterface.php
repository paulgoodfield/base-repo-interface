<?php

namespace PaulGoodfield\BaseRepoInterface\Contracts;

interface BaseRepositoryInterface {

	public function all($columns = array('*'), $order = array());

	public function find($id, $columns = array('*'));

	public function findWhere($fieldvals = array(), $columns = array('*'), $order = array(), $start = 0, $limit = 10000);

	public function create(array $data);

	public function update($id, array $data);

	public function delete($id);

	public function attach($id, $relation, $relationId, $additional = []);

	public function detach($id, $relation, $relationId);
}