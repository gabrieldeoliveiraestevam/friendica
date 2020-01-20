<?php

namespace Friendica;

use Friendica\Database\Database;
use Friendica\Network\HTTPException;
use Psr\Log\LoggerInterface;

/**
 * The Model classes inheriting from this abstract class are meant to represent a single database record.
 * The associated table name has to be provided in the child class, and the table is expected to have a unique `id` field.
 *
 * @property int id
 */
abstract class BaseModel
{
	/** @var Database */
	protected $dba;
	/** @var LoggerInterface */
	protected $logger;

	/**
	 * Model record abstraction.
	 * Child classes never have to interact directly with it.
	 * Please use the magic getter instead.
	 *
	 * @var array
	 */
	private $data = [];

	/**
	 * Used to limit/avoid updates if no data was changed.
	 *
	 * @var array
	 */
    private $originalData = [];

	/**
	 * @param Database        $dba
	 * @param LoggerInterface $logger
	 * @param array           $data   Table row attributes
	 */
	public function __construct(Database $dba, LoggerInterface $logger, array $data = [])
	{
		$this->dba = $dba;
		$this->logger = $logger;
		$this->data = $data;
		$this->originalData = $data;
	}

	public function getOriginalData()
	{
		return $this->originalData;
	}

	/**
	 * Performance-improved model creation in a loop
	 *
	 * @param BaseModel $prototype
	 * @param array     $data
	 * @return BaseModel
	 */
	public static function createFromPrototype(BaseModel $prototype, array $data)
	{
		$model = clone $prototype;
		$model->data = $data;
		$model->originalData = $data;

		return $model;
	}

	/**
	 * Magic isset method. Returns true if the field exists, either in the data prperty array or in any of the local properties.
	 * Used by array_column() on an array of objects.
	 *
	 * @param $name
	 * @return bool
	 */
	public function __isset($name)
	{
		return in_array($name, array_merge(array_keys($this->data), array_keys(get_object_vars($this))));
	}

	/**
	 * Magic getter. This allows to retrieve model fields with the following syntax:
	 * - $model->field (outside of class)
	 * - $this->field (inside of class)
	 *
	 * @param $name
	 * @return mixed
	 * @throws HTTPException\InternalServerErrorException
	 */
	public function __get($name)
	{
		$this->checkValid();

		if (!array_key_exists($name, $this->data)) {
			throw new HTTPException\InternalServerErrorException('Field ' . $name . ' not found in ' . static::class);
		}

		return $this->data[$name];
	}

	/**
	 * @param string $name
	 * @param mixed $value
	 */
	public function __set($name, $value)
	{
		$this->data[$name] = $value;
	}

	public function toArray()
	{
		return $this->data;
	}

	protected function checkValid()
	{
		if (empty($this->data['id'])) {
			throw new HTTPException\InternalServerErrorException(static::class . ' record uninitialized');
		}
	}
}
